<?php

namespace App\Models;



class Post
{
   private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Adryan",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure, nisi.
                         Ipsum digniss imos perferendis rem sed ullam et eaque dolorum sequi aspernatur ducimus,
                          consequatur minus totam, eos dolore?
                         quisquam accusantium, voluptates eum sit saepe molestiae! Suscipit commodi"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Awikwok",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure, nisi.
                         Ipsum digniss imos perferendis rem sed ullam et eaque dolorum sequi aspernatur ducimus,
                          consequatur minus totam, eos dolore?
                         quisquam accusantium, voluptates eum sit saepe molestiae! Suscipit commodi"
        ]
        ];

        public static function all()
        {
            return collect(self::$blog_posts);
        }


        public static function find($slug)
        {
             $posts = static::all();
             return $posts->firstWhere('slug', $slug);

        } 
}
