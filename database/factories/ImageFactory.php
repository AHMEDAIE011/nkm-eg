<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $paths = [
            'uploads/posts/postSeeder/1.jpg', 'uploads/posts/postSeeder/2.jpg','uploads/posts/postSeeder/3.jpg' , 'uploads/posts/postSeeder/4.jpg' , 'uploads/posts/postSeeder/5.jpg',
            'uploads/posts/postSeeder/6.jpg','uploads/posts/postSeeder/7.jpg','uploads/posts/postSeeder/8.jpg',

    ];
        return [
            'path'=>fake()->randomElement($paths),
        ];
    }


}
