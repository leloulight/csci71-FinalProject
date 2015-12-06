<!DOCTYPE html>
<html>
<head>
    <title>TaskrMastr - @yield('title')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />


    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="/css/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="/css/taskrmastr.css">



    <script src="/js/jquery-2.1.4.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="//d3js.org/d3.v3.min.js" charset="utf-8"></script>
    <script src="/js/highcharts.js"></script>
    <script src="/js/moment.min.js"></script>
    <script src="/js/fullcalendar.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="/js/taskrmastr.js"></script>



</head>
<body>

<div class="wrapper">
    @yield('navigation')

    @if (Session::has('message'))
        <div class="alert alert-info">
            <p>{{ Session::get('message') }}</p>
        </div>
    @endif


    @if ($errors->any())
        <div class='alert alert-danger'>
            @foreach ( $errors->all() as $error )
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <div class="main_wrapper">
        @yield('sidebar')
        <div class="main">
            @yield('content')
        </div>
    </div>

    @include('layouts.footer')
</div>
</body>
</html>