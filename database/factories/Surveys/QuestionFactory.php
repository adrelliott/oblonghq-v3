<?php

namespace Database\Factories\Surveys;

use App\Models\Surveys\Question;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Question::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'question' => $this->faker->word(5),
            'description' => $this->faker->sentence(2),
            'help_text' => $this->faker->sentence(),
        ];
    }
}
