@extends('layouts.master')

@include('layouts.home-nav')

@section('title', 'Calendar')

@include('layouts.sidebar')

@section('content')

    <div class="container">
        {!! $calendar->calendar() !!}
        {!! $calendar->script() !!}

    </div>

@endsection
