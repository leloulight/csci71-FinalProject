@extends('layouts.master')

@include('layouts.home-nav')

@section('title', 'Analytics')

@include('layouts.sidebar')

@section('content')

    <div class="container">




        <div id="container-chart" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

        <table id="datatable" style="display: none">
            <thead>
            <tr>
                <th></th>
                <th>Tasks</th>
                <th>Completed</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th>Shopping Items</th>
                <td>6</td>
                <td>2</td>
            </tr>
            <tr>
                <th>Homework Assignments</th>
                <td>5</td>
                <td>5</td>
            </tr>
            <tr>
                <th>Tests</th>
                <td>6</td>
                <td>4</td>
            </tr>
            <tr>
                <th>Work Tasks</th>
                <td>10</td>
                <td>6</td>
            </tr>
            </tbody>
        </table>






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
 
        <hr style="border: 1px solid black;">

        <div id="container-burndown" style="max-width: 100%; height: 450px;"></div>

        <br />
        <br />

        <script>
            jQuery(document).ready(function() {
                var doc = $(document);
                $('#container-burndown').highcharts({
                    title: {
                        text: 'Burndown Graph',
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
