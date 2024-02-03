<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return 'Hello WPU!';
// });

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return 'Halaman Home';
// });

// Route::get('/about', function () {
//     return 'Halaman About';
// });

// Route::get('/blog', function () {
//     return 'Halaman Blog';
// });


Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Akhmad Faiz Abdulloh",
        "email" => "akhmadfaizabdulloh@gmail.com",
        "image" => "cute.jpeg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
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
    
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


// halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
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
    
    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]); 
});