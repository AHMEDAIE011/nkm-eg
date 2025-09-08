<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;


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
    public function definition(): array
    {
        $date = fake()->date('Y-m-d h:m:s');
        $faker_ar = FakerFactory::create('ar_SA'); // تحديد اللغة العربية

        return [
            'title'=>fake()->sentence(3),
            'title_ar'=>$faker_ar->realText(30),
            'desc'=>fake()->paragraph(5),
            'desc_ar'=> $faker_ar->realText(200),
            
            'status'=>rand(0,1),
            'comment_able'=>rand(0,1),
            'header_pro'=>rand(0,1),
            'num_of_views'=>rand(0,100),
            'user_id'=>User::inRandomOrder()->first()->id,
            'category_id'=>Category::inRandomOrder()->first()->id,
            'created_at'=>$date,
            'updated_at'=>$date,
        ];
    }
}
