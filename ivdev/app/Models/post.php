<?php

namespace App\Models;

use Illuminate\Support\Arr;

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

    public static function find($slug): array
    {
        // return Arr::first(static::all(), function($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

       $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

       if (!$post) {
        abort(404);
       }

       return $post;
    }
};

?>