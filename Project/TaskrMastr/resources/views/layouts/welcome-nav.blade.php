@section('navigation')
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand navbar-logo" href="/">
                <img alt="Logo" src="/images/logo.png" class="logo">
            </a>
            <a class="navbar-brand" href="/">TaskrMastr</a>
        </div>

        <div class="navbar-collapse">

        <form class="navbar-form pull-right" role="form" method="POST" action="/auth/login">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <input type="checkbox" name="remember" checked hidden>
            <input type="submit" class="btn btn-success" value="Login">
        </form>





            <!--<form class="navbar-form pull-right" method="POST" action="/auth/login">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                <input type="submit" value="Login" class="btn btn-success"/>
            </form>-->














        </div>
    </div>
</nav>
@stop