<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseStudentSeeder extends Seeder
{
    public function run(): void
    {
        $courses = Course::all();
        $students = Student::all();

        $courses->each(function ($course) use ($students) {

            $randomStudents = $students->random(rand(5, 30));

            $course->students()->attach($randomStudents->pluck(value: 'id'));
        });
    }
}
