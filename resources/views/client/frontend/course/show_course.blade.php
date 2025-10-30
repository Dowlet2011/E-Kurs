@extends('layouts.app')

@section('content')
    @include('layouts.partials.navbar')

    <div class="d-flex min-vh-100">
        <div class="login-bg text-white p-4 sidebar">
            <h4 class="fw-bold">{{ $teacher->name ?? 'No teacher assigned' }}</h4>
            <p class="text-light">{{ __('app.teacher') }}</p>
            <hr>
            <a href="{{ route('teacher_profile', $teacher->id) }}"
                class="btn btn-light w-100 mb-2">{{ __('app.profile') }}</a>
            <a href="{{ route('courses.index') }}" class="btn btn-outline-light w-100">{{ __('app.back to') }}
                {{ __('app.courses') }}</a>
        </div>

        <div class="flex-grow-1 p-4">
            <h2 class="text-success fw-bold mb-4">{{  $course->name }}</h2>
            <div class="mb-4">
                <h5 class="text-success">{{ __('app.lessons') }}</h5>
                <ul class="list-group shadow-sm">
                    @foreach ($works as $work)
                        <li class="list-group-item">{{ $work->title }}: <span
                                class="text-secondary">{{ $work->description }}</span>
                            @isset($work->file_path)
                                <br>
                                <a href="{{ route('work.show', [$course->id, $work->id]) }}"
                                    class="btn login-bg text-white mt-2">Press</a>
                            @endisset
                        </li>
                    @endforeach
                </ul>
            </div>

            <button id="viewStudentsBtn" class="btn btn-success">{{ __('app.view') }} {{ __('app.students') }}</button>

            <div id="studentList" class="mt-3 mb-3 d-none">
                <h5 class="text-success mt-3">{{ __('app.students') }}</h5>
                <ul class="list-group shadow-sm">
                    @foreach ($students as $student)
                        <li class="list-group-item">
                            {{ $student->name }} {{ $student->surname }}
                            @if (auth()->user()->role == 'Teacher')
                                <input type="checkbox" class="ms-3">
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>

            @if (auth()->user()->role == 'Teacher')
                <button id="addWorkBtn" class="btn btn-success">{{ __('app.add') }} {{ __('app.lesson') }}</button>
                <form id="addWork" class="d-none mt-3" action="{{ route('post.work', $course->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="h6 form-label text-success">{{ __('app.name') }}:</label>
                        <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="description" class="h6 form-label text-success">{{ __('app.description') }}:</label>
                        <input type="text" class="form-control" name="description" id="description"
                            value="{{ old('description') }}">
                        @error('description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="file" class="form-label">Upload your file</label>
                        <input class="form-control text-white login-bg" type="file" name="file" id="file">
                        @error('file')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn login-bg w-100 mt-4">{{ __('app.submit') }}</button>
                </form>
            @endif

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

            const addBtn = document.getElementById('addWorkBtn');
            const form = document.getElementById('addWork');
            if (addBtn && form) {
                addBtn.addEventListener('click', () => {
                    form.classList.toggle('d-none');
                });
            }
        });</script>
@endsection