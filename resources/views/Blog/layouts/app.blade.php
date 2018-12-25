<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<!--app()->getLocale() 获取的是 config/app.php 中的 locale 选项-->
<head>
    @include('blog.layouts._head')
</head>
<body>

<!-- Page Header -->
    @include('blog.layouts._header')
<!-- Main Content -->
    @section('content')
        @show
<!-- Footer -->
    @include('blog.layouts._footer')
</body>
</html>