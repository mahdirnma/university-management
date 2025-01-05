<?php

namespace Database\Seeders;

use App\Models\Professor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfessorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Professor::create([
            'name' => 'amini',
            'personal_code' => '9506896',
            'teaching_field' => 'Elahiat',
            'phone_number' => '09224966325',
        ]);
        Professor::create([
            'name' => 'asadi',
            'personal_code' => '9503096',
            'teaching_field' => 'Math',
            'phone_number' => '09223696325',
        ]);

    }
}
