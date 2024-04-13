<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
// {
//     use HasFactory;
// }

class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat explicabo magnam natus vitae totam et hic est asperiores ex ducimus ipsa quis tempora, porro nobis, quidem, nesciunt numquam veniam repudiandae corporis. Facere deserunt quam tempore, ipsam consequatur dignissimos ipsa, nisi voluptas non voluptatum cumque recusandae porro quos pariatur cum sed explicabo quae provident exercitationem temporibus delectus tenetur. Voluptatibus nesciunt sapiente obcaecati nisi illo explicabo maxime enim perspiciatis asperiores et, vitae itaque ducimus, natus iusto cumque impedit! Consequuntur accusamus laborum reiciendis!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Doddy Ferdiansyah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat nulla sint dolores rerum a, hic totam rem, reprehenderit minima itaque minus esse exercitationem quo. Quia, dolore vel quo asperiores iure quis odio ut dicta velit magni harum aliquid atque magnam! Eos sint expedita neque! Dolorem earum deserunt aliquid minus tenetur, culpa adipisci recusandae vero, fugit consequatur accusantium eius voluptates fugiat magnam saepe excepturi, nam iste animi architecto dignissimos odio quo! Veniam ut ipsam quam provident delectus tenetur beatae aliquid ab alias sapiente reiciendis explicabo laborum perferendis sint consectetur, esse voluptate. Id laborum, repudiandae facere inventore corporis ab nobis amet eius."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        // $posts = self::$blog_posts; 
        $posts = static::all();

        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        
        // return $posts->first(); //untuk mengambil data yg pertama (semua postingan)

        return $posts->firstWhere('slug', $slug); //ambil satu data yg pertama kali ditemukan, dimana slugnya = slug

    }
}