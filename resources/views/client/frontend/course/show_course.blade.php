@extends('layouts.app')

@section('content')
    @include('layouts.partials.navbar')

    <div class="d-flex">
        <div class="bg-success text-white p-4 vh-100 sidebar">
            <h4 class="fw-bold">{{ $teacher->name ?? 'No teacher assigned' }}</h4>
            <p class="text-light">Teacher</p>
            <hr>
            <a href="{{ route('profile') }}" class="btn btn-light w-100 mb-2">Profile</a>
            <a href="{{ route('courses.index') }}" class="btn btn-outline-light w-100">Back to Courses</a>
        </div>

        <div class="flex-grow-1 p-4">
            <h2 class="text-success fw-bold mb-4">{{  $course->name }}</h2>
            <div class="mb-4" data-aos="fade-right">
                <h5 class="text-success">Lessons</h5>
                <ul class="list-group shadow-sm">
                    @foreach ($works as $work)
                        <li class="list-group-item">{{ $work->title }}</li>
                    @endforeach
                </ul>
            </div>
            <button id="viewStudentsBtn" class="btn btn-success">View Students</button>
            <div id="studentList" class="mt-3 d-none">
                <h5 class="text-success mt-3">Students</h5>
                <ul class="list-group shadow-sm">
                    @foreach ($students as $student)
                        <li class="list-group-item">{{ $student->name }} {{ $student->surname }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const btn = document.getElementById('viewStudentsBtn');
            const list = document.getElementById('studentList');
            if (btn && list) {
                btn.addEventListener('click', () => {
                    list.classList.toggle('d-none');
                });
            }
        });</script>
@endsection