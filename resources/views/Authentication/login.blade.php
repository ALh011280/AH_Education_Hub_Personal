@extends('Master_Layouts.form')
@section('forms')
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="card shadow p-4">
                <h2 class="text-center">Login</h2>
                <br>
                <form action="{{ route('check') }}" method="POST">
                    @csrf
                    <div class="">
                        <label for="teacher_id" class="form-label">User ID</label>
                        <input type="text" class="form-control" id="teacher_id" placeholder="Enter your ID" name="user_id" value="{{ old('password') }}">
                        <span class="text-danger">
                            @error('user_id')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <br>
                    <div class="">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password" value="{{ old('password') }}">
                        <span class="text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <br>
                    @if (session('success_message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success_message') }}
                        </div>
                    @endif
                    @if (session('error_message'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error_message') }}
                        </div>
                    @endif
                    <button type="submit" class="btn btn-primary d-block w-25 mx-auto">
                        Log In
                    </button>
                    <br>
                    <p class="">
                        Don't have an account?
                        <a href="{{ route('signup') }}">Register</a>
                        |
                        <a href="{{ route('forgotPassword') }}">Forgot Password</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
@endsection
