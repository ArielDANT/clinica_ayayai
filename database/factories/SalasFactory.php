<?php

namespace Database\Factories;

use App\Models\Salas;
use Illuminate\Database\Eloquent\Factories\Factory;

class SalasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Salas::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cli_id' => $this->faker->word,
        'sal_nombre' => $this->faker->word,
        'sal_descripcion' => $this->faker->word,
        'sal_piso' => $this->faker->word,
        'sal_numsal' => $this->faker->word,
        'sal_estado' => $this->faker->randomDigitNotNull
        ];
    }
}
