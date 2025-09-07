<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/courses', function () {
    return view('courses');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/blog_details', function () {
    return view('blog_details');
});

Route::get('/elements', function () {
    return view('elements');
});
Route::get('/pricing', function () {
    return view('pricing');
});
Route::get('/gallery', function () {
    return view('gallery');
});
