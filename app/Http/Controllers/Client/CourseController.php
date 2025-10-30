<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CourseController extends Controller
{
    public function index()
    {

        $user = auth()->user();

        if (isset($user->teacher)) {
            $teacher = $user->teacher;
            $courses = Course::where('teacher_id', $teacher->id)->orderBy('name', 'asc')->get();
            return view('client.frontend.course.courses')->with([
                'courses' => $courses,
            ]);
        } else if (isset($user->student)) {
            $courses = $user->student->courses;
            return view('client.frontend.course.courses')->with([
                'courses' => $courses,
            ]);
        };
    }

    public function show($id)
    {
        $course = Course::findOrFail($id);

        return view('client.frontend.course.show_course', [
            'course' => $course,
            'teacher' => $course->teacher,
            'works' => $course->works,
            'students' => $course->students,
        ]);
    }
}
