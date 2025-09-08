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
            'uploads/posts/1.jpeg', 'uploads/posts/2.jpeg','uploads/posts/3.jpeg' , 'uploads/posts/4.jpeg' , 'uploads/posts/5.jpeg',
            'uploads/posts/6.jpeg','uploads/posts/7.jpeg','uploads/posts/8.jpeg',

    ];
        return [
            'path'=>fake()->randomElement($paths),
        ];
    }


}
