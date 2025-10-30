@extends('layouts.app')
@include('layouts.partials.navbar')

@section('content')
  <div class="container py-5">
    <h2 class="text-success fw-bold mb-4">{{ __('app.my') }} {{ __('app.profile') }}</h2>
    <div class="card shadow border-success p-4">
      <div class="row">
        <div class="col-md-4 text-center">
          <img src="{{ 'storage' . $user->image_path }}"
            class="rounded-circle border border-3 border-success mb-3 img-fluid" alt="Profile">
          <h5 class="fw-bold text-success">{{ $user->name }} {{ $user->surname }}</h5>
          <p class="text-muted">@foreach ($courses as $course)
            {{ $course->name . ', ' }}
          @endforeach
          </p>
        </div>
        <div class="col-md-8">
          <h6 class="fw-bold h4 text-success">{{ __('app.name') }}: <span class="text-black">{{ $user->name }}</span>
          </h6>
          <h6 class="fw-bold h4 text-success">{{ __('app.surname') }}: <span
              class="text-black">{{ $user->surname }}</span></h6>
          <h6 class="fw-bold h4 text-success">{{ __('app.age') }}: <span class="text-black">{{ $user->age }}</span>
          </h6>
          @isset($user->phone_num)
            <h6 class="fw-bold h4 text-success">{{ __('app.phone') }}: <span
                class="text-black">{{ $user->phone_num }}</span>
            </h6>
          @endisset
        </div>
      </div>
    </div>
  </div>
@endsection