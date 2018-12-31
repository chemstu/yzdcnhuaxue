@extends('admin.layouts.app')

@section('page-css')

    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/select2_metro.css')}}" />

    <link rel="stylesheet" href="{{asset('admin/css/DT_bootstrap.css')}}" />

@endsection

@section('content')

    <!-- BEGIN PAGE -->


    <div class="page-content">

        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->


        <!-- BEGIN PAGE CONTAINER-->

        <div class="container-fluid">

            <!-- BEGIN PAGE HEADER-->

            <div class="row-fluid">

                <div class="span12">

                    <h3 class="page-title">

                        文章列表

                    </h3>

                </div>

            </div>

            <div class="row-fluid">

                <div class="responsive" >

                    <!-- BEGIN EXAMPLE TABLE PORTLET-->

                    <div class="portlet box purple">

                        <div class="portlet-title">

                            <div class="caption"><i class="icon-cogs"></i>列表</div>

                            <div class="actions">

                                <a href="{{route('admin.post.create')}}" class="btn green"><i class="icon-plus"></i>新增</a>

                                <a href="#" class="btn yellow"><i class="icon-print"></i> 导出</a>

                            </div>

                        </div>

                        <div class="portlet-body">

                            <table class="table table-striped table-bordered table-hover" id="datatable">

                                <thead>

                                <tr>

                                    <th style="width:8px;"><input type="checkbox" class="group-checkable" data-set="#datatable .checkboxes" /></th>

                                    <th>文章标题</th>

                                    <th class="hidden-480">所属分类</th>

                                    <th class="hidden-480">状态</th>

                                    <th >编辑</th>

                                </tr>

                                </thead>

                                <tbody>

                                @foreach($posts as $post)

                                    <tr class="odd gradeX">

                                        <td><input type="checkbox" class="checkboxes" value="1" /></td>

                                        <td>{{$post->title}}</td>

                                        <td class="hidden-480">{{$post->category->id}}</td>

                                        <td class="hidden-480" ><span class="label label-success">私有</span></td>

                                        <td>
                                            <span class="icon-eye-open" style="margin:10px,10px"> 查看 </span>

                                            <span class="icon-edit"  style="margin-left: 10px"> 编辑 </span>

                                            <span class="icon-trash" style="margin-left: 10px" > 删除 </span>

                                        </td>

                                    </tr>

                                @endforeach

                                </tbody>

                            </table>

                        </div>

                    </div>

                    <!-- END EXAMPLE TABLE PORTLET-->

                </div>

            </div>

            <!-- END PAGE CONTENT-->

        </div>

        <!-- END PAGE CONTAINER-->

    </div>

    <!-- END PAGE -->


@endsection

@section('page-js')

    <script type="text/javascript" src="{{asset('admin/js/select2.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('admin/js/jquery.dataTables.js')}}"></script>

    <script type="text/javascript" src="{{asset('admin/js/DT_bootstrap.js')}}"></script>

    <script src="{{asset('admin/js/table-managed.js')}}"></script>

    <script>

        jQuery(document).ready(function() {

         TableManaged.init();

        });

    </script>


@endsection