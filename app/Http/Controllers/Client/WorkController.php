<?php

namespace App\Http\Controllers\Client;

use App\Models\Work;
use App\Models\Course;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class WorkController extends Controller
{
    public function store(Request $request, $id)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'max:2045'],
            'file' => ['nullable', 'file', 'mimes:pdf,doc,docx,ppt,pptx,zip,jpg,jpeg,png,mp4,avi,mov,txt,rar', 'max:51200'],
        ]);
        $file_path = null;

        if ($request->hasFile('file')) {
            $file_path = $request->file('file')->store('lessons/', 'public');
        }

        $course = Course::findOrFail($id);
        $user = Auth::user()->id;

        Work::create([
            'course_id' => $id,
            'teacher_id' => $course->teacher->id,
            'title' => $request->title,
            'description' => $request->description,
            'file_path' => $file_path ? $file_path : null,
        ]);
        return redirect()->route('courses.show', $course->id)
            ->with('success', 'Üstünlikli goşuldy');

    }

    public function show($course_id, $work_id) {
        $work = Work::where('id', $work_id)->firstOrFail();

        return view('client.frontend.show_work')->with('work', $work);
    }
}