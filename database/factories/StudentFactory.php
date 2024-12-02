<?php

namespace Database\Factories;
use App\Models\Grade;
use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'name' => fake()->name($gender = 'female'),
            'grade_id' => $gradeId = fake()->numberBetween(1, 35),          
            'email' => fake()->unique()->safeEmail(),
            'address' => fake()->address(),
        ];
    }
}