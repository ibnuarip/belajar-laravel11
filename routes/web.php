<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Ibnu', 'title' => 'Contact']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => Post::all()]);
});

// retrieve post by slug using implicit binding
Route::get('posts/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
