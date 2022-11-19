<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Proveedor;
class ProveedorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'NombreEmpresa' => $this->faker->company,
          'Nombre'=> $this->faker->name,
          'Direccion'=>$this->faker->address,
          'Telefono' => $this->faker->phoneNumber,
          'Identidad' => $this->faker->numerify('####-').
          $this->faker->numberBetween(1965, 2005).
          $this->faker->unique()->numerify('-#####')

        ];
    }
}
