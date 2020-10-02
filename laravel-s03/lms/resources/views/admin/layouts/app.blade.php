<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>LMS | @yield('title')</title>

    @include('layouts.common.css_links')

</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        @include('layouts.common.header')

        @yield('content')

        @include('layouts.common.footer')
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    @include('layouts.common.js_links')
</body>
</html>
