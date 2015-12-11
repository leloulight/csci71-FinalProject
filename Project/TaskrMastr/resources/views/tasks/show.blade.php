@extends('layouts.master')

@include('layouts.home-nav')

@section('title', 'Task Details')

@include('layouts.sidebar')

@section('content')
    <h2>
        {!! link_to_route('categories.show', $category->name, [$category->slug]) !!} -
        {{ $task->name }}
    </h2>

    {{ $task->description }}
@endsection