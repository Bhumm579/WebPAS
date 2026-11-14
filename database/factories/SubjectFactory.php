<?php

namespace Database\Factories;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->randomElement([
                'Matematika',
                'Bahasa Indonesia',
                'Bahasa Inggris',
                'Informatika',
                'Pemrograman Dasar',
                'Pemrograman Web',
                'Basis Data',
                'Jaringan Komputer',
                'Desain Grafis',
                'Pendidikan Pancasila',
                'Sejarah Indonesia',
                'Pendidikan Jasmani',
            ]),
        ];
    }
}
