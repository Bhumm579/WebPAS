<?php

namespace Database\Factories;

use App\Models\Classroom;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Classroom>
 */
class ClassroomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->regexify('(X|XI|XII) (PPLG|ANIMASI|DKV) [1-3]'),
            'major' => fake()->randomElement(['Pengembangan Perangkat Lunak dan Gim', 'Animasi', 'Desain Komunikasi Visual']),
        ];
    }
}
