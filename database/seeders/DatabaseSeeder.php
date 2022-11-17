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


        User::create([
            'name' => 'Alvon Jovanus',
            'username' => 'alvonj',
            'email' => 'alvonchan@gmail.com',
            'password' => bcrypt('12345')
        ]);


        User::factory(3)->create();


        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore aperiam in deserunt amet! Praesentium qui modi placeat consequatur veniam iste totam obcaecati, saepe corrupti nulla.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore aperiam in deserunt amet! Praesentium qui modi placeat consequatur veniam iste totam obcaecati, saepe corrupti nulla. Alias, non esse eaque eveniet nostrum, atque temporibus modi repudiandae vero sunt voluptates nisi qui id molestias sit aliquid similique ex in magni natus debitis repellat?</p><p>Laudantium doloribus reiciendis amet ab, atque id, iusto nisi nobis veniam ut dolores? Optio, quaerat voluptates? Distinctio magni voluptas autem earum pariatur unde quis eveniet repellat placeat accusantium beatae accusamus harum similique modi, optio nesciunt iure laborum iste inventore quos numquam?</p><p>Eius dolore culpa iste distinctio consequatur earum voluptas accusamus numquam adipisci facere, quae eligendi debitis, expedita laudantium, quos impedit quis laborum inventore libero minus vitae voluptatum rerum! Vero doloremque odio, ad alias illum necessitatibus doloribus possimus impedit, laboriosam cupiditate dignissimos. Ab, ipsa eveniet itaque excepturi veniam harum esse in fuga sint animi ipsum provident explicabo non nam recusandae.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore aperiam in deserunt amet! Praesentium qui modi placeat consequatur veniam iste totam obcaecati, saepe corrupti nulla.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore aperiam in deserunt amet! Praesentium qui modi placeat consequatur veniam iste totam obcaecati, saepe corrupti nulla. Alias, non esse eaque eveniet nostrum, atque temporibus modi repudiandae vero sunt voluptates nisi qui id molestias sit aliquid similique ex in magni natus debitis repellat?</p><p>Laudantium doloribus reiciendis amet ab, atque id, iusto nisi nobis veniam ut dolores? Optio, quaerat voluptates? Distinctio magni voluptas autem earum pariatur unde quis eveniet repellat placeat accusantium beatae accusamus harum similique modi, optio nesciunt iure laborum iste inventore quos numquam?</p><p>Eius dolore culpa iste distinctio consequatur earum voluptas accusamus numquam adipisci facere, quae eligendi debitis, expedita laudantium, quos impedit quis laborum inventore libero minus vitae voluptatum rerum! Vero doloremque odio, ad alias illum necessitatibus doloribus possimus impedit, laboriosam cupiditate dignissimos. Ab, ipsa eveniet itaque excepturi veniam harum esse in fuga sint animi ipsum provident explicabo non nam recusandae.</p>'
        // ]);

        // Post::create([
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore aperiam in deserunt amet! Praesentium qui modi placeat consequatur veniam iste totam obcaecati, saepe corrupti nulla.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore aperiam in deserunt amet! Praesentium qui modi placeat consequatur veniam iste totam obcaecati, saepe corrupti nulla. Alias, non esse eaque eveniet nostrum, atque temporibus modi repudiandae vero sunt voluptates nisi qui id molestias sit aliquid similique ex in magni natus debitis repellat?</p><p>Laudantium doloribus reiciendis amet ab, atque id, iusto nisi nobis veniam ut dolores? Optio, quaerat voluptates? Distinctio magni voluptas autem earum pariatur unde quis eveniet repellat placeat accusantium beatae accusamus harum similique modi, optio nesciunt iure laborum iste inventore quos numquam?</p><p>Eius dolore culpa iste distinctio consequatur earum voluptas accusamus numquam adipisci facere, quae eligendi debitis, expedita laudantium, quos impedit quis laborum inventore libero minus vitae voluptatum rerum! Vero doloremque odio, ad alias illum necessitatibus doloribus possimus impedit, laboriosam cupiditate dignissimos. Ab, ipsa eveniet itaque excepturi veniam harum esse in fuga sint animi ipsum provident explicabo non nam recusandae.</p>'
        // ]);

        // Post::create([
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore aperiam in deserunt amet! Praesentium qui modi placeat consequatur veniam iste totam obcaecati, saepe corrupti nulla.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore aperiam in deserunt amet! Praesentium qui modi placeat consequatur veniam iste totam obcaecati, saepe corrupti nulla. Alias, non esse eaque eveniet nostrum, atque temporibus modi repudiandae vero sunt voluptates nisi qui id molestias sit aliquid similique ex in magni natus debitis repellat?</p><p>Laudantium doloribus reiciendis amet ab, atque id, iusto nisi nobis veniam ut dolores? Optio, quaerat voluptates? Distinctio magni voluptas autem earum pariatur unde quis eveniet repellat placeat accusantium beatae accusamus harum similique modi, optio nesciunt iure laborum iste inventore quos numquam?</p><p>Eius dolore culpa iste distinctio consequatur earum voluptas accusamus numquam adipisci facere, quae eligendi debitis, expedita laudantium, quos impedit quis laborum inventore libero minus vitae voluptatum rerum! Vero doloremque odio, ad alias illum necessitatibus doloribus possimus impedit, laboriosam cupiditate dignissimos. Ab, ipsa eveniet itaque excepturi veniam harum esse in fuga sint animi ipsum provident explicabo non nam recusandae.</p>'
        // ]);

    }
}
