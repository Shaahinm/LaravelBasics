@extends('layouts.master')

@section('title', $title)

@section('assets')
    <link rel="stylesheet" href="/css/dropzone/dropzone.css">
    <link rel="stylesheet" href="/css/select2.css">
    <link rel="stylesheet" href="/css/bootstrap-datetimepicker.min.css">
@endsection

@section('content')

    <h1 class="page-title">پست جدید</h1>
    <ol class="breadcrumb breadcrumb-2">
        <li><a href="{{route('home')}}"><i class="fa fa-home"></i>داشبورد</a></li>
        <li><a href="{{route('allMedia')}}">همه پست ها</a></li>
        <li class="active"><strong>پست جدید</strong></li>
    </ol>
    <div class="row">
        <div class="col-lg-2">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h3 class="panel-title">انتخاب عکس</h3>
                </div>
                <div class="panel-body">
                    <form id="dropzone" class="dropzone dz-clickable" action="#">
                        <div class="dropzone-previews"></div>
                        <div class="dz-default dz-message"><span>عکس مورد نظر را در این قسمت بیاندازید</span></div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h3 class="panel-title">اطلاعات پست</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">کپشن</label>
                            <div class="col-sm-10">
                                <textarea placeholder="کپشن" rows="5" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">تگ</label>
                            <div class="col-sm-8">
                                {{--<select name="selectMultiple" class="select2 form-control select2-hidden-accessible" data-placeholder="Select states" multiple="" tabindex="-1" aria-hidden="true">--}}
                                <select dir="rtl" class="js-example-basic-multiple form-control" name="states[]"
                                        multiple="multiple">
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
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <button class="btn btn-primary" type="submit">تگ جدید</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
                            <button class="btn btn-success btn-block" type="submit">دسته بندی جدید</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h3 class="panel-title">زمان بندی</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="form-group">
                            <label class="col-sm-2 text-left control-label"> انتخاب تاریخ و ساعت پست</label>
                            <div class="col-sm-3">
                                <div id="datepicker" class="input-group date">
                                    <input type="text" data-format="D, dd MM yyyy" class="form-control">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h3 class="panel-title">ارسال به صف پست های در حال انتظار</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-3">
                                <button class="btn btn-success">ارسال</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop
@section('scripts')
    <script src="/js/dropzone/dropzone.js"></script>
    <script src="/js/select2.min.js"></script>
    <script src="/js/moment/moment-with-locales.min.js"></script>
    <script src="/js/bootstrap-datetimepicker.min.js"></script>
    <script>

        $(document).ready(function () {

            $('.js-example-basic-multiple').select2();
            $('.js-example-basic-single').select2();
            $('#datepicker').datetimepicker({
                locale: 'fa'
            });


            Dropzone.options.dropzone = {
                accept: function (file, done) {
                    console.log("uploaded");
                    done();
                },
                init: function () {
                    this.on("addedfile", function () {
                        if (this.files[1] != null) {
                            this.removeFile(this.files[0]);
                        }
                    });
                }
            };

        });
    </script>
@endsection