<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => " judul-post-pertama",
            "author" => "Alvon Jovanus",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid dolorum alias libero odit consequatur ratione numquam praesentium deleniti labore nulla quidem facere sequi ea quod, vitae quos, error itaque soluta quis officiis. Doloribus ea hic inventore perspiciatis quae voluptatibus fugit iste ratione a laudantium iure, odio ducimus explicabo asperiores accusantium! Pariatur ipsa cum iusto non a enim soluta, quidem totam quam quisquam numquam deserunt dolor ducimus culpa ad nesciunt ut, accusantium consequatur architecto eum, alias autem molestias quo? Maxime, esse?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => " judul-post-kedua",
            "author" => "Doddy Chandra",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. In sit, fuga est suscipit qui fugiat nam mollitia, at cupiditate veniam nostrum nihil soluta porro esse architecto deleniti facilis perspiciatis ipsam beatae enim. Vel commodi reiciendis iusto nostrum odio minus deleniti debitis veritatis ullam blanditiis laboriosam dolores, voluptates alias accusantium. Repellendus ea error harum vitae animi a quae. Quas, reiciendis maiores consectetur minima excepturi, possimus laudantium quaerat aspernatur quisquam officiis vero architecto blanditiis rerum consequatur corrupti quia itaque. Quas impedit nostrum adipisci, asperiores harum ea eum aperiam cum amet veritatis maxime, repellendus molestias dolorem necessitatibus vitae rerum, sed tenetur iste eligendi!"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p['slug'] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
