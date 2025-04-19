<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/feature', function () {
    return view('feature');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/product-details' , function () {
    return view('product-details');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog-details', function () {
    return view('blog-details');
});

Route::get('/404', function () {
    return view('404');
});
