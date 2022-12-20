<?php

namespace Database\Factories;

use App\Models\Solicitud;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Solicitud>
 */
class SolicitudFactory extends Factory
{

    protected $model = Solicitud::class;

    public function definition()
    {
        return [
            'representante' => $this->faker->name,
            'estado' => $this->faker->randomElement(['0', '1', '2', '3'])
        ];
    }
}
