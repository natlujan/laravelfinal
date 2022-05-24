<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Producto;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ProductoFactory extends Factory
{
    protected $model = Producto::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'codigo' => $this->faker->unique()->codigo(),
            'descripcion' => $this->faker->descripcion(),
            'cantidad' => $this->faker->cantidad(),
            'precio' => $this->faker->precio()
        ];
    }
}
