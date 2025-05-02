<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;


Route::controller(WebController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/contact-us', 'contact')->name('contact');
    Route::get('/about/{variable}', 'about')->name('about');
    Route::get('/service/{slug}', 'serviceDetails')->name('service');
    Route::get('/news', 'news')->name('news');
    Route::get('/news/{slug}', 'newsDetails')->name('newsDetails');
    Route::post('/contact-us', 'contactRequest')->name('contactRequest');
    Route::get('/search', 'search')->name('search');
});

Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'az', 'ru'])) {
        Session::put('locale', $locale);
    }
    return redirect()->back();
})->name('lang.switch');

Route::prefix('tools')->group(function () {
    Route::get('migrate', function () {
        Artisan::call('migrate');
        return response()->json(['message' => Artisan::output()]);
    });
    Route::get('optimize-clear', function () {
        Artisan::call('optimize:clear');
        return response()->json(['message' => Artisan::output()]);
    });
    Route::get('storage-link', function () {
        Artisan::call('storage:link');
        return response()->json(['message' => Artisan::output()]);
    });
});
