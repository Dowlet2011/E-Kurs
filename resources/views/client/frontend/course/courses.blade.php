@extends('layouts.app')

@section('content')
    @include('layouts.partials.navbar')

    <div class="container py-5">
        <h2 class="text-success fw-bold mb-4">{{ __('app.my courses') }}</h2>
        <div class="row row-cols-md-3 row-cols-lg-4 row-cols-sm-2 g-4">
            @foreach ($courses as $course)
                <div class="col">
                    <div class="card shadow h-100 border-success">
                        <div class="card-body text-center">
                            <h5 class="card-title text-success">{{ $course->name }}</h5>
                            <p>{{ $course->description }}</p>
                            <a href="{{ route('courses.show', $course->id) }}" class="btn btn-success">{{ __('app.open') }}
                                {{ __('app.course') }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
@endsection