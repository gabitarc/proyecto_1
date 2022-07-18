<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Curso;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $curso_id = Curso::all()->random()->id;
        return [
            'nombre' => $this->faker->name(),
            'apellido' => $this->faker->lastname(),
            'ci' => $this->faker->randomElement(['98773460', '98773461', '98773462', '98773463', '98773464', '98773465', '98773466', '98773467', '98773468', '98773469', '98773470', '98773471']),
            'fecha_nacimiento'=> $this->faker->date('Y_m_d'),
            'curso_id'=> $curso_id,
           
        ];
    }
}
