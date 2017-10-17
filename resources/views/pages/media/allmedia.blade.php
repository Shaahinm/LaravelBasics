@extends('layouts.master')

@section('title', $title)
@section('assets')
    <link rel="stylesheet" href="/css/select2.css">
@endsection

@section('content')
    <div class="header-secondary row gray-bg">
        <div class="col-lg-12">
            <div class="page-heading clearfix">
                <h1 class="page-title pull-left">پست ها</h1><button class="btn btn-primary btn-sm btn-add">پست جدید</button>
            </div>
            <!-- Breadcrumb -->
            <ol class="breadcrumb breadcrumb-2">
                <li><a href="index.html"><i class="fa fa-home"></i>داشبورد</a></li>
                <li class="active"><strong>همه پست ها</strong></li>
            </ol>
            <div class="tab-wrapper clearfix">
                <ul class="nav nav-pills nav-icons pull-right">
                    <li role="presentation" class=""><a href="#" class="toggle-filter" data-block-id="filter-box"><i class="fa fa-filter"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="main-content">
        <div class="row datatable-wrapper form-inline">
            <div class="col-lg-12">
                <div class="data-col-first clearfix">
                    <div class="col-checkbox col-space">
                        <div class="form-checkbox">
                            <input type="checkbox" value="" name=""> <span class="check"><i class="fa fa-check"></i></span>
                        </div>
                    </div>
                    <div class="col-selectbox">
                        <select class="form-control input-sm">
                            <option>Bulk Action</option>
                            <option>Bulk Action</option>
                            <option>Bulk Action</option>
                        </select>&nbsp;
                        <button class="btn btn-primary btn-sm">Go</button>
                    </div>
                </div>
                <div class="data-col-last clearfix">
                    <div class="col-selectbox">
                        <select class="form-control input-sm">
                            <option>Sort By</option>
                            <option>Sort By</option>
                            <option>Sort By</option>
                        </select>
                    </div>
                    <div class="col-selectbox">
                        <select class="form-control input-sm">
                            <option>25 Records</option>
                            <option>10 Records</option>
                            <option>50 Records</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-users table-hover">
                <thead>
                <tr>
                    <th class="size-60"></th>
                    <th class="size-80">عکس</th>
                    <th>تاریخ پست</th>
                    <th>تعداد لایک</th>
                    <th>تعداد کامنت</th>
                    <th>آمارها</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="size-60"><div class="form-checkbox"><input type="checkbox" name="name1" value=""> <span class="check"><i class="fa fa-check"></i></span></div></td>
                    <td class="size-80"><img class="avatar img-circle" src="images/john-smith.png" alt="" title=""></td>
                    <td><strong>1396/7/18</strong></td>
                    <td><span class="label label-info">23</span></td>
                    <td><span class="label label-info">45</span></td>
                    <td>
                        <a href="{{route('mediaStatisticOverview', '321456')}}" type="button" class="btn btn-default btn-outline"><i class="fa fa-area-chart"></i>&nbsp; کلی</a>
                        <a href="{{route('mediaStatisticComment', '321456')}}" type="button" class="btn btn-default btn-outline"><i class="fa fa-comment"></i>&nbsp; کامنت</a>
                        <a href="{{route('mediaStatisticLike', '321456')}}"  type="button" class="btn btn-default btn-outline"><i class="fa fa-thumbs-up"></i>&nbsp; لایک</a>
                    </td>
                    <td>
                        <a href="{{route('singleMedia', '321456')}}" type="button" class="btn btn-blue btn-outline"><i class="fa fa-eye"></i>&nbsp; نمایش</a>
                    </td>
                </tr>
                <tr>
                    <td class="size-60"><div class="form-checkbox"><input type="checkbox" name="name1" value=""> <span class="check"><i class="fa fa-check"></i></span></div></td>
                    <td class="size-80"><img class="avatar img-circle" src="images/john-smith.png" alt="" title=""></td>
                    <td><strong>1396/7/18</strong></td>
                    <td><span class="label label-info">49</span></td>
                    <td><span class="label label-info">11</span></td>
                    <td>
                        <a href="{{route('mediaStatisticOverview', '123761')}}" type="button" class="btn btn-default btn-outline"><i class="fa fa-area-chart"></i>&nbsp; کلی</a>
                        <a href="{{route('mediaStatisticComment', '123761')}}" type="button" class="btn btn-default btn-outline"><i class="fa fa-comment"></i>&nbsp; کامنت</a>
                        <a href="{{route('mediaStatisticLike', '123761')}}"  type="button" class="btn btn-default btn-outline"><i class="fa fa-thumbs-up"></i>&nbsp; لایک</a>
                    </td>
                    <td>
                        <a href="{{route('singleMedia', '123761')}}" type="button" class="btn btn-blue btn-outline"><i class="fa fa-eye"></i>&nbsp; نمایش</a>
                    </td>
                </tr>
                <tr>
                    <td class="size-60"><div class="form-checkbox"><input type="checkbox" name="name1" value=""> <span class="check"><i class="fa fa-check"></i></span></div></td>
                    <td class="size-80"><img class="avatar img-circle" src="images/john-smith.png" alt="" title=""></td>
                    <td><strong>1396/7/18</strong></td>
                    <td><span class="label label-info">26</span></td>
                    <td><span class="label label-info">2</span></td>
                    <td>
                        <a href="{{route('mediaStatisticOverview', '7894321')}}" type="button" class="btn btn-default btn-outline"><i class="fa fa-area-chart"></i>&nbsp; کلی</a>
                        <a href="{{route('mediaStatisticComment', '7894321')}}" type="button" class="btn btn-default btn-outline"><i class="fa fa-comment"></i>&nbsp; کامنت</a>
                        <a href="{{route('mediaStatisticLike', '7894321')}}"  type="button" class="btn btn-default btn-outline"><i class="fa fa-thumbs-up"></i>&nbsp; لایک</a>
                    </td>
                    <td>
                        <a href="{{route('singleMedia', '7894321')}}" type="button" class="btn btn-blue btn-outline"><i class="fa fa-eye"></i>&nbsp; نمایش</a>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>


@stop

@section('scripts')
    <scripts src="/js/select2.js"></scripts>

    <script>
        $(document).ready(function () {
            $(".select2").select2();
        });

    </script>
@endsection