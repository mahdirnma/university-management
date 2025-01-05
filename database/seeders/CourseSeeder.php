<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::create([
            'title' => 'Elementary Education',
            'all_semesters' => '150',
        ]);
        Course::create([
            'title' => 'Math Education',
            'all_semesters' => '147',
        ]);
    }
}
