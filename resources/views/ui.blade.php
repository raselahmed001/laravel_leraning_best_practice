<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Projects | Velzon - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />

    @include('ui.head')
    @stack('style')

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('ui.navbar')

        <!-- removeNotificationModal -->

        <!-- ========== App Menu ========== -->

        {{-- @if (!\Illuminate\Support\Facades\Auth::guest())
        @if (\Illuminate\Support\Facades\Auth::user()->user_type == \App\Enums\RoleStatus::ADMIN) --}}

        @include('ui.sidebar')

        {{-- @elseif(\Illuminate\Support\Facades\Auth::user()->user_type == \App\Enums\RoleStatus::CLIENT)
        @include('ui.user-sidebar')
        @endif
        @endif --}}

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            @yield('content')
                        </div>
                    </div>
                    <!-- end page title -->
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            @include('ui.footer')
        </div>
    </div>
    <!-- end main content-->

    <!-- END layout-wrapper -->

    <!--end theme settings-->
    @include('ui.script')
    @stack('script')
</body>

</html>
