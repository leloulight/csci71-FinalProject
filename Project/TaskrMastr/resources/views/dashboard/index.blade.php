@extends('layouts.master')

@include('layouts.home-nav')

@section('title', 'Dashboard')

@include('layouts.sidebar')

@section('content')
    <h1>Welcome to your Dashboard.</h1>
    <br />
    <br />
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="/categories"><i class="glyphicon glyphicon-th-list"></i></a>
                <a href="/categories"><h3 style="text-align: center">View Categories</h3></a>
            </div>

            <div class="col-md-3">
                <a href="/categories/create"><i class="glyphicon glyphicon-pencil"></i></a>
                <a href="/categories/create"><h3 style="text-align: center">Create a Category</h3></a>
            </div>

            <div class="col-md-3">
                <a href="/calendar"><i class="glyphicon glyphicon-calendar"></i></a>
                <a href="/calendar"><h3 style="text-align: center">View Calendar</h3></a>
            </div>
            <div class="col-md-3">
                <a href="/analytics"><i class="glyphicon glyphicon-indent-left"></i></a>
                <a href="/analytics"><h3 style="text-align: center">Your Analytics</h3></a>
            </div>
        </div>

    <?php
        $actualArray = array(10, 10, 8,6,7,5,5,4);

        $idealArray = range(0, 10, 1);
        $idealXArray = array();
        foreach ($idealArray as $value){
            $value = trim($value);
            $idealXArray[] = 'Day '.$value;
        }
    ?>
        <br/>
        <br/>
        <br/>

        <div id="container-burndown" style="max-width: 100%; height: 450px;"></div>

        <script>
            jQuery(document).ready(function() {
                var doc = $(document);
                $('#container-burndown').highcharts({
                    title: {
                        text: 'Tasks Completed',
                        x: -10 //center
                    },
                    scrollbar: {
                        barBackgroundColor: 'gray',
                        barBorderRadius: 7,
                        barBorderWidth: 0,
                        buttonBackgroundColor: 'gray',
                        buttonBorderWidth: 0,
                        buttonBorderRadius: 7,
                        trackBackgroundColor: 'none',
                        trackBorderWidth: 1,
                        trackBorderRadius: 8,
                        trackBorderColor: '#CCC'
                    },
                    colors: ['blue', 'red'],
                    plotOptions: {
                        line: {
                            lineWidth: 3
                        },
                        tooltip: {
                            hideDelay: 200
                        }
                    },
                    xAxis: {
                        categories: <?php echo json_encode($idealXArray);?>
                    },
                    yAxis: {
                        title: {
                            text: 'Remaining work (days)'

                        },
                        type: 'linear',
                        max:10,
                        min:0,
                        tickInterval :1

                    },

                    tooltip: {
                        valueSuffix: ' day',
                        crosshairs: true,
                        shared: true
                    },
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom',
                        borderWidth: 0
                    },
                    series: [{
                        name: 'Ideal Burn',
                        color: 'rgba(255,0,0,0.25)',
                        lineWidth: 2,

                        data: <?php echo json_encode(array_reverse($idealArray));?>
    }, {
                        name: 'Actual Burn',
                        color: 'rgba(0,120,200,0.75)',
                        marker: {
                            radius: 6
                        },
                        data: <?php echo json_encode($actualArray);?>
    }]
                });
            });
        </script>

    </div>

@endsection
