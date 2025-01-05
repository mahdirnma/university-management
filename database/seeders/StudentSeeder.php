<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'name' => 'ali azizi',
            'student_number' => '9722233379',
            'phone_number' => '09184963596',
            'field' => 'Elementary Education',
            'level' => 'bachelor',
        ]);
        Student::create([
            'name' => 'sara zandi',
            'student_number' => '9722753379',
            'phone_number' => '09184203596',
            'field' => 'Math Education',
            'level' => 'bachelor',
        ]);

    }
}
