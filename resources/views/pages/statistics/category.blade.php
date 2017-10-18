@extends('layouts.master')

@section('title', $title)

@section('assets')
    <link rel="stylesheet" href="/css/select2.css">
@endsection

@section('content')

    <h1 class="page-title">آمار و گزارشات</h1>

    <div class="row">
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h3 class="panel-title">دسته بندی</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="form-group">
                            <select dir="rtl" class="js-example-basic-single form-control" name="state">
                                <option value="1">تبلیغاتی</option>
                                <option value="3">لباس</option>
                                <option value="2">بنفش</option>
                                <option value="5">حیوانات</option>
                                <option value="4">آتش</option>
                                <option value="11">آهو</option>
                                <option value="10">سبز</option>
                                <option value="12">اسب</option>
                                <option value="13">تست</option>
                                <option value="14">خنده</option>
                                <option value="15">گریه</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <button id="btnGetStatistics" class="btn btn-success btn-block" type="submit">گرفتن گزارش</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row toHide" style="display: none;">
        <div class="col-lg-3 col-md-6">
            <div class="panel minimal panel-info">
                <div class="panel-heading clearfix">
                    <div class="panel-title">تعداد لایک های روبات برای این دسته بندی</div>
                </div>
                <!-- panel body -->
                <div class="panel-body">
                    <div class="stack-order">
                        <h3 class="no-margins">19 امروز | 190 هفته | 523 ماه</h3>
                        <small>لایک</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel minimal panel-info">
                <div class="panel-heading clearfix">
                    <div class="panel-title">تعداد کامنت های روبات برای این دسته بندی</div>
                </div>
                <!-- panel body -->
                <div class="panel-body">
                    <div class="stack-order">
                        <h3 class="no-margins">11 امروز | 60 هفته | 339 ماه</h3>
                        <small>کامنت</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row toHide">
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
                        <canvas id="dailyChart" height="336" width="722" style="width: 722px; height: 336px;"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>



@stop
@section('scripts')

    <script src="/js/chartjs/Chart.bundle.min.js"></script>
    <script src="/js/select2.min.js"></script>
    <script>

        $(function() {
            $('.js-example-basic-single').select2();
            /*window.onload = function() {

            };*/

            $('#btnGetStatistics').on('click', function () {
                $('.toHide').show(500);
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
                var dailyChartData = {
                    labels: ["فالو", "آنفالو", "لایک", "کامنت"],
                    datasets: [{
                        label: 'روز',
                        backgroundColor: window.chartColors.red,
                        borderColor: window.chartColors.red,
                        borderWidth: 1,
                        data: [11, 30, 365, 45]
                    }, {
                        label: 'هفته',
                        backgroundColor: window.chartColors.blue,
                        borderColor: window.chartColors.blue,
                        borderWidth: 1,
                        data: [86,196,2152,320]
                    }, {
                        label: 'ماه',
                        backgroundColor: window.chartColors.green,
                        borderColor: window.chartColors.blue,
                        borderWidth: 1,
                        data: [305,1021,9633,1195]
                    }
                    ]

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
                var ctxdaily = document.getElementById("dailyChart").getContext("2d");
                window.myLine = new Chart(ctxdaily, dailyChartconfig );
            });
        });




    </script>

@endsection