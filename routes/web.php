<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home Page',
        'name' => 'Ibnu',
        'posts' => Post::latest()->take(3)->get()
    ]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Me', 'name' => 'Ibnu']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Us']);
});

Route::get('/blog', function () {

    return view('posts', ['title' => 'Blog', 'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->paginate(9)->withQueryString()]);
});

Route::get('blog/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('authors/{user:username}', function (User $user) {
    return view('posts', ['title' => $user->posts->count() . ' Articles by ' . $user->name, 'posts' => $user->posts]);
});

Route::get('categories/{category:slug}', function (Category $category) {
    // $posts = $category->posts->load('category', 'author');
    return view('posts', ['title' => 'Articles in:  ' . $category->name, 'posts' => $category->posts]);
});

