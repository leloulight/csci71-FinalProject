@extends('layouts.master')

@section('title', 'Welcome')

@include('layouts.welcome-nav')

@section('content')
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


    <div class="jumbotron">
        <h1>Welcome to TaskrMastr!</h1>
        <p>Revolutionizing the way you manage your tasks.</p>
    </div>

    <div class="container">
        <div class="col-md-6">
            <div class="app_info">
                <h2>Manage tasks like never before</h2>
                <div class="app_info_one">
                    <img src="images/task.png" />
                    <span>Create and monitor your tasks</span>
                </div>
                <br />
                <div class="app_info_two">
                    <img src="images/share.png" />
                    <span>Share tasks with others</span>
                </div>
                <br />
                <div class="app_info_three">
                    <img src="images/email.png" />
                    <span>Receive email and phone notifications</span>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="signup_home">
                <h2>Sign Up</h2>
                <p>It's free and always will be.</p>

                <form id="signup_form" role="form" method="POST" action="/auth/register">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Username">
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                    <input type="submit" class="btn btn-success" value="Sign Up">
                </form>


                <!--<form method="POST" action="/users/p_signup" id="signup_form">
                    <input type="text" name="username" placeholder="Username" class="form-control" required>
                    <input type="email" name="email" placeholder="Email" class="form-control" required>
                    <input type="password" name="password" placeholder="Password" class="form-control" required>
                    <input type="submit" value="Sign Up" class="btn btn-success">
                </form>-->
            </div>
        </div>
    </div>
@stop