@extends('layouts.master')

@include('layouts.home-nav')

@include('layouts.sidebar')

@section('content')
    <h2>
        {!! link_to_route('home.show', $category->name, [$category->slug]) !!} -
        {{ $task->name }}
    </h2>

    {{ $task->description }}
@endsection