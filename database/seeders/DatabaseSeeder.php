<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Akhmad Faiz Abdulloh',
            'email' => 'akhmadfaiz@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Sandhika Galih',
            'email' => 'sandhika@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem, ipsum pertama',
            'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae eius neque qui natus porro architecto, ea, ratione libero deserunt optio ipsum, voluptate id exercitationem. Sunt veritatis iste saepe reprehenderit cupiditate repellat, maxime quam!</p><p>Cupiditate temporibus laudantium enim quaerat a quidem veniam quos saepe dolorem iusto, reiciendis maxime quas sequi impedit assumenda, tempora distinctio qui tenetur quam nostrum, obcaecati ipsam odit animi omnis! Voluptates possimus, illo iusto in tempore sint quidem nemo.</p><p>Incidunt cum rem molestias maxime temporibus aliquam! Veritatis debitis impedit illum accusantium quidem laudantium odit id possimus obcaecati molestias ratione quod, deleniti quasi nesciunt eveniet soluta nobis consequatur? Fugiat obcaecati dicta ipsa laboriosam id aliquam itaque illo, adipisci unde atque illum aut sit nihil accusamus sapiente quidem, quisquam sint ex ab? Soluta voluptatem repellat reiciendis non autem laborum dolorum id obcaecati corporis repudiandae, sunt tenetur nam modi est officiis?</p>'
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem, ipsum kedua',
            'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae eius neque qui natus porro architecto, ea, ratione libero deserunt optio ipsum, voluptate id exercitationem. Sunt veritatis iste saepe reprehenderit cupiditate repellat, maxime quam!</p><p>Cupiditate temporibus laudantium enim quaerat a quidem veniam quos saepe dolorem iusto, reiciendis maxime quas sequi impedit assumenda, tempora distinctio qui tenetur quam nostrum, obcaecati ipsam odit animi omnis! Voluptates possimus, illo iusto in tempore sint quidem nemo.</p><p>Incidunt cum rem molestias maxime temporibus aliquam! Veritatis debitis impedit illum accusantium quidem laudantium odit id possimus obcaecati molestias ratione quod, deleniti quasi nesciunt eveniet soluta nobis consequatur? Fugiat obcaecati dicta ipsa laboriosam id aliquam itaque illo, adipisci unde atque illum aut sit nihil accusamus sapiente quidem, quisquam sint ex ab? Soluta voluptatem repellat reiciendis non autem laborum dolorum id obcaecati corporis repudiandae, sunt tenetur nam modi est officiis?</p>'
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'category_id' => 2,
            'user_id' => 1,
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem, ipsum ketiga',
            'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae eius neque qui natus porro architecto, ea, ratione libero deserunt optio ipsum, voluptate id exercitationem. Sunt veritatis iste saepe reprehenderit cupiditate repellat, maxime quam!</p><p>Cupiditate temporibus laudantium enim quaerat a quidem veniam quos saepe dolorem iusto, reiciendis maxime quas sequi impedit assumenda, tempora distinctio qui tenetur quam nostrum, obcaecati ipsam odit animi omnis! Voluptates possimus, illo iusto in tempore sint quidem nemo.</p><p>Incidunt cum rem molestias maxime temporibus aliquam! Veritatis debitis impedit illum accusantium quidem laudantium odit id possimus obcaecati molestias ratione quod, deleniti quasi nesciunt eveniet soluta nobis consequatur? Fugiat obcaecati dicta ipsa laboriosam id aliquam itaque illo, adipisci unde atque illum aut sit nihil accusamus sapiente quidem, quisquam sint ex ab? Soluta voluptatem repellat reiciendis non autem laborum dolorum id obcaecati corporis repudiandae, sunt tenetur nam modi est officiis?</p>'
        ]);

        Post::create([
            'title' => 'Judul Keempat',
            'category_id' => 2,
            'user_id' => 2,
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem, ipsum keempat',
            'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae eius neque qui natus porro architecto, ea, ratione libero deserunt optio ipsum, voluptate id exercitationem. Sunt veritatis iste saepe reprehenderit cupiditate repellat, maxime quam!</p><p>Cupiditate temporibus laudantium enim quaerat a quidem veniam quos saepe dolorem iusto, reiciendis maxime quas sequi impedit assumenda, tempora distinctio qui tenetur quam nostrum, obcaecati ipsam odit animi omnis! Voluptates possimus, illo iusto in tempore sint quidem nemo.</p><p>Incidunt cum rem molestias maxime temporibus aliquam! Veritatis debitis impedit illum accusantium quidem laudantium odit id possimus obcaecati molestias ratione quod, deleniti quasi nesciunt eveniet soluta nobis consequatur? Fugiat obcaecati dicta ipsa laboriosam id aliquam itaque illo, adipisci unde atque illum aut sit nihil accusamus sapiente quidem, quisquam sint ex ab? Soluta voluptatem repellat reiciendis non autem laborum dolorum id obcaecati corporis repudiandae, sunt tenetur nam modi est officiis?</p>'
        ]);

    }
}
