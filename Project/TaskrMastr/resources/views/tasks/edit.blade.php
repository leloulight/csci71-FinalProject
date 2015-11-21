@extends('layouts.master')

@include('layouts.home-nav')

@include('layouts.sidebar')

@section('content')
    <h2>Edit Task: "{{ $task->name }}"</h2>

    {!! Form::model($task, ['method' => 'PATCH', 'route' => ['home.tasks.update', $category->slug, $task->slug]]) !!}
    @include('tasks/partials/_form', ['submit_text' => 'Edit Task'])
    {!! Form::close() !!}
@endsection