@extends('layouts.master')

@include('layouts.home-nav')

@include('layouts.sidebar')

@section('content')

    <div class="container">
        {!! $calendar->calendar() !!}
        {!! $calendar->script() !!}

    </div>

@endsection
