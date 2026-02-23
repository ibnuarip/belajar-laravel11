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
            'title' => 'Judul Artikel 1',
            'author' => 'Ibnu',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam commodi libero beatae accusamus mollitia natus pariatur odit quae quia error, provident quidem perferendis itaque saepe blanditiis corrupti, repudiandae ipsa! Maiores?'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Ibnu',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad assumenda amet exercitationem est ipsa pariatur iste iure consectetur. Repellat voluptatum unde dolore dolor, quae asperiores earum in dolorem! Minus, porro?'
        ]
    ];
    }

    public static function find($slug): array
    {
      $post = Arr::first(static::all(), fn ($post) =>  $post['slug'] == $slug);

      if(! $post) {
        abort(404);
      }

      return $post;
    }
}