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
        $classrooms = \App\Models\Classroom::all();

        foreach ($classrooms as $classroom) {
            Student::factory(3)->create([
                'classroom_id' => $classroom->id,
            ]);
        }
    }
}
