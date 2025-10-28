<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() {
        
        $user = auth()->user();
        $teacher = $user->teacher;

        return view('client.frontend.profile')->with([
            'teacher' => $teacher,
            'courses' => $teacher->course,
        ]);
    }
}
