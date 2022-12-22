<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Article;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;
  

    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {   
        return [
            'title' => $this->faker->text(15),
            'body' => $this->faker->text(2000),
            'user_id' => function () {
                return User::inRandomOrder()->first()->id;
            },
            'image' => function () {
                $file = __DIR__ .'public.IMG-202212';
                $images = [];
                array_push($images, $file . rand(0,20) . 'png');
                foreach($images as $image){
                    return $image;
                }
            },
        ];
    }
}
