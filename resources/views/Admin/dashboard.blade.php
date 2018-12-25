@extends('admin.layouts.app')
@section('page-css')

    <!-- BEGIN PAGE LEVEL STYLES -->

    <link href="{{asset('admin/css/jquery.gritter.css')}}" rel="stylesheet" type="text/css"/>

    <link href="{{asset('admin/css/daterangepicker.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('admin/css/fullcalendar.css')}}" rel="stylesheet" type="text/css"/>

    <link href="{{asset('admin/css/jqvmap.css')}}" rel="stylesheet" type="text/css" media="screen" />

    <link href="{{asset('admin/css/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" media="screen"/>

    <!-- END PAGE LEVEL STYLES -->
@endsection

@section('content')

    <div class="page-container">

        <div class="page-content">

            <!-- BEGIN PAGE CONTAINER-->

            <div class="container-fluid">

                <!-- BEGIN PAGE HEADER-->

                <div class="row-fluid">

                    <div class="span12">



                        <!-- BEGIN PAGE TITLE & BREADCRUMB-->

                        <h3 class="page-title">

                            站点概况

                        </h3>

                        <ul class="breadcrumb">

                            <li>

                                <i class="icon-home"></i>

                                <a href="index.html">Home</a>

                                <i class="icon-angle-right"></i>

                            </li>

                            <li><a href="#">Dashboard</a></li>

                            <li class="pull-right no-text-shadow">



                            </li>

                        </ul>

                        <!-- END PAGE TITLE & BREADCRUMB-->

                    </div>

                </div>

                <!-- END PAGE HEADER-->

                <div id="dashboard">

                    <!-- BEGIN DASHBOARD STATS -->

                    <div class="row-fluid">

                        <div class="span3 responsive" data-tablet="span6" data-desktop="span3">

                            <div class="dashboard-stat blue">

                                <div class="visual">

                                    <i class="icon-comments"></i>

                                </div>

                                <div class="details">

                                    <div class="number">

                                        1349

                                    </div>

                                    <div class="desc">

                                        New Feedbacks

                                    </div>

                                </div>

                                <a class="more" href="#">

                                    View more <i class="m-icon-swapright m-icon-white"></i>

                                </a>

                            </div>

                        </div>

                        <div class="span3 responsive" data-tablet="span6" data-desktop="span3">

                            <div class="dashboard-stat green">

                                <div class="visual">

                                    <i class="icon-shopping-cart"></i>

                                </div>

                                <div class="details">

                                    <div class="number">549</div>

                                    <div class="desc">New Orders</div>

                                </div>

                                <a class="more" href="#">

                                    View more <i class="m-icon-swapright m-icon-white"></i>

                                </a>

                            </div>

                        </div>

                        <div class="span3 responsive" data-tablet="span6  fix-offset" data-desktop="span3">

                            <div class="dashboard-stat purple">

                                <div class="visual">

                                    <i class="icon-globe"></i>

                                </div>

                                <div class="details">

                                    <div class="number">+89%</div>

                                    <div class="desc">Brand Popularity</div>

                                </div>

                                <a class="more" href="#">

                                    View more <i class="m-icon-swapright m-icon-white"></i>

                                </a>

                            </div>

                        </div>

                        <div class="span3 responsive" data-tablet="span6" data-desktop="span3">

                            <div class="dashboard-stat yellow">

                                <div class="visual">

                                    <i class="icon-bar-chart"></i>

                                </div>

                                <div class="details">

                                    <div class="number">12,5M$</div>

                                    <div class="desc">Total Profit</div>

                                </div>

                                <a class="more" href="#">

                                    View more <i class="m-icon-swapright m-icon-white"></i>

                                </a>

                            </div>

                        </div>

                    </div>

                    <!-- END DASHBOARD STATS -->



                    <div class="clearfix"></div>

                    <div class="row-fluid">

                        <div class="span6">

                            <div class="portlet box purple">

                                <div class="portlet-title">

                                    <div class="caption"><i class="icon-calendar"></i>General Stats</div>

                                    <div class="actions">

                                        <a href="javascript:;" class="btn yellow easy-pie-chart-reload"><i class="icon-repeat"></i> Reload</a>

                                    </div>

                                </div>

                                <div class="portlet-body">

                                    <div class="row-fluid">

                                        <div class="span4">

                                            <div class="easy-pie-chart">

                                                <div class="number transactions"  data-percent="55"><span>+55</span>%</div>

                                                <a class="title" href="#">Transactions <i class="m-icon-swapright"></i></a>

                                            </div>

                                        </div>

                                        <div class="margin-bottom-10 visible-phone"></div>

                                        <div class="span4">

                                            <div class="easy-pie-chart">

                                                <div class="number visits"  data-percent="85"><span>+85</span>%</div>

                                                <a class="title" href="#">New Visits <i class="m-icon-swapright"></i></a>

                                            </div>

                                        </div>

                                        <div class="margin-bottom-10 visible-phone"></div>

                                        <div class="span4">

                                            <div class="easy-pie-chart">

                                                <div class="number bounce"  data-percent="46"><span>-46</span>%</div>

                                                <a class="title" href="#">Bounce <i class="m-icon-swapright"></i></a>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="span6">

                            <div class="portlet box blue">

                                <div class="portlet-title">

                                    <div class="caption"><i class="icon-calendar"></i>Server Stats</div>

                                    <div class="tools">

                                        <a href="" class="collapse"></a>

                                        <a href="#portlet-config" data-toggle="modal" class="config"></a>

                                        <a href="" class="reload"></a>

                                        <a href="" class="remove"></a>

                                    </div>

                                </div>

                                <div class="portlet-body">

                                    <div class="row-fluid">

                                        <div class="span4">

                                            <div class="sparkline-chart">

                                                <div class="number" id="sparkline_bar"></div>

                                                <a class="title" href="#">Network <i class="m-icon-swapright"></i></a>

                                            </div>

                                        </div>

                                        <div class="margin-bottom-10 visible-phone"></div>

                                        <div class="span4">

                                            <div class="sparkline-chart">

                                                <div class="number" id="sparkline_bar2"></div>

                                                <a class="title" href="#">CPU Load <i class="m-icon-swapright"></i></a>

                                            </div>

                                        </div>

                                        <div class="margin-bottom-10 visible-phone"></div>

                                        <div class="span4">

                                            <div class="sparkline-chart">

                                                <div class="number" id="sparkline_line"></div>

                                                <a class="title" href="#">Load Rate <i class="m-icon-swapright"></i></a>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>




                </div>

            </div>

            <!-- END PAGE CONTAINER-->

        </div>

        <!-- END PAGE -->

    </div>
