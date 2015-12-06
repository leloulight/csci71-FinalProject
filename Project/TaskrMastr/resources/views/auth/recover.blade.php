@extends('layouts.master_main')

@section('title', 'Recover')

@include('layouts.welcome-nav')

@section('content')
    <div class="login_container">
        <div class="container">
            <h4>Reset Password</h4>

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
                <form role="form" method="POST" action="/auth/recover">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                    <input type="text" class="form-control" name="recovery" value="{{ old('recovery') }}" placeholder="Security Question: What street did you grow up on?">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                    <input type="submit" class="btn btn-success" value="Reset">
                </form>
            </div>
        </div>
    </div>
@stop
