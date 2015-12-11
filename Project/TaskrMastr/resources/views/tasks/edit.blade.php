@extends('layouts.master')

@include('layouts.home-nav')

@section('title', 'Edit Task')

@include('layouts.sidebar')

@section('content')
    <h2>Edit Task: "{{ $task->name }}"</h2>

    {!! Form::model($task, ['method' => 'PATCH', 'route' => ['categories.tasks.update', $category->slug, $task->slug]]) !!}
    @include('tasks/partials/_form', ['submit_text' => 'Edit Task'])
    {!! Form::close() !!}
@endsection