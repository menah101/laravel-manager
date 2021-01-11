@include('admin.layouts.header')

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    @include('admin.layouts.topbar')
    <!-- Top Bar End -->

    <!-- ========== Left Sidebar Start ========== -->
    @include('admin.layouts.sidebar')
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        @yield('content')
        <!-- content -->


        @include('admin.layouts.footer')
