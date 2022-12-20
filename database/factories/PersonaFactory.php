<?php

namespace Database\Factories;

use App\Models\Persona;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonaFactory extends Factory
{

    protected $model = Persona::class;

    public function definition()
    {
        return [
            'nombres' => $this->faker->name,
            'apellidos' => $this->faker->lastName,
            'dni' => $this->faker->numberBetween(1, 99999999),
            'telefono' => $this->faker->numberBetween(1, 999999999),
            'direccion' => $this->faker->sentence(10),
            'uidUsuario' => $this->faker->uuid,
            'sexo' => $this->faker->randomElement(['0', '1']),
        ];
    }
}
