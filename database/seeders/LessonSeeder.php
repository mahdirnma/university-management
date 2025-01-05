<?php

namespace Database\Seeders;

use App\Models\Lesson;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lesson::create([
            'title' => 'andishe 1',
            'unit_number' => '2',
            'type' => 'public',
            'course_id' => 1,
            'lesson_id' => null,
            'default_semester' => '1',
        ]);
        Lesson::create([
            'title' => 'andishe 2',
            'unit_number' => '2',
            'type' => 'public',
            'course_id' => 1,
            'lesson_id' => 1,
            'default_semester' => '3',
        ]);
        Lesson::create([
            'title' => 'Mathematics',
            'unit_number' => '3',
            'type' => 'dedicated',
            'course_id' => 2,
            'lesson_id' => null,
            'default_semester' => '2',
        ]);

    }
}
