<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {

        $user = auth()->user();

        if (isset($user->teacher)) {
            $teacher = $user->teacher;
            $teacher->image_path = '/teacher_imgs/teacher.png';

            return view('client.frontend.profile')->with([
                'user' => $teacher,
                'courses' => $teacher->course,
            ]);
        } else if (isset($user->student)) {
            $student = $user->student;
            $student->image_path = '/student_imgs/student.png';

            return view('client.frontend.profile.profile')->with([
                'user' => $student,
                'courses' => $student->courses,
            ]);
        }
        ;
    }

    public function teacher_profile($id)
    {
        $teacher = Teacher::where('id', $id)->firstOrFail();
        $teacher->image_path = '/teacher_imgs/teacher.png';
        return view('client.frontend.profile.teacher_profile')->with('teacher', $teacher);
    }
}
