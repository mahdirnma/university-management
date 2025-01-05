<?php

namespace Database\Seeders;

use App\Models\Registration;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegistrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Registration::create([
            'student_id' => 1,
            'semester_id' => 1,
        ]);
        Registration::create([
            'student_id' => 2,
            'semester_id' => 2,
        ]);

    }
}
