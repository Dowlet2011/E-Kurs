@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center align-items-center vh-100 login-bg">
        <div class="text-center">
            <a href="{{ route('locale', 'tm') }}"
                class="btn btn-sm bg-white text-success border border-success hover:bg-success hover:text-white">TM</a>
            <a href="{{ route('locale', 'en') }}"
                class="btn btn-sm bg-white text-success border border-success hover:bg-success hover:text-white">EN</a>
            <div class="h1 fw-bold">
                <div id="wrapper">
                    <span id="e" class="text-white">E -</span>
                    <span id="kurs" class="text-white">KURS</span>
                </div>
            </div>
            <div class="h1 my-4 text-white">{{ __('app.welcome') }}</div>
            <a href="{{ route('login') }}" class="btn btn-success">{{__('app.login')}} <i class="bi-box-arrow-in-right"></i>
            </a>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const wrapper = document.getElementById('wrapper');
            const eElement = document.getElementById('e');

            setTimeout(() => {
                wrapper.classList.add('activated');
            }, 2000)

            setInterval(() => {
                wrapper.classList.toggle('activated');
            }, 9000);
        });
    </script>
@endsection