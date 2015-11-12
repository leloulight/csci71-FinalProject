@section('navigation')
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand navbar-logo" href="/">
                <img alt="Brand" src="/images/logo.png" class="logo">
            </a>
            <a class="navbar-brand" href="/">TaskrMastr</a>
        </div>

        <div class="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello, {{ $name }}<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Profile (coming soon!)</a></li>
                        <li><a href="/auth/logout">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
@stop