@extends('admin.layouts.app')
@section('title','文章标签添加---')
@section('content')

    <!-- BEGIN PAGE -->

    <div class="page-content">

       <!-- BEGIN PAGE CONTAINER-->

        <div class="container-fluid">

            <!-- BEGIN PAGE HEADER-->

            <div class="row-fluid">

                <div class="span12">

                    <h3 class="page-title">

                        添加文章标签

                    </h3>

               </div>

            </div>

            <!-- END PAGE HEADER-->

            <!-- BEGIN PAGE CONTENT-->

            <div class="portlet box blue ">

                @include('error')

                <div class="portlet-title">

                    <div class="caption"><i class="icon-reorder"></i>标签信息</div>

                </div>

                <div class="portlet-body form">

                    <!-- BEGIN FORM-->

                    <form action="{{route('admin.tag.store')}}"  method="post"  accept-charset="UTF-8" class="form-horizontal">

                        @csrf

                        <div class="control-group">

                            <label class="control-label">标签名称 <span class="required">*</span></label>

                            <div class="controls">

                                <input type="text"  required="required" name="title" class=" m-wrap" >

                            </div>

                        </div>

                        <div class="form-actions">

                            <button type="submit" class="btn blue">提交</button>

                            <button type="button" class="btn">取消</button>

                        </div>

                    </form>

                    <!-- END FORM-->

                </div>

            </div>

            <!-- END PAGE CONTENT-->

        </div>

        <!-- END PAGE CONTAINER-->

    </div>

    <!-- END PAGE -->


@endsection

@section('page-js')
    <script src="{{asset('vendors/parsleyjs/dist/parsley.min.js')}}"></script>
    <script src="{{asset('vendors/parsleyjs/dist/i18n/zh_cn.js')}}"></script>
    <script>
        $('#form').parsley();
    </script>
@endsection