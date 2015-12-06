@extends('layouts.master')

@include('layouts.home-nav')

@include('layouts.sidebar')

@section('content')
    <h2>Create Category</h2>

    {!! Form::model(new App\Category, ['route' => ['categories.store']]) !!}
    @include('categories/partials/_form', ['submit_text' => 'Create Category'])
    {!! Form::close() !!}
@endsection
