<?php

namespace Database\Factories;

use App\Models\Faculty;
use App\Models\Estudiante;
use Illuminate\Database\Eloquent\Factories\Factory;

class EstudianteFactory extends Factory
{
    public function definition(): array
    {
        return [
            // Se cambió 'nombre' a 'nombres' para coincidir con tu migración
            'nombres' => $this->faker->name(),
            'facultad' => $this->faker->randomElement([
                'ICC', 'CIVIL', 'INDUSTRIAL', 'MEDICINA', 'ENFERMERIA'
            ]),
            'correo' => $this->faker->unique()->safeEmail(),
            'telefono' => $this->faker->phoneNumber(),
            'edad' => $this->faker->numberBetween(17, 30), // Un rango más realista

            'faculty_id' => Faculty::factory(),
        ];
    }
}
