<?php

namespace Database\Factories;

use App\Models\Clinica;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClinicaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Clinica::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cli_nombres' => $this->faker->word,
        'cli_ruc' => $this->faker->word,
        'cli_telefono' => $this->faker->word,
        'cli_direccion' => $this->faker->word,
        'cli_correo' => $this->faker->word
        ];
    }
}
