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

            <ul class="nav navbar-nav navbar-right">
                <li><a href="/auth/login">Login</a></li>
                <li><a href="/auth/register">Sign Up</a></li>
            </ul>

        </div>
    </div>
</nav>
@stop