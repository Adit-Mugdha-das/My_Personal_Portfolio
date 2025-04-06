<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;

// Home Page
Route::get('/', [PortfolioController::class, 'index']);

// Static Page Views
Route::get('/about', function () {
    return view('about');
});

Route::get('/skills', function () {
    return view('skills');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/education', function () {
    return view('education');
});

Route::get('/certifications', function () {
    return view('certifications');
});

Route::get('/honors', function () {
    return view('honors');
});


Route::get('/contact', function () {
    return view('contact');
});
Route::get('/test', function () {
    return view('test');
});


// Contact Form Submit
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
