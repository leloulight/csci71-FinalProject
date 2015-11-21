@extends('layouts.master_main')

@section('title', 'Welcome')

@include('layouts.welcome-nav')

@section('content')
    <div class="jumbotron">
        <h1>Welcome to TaskrMastr!</h1>
        <p>Revolutionizing the way you manage your tasks.</p>
    </div>

    <div class="container">
        <div class="row app_info">
            <div class="col-md-4 ">
                <img src="images/task.png" class="welcome_info_icons"/>
                <p class="welcome_info">Create and monitor your tasks</p>
            </div>
            <div class="col-md-4 ">
                <img src="images/geolocation.png" class="welcome_info_icons"/>
                <p class="welcome_info">Receive location based alerts</p>
            </div>
            <div class="col-md-4">
                <img src="images/email.png" class="welcome_info_icons"/>
                <p class="welcome_info">Receive email and phone notifications</p>
            </div>
        </div>
        <br />
        <br />
        <div class="row app_info">

            <div class="col-md-4">
                <img src="images/categories.png" class="welcome_info_icons"/>
                <p class="welcome_info">Organize tasks in categories</p>
            </div>
            <div class="col-md-4">
                <img src="images/share.png" class="welcome_info_icons"/>
                <p class="welcome_info">Share categories and tasks with others</p>
            </div>
            <div class="col-md-4">
                <img src="images/analytics.png" class="welcome_info_icons"/>
                <p class="welcome_info">Monitor analytics over time</p>
            </div>
        </div>
    </div>
@stop