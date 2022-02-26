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
        User::factory(5)->create();
        Category::create([
            "name"  => "Web Programming",
            "slug"  => "web-programming"
        ]);
        Category::create([
            "name"  => "Personal",
            "slug"  => "personal"
        ]);

        Post::factory(20)->create();
    }
}
