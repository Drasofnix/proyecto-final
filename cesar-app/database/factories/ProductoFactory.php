<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre_producto' => fake()->text(254),
            'precio' => fake()->randomFloat(2,50,21478),
            'cantidad' => fake()->randomFloat(0,1),
            'descripcion' =>fake()->text()
        ];
    }
}
