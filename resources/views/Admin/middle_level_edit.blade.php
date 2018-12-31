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

                        修改中级分类

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

                    <form action="{{route('admin.middlelevel.update',$middlelevel->id)}}"  method="post"  accept-charset="UTF-8" class="form-horizontal">

                        @csrf

                        {{ method_field('PUT') }}

                        <div class="control-group">

                            <label class="control-label">所属高级分类</label>

                            <div class="controls">

                                <select class="span6 m-wrap"  name="high_level_id" data-placeholder="选择合适分类" tabindex="1">
                                    <option value="">选择合适分类</option>
                                    @foreach($highlevels as $highlevel)
                                     <option value="{{$highlevel->id}}"
                                     @if($middlelevel->highlevel->id == $highlevel->id){
                                      selected }
                                     @endif
                                     >{{$highlevel->high_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="control-group">

                            <label class="control-label">中级分类名称</label>

                            <div class="controls">

                                <input type="text" name="middle_name" value="{{$middlelevel->middle_name}}" class=" m-wrap" >

                            </div>

                        </div>

                        <div class="control-group">

                            <label class="control-label">排序</label>

                            <div class="controls">

                                <input type="text" name="sort" value="{{$middlelevel->sort}}" class=" m-wrap" >

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