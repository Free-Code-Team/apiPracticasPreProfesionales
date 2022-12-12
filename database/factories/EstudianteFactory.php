<?php

namespace Database\Factories;

use App\Models\Estudiante;
use Illuminate\Database\Eloquent\Factories\Factory;

class EstudianteFactory extends Factory
{
    protected $model = Estudiante::class;
    
    public function definition()
    {
        return [
            'codigo' => $this->faker->numberBetween(1, 999999999),
            'semestre' => $this->faker->randomElement(['6', '7', '8', '9', '10']),
        ];
    }
}
