@extends('Master_Layouts.form')

@section('forms')
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="card shadow p-4" style="width: 500px;">
                <h2 class="text-center">Sign Up</h2>
                <br>

                <form action="{{ route('register') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="user_id" class="form-label">User ID</label>
                        <input type="text" class="form-control" id="user_id" name="user_id"
                            placeholder="Enter your ID" value="{{ old('user_id') }}">
                        <span class="text-danger">
                            @error('user_id')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            placeholder="Enter your Name" value="{{ old('name') }}">
                        <span class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="tel" class="form-control" id="phone" name="phone"
                            placeholder="Enter your Phone" value="{{ old('phone') }}">
                        <span class="text-danger">
                            @error('phone')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Enter your Password" value="{{ old('password') }}">
                        <span class="text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <input type="text" class="form-control" id="role" name="role"
                            placeholder="Enter your Role" value="{{ old('role') }}">
                        <span class="text-danger">
                            @error('role')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <button type="submit" class="btn btn-primary d-block w-25 mx-auto">
                        Sign Up
                    </button>

                    <br>

                    <p class="text-center">
                        You are already signed up?
                        <a href="{{ route('login') }}">Log In</a>
                        |
                        <a href="{{ route('forgotPassword') }}">Forgot Password</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
@endsection
