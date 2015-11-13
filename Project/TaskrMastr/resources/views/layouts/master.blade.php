<!DOCTYPE html>
<html>
<head>
    <title>TaskrMastr - @yield('title')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="/css/taskrmastr.css">

    <script src="/js/jquery-2.1.4.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/taskrmastr.js"></script>

</head>
<body>

<div class="wrapper">
    @yield('navigation')
    @yield('content')
    @include('layouts.footer')
</div>
</body>
</html>