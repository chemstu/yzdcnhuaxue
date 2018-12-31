@extends('admin.layouts.app')

@section('page-css')

    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/bootstrap-fileupload.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/jquery.gritter.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/chosen.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/select2_metro.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/jquery.tagsinput.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/clockface.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/bootstrap-wysihtml5.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/datepicker.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/timepicker.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/colorpicker.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/bootstrap-toggle-buttons.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/daterangepicker.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/datetimepicker.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/multi-select-metro.css')}}" />

    <link href="{{asset('admin/css/bootstrap-modal.css')}}" rel="stylesheet" type="text/css"/>

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

                        添加文章

                    </h3>

               </div>

            </div>

            <!-- END PAGE HEADER-->

            <!-- BEGIN PAGE CONTENT-->

            <div class="row-fluid" >

                <div class="span12">

                    <div class="portlet box green">

                        <div class="portlet-title">

                            <div class="caption"><i class="icon-reorder"></i>文章信息</div>

                            <div class="tools">

                                <a href="javascript:;" class="collapse"></a>

                                <a href="javascript:;" class="reload"></a>

                                <a href="javascript:;" class="remove"></a>

                            </div>

                        </div>

                        <div class="portlet-body form">

                            <!-- BEGIN FORM-->

                            <form action="{{route('admin.post.store')}}"  method="post"
                                  accept-charset="UTF-8" class="form-horizontal"  enctype="multipart/form-data">

                            @csrf

                                <h3 class="form-section">基本信息</h3>

                                <div class="row-fluid">

                                    <div class="span7 ">

                                        <div class="control-group">

                                            <label class="control-label">文章标题</label>

                                            <div class="controls">

                                                <input type="text"  name=" title" class="m-wrap span12" placeholder="标题必填">

                                            </div>

                                        </div>

                                        <div class="control-group">

                                            <label class="control-label">所属分类</label>

                                            <div class="controls">

                                                <select class="m-wrap span12" name="category_id">

                                                    @foreach($categories as  $category)

                                                        <option value="{{$category->id}}">{{$category->title}}</option>

                                                    @endforeach


                                                </select>

                                            </div>

                                        </div>

                                        <div class="control-group">

                                            <label class="control-label">文章标签</label>

                                            <div class="controls">
                                                <select  name="tags"data-placeholder="选择合适的文章标签" class="chosen span12" multiple="multiple" tabindex="6">
                                                        @foreach($tags as  $tag)
                                                        <option value="{{$tag->id}}">{{$tag->title}}</option>
                                                    @endforeach
                                                </select>

                                            </div>

                                        </div>

                                        <div class="control-group">

                                            <label class="control-label">发布状态</label>

                                            <div class="controls">

                                                <label class="radio">

                                                    <input type="radio" name="status" value="0" checked />

                                                    公开
                                                </label>

                                                <label class="radio">

                                                    <input type="radio" name="status" value="0"  />

                                                    私有
                                                </label>



                                            </div>

                                        </div>

                                    </div>

                                    <div class="span5 ">

                                        <div class="control-group">

                                            <label class="control-label">缩略图</label>

                                            <div class="controls">

                                                <div class="fileupload fileupload-new" data-provides="fileupload">

                                                    <div class="fileupload-new thumbnail" style="width: 160px; height:120px;">

                                                        <img src="{{asset('admin/image/AAAAAA&amp;text=no+image')}}" alt="" />

                                                    </div>

                                                    <div class="fileupload-preview fileupload-exists " style="max-width: 160px; max-height: 120px; line-height: 20px;"></div>

                                                    <div>

													<span class="btn btn-file"><span class="fileupload-new">选择图像</span>

													<span class="fileupload-exists">修改</span>

													<input type="file"   name="thumbnail" class="default" /></span>

                                                        <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">删除</a>

                                                    </div>

                                                </div>


                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <h3 class="form-section">文章内容</h3>

                                <div class="row-fluid">

                                    <div class="span12 ">

                                            <div class="controls">
                                                <textarea name="body" id="editor1" rows="20" cols="60">
                                                    文章内容不能为空
                                                </textarea>
                                            </div>



                                    </div>

                                </div>

                                <!--/row-->

                                <div class="form-actions">

                                    <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>

                                    <button type="button" class="btn">Cancel</button>

                                </div>

                            </form>

                            <!-- END FORM-->

                        </div>

                    </div>

                </div>

            </div>

            <!-- END PAGE CONTENT-->

        </div>

        <!-- END PAGE CONTAINER-->

    </div>

    <!-- END PAGE -->


