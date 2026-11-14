<?php

namespace Database\Seeders;

use App\Models\Classroom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classrooms = [
            ['name' => 'X PPLG 1', 'major' => 'Pengembangan Perangkat Lunak dan Gim'],
            ['name' => 'X PPLG 2', 'major' => 'Pengembangan Perangkat Lunak dan Gim'],
            ['name' => 'X PPLG 3', 'major' => 'Pengembangan Perangkat Lunak dan Gim'],
            ['name' => 'XI PPLG 1', 'major' => 'Pengembangan Perangkat Lunak dan Gim'],
            ['name' => 'XI PPLG 2', 'major' => 'Pengembangan Perangkat Lunak dan Gim'],
            ['name' => 'XI PPLG 3', 'major' => 'Pengembangan Perangkat Lunak dan Gim'],
            ['name' => 'XII PPLG 1', 'major' => 'Pengembangan Perangkat Lunak dan Gim'],
            ['name' => 'XII PPLG 2', 'major' => 'Pengembangan Perangkat Lunak dan Gim'],
            ['name' => 'XII PPLG 3', 'major' => 'Pengembangan Perangkat Lunak dan Gim'],
        ];

        foreach ($classrooms as $classroom) {
            Classroom::firstOrCreate(['name' => $classroom['name']], $classroom);
        }
    }
}
