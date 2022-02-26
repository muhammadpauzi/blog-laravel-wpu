<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "title" => $this->faker->sentence(mt_rand(2, 8)),
            "slug"  => $this->faker->slug(),
            "description"   => $this->faker->paragraph(),
            // "body"  => "<p>" . implode("</p><p>", $this->faker->paragraph(mt_rand(5, 10) ) . "</p>",
            "body"  => collect($this->faker->paragraph(mt_rand(5, 10)))
                ->map(fn ($parag) => "<p>$parag</p>")
                ->implode(''),
            "user_id"  => mt_rand(1, 5), // from total users that generated in DatabaseSeeder.php
            "category_id"   => mt_rand(1, 2) // from total categories that generated in DatabaseSeeder.php
        ];
    }
}
