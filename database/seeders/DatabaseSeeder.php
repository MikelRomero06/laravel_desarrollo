<?php

namespace Database\Seeders;

use App\Models\Faculty;
use App\Models\Estudiante;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $faculties = Faculty::factory(5)->create();

        Estudiante::factory(50)->create([
            'faculty_id' => $faculties->random()->id,
        ]);
    }
}
