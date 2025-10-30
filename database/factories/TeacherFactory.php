<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    public function definition(): array
    {
        $teacherUserId = User::inRandomOrder()
            ->where('role', 'Teacher')
            ->first()->id;
        return [
            'user_id' => $teacherUserId,
            'name' => fake()->firstName(),
            'surname' => fake()->lastName(),
            'age' => fake()->numberBetween(20, 80),
            'phone_num' => fake()->phoneNumber(),
        ];
    }
}
