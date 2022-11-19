<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cliente;

class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nombre' => $this->faker->name,
            'Direccion' => $this->faker->address,
            'Telefono' => $this->faker->phoneNumber,
            'Identidad' => $this -> faker-> numerify('####-').
            $this->faker->numberBetween(1970, 2005).
            $this->faker->unique()->numerify('-#####')


        ];
    }
}
