<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

Route::controller(\App\Http\Controllers\BaseController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/projects', 'projects')->name('projects');
    Route::match(['get', 'post'], '/contact', 'contact')->name('contact');
});

Route::controller(HomeController::class)->prefix('admin')->group(function () {
   Route::get('/', 'home')->name('home'); 
});
