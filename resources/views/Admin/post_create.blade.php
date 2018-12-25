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

                            <form action="#" class="form-horizontal">

                                <h3 class="form-section">基本信息</h3>

                                <div class="row-fluid">

                                    <div class="span6 ">

                                        <div class="control-group">

                                            <label class="control-label">文章标题</label>

                                            <div class="controls">

                                                <input type="text" class="m-wrap span12" placeholder="Chee Kin">

                                            </div>

                                        </div>

                                    </div>

                                    <!--/span-->



                                </div>

                                <!--/row-->

                                <div class="row-fluid">

                                    <div class="span6 ">

                                        <div class="control-group">

                                            <label class="control-label">关键字</label>

                                            <div class="controls">

                                                <select class="m-wrap span12">

                                                    <option value="">Male</option>

                                                    <option value="">Female</option>

                                                </select>

                                            </div>

                                        </div>

                                    </div>

                                    <!--/span-->

                                </div>

                                <!--/row-->

                                <div class="row-fluid">

                                    <div class="span6 ">

                                        <div class="control-group">

                                            <label class="control-label">关键字</label>

                                            <div class="controls">

                                                <select class="m-wrap span12">

                                                    <option value="">Male</option>

                                                    <option value="">Female</option>

                                                </select>

                                            </div>

                                        </div>

                                    </div>

                                    <!--/span-->

                                    <div class="span6 ">

                                        <div class="control-group">

                                            <label class="control-label">状态</label>

                                            <div class="controls">

                                                <label class="radio">

                                                    <div class="radio"><span class="checked"><input type="radio" name="optionsRadios2" value="option1"></span></div>

                                                    Free

                                                </label>

                                                <label class="radio">

                                                    <div class="radio"><span class=""><input type="radio" name="optionsRadios2" value="option2" checked=""></span></div>

                                                    Professional

                                                </label>

                                            </div>

                                        </div>

                                    </div>

                                    <!--/span-->

                                </div>

                                <h3 class="form-section">文章内容</h3>

                                <!--/row-->

                                <div class="row-fluid">

                                    <div class="span12 ">

                                        <div class="control-group">

                                            <label class="control-label">Street</label>

                                            <div class="controls">
                                                <textarea name="editor1" id="editor1" rows="20" cols="60">
                                                    文章内容不能为空
                                                </textarea>
                                            </div>

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
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace( 'editor1' );
    </script>

@endsection