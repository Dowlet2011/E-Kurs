<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Work;
use App\Models\Course;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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

        Storage::disk('public')->deleteDirectory('lessons');

        Teacher::factory(30)->create();
        Student::factory(600)->create();

        $this->call([
            CourseSeeder::class,
            WorksSeeder::class,
            CourseStudentSeeder::class,
        ]);
    }
}
