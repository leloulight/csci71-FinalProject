@extends('layouts.master')

@include('layouts.home-nav')

@section('title', 'Categories')

@include('layouts.sidebar')

@section('content')

    @if ( !$categories->count() )
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="tile" style="background-color: #888">
                        <h3>{!! link_to_route('categories.create', 'Create Category [+]') !!}</h3>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="tile" style="background-color: #888">
                        <h3>{!! link_to_route('categories.create', 'Create Category [+]') !!}</h3>
                    </div>
                </div>

                <? $pick = 1; ?>

                @foreach( $categories as $category )
                    <?
                    switch($pick) {
                        case 1:
                            $color = "#5133AB";
                            $pick++;
                            break;
                        case 2:
                            $color = "#AC193D";
                            $pick++;
                            break;
                        case 3:
                            $color = "#DC572E";
                            $pick++;
                            break;
                        case 4:
                            $color = "#00A600";
                            $pick++;
                            break;
                        case 5:
                            $color = "#2672EC";
                            $pick++;
                            break;
                        default:
                            $color = "#5133AB";
                    }
                    ?>
                    <div class="col-sm-3">
                        <div class="tile" style="background-color: {{ $color  }}">
                            <br/>
                            {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('categories.destroy', $category->slug))) !!}
                            <h3><a href="{{ route('categories.show', $category->slug) }}">{{ $category->name }}</a></h3>

                            <div class="action_buttons">
                                {!! link_to_route('categories.edit', 'Edit', array($category->slug), array('class' => 'btn btn-info')) !!}
                                {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                            </div>
                            {!! Form::close() !!}
                            <a href="{{ route('categories.show', $category->slug) }}"><p>Category Description</p></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
@endsection
