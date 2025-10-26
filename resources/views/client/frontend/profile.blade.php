@extends('layouts.app')
@include('layouts.partials.navbar')

@section('content')
<div class="container py-5" data-aos="fade-up">
  <h2 class="text-success fw-bold mb-4">My Profile</h2>
  <div class="card shadow border-success p-4">
    <div class="row">
      <div class="col-md-4 text-center">
        <img src="" class="rounded-circle border border-3 border-success mb-3" alt="Profile">
        <h5 class="fw-bold text-success">Mr. Alex Green</h5>
        <p class="text-muted">Mathematics Teacher</p>
      </div>
      <div class="col-md-8">
        <h6 class="fw-bold text-success">Email:</h6>
        <p>alex.green@example.com</p>
        <h6 class="fw-bold text-success">About Me:</h6>
        <p>Passionate about helping students discover the beauty of math through interactive learning.</p>
        <button class="btn btn-success">Edit Profile</button>
      </div>
    </div>
  </div>
</div>
@endsection