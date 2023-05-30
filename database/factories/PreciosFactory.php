<?php

namespace Database\Factories;

use App\Models\Precios;
use Illuminate\Database\Eloquent\Factories\Factory;

class PreciosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Precios::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pre_pvp' => $this->faker->word,
        'pre_pvd' => $this->faker->word
        ];
    }
}
