@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="card shadow-sm border-success">
            <div class="card-header bg-success text-white">
                <h3 class="mb-0">{{ $work->title }}</h3>
            </div>
            <div class="card-body">
                <p><strong>Description: </strong>{{ $work->description }}</p>

                @isset($work->file_path)
                    <a href="{{ asset('storage/' . $work->file_path) }}" class="btn btn-success mt-3" target="_blank" download>
                        Download File
                    </a>
                @else
                    <p class="text-secondary mt-3">No file uploaded for this work.</p>
                @endisset
            </div>
        </div>

        <a href="{{ route('courses.show', $work->course_id) }}" class="btn btn-outline-success mt-4">
            Back to Course
        </a>
    </div>
@endsection