@endsection

@section('page-js')

    <script src="{{asset('ckeditor/ckeditor.js')}}" type="text/javascript" ></script>
    <script>
        CKEDITOR.replace( 'editor1',{
            filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl: '/ckfinder/ckfinder.html?type=Images',
            filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'
                 });
    </script>

    <script src="{{asset('admin/js/jquery-1.10.1.min.js')}}" type="text/javascript"></script>

    <script src="{{asset('admin/js/jquery-migrate-1.2.1.min.js')}}" type="text/javascript"></script>

    <!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js')}} before bootstrap.min.js')}} to fix bootstrap tooltip conflict with jquery ui tooltip -->

    <script src="{{asset('admin/js/jquery-ui-1.10.1.custom.min.js')}}" type="text/javascript"></script>

    <script src="{{asset('admin/js/bootstrap.min.js')}}" type="text/javascript"></script>

    <!--[if lt IE 9]>

    <script src="{{asset('admin/js/excanvas.min.js')}}"></script>

    <script src="{{asset('admin/js/respond.min.js')}}"></script>

    <![endif]-->

    <script src="{{asset('admin/js/jquery.slimscroll.min.js')}}" type="text/javascript"></script>

    <script src="{{asset('admin/js/jquery.blockui.min.js')}}" type="text/javascript"></script>

    <script src="{{asset('admin/js/jquery.cookie.min.js')}}" type="text/javascript"></script>

    <script src="{{asset('admin/js/jquery.uniform.min.js')}}" type="text/javascript" ></script>

    <script type="text/javascript" src="{{asset('admin/js/ckeditor.js')}}"></script>

    <script type="text/javascript" src="{{asset('admin/js/bootstrap-fileupload.js')}}"></script>

    <script type="text/javascript" src="{{asset('admin/js/chosen.jquery.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('admin/js/select2.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('admin/js/wysihtml5-0.3.0.js')}}"></script>

    <script type="text/javascript" src="{{asset('admin/js/bootstrap-wysihtml5.js')}}"></script>

    <script type="text/javascript" src="{{asset('admin/js/jquery.tagsinput.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('admin/js/jquery.toggle.buttons.js')}}"></script>

    <script type="text/javascript" src="{{asset('admin/js/bootstrap-datepicker.js')}}"></script>

    <script type="text/javascript" src="{{asset('admin/js/bootstrap-datetimepicker.js')}}"></script>

    <script type="text/javascript" src="{{asset('admin/js/clockface.js')}}"></script>

    <script type="text/javascript" src="{{asset('admin/js/date.js')}}"></script>

    <script type="text/javascript" src="{{asset('admin/js/daterangepicker.js')}}"></script>

    <script type="text/javascript" src="{{asset('admin/js/bootstrap-colorpicker.js')}}"></script>

    <script type="text/javascript" src="{{asset('admin/js/bootstrap-timepicker.js')}}"></script>

    <script type="text/javascript" src="{{asset('admin/js/jquery.inputmask.bundle.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('admin/js/jquery.input-ip-address-control-1.0.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('admin/js/jquery.multi-select.js')}}"></script>

    <script src="{{asset('admin/js/bootstrap-modal.js')}}" type="text/javascript" ></script>

    <script src="{{asset('admin/js/bootstrap-modalmanager.js')}}" type="text/javascript" ></script>

@endsection