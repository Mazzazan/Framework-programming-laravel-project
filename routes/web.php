<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});


Route::get('/about', function () {
    return view('about', ['name' => 'Hassan Mohammad Mahsun', 'title' => 'About Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => [
        [   
            'id' => '1',
            'slug' => 'article-1',
            'title' => 'Article 1',
            'author'=> 'Hassan Mohammad Mahsun',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque vero dignissimos sunt facilis dolore? Velit labore, aspernatur, delectus numquam laborum molestias molestiae corrupti illum odio esse neque, dolore tempore voluptatem.',
        ],
        [   
            'id' => '2',
            'slug' => 'article-2',
            'title' => 'Article 2',
            'author'=> 'Hassan Mohammad Mahsun',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus facilis dolore pariatur vitae dolorum quam perspiciatis quisquam eaque culpa at illo, vero cum nesciunt ex ullam impedit voluptatem asperiores consectetur.',
        ]
    ]]);
});

Route::get('/posts/{slug}', function($slug){
    $posts = [
        [   
            'id' => '1',
            'slug' => 'article-1',
            'title' => 'Article 1',
            'author'=> 'Hassan Mohammad Mahsun',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque vero dignissimos sunt facilis dolore? Velit labore, aspernatur, delectus numquam laborum molestias molestiae corrupti illum odio esse neque, dolore tempore voluptatem.',
        ],
        [   
            'id' => '2',
            'slug' => 'article-2',
            'title' => 'Article 2',
            'author'=> 'Hassan Mohammad Mahsun',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus facilis dolore pariatur vitae dolorum quam perspiciatis quisquam eaque culpa at illo, vero cum nesciunt ex ullam impedit voluptatem asperiores consectetur.',
        ]
    ];

    $posts = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post',['title' => 'Single Post', 'post' => $posts]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});