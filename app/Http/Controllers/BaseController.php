<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Partner;
use App\Models\Project;
use App\Models\Service;
use App\Models\Testimotional;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

class BaseController extends Controller
{
    public function index()
    {
        $projects = Project::where('is_active',true)->latest()->get();
        $partners = Partner::where('is_active',true)->latest()->get();
        $services = Service::latest()->get();
        $testiotionals = Testimotional::latest()->where('active',true)->get();
        return view('home.index', compact('projects','services','partners','testiotionals'));
    }
    public function projects()
    {
        $projects = Project::latest()->get();
        $css = ['work.css'];
        return view('project.index', compact('projects','css'));
    }

    public function contact(Request $request)
    {
        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
                'fullname' => 'required|string|max:255',
                'email'    => 'required|email|max:255',
                'subject'  => 'required|string|max:255',
                'budget'   => 'nullable|string|max:255',
                'message'  => 'nullable|string',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'errors' => $validator->errors()
                ], 422);
            }

            Contact::create($validator->validated());

            return response()->json([
                'message' => 'Mesaj uğurla göndərildi.'
            ], 200);
        }

        return view('contact.index', ['css' => ['contact.css']]);
    }

}
