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

                        标签列表

                    </h3>

                </div>

            </div>

            <div class="row-fluid">

                <div class="responsive" >

                    <div class="portlet box purple">

                        <div class="portlet-title">

                            <div class="caption"><i class="icon-cogs"></i>列表</div>

                            <div class="actions">
                                <a href="{{route('admin.tag.create')}}" class="btn green"><i class="icon-plus"></i>新增</a>

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

                                @foreach( $tags as $tag)

                                <tr class="odd gradeX">

                                    <td><input type="checkbox"  name="ids[]"  value="{{ $tag->id}}" class="checkboxes" value="1" /></td>

                                    <td>{{$tag->title}}</td>

                                    <td>

                                        <a href="#" class="btn mini green"><i class="icon-eye-open"></i> 查看</a>

                                    </td>

                                    <td>

                                        <a href="{{route('admin.tag.edit',$tag->id)}}"><span class="btn mini purple"  style="margin-left: 10px"><i class="icon-edit"></i> 编辑 </span></a>

                                    </td>

                                    <td>

                                       <a href="javascript:;" onclick="delLink({{$tag->id}})"  class="btn mini black""><i class="fa fa-trash-o"></i>删除 </a>


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

    <script src="{{ asset('layer/layer.js') }}"></script>

    <script type="text/javascript">

        function delLink(id) {
            layer.confirm('您确定要删除信息吗？', {
                btn: ['确定','取消'] //按钮
            }, function(){
                $.post("{{url('admin/tag/')}}/"+id,{'_method':'delete','_token':"{{csrf_token()}}"},function (data) {

                    if(data.status==0){

                        location.href = location.href;


                        layer.msg(data.msg, {icon: 6});

                    }else{

                        layer.msg(data.msg, {icon: 5});

                    }
                });
            }, function(){
            });
        }
    </script>


@endsection