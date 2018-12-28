@extends('admin.layouts.app')
@section('title','文章分类添加---')
@section('page-css')

@endsection
@section('content')

    <!-- BEGIN PAGE -->

    <div class="page-content">

       <!-- BEGIN PAGE CONTAINER-->

        <div class="container-fluid">

            <!-- BEGIN PAGE HEADER-->

            <div class="row-fluid">

                <div class="span12">

                    <h3 class="page-title">

                        添加初级分类

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

                    <form action="{{route('admin.elementarylevel.store')}}"  method="post"  accept-charset="UTF-8" class="form-horizontal">

                        @csrf

                        <div class="control-group">

                            <label class="control-label">所属高级分类</label>

                            <div class="controls">

                                <select class="span6 m-wrap"  name="high_level"  id="high_level" data-placeholder="选择合适分类" tabindex="1">

                                    <option value="">选择合适分类</option>

                                    @foreach($highlevels as $highlevel)

                                    <option value="{{$highlevel->id}}">{{$highlevel->high_name}}</option>

                                    @endforeach

                                </select>

                                <select class="span6 m-wrap"  id="middle_level" name="middle_level" data-placeholder="选择合适分类" tabindex="1">

                                    <option value="0">选择合适分类</option>

                                </select>

                            </div>

                        </div>
                        <div class="control-group">

                            <label class="control-label">初级分类名称</label>

                            <div class="controls">

                                <input type="text" name="elementary_name" class=" m-wrap" >

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

    <script language="javascript">

        $(document).ready(function (e) {
            //绑定下拉框change事件
            $("#high_level").change(function (e) {
                console.log(e);
                var high_level_id = e.target.value;
                $.get('/admin/json-middles?high_level_id=' + high_level_id, function (data) {
                    console.log(data);
                    if(data !=''){
                        $('#middle_level').show(); //联动为空
                        $('#middle_level').empty();
                        $('#middle_level').append('<option value="0" disable="true" selected="true">===选择合适的分类 ===</option>');
                        //填充查询数据
                        $.each(data, function (index, middlesObj) {
                            $('#middle_level').append('<option value="' + middlesObj.id + '">' + middlesObj.middle_name + '</option>');
                        })
                    }else{
                        $('#middle_level').empty();
                        $('#middle_level').hide();
                    }
                });
            });
        });
    </script>

@endsection