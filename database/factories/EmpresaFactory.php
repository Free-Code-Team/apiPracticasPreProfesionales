<?php

namespace Database\Factories;

use App\Models\Empresa;
use Illuminate\Database\Eloquent\Factories\Factory;


class EmpresaFactory extends Factory
{
    protected $model = Empresa::class;

    public function definition()
    {
        return [
            'empresa' => $this->faker->sentence(1),
            'razonSocial' => $this->faker->sentence(5),
            'telefono' => $this->faker->numberBetween(1, 999999999),
            'convenio' => $this->faker->randomElement(['0', '1']),
            'estado' => $this->faker->randomElement(['0', '1', '2']),
        ];
    }
}
