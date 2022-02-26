<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            "name"  => "Muhammad Pauzi",
            "email" => "muhammadpauzi@gmail.com",
            "password"  => bcrypt("12345"),
        ]);

        Category::create([
            "name"  => "Web Programming",
            "slug"  => "web-programming"
        ]);
        Category::create([
            "name"  => "Personal",
            "slug"  => "personal"
        ]);

        Post::create([
            "title" => "First Blog Post",
            "slug"  => "first-blog-post",
            "description"   => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum earum veniam ab pariatur perspiciatis nihil mollitia laboriosam aspernatur soluta aperiam sed vel voluptatibus facilis.",
            "body"  => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum earum veniam ab pariatur perspiciatis nihil mollitia laboriosam aspernatur soluta aperiam sed vel voluptatibus facilis, asperiores maiores. Esse ad corrupti nam reiciendis unde voluptas. Facere libero aperiam nostrum tempore sint accusamus sequi voluptatem rem molestias. In labore harum esse quo libero.</p>",
            "category_id"   => 1,
            "user_id"   => 1
        ]);
        Post::create([
            "title" => "Second Blog Post",
            "slug"  => "second-blog-post",
            "description"   => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum earum veniam ab pariatur perspiciatis nihil mollitia laboriosam aspernatur soluta aperiam sed vel voluptatibus facilis.",
            "body"  => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum earum veniam ab pariatur perspiciatis nihil mollitia laboriosam aspernatur soluta aperiam sed vel voluptatibus facilis, asperiores maiores. Esse ad corrupti nam reiciendis unde voluptas. Facere libero aperiam nostrum tempore sint accusamus sequi voluptatem rem molestias. In labore harum esse quo libero.</p>",
            "category_id"   => 2,
            "user_id"   => 1
        ]);
    }
}
