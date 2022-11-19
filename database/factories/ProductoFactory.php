<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Proveedor;

class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'NombreProducto'=>$this->faker->jobTitle,
            'Descripcion' => $this->faker->text,
            'Precio' => $this->faker->numberBetween(50, 150000)
        
        
        ];
    }
}
