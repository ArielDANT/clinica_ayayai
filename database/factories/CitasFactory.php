<?php

namespace Database\Factories;

use App\Models\Citas;
use Illuminate\Database\Eloquent\Factories\Factory;

class CitasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Citas::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sal_id' => $this->faker->word,
        'cit_fecha' => $this->faker->word,
        'cit_documento' => $this->faker->word,
        'cit_estado' => $this->faker->randomDigitNotNull
        ];
    }
}
