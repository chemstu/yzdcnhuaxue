<!-- BEGIN CORE PLUGINS -->
<script src="{{asset('admin/js/jquery-1.10.1.min.js')}}" type="text/javascript"></script>

<script src="{{asset('admin/js/jquery-migrate-1.2.1.min.js')}}" type="text/javascript"></script>

<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js')}} before bootstrap.min.js')}} to fix bootstrap tooltip conflict with jquery ui tooltip -->

<script src="{{asset('admin/js/jquery-ui-1.10.1.custom.min.js')}}" type="text/javascript"></script>

<script src="{{asset('admin/js/bootstrap.min.js')}}" type="text/javascript"></script>

<script src="{{asset('admin/js/jquery.slimscroll.min.js')}}" type="text/javascript"></script>

<script src="{{asset('admin/js/jquery.blockui.min.js')}}" type="text/javascript"></script>

<script src="{{asset('admin/js/jquery.cookie.min.js')}}" type="text/javascript"></script>

<script src="{{asset('admin/js/jquery.uniform.min.js')}}" type="text/javascript" ></script>

<script src="{{asset('toastr/toastr.min.js')}}"></script>

{!! Toastr::message() !!}

<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->

<script src="{{asset('admin/js/app.js')}}" type="text/javascript"></script>

<script src="{{asset('admin/js/index.js')}}" type="text/javascript"></script>

<!-- END PAGE LEVEL SCRIPTS -->

@section('page-js')

    @show

<script>

    jQuery(document).ready(function() {

        App.init(); // initlayout and core plugins

        Index.init();

        Index.initJQVMAP(); // init index page's custom scripts

        Index.initCalendar(); // init index page's custom scripts

        Index.initCharts(); // init index page's custom scripts

        Index.initChat();

        Index.initMiniCharts();

        Index.initDashboardDaterange();

        Index.initIntro();

    });

</script>