<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userId = User::inRandomOrder()->first()->id;
        
        return [
            'user_id'=> $userId,
            'name'=> fake()->firstName(),
            'surname'=> fake()->lastName(),
            'age'=> fake()->numberBetween(20,80),
            'phone_num'=> fake()->phoneNumber(),
        ];
    }
}
