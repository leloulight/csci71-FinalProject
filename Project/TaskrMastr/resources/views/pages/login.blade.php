@extends('layouts.master')

@section('title', 'Login')

@include('layouts.simple-nav')

@section('content')
    <div class="login_container">
        <div class="container">
            <h4>TaskrMastr Login</h4>
            <div id="form_error">
                <p id="error">Email or password is incorrect. Please try again.</p>
                <p>Forgot your password? Reset here.</p>
            </div>

            <div class="login_form">
                <form role="form" method="POST" action="/auth/login">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <input type="checkbox" name="remember" checked hidden>
                    <input type="submit" class="btn btn-success" value="Login">
                </form>
            </div>
        </div>
    </div>
@stop
