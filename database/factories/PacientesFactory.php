<?php

namespace Database\Factories;

use App\Models\Pacientes;
use Illuminate\Database\Eloquent\Factories\Factory;

class PacientesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pacientes::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pac_nombres' => $this->faker->word,
        'pac_apellidos' => $this->faker->word,
        'pac_cedula' => $this->faker->word,
        'pac_direccion' => $this->faker->word,
        'pac_celular' => $this->faker->word,
        'pac_sexo' => $this->faker->word,
        'pac_correo' => $this->faker->word,
        'pac_repre' => $this->faker->word,
        'pac_estado' => $this->faker->randomDigitNotNull
        ];
    }
}
