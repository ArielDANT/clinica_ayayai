<?php

namespace Database\Factories;

use App\Models\Doctores;
use Illuminate\Database\Eloquent\Factories\Factory;

class DoctoresFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Doctores::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'doc_nombres' => $this->faker->word,
        'doc_apellidos' => $this->faker->word,
        'doc_cedula' => $this->faker->word,
        'doc_direccion' => $this->faker->word,
        'doc_correo' => $this->faker->word,
        'doc_sexo' => $this->faker->word,
        'doc_especialidad' => $this->faker->word,
        'doc_estado' => $this->faker->randomDigitNotNull
        ];
    }
}
