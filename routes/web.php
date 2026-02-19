<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Ibnu', 'title' => 'Contact']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'title' => 'Judul Artikel 1',
            'author' => 'Ibnu',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam commodi libero beatae accusamus mollitia natus pariatur odit quae quia error, provident quidem perferendis itaque saepe blanditiis corrupti, repudiandae ipsa! Maiores?'
        ],
        [
            'id' => 2,
            'title' => 'Judul Artikel 2',
            'author' => 'Ibnu',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad assumenda amet exercitationem est ipsa pariatur iste iure consectetur. Repellat voluptatum unde dolore dolor, quae asperiores earum in dolorem! Minus, porro?'
        ]
    ]]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
