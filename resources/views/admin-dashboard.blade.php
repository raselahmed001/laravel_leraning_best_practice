@extends('ui')

@section('title', 'Admin Dashboard')

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">dashboard</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">dashboard</a></li>
                        <li class="breadcrumb-item active">reports</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row project-wrapper">
        <div class="col-12">
            <div class="row">
                <div class="col-xl-4">
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-soft-primary text-primary rounded-2 fs-2">
                                        <i data-feather="briefcase" class="text-primary"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 overflow-hidden ms-3">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-3">
                                        {{ __('general.active_valid_permits') }}</p>
                                    <div class="d-flex align-items-center mb-3">
                                        {{-- <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value"
                                                data-target="{{ $permit ?? '' }}">0</span></h4> --}}
                                    </div>
                                    <p class="text-muted text-truncate mb-0">
                                        {{ __('general.Active Valid Permits Created in
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    this month') }}
                                    </p>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div>
                </div><!-- end col -->

                <div class="col-xl-4">
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-soft-warning text-warning rounded-2 fs-2">
                                        <i data-feather="clock" class="text-warning"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <p class="text-uppercase fw-medium text-muted mb-3">{{ __('general.expire_permits') }}
                                    </p>
                                    {{-- <div class="d-flex align-items-center mb-3">
                                        <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value"
                                                data-target="{{ $expired }}">0</span></h4>
                                    </div>
                                    <p class="text-muted mb-0">{{ __('general.Expired in this month') }}</p>
                                </div> --}}
                                </div>
                            </div><!-- end card body -->
                        </div>
                    </div><!-- end col -->
                    <div class="col-xl-4">
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-soft-info text-info rounded-2 fs-2">
                                            <i data-feather="clock" class="text-info"></i>
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden ms-3">
                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-3">
                                            {{ __('general.total_clients') }}</p>
                                        <div class="d-flex align-items-center mb-3">
                                            {{-- <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value"
                                                    data-target="{{ $usersCount }}">{{ $usersCount }}</span></h4> --}}
                                        </div>
                                        <p class="text-muted text-truncate mb-0">
                                            {{ __('general.Clients registrations in this
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                system') }}
                                        </p>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end col -->
        </div><!-- end row -->


        {{-- <div class="row"> --}}
        {{-- <div class="col-xl-12"> --}}
        {{-- <div class="card"> --}}
        {{-- <div class="card-header"> --}}
        {{-- <h4 class="card-title mb-0">User Chart</h4> --}}
        {{-- </div> --}}
        {{-- <div class="card-body"> --}}
        {{-- <canvas id="barChart" class="chartjs-chart"
                    data-colors='["--vz-primary-rgb, 0.2", "--vz-primary", "--vz-success-rgb, 0.2", "--vz-success"]'></canvas> --}}
        {{-- </div> --}}
        {{-- </div> --}}
        {{-- </div> <!-- end col --> --}}
        {{-- </div> <!-- end row --> --}}
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">{{ __('general.Permit Chart') }}</h4>
                    </div>
                    <div class="card-body">
                        <canvas id="permitChart" class="chartjs-chart"
                            data-colors='["--vz-primary-rgb, 0.2", "--vz-primary", "--vz-success-rgb, 0.2", "--vz-success"]'></canvas>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    @endsection

    {{-- @push('script')
        <!-- Chart JS -->
        <script src="{{ asset('/') }}els/libs/chart.js/chart.min.js"></script>

        <!-- chartjs init -->
        <script src="{{ asset('/') }}els/js/pages/chartjs.init.js"></script> --}}

    {{-- <script>
            $(function() {
                var datas = <?php echo json_encode($permitExpire); ?>;
                var barCanvas = $("#permitChart");
                var months = @json(__('general.months'));
                var barChart = new Chart(barCanvas, {
                    type: 'bar',
                    data: {
                        // labels: datas.months,
                        // labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                        labels: Object.values(months),
                        datasets: [{
                            label: "{{ __('general.Permit') }}",
                            data: Object.values(datas).map(item => item.issued),
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                        }, {
                            label: "{{ __('general.Expired') }}",
                            data: Object.values(datas).map(item => item.expired),
                            backgroundColor: 'rgba(255, 99, 132, 0.2)',
                            borderColor: 'rgba(255, 99, 132, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    }
                });
            })
        </script>
    @endpush --}}
