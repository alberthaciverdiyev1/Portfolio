<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Brand;
use App\Models\Document;
use App\Models\News;
use App\Models\Question;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class WebController extends Controller
{
    public function search(Request $request)
    {
        $query = trim($request->input('query'));
        $lang = app()->getLocale();

        if (!$query) {
            return response()->json([]);
        }

        $news = News::where('is_active', true)
            ->where(function ($q) use ($query, $lang) {
                $q->where($lang . '_title', 'LIKE', "%{$query}%")
                    ->orWhere($lang . '_content', 'LIKE', "%{$query}%");
            })
            ->limit(5)
            ->get()
            ->map(function ($news) use ($lang) {
                $news->content = Str::words(strip_tags($news->{$lang . '_content'}), 10, '...');
                $news->title = Str::words($news->{$lang . '_title'}, 10, '...');
                return $news;
            })
            ->toArray();

        $services = Service::where('is_active', true)
            ->where(function ($q) use ($query, $lang) {
                $q->where($lang . '_name', 'LIKE', "%{$query}%")
                    ->orWhere($lang . '_content', 'LIKE', "%{$query}%");
            })
            ->limit(5)
            ->get()
            ->map(function ($service) use ($lang) {
                $service->content = Str::words(strip_tags($service->{$lang . '_content'}), 10, '...');
                $service->name = Str::words($service->{$lang . '_name'}, 10, '...');
                return $service;
            })
            ->toArray();

        $data = array_merge($news, $services);

        return response()->json($data);
    }




    private function getGallery($separate = false)
    {
        $gallery = Document::where('is_active', true)
            ->where('show_in_home_page', true)
            ->where('page', 'gallery')
            // ->paginate(12);
            ->get();

        if ($separate) {
            $chunkSize = ceil($gallery->count() / 4);
            $firstChunk = $gallery->slice(0, $chunkSize);
            $secondChunk = $gallery->slice($chunkSize, $chunkSize);
            $thirdChunk = $gallery->slice($chunkSize * 2, $chunkSize);
            $fourthChunk = $gallery->slice($chunkSize * 3, $chunkSize);

            return [$firstChunk, $secondChunk, $thirdChunk, $fourthChunk];
        }

        return $gallery;
    }


    private function getNews($take = null, $only_home_page = false)
    {
        $lang = app()->getLocale();

        $query = News::where('is_active', true)
            ->orderBy('created_at', 'desc');

        if ($only_home_page) {
            $query->where('show_in_home_page', true);
        }

        $news = $take ? $query->take($take)->get() : $query->paginate(12);

        return $news->map(function ($news) use ($lang) {
            $news->content = Str::words(strip_tags($news->{$lang . '_content'}), 10, '...');
            $news->title = Str::words($news->{$lang . '_title'}, 10, '...');
            return $news;
        });
    }


    public function index()
    {
        $galleryChunks = $this->getGallery(true);
        $brands = Brand::where('is_active', true)->get();


        return view('home.index', [
            'newsList' => self::getNews(6, true),
            'firstChunk' => $galleryChunks[0],
            'secondChunk' => $galleryChunks[1],
            'thirdChunk' => $galleryChunks[2],
            'fourthChunk' => $galleryChunks[3],
            'i' => 1,
            'brands' => $brands,
        ]);
    }

    public function contact()
    {
        return view('contact.index');
    }

    public function news()
    {
        $lang = app()->getLocale();

        $newsList = News::where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->paginate(12);

        $newsList->getCollection()->transform(function ($news) use ($lang) {
            $news->content = Str::words(strip_tags($news->{$lang . '_content'}), 10, '...');
            $news->title = Str::words($news->{$lang . '_title'}, 10, '...');
            return $news;
        });

        return view('news.list', [
            'newsList' => $newsList,
            'galleries' => self::getGallery(),
            'i' => 1
        ]);

    }

    public function newsDetails(string $slug)
    {
        $lang = app()->getLocale();
        $news = News::where('is_active', true)
            ->where('slug', $slug)
            ->orderBy('created_at', 'desc')
            ->with('images')
            ->get()
            ->map(function ($news) use ($lang) {
                $news->content = $news->{$lang . '_content'};
                $news->title = $news->{$lang . '_title'};
                return $news;
            });
        return view('news.details', ["news" => $news[0]]);
    }

    public function about(string $route)
    {
        $lang = app()->getLocale();

        $history = About::where('page', 'history')->first();

        if ($history) {
            $history->content = $history->{$lang . '_content'};
        }
        $activity = About::where('page', 'activity')->first();
        if ($activity) {
            $activity->content = $activity->{$lang . '_content'};
        }
        $documents = Document::where('is_active', true)->where('page', 'document')->orderBy('created_at', 'desc')->paginate(12);
        $galleries = Document::where('is_active', true)->where('page', 'gallery')->orderBy('created_at', 'desc')->paginate(12);

        return match ($route) {
            'history' => view('about.history', ['history' => $history, 'galleries' => self::getGallery()]),
            'activity' => view('about.activity', ['activity' => $activity, 'galleries' => self::getGallery()]),
            'documents' => view('about.document', compact('documents')),
            'gallery' => view('about.gallery', compact('galleries')),
            default => view('about.history'),
        };
    }


    public function contactRequest(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422);
        }

        Question::create($validator->validated());
        return response()->json([
            'success' => true,
            'message' => 'Contact request submitted successfully!',
        ]);
    }

    public function serviceDetails(string $slug)
    {
        $lang = app()->getLocale();
        $service = Service::where('is_active', 1)
            ->where('slug', $slug)
            ->with(['keywords' => function ($query) use ($lang) {
                $query->select('service_id', $lang . '_keyword as name');
            }])
            ->first();
        if ($service) {
            $service->content = $service->{$lang . '_content'};
            $service->name = $service->{$lang . '_name'};
        }
        return view('service.details', ['service' => $service ?? null]);
    }


}
