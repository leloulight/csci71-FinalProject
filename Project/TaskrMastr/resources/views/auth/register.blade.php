@extends('layouts.master_main')

@section('title', 'Login')

@include('layouts.welcome-nav')

@section('content')
    <div class="login_container">
        <div class="container">
            <h2>Sign Up</h2>
            <p>It's free and always will be.</p>

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="login_form">
                <form id="signup_form" role="form" method="POST" action="/auth/register">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Username">
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                    <input type="text" class="form-control" name="recovery" value="{{ old('recovery') }}" placeholder="Security Question: What street did you grow up on?">
                    <input type="submit" class="btn btn-success" value="Sign Up">
                </form>
            </div>
        </div>
    </div>
@stop
