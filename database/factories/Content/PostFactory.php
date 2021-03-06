<?php

namespace Database\Factories\Content;

use App\Models\Content\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(3),
            'excerpt' => $this->faker->sentence(3),
            'body' => $this->faker->sentence(10),
        ];
    }
}
