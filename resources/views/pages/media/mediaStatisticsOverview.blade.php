@extends('layouts.master')

@section('title', $title)


@section('content')

    <h1 class="page-title">نمودار کامنت ها</h1>

    <ol class="breadcrumb breadcrumb-2">
        <li><a href="{{route('home')}}"><i class="fa fa-home"></i>داشبورد</a></li>
        <li><a href="{{route('singleMedia', $id)}}">{{$id}}</a></li>
        <li class="active"><strong>کامنت ها</strong></li>
    </ol>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <div class="panel-title">کامنت و لایک</div>
                </div>
                <div class="panel-body with-table">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>کامنت</th>
                                <th>لایک</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td>
                                    <span id="commentChart"><canvas width="27" height="16" style="display: inline-block; width: 27px; height: 16px; vertical-align: top;"></canvas></span>
                                    <a href="{{route('mediaStatisticComment', $id)}}" class="btn btn-default btn-outline">نمایش دقیق</a>
                                </td>
                                <td>
                                    <span id="likeChart"><canvas width="27" height="16" style="display: inline-block; width: 27px; height: 16px; vertical-align: top;"></canvas></span>
                                    <a href="{{route('mediaStatisticLike', $id)}}" class="btn btn-default btn-outline">نمایش دقیق</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
@section('scripts')

    <script src="/js/sparkline/jquery.sparkline.min.js"></script>
    <script>
        $("#commentChart").sparkline([11, 26, 35, 96, 112, 115, 260, 290, 415], {
            type: 'line',
            lineColor: '#17997f',
            fillColor: '#00C0EF',
        });
        $("#likeChart").sparkline([34, 49, 89, 154, 199, 254, 305, 390, 600], {
            type: 'line',
            lineColor: '#17997f',
            fillColor: '#00C0EF',
        });
    </script>

@endsection