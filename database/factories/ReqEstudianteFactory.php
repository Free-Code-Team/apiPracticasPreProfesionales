<?php

namespace Database\Factories;

use App\Models\ReqEstudiante;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ReqEstudiante>
 */
class ReqEstudianteFactory extends Factory
{
    protected $model = ReqEstudiante::class;

    public function definition()
    {
        return [
            'area' => $this->faker->randomElement(['Redes', 'TI', 'Software']),
            'periodo' => $this->faker->date('Y-m-d').'-'.$this->faker->date('Y-m-d'),
            'cantidad' => $this->faker->randomDigitNot(0)
        ];
    }
}
