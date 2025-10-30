<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    public function definition(): array
    {
        $studentUserId = User::inRandomOrder()
            ->where('role', 'Student')
            ->first()->id;
        return [
            'user_id' => $studentUserId,
            'name' => fake()->firstName(),
            'surname' => fake()->lastName(),
            'age' => fake()->numberBetween(10, 30),
            'phone_num' => fake()->phoneNumber(),
        ];
    }
}
