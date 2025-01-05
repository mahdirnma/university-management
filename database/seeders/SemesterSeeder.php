<?php

namespace Database\Seeders;

use App\Models\Semester;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Semester::create([
            'title' => '140302',
            'year' => '1403',
            'half_year' => '02',
        ]);
        Semester::create([
            'title' => '140301',
            'year' => '1403',
            'half_year' => '01',
        ]);
    }
}
