<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

class Post 
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' =>  'Judul Artikel 1',
                'author' => 'Irvan Vebriansyah',
                'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                Tenetur consectetur odio magni? Quos a quae, minus deleniti laboriosam voluptates amet? 
                Praesentium totam impedit similique beatae.'
            ],
            [
                'id' => 2,
                'slug' => 'belajar-laravel',
                'title' =>  'Belajar Laravel',
                'author' => 'Irvan Vebriansyah',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                Facere sunt eligendi at ratione fuga suscipit dignissimos officiis repellat maxime libero, 
                non tempora veritatis similique quos!'
            ]
            ];
    }
};

Route::get('/home', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('About', ['title' => 'About']);
});


Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => Post::all()]);
});

Route::get('/posts/{slug}', function($slug){

    $post = Arr::first(Post::all(), function($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});