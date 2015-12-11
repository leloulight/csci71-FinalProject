@extends('layouts.master')

@include('layouts.home-nav')

@section('title', 'Create Task')

@include('layouts.sidebar')

@section('content')
    <h2>Create Task for Category "{{ $category->name }}"</h2>

    {!! Form::model(new App\Task, ['route' => ['categories.tasks.store', $category->slug], 'class'=>'']) !!}
    @include('tasks/partials/_form', ['submit_text' => 'Create Task'])
    {!! Form::close() !!}
@endsection