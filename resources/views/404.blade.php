{{-- <!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>404 Error | {{ env('APP_NAME') }}</title>
    @include('ui.head')

</head>

<body>

    <!-- auth-page wrapper -->
    <div class="auth-page-wrapper py-5 d-flex justify-content-center align-items-center min-vh-100">

        <!-- auth-page content -->
        <div class="auth-page-content overflow-hidden p-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="text-center">
                            <img src="{{ asset('/') }}els/images/error400-cover.png" alt="error img"
                                class="img-fluid">
                            <div class="mt-3">
                                <h3 class="text-uppercase">Sorry, Page not Found 😭</h3>
                                <p class="text-muted mb-4">The page you are looking for not available!</p>
                                @guest
                                    <a href="{{ route('login') }}" class="btn btn-success"><i
                                            class="mdi mdi-security me-1"></i>Login</a>
                                @endguest
                                @auth
                                    @if (Auth::check() && Auth::user()->user_type == \App\Enums\RoleStatus::ADMIN)
                                        <a href="{{ route('admin.dashboard') }}" class="btn btn-success"><i
                                                class="mdi mdi-home me-1"></i>Back to home</a>
                                    @else
                                        <a href="{{ route('user.dashboard') }}" class="btn btn-success"><i
                                                class="mdi mdi-home me-1"></i>Back to home</a>
                                    @endif
                                @endauth
                            </div>
                        </div>
                    </div><!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth-page content -->
    </div>
    <!-- end auth-page-wrapper -->

</body>

</html> --}}
