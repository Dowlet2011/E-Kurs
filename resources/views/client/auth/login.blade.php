@extends('layouts.app')

@section('content')
    @include('client.alert.app')
    <div class="d-flex justify-content-center align-items-center vh-100 login-bg">
        <div class="card p-4 shadow-lg login-card">
            <h3 class="text-center mb-3 text-success fw-bold">Login</h3>
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="h6 form-label">Name: </label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
                    @error('name')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="h6 form-label">Password: </label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="role" class="form-label">Login as</label>
                    <select name="role" id="role" class="form-select">
                        <option value="Teacher">Teacher</option>
                        <option value="Admin">Admin</option>
                    </select>
                    @error('role')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success w-100 mt-4">Submit</button>
            </form>
        </div>
    </div>

@endsection