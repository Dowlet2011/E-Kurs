<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use App\Models\Work;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        User::factory(30)->create();

        User::factory()->create([
            'name' => 'admin',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
        ]);

        User::factory()->create([
            'name' => 'Dowlet',
            'password' => bcrypt('12345678'),
            'role' => 'teacher',
        ]);
        
        Teacher::factory(30)->create();
        Student::factory(600)->create();

        $this->call([
            CourseSeeder::class,
            WorksSeeder::class,
        ]);
    }
}
