<?php

namespace Database\Factories;

use App\Models\Proveedor;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProveedorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Proveedor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pro_nombre' => $this->faker->word,
        'pro_direccion' => $this->faker->word,
        'pro_telefono' => $this->faker->randomDigitNotNull,
        'pro_correo' => $this->faker->word,
        'pro_cedula' => $this->faker->randomDigitNotNull,
        'pro_descripcion' => $this->faker->word,
        'pro_estado' => $this->faker->randomDigitNotNull
        ];
    }
}
