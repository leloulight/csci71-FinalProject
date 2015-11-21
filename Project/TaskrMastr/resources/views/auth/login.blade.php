@extends('layouts.master_main')

@section('title', 'Login')

@include('layouts.welcome-nav')

@section('content')
    <div class="login_container">
        <div class="container">
            <h4>TaskrMastr Login</h4>

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
