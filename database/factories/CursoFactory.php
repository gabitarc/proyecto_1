<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->randomElement(['Laravel','Angular','NodeJS', 'Android','VueJs', 'JavaScript', 'SpringBoot',]),
            'descripcion' => $this->faker->sentence(),
        ];

        
    }
}
