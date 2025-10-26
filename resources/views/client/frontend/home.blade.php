@extends('layouts.app')
@include('layouts.partials.navbar')
@section('content')
    <section class="p-5 text-center fade-in">
        <h1 class="text-success fw-bold mb-3">{{__('app.welcome_teacher')}} 👩‍🏫</h1>
        <p class="lead">{{ __('app.access_courses_profile') }}</p>
    </section>
@endsection