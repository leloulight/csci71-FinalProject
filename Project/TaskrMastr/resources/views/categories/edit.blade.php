@extends('layouts.master')

@include('layouts.home-nav')

@include('layouts.sidebar')

@section('content')
    <h2>Edit Category</h2>

    {!! Form::model($category, ['method' => 'PATCH', 'route' => ['categories.update', $category->slug]]) !!}
    @include('categories/partials/_form', ['submit_text' => 'Edit Category'])
    {!! Form::close() !!}
@endsection