@extends('admin.layouts.app')

@section('title','文章标签列表---')

@section('page-css')

    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/select2_metro.css')}}" />

    <link rel="stylesheet" href="{{asset('admin/css/DT_bootstrap.css')}}" />



@endsection

@section('content')

    <!-- BEGIN PAGE -->


    <div class="page-content">


        <div class="container-fluid">


            <div class="row-fluid">

                <div class="span12">

                    <h3 class="page-title">

                       分类列表

                    </h3>

                </div>

            </div>

            <div class="row-fluid">

                <div class="responsive" >

                    <div class="portlet box purple">

                        <div class="portlet-title">

                            <div class="caption"><i class="icon-cogs"></i>列表</div>

                            <div class="actions">

                                <a href="{{route('admin.category.create')}}" class="btn green"><i class="icon-plus"></i>新增</a>

                            </div>

                        </div>

                        <div class="portlet-body">

                            <table class="table table-striped table-bordered table-hover" id="datatable">

                                <thead>

                                <tr>

                                    <th style="width:8px;">

                                        <input type="checkbox"   id="check-all" class="group-checkable" data-set="#datatable .checkboxes" />

                                    </th>

                                    <th>标签名称</th>

                                    <th >查看</th>

                                    <th >编辑</th>

                                    <th >删除</th>

                                </tr>

                                </thead>

                                <tbody>

                                @foreach( $categories as $category)

                                <tr class="odd gradeX">

                                    <td><input type="checkbox"  name="ids[]"  value="{{ $category->id}}" class="checkboxes" value="1" /></td>

                                    <td>{{$category->title}}</td>

                                    <td>

                                        <a href="#" class="btn mini green"><i class="icon-eye-open"></i> 查看</a>

                                    </td>

                                    <td>

                                        <a href="{{route('admin.category.edit',$category->id)}}"><span class="btn mini purple"  style="margin-left: 10px"><i class="icon-edit"></i> 编辑 </span></a>

                                    </td>

                                    <td>

                                       <a href="javascript:;" onclick="delLink({{$category->id}})"  class="btn mini black""><i class="fa fa-trash-o"></i>删除 </a>

                                        <form id="delete-form-{{ $category->id }}" action="{{ route('admin.category.destroy',$category->id) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>

                                    </td>

                                </tr>

                                @endforeach

                                </tbody>

                            </table>

                        </div>

                    </div>



                </div>

            </div>


        </div>



    </div>




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

    <script src="{{asset('alert/jquery-confirm.min.js')}}"></script>

    <link rel="stylesheet" href="{{asset('alert/jquery-confirm.min.css')}}" />

    <script type="text/javascript">

        function delLink(id) {
            $.confirm({
                //设置icon及其大小 ，大小可为fa-lg (33% 递增), fa-2x, fa-3x, fa-4x, 或 fa-5x
                icon: 'fa fa-exclamation-triangle fa-2x',
                closeIcon: true,
                //设置对话框的宽度
                boxWidth: '40%',
                useBootstrap: false,
                //设置对话框的样式 ，可以为light\dark\modern\'material'\'bootstrap\supervan'
                theme: 'modern',
                title: '确定删除所选信息?',
                content: '一旦删将无法恢复',
                autoClose: '取消|5000', //必须与下面的取消相同
                type: 'red',
                buttons: {
                    删除: {
                        text: '删除',
                        btnClass: 'btn-red', //按钮颜色
                        action: function () {
                            event.preventDefault();
                            document.getElementById('delete-form-'+id).submit();
                        }
                    },
                    取消: function () {
                        //点击取消按钮后显示
                       // $.alert('action is canceled');
                    }
                }
            });

        }
    </script>
@endsection