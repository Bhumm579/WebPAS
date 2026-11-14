<?php

namespace Database\Seeders;

use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjects = Subject::whereDoesntHave('teacher')->take(4)->get();

        foreach ($subjects as $subject) {
            Teacher::factory()->create([
                'subject_id' => $subject->id,
            ]);
        }
    }
}
