@extends('Master_Layouts.form')
@section('forms')
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="card shadow p-4">
                <h2 class="text-center">Forgot Password</h2>
                <br>
                <form action="">
                    <div class="">
                        <label for="teacher_id" class="form-label">User ID</label>
                        <input type="text" class="form-control" id="teacher_id" placeholder="Enter your ID">
                    </div>
                    <br>
                    <div class="">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter your password">
                    </div>
                    <br>
                    <a type="submit" class="btn btn-primary d-block w-50 mx-auto">
                        Send OTP
                    </a>
                    <br>
                    <p class="text-center">
                        <a href="{{route('signup')}}">Register</a>
                        |
                        <a href="{{route('login')}}">Log In</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
@endsection
