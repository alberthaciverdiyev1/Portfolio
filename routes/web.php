<?php

use Illuminate\Support\Facades\Route;

Route::controller(\App\Http\Controllers\BaseController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/projects', 'projects')->name('projects');
    Route::get('/contact', 'contact')->name('contact');
});
