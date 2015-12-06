@section('sidebar')
    <nav class="navbar navbar-inverse sidebar" role="navigation">
        <div class="container-fluid">
            <div>
                <ul class="nav navbar-nav">
                    <li class="{{Request::path() == 'dashboard' ? 'active' : ''}}"><a href="/dashboard">Dashboard<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-dashboard"></span></a></li>
                    <li class="{{Request::path() == 'analytics' ? 'active' : ''}}"><a href="/analytics">Analytics<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tasks"></span></a></li>
                    <li class="{{Request::path() == 'categories' ? 'active' : ''}}"><a href="/categories">Categories<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
                    <li class="{{Request::path() == 'calendar' ? 'active' : ''}}"><a href="/calendar">Calendar<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-calendar"></span></a></li>
                    <li ><a href="#">Profile<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a></li>
                </ul>
            </div>
        </div>
    </nav>
@stop