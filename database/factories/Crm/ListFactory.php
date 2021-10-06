<?php

namespace Database\Factories\Crm;

use App\Models\Crm\List;
use Illuminate\Database\Eloquent\Factories\Factory;

class ListFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = List::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(4),
        ];
    }
}