@endsection

@section('page-js')

    <!-- BEGIN PAGE LEVEL PLUGINS -->

    <script src="{{asset('admin/js/jquery.vmap.js')}}" type="text/javascript"></script>

    <script src="{{asset('admin/js/jquery.vmap.russia.js')}}" type="text/javascript"></script>

    <script src="{{asset('admin/js/jquery.vmap.world.js')}}" type="text/javascript"></script>

    <script src="{{asset('admin/js/jquery.vmap.europe.js')}}" type="text/javascript"></script>

    <script src="{{asset('admin/js/jquery.vmap.germany.js')}}" type="text/javascript"></script>

    <script src="{{asset('admin/js/jquery.vmap.usa.js')}}" type="text/javascript"></script>

    <script src="{{asset('admin/js/jquery.vmap.sampledata.js')}}" type="text/javascript"></script>

    <script src="{{asset('admin/js/jquery.flot.js')}}" type="text/javascript"></script>

    <script src="{{asset('admin/js/jquery.flot.resize.js')}}" type="text/javascript"></script>

    <script src="{{asset('admin/js/jquery.pulsate.min.js')}}" type="text/javascript"></script>

    <script src="{{asset('admin/js/date.js')}}" type="text/javascript"></script>

    <script src="{{asset('admin/js/daterangepicker.js')}}" type="text/javascript"></script>

    <script src="{{asset('admin/js/jquery.gritter.js')}}" type="text/javascript"></script>

    <script src="{{asset('admin/js/fullcalendar.min.js')}}" type="text/javascript"></script>

    <script src="{{asset('admin/js/jquery.easy-pie-chart.js')}}" type="text/javascript"></script>

    <script src="{{asset('admin/js/jquery.sparkline.min.js')}}" type="text/javascript"></script>

    <!-- END PAGE LEVEL PLUGINS -->

@endsection