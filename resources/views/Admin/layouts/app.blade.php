<!DOCTYPE html>
<head>
@include('admin.layouts._head')
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class="page-header-fixed">

<!-- BEGIN HEADER -->
@include('admin.layouts._header')
@include('admin.layouts._sidebar')

<!-- END HEADER -->


<!-- BEGIN CONTAINER -->
<div class="page-container">

    @section('content')
    @show

</div>



<!-- END CONTAINER -->

<!-- BEGIN FOOTER -->
@include('admin.layouts._footer')


</body>

<!-- END BODY -->

</html>