@extends('admin.layouts.app')
@section('title','文章分类添加---')
@section('content')

    <!-- BEGIN PAGE -->

    <div class="page-content">

       <!-- BEGIN PAGE CONTAINER-->

        <div class="container-fluid">

            <!-- BEGIN PAGE HEADER-->

            <div class="row-fluid">

                <div class="span12">

                    <h3 class="page-title">

                        添加文章分类

                    </h3>

               </div>

            </div>

            <!-- END PAGE HEADER-->

            <!-- BEGIN PAGE CONTENT-->

            <div class="portlet box blue ">

                <div class="portlet-title">

                    <div class="caption"><i class="icon-reorder"></i>分类名称</div>

                </div>

                <div class="portlet-body form">

                    <!-- BEGIN FORM-->

                    <form action="{{route('admin.highlevel.store')}}"  method="post"  accept-charset="UTF-8" class="form-horizontal">

                        @csrf

                        <div class="control-group">

                            <label class="control-label">分类名称</label>

                            <div class="controls">

                                <input type="text" name="high_name" class=" m-wrap" >

                            </div>

                        </div>

                        <div class="control-group">

                            <label class="control-label">排序</label>

                            <div class="controls">

                                <input type="text" name="sort" class=" m-wrap" >

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


@endsection