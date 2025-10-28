@extends('layouts.app')
@include('layouts.partials.navbar')

@section('content')
  <div class="container py-5">
    <h2 class="text-success fw-bold mb-4">My Profile</h2>
    <div class="card shadow border-success p-4">
      <div class="row">
        <div class="col-md-4 text-center">
          <img src="{{ 'storage/teacher.png' }}" class="rounded-circle border border-3 border-success mb-3 img-fluid"
            alt="Profile">
          <h5 class="fw-bold text-success">{{ $teacher->name }} {{ $teacher->surname }}</h5>
          <p class="text-muted">@foreach ($courses as $course)
            {{ $course->name . ', ' }}
          @endforeach Teacher
          </p>
        </div>
        <div class="col-md-8">
          <h6 class="fw-bold h4 text-success">Name:  <span class="text-black">{{ $teacher->name }}</span></h6>
          <h6 class="fw-bold h4 text-success">Surname:  <span class="text-black">{{ $teacher->surname }}</span></h6>
          <h6 class="fw-bold h4 text-success">Age:  <span class="text-black">{{ $teacher->age }}</span></h6>
          <button class="btn btn-success">Edit Profile</button>
        </div>
      </div>
    </div>
  </div>
@endsection