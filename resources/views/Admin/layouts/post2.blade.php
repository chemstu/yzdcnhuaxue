@extends('admin.layouts.app')

@section('page-css')
    
    <!-- BEGIN PAGE LEVEL STYLES -->

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

    <!-- END PAGE LEVEL STYLES -->
@endsection

@section('content')

    <!-- BEGIN PAGE -->

    <div class="page-content">

        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

        <div id="portlet-config" class="modal hide">

            <div class="modal-header">

                <button data-dismiss="modal" class="close" type="button"></button>

                <h3>portlet Settings</h3>

            </div>

            <div class="modal-body">

                <p>Here will be a configuration form</p>

            </div>

        </div>

        <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

        <!-- BEGIN PAGE CONTAINER-->

        <div class="container-fluid">

            <!-- BEGIN PAGE HEADER-->

            <div class="row-fluid">

                <div class="span12">

            
                    <!-- BEGIN PAGE TITLE & BREADCRUMB-->

                    <h3 class="page-title">

                        Blank Page <small>blank page</small>

                    </h3>

                    <ul class="breadcrumb">

                        <li>

                            <i class="icon-home"></i>

                            <a href="index.html">Home</a>

                            <i class="icon-angle-right"></i>

                        </li>

                        <li>

                            <a href="#">Layouts</a>

                            <i class="icon-angle-right"></i>

                        </li>

                        <li><a href="#">Blank Page</a></li>

                    </ul>

                    <!-- END PAGE TITLE & BREADCRUMB-->

                </div>

            </div>

            <!-- END PAGE HEADER-->

            <!-- BEGIN PAGE CONTENT-->

            <div class="row-fluid">

                <div class="span12">

                    Blank page content goes here

                </div>

            </div>

            <!-- END PAGE CONTENT-->

        </div>

        <!-- END PAGE CONTAINER-->

    </div>

    <!-- END PAGE -->


@endsection