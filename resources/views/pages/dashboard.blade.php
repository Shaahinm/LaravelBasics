@extends('layouts.master')

@section('title', $title)


@section('content')

    <h1 class="page-title">داشبورد</h1>

    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel minimal panel-default">
                <div class="panel-heading clearfix">
                    <div class="panel-title">تعداد کل کامنت ها</div>
                </div>
                <!-- panel body -->
                <div class="panel-body">
                    <div class="stack-order">
                        <h1 class="no-margins">46250</h1>
                        <small>کامنت</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel minimal panel-default">
                <div class="panel-heading clearfix">
                    <div class="panel-title">تعداد کل لایک ها</div>
                </div>
                <!-- panel body -->
                <div class="panel-body">
                    <div class="stack-order">
                        <h1 class="no-margins">253005</h1>
                        <small>لایک</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel minimal panel-info">
                <div class="panel-heading clearfix">
                    <div class="panel-title">تعداد کامنت های آخرین پست</div>
                </div>
                <!-- panel body -->
                <div class="panel-body">
                    <div class="stack-order">
                        <h1 class="no-margins">43</h1>
                        <small>کامنت</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel minimal panel-info">
                <div class="panel-heading clearfix">
                    <div class="panel-title">تعداد لایک ها آخرین پست</div>
                </div>
                <!-- panel body -->
                <div class="panel-body">
                    <div class="stack-order">
                        <h1 class="no-margins">349</h1>
                        <small>لایک</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-10 col-lg-offset-1">
            <!-- panel-->
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <div class="panel-title">نمودار کلی کامنت و لیک ها </div>
                    <ul class="panel-tool-options">
                        <li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
                    </ul>
                </div>
                <!-- panel body -->
                <div class="panel-body">
                    <div class="canvas-chart">
                        <canvas id="totalChart" height="336" width="722" style="width: 722px; height: 336px;"></canvas>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="panel minimal panel-default">
                <div class="panel-heading no-border clearfix">
                </div>
                <!-- panel body -->
                <div class="panel-body panel-content">
                    <div class="stack-order text-center">
                        <h1>
                            <span>250
                                <i class="fa fa-thumbs-up"></i>
                            </span> |
                            <span>11
                                <i class="fa fa-comment"></i>
                            </span>
                        </h1>
                        <h4>شنبه</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel minimal panel-default">
                <div class="panel-heading no-border clearfix">
                </div>
                <!-- panel body -->
                <div class="panel-body panel-content">
                    <div class="stack-order text-center">
                        <h1>
                            <span>195
                                <i class="fa fa-thumbs-up"></i>
                            </span> |
                            <span>28
                                <i class="fa fa-comment"></i>
                            </span>
                        </h1>
                        <h4>یکشنبه</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel minimal panel-default">
                <div class="panel-heading no-border clearfix">
                </div>
                <!-- panel body -->
                <div class="panel-body panel-content">
                    <div class="stack-order text-center">
                        <h1>
                            <span>356
                                <i class="fa fa-thumbs-up"></i>
                            </span> |
                            <span>102
                                <i class="fa fa-comment"></i>
                            </span>
                        </h1>
                        <h4>دوشنبه</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel minimal panel-default">
                <div class="panel-heading no-border clearfix">
                </div>
                <!-- panel body -->
                <div class="panel-body panel-content">
                    <div class="stack-order text-center">
                        <h1>
                            <span>360
                                <i class="fa fa-thumbs-up"></i>
                            </span> |
                            <span>41
                                <i class="fa fa-comment"></i>
                            </span>
                        </h1>
                        <h4>سه شنبه</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel minimal panel-default">
                <div class="panel-heading no-border clearfix">
                </div>
                <!-- panel body -->
                <div class="panel-body panel-content">
                    <div class="stack-order text-center">
                        <h1>
                            <span>208
                                <i class="fa fa-thumbs-up"></i>
                            </span> |
                            <span>32
                                <i class="fa fa-comment"></i>
                            </span>
                        </h1>
                        <h4>چهارشنبه</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel minimal panel-default">
                <div class="panel-heading no-border clearfix">
                </div>
                <!-- panel body -->
                <div class="panel-body panel-content">
                    <div class="stack-order text-center">
                        <h1>
                            <span>1012
                                <i class="fa fa-thumbs-up"></i>
                            </span> |
                            <span>117
                                <i class="fa fa-comment"></i>
                            </span>
                        </h1>
                        <h4>پنج شنبه</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel minimal panel-default">
                <div class="panel-heading no-border clearfix">
                </div>
                <!-- panel body -->
                <div class="panel-body panel-content">
                    <div class="stack-order text-center">
                        <h1>
                            <span>96
                                <i class="fa fa-thumbs-up"></i>
                            </span> |
                            <span>23
                                <i class="fa fa-comment"></i>
                            </span>
                        </h1>
                        <h4>جمعه</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-10 col-lg-offset-1">
            <!-- panel-->
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <div class="panel-title">نمودار کلی کامنت و لیک ها در روزهای هفته</div>
                    <ul class="panel-tool-options">
                        <li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
                    </ul>
                </div>
                <!-- panel body -->
                <div class="panel-body">
                    <div class="canvas-chart">
                        <canvas id="dailyChart" height="336" width="722" style="width: 722px; height: 336px;"></canvas>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop
@section('scripts')


    {{--<scripts src="/js/flot/jquery.flot.min.js"></scripts>--}}
    {{--<scripts src="/js/flot/jquery.flot.tooltip.min.js"></scripts>--}}
    {{--<scripts src="/js/flot/jquery.flot.resize.min.js"></scripts>--}}
    {{--<scripts src="/js/flot/jquery.flot.pie.min.js"></scripts>--}}
    {{--<scripts src="/js/flot/jquery.flot.time.min.js"></scripts>--}}
    {{--<scripts src="/js/flot/flot-script.js"></scripts>--}}

    <script src="/js/chartjs/Chart.bundle.min.js"></script>


    <script>
        Chart.defaults.global.defaultFontFamily = "yj, nyj";
        window.chartColors = {
            red: 'rgb(255, 99, 132)',
            orange: 'rgb(255, 159, 64)',
            yellow: 'rgb(255, 205, 86)',
            green: 'rgb(75, 192, 192)',
            blue: 'rgb(54, 162, 235)',
            purple: 'rgb(153, 102, 255)',
            grey: 'rgb(201, 203, 207)'
        };
        var color = Chart.helpers.color;

        var totalChartData = {
            labels: ["کامنت ها", "لایک ها"],
            datasets: [{
                label: 'کامنت ها',
                backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
                borderColor: window.chartColors.red,
                borderWidth: 1,
                data: [46250]
            }, {
                label: 'لایک ها',
                backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
                borderColor: window.chartColors.blue,
                borderWidth: 1,
                data: [253005]
            }]

        };
        var totalChartconfig = {
            type: 'bar',
            data: totalChartData,
            options: {
                responsive: true,
                title:{
                    display:true,
                    text:'نمودار کلی کامنت و لیک ها'
                },
                tooltips: {
                    mode: 'index',
                    intersect: false,
                },
                hover: {
                    mode: 'nearest',
                    intersect: true
                },
                scales: {
                    xAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true
                        }
                    }],
                    yAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'تعداد'
                        }
                    }]
                }
            }
        };

        var dailyChartData = {
            labels: ["شنبه", "یکشنبه", "دوشنبه", "سه شنبه", "چهارشنبه", "پنج شنبه", "جمعه"],
            datasets: [{
                label: 'کامنت ها',
                backgroundColor: window.chartColors.red,
                borderColor: window.chartColors.red,
                borderWidth: 1,
                data: [11, 28, 102,41, 32, 117, 23]
            }, {
                label: 'لایک ها',
                backgroundColor: window.chartColors.blue,
                borderColor: window.chartColors.blue,
                borderWidth: 1,
                data: [250, 195, 356, 360, 208, 1012, 96]
            }]

        };
        var dailyChartconfig = {
            type: 'bar',
            data: dailyChartData,
            options: {
                responsive: true,
                title:{
                    display:true,
                    text:'نمودار کلی کامنت و لایک ها در روزهای هفته'
                },
                tooltips: {
                    mode: 'index',
                    intersect: false,
                },
                hover: {
                    mode: 'nearest',
                    intersect: true
                },
                scales: {
                    xAxes: [{
                        stacked: true,
                    }],
                    yAxes: [{
                        stacked: true
                    }]
                }

            }
        };

        window.onload = function() {
            var ctx = document.getElementById("totalChart").getContext("2d");
            window.myLine = new Chart(ctx, totalChartconfig );

            var ctxdaily = document.getElementById("dailyChart").getContext("2d");
            window.myLine = new Chart(ctxdaily, dailyChartconfig );
        };


    </script>

@endsection