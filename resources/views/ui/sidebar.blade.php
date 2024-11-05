<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->

        <!-- Light Logo-->
        <a href="{{ url('dashboard') }}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('images/logo_2.jpg') }}" alt="" height="25">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('images/logo-sm-1.png') }}" alt="Logo" class="logo-img w-100"
                    style="max-width: 100px;">

            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ url('dashboard') }}">
                        <a class="nav-link menu-link" href="{{ route('dashboard') }}">
                            <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">dashboard</span>
                        </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#">
                        <a class="nav-link menu-link" href="{{ route('category.index') }}">
                            <i class="ri-honour-line"></i> <span data-key="t-widgets">Manage Categories</span>
                        </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#">
                        {{-- <a class="nav-link menu-link" href="{{ route('vrm.expire_list') }}"> --}}
                        <i class="ri-time-line"></i> <span
                            data-key="t-widgets">{{ trans('sidebar.expire_permits') }}</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#">
                        {{-- <a class="nav-link menu-link" href="{{ route('client.index') }}"> --}}
                        <i class="ri-user-add-line"></i> <span
                            data-key="t-widgets">{{ trans('sidebar.Clients') }}</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#">
                        {{-- <a class="nav-link menu-link" href="{{ route('vrmSinglePage') }}"> --}}
                        <i class="ri-download-cloud-line"></i> <span
                            data-key="t-widgets">{{ trans('sidebar.Export VRM') }}</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#">
                        {{-- <a class="nav-link menu-link" href="{{ route('coupon.index') }}"> --}}
                        <i class="ri-qr-code-line"></i> <span data-key="t-widgets">{{ trans('sidebar.QR Code') }}</span>
                    </a>
                </li>
                <!-- end Dashboard Menu -->

                <!-- end Dashboard Menu -->
                <li class="menu-title"><i class="ri-more-fill"></i> <span
                        data-key="t-components">{{ __('general.support') }}</span></li>
                <?php
                //dd(request()->route()->uri);
                ?>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button"
                        {{-- aria-expanded="{{ request()->route()->uri == 'admin-tickets/{admin_ticket}' || request()->route()->uri == 'ticket/assigned-ticket' || request()->route()->uri == 'admin-tickets' ? 'true' : 'false' }}" --}} aria-controls="sidebarApps">
                        <i class="ri-apps-2-line"></i> <span data-key="t-apps">{{ __('sidebar.tickets') }}
                            {{-- @if ($notification->count() > 0)
                                <span class="badge bg-danger">{{ $notification->count() }}</span>
                            @endif --}}
                        </span>

                    </a>
                    {{-- <div class="collapse menu-dropdown {{ request()->route()->uri == 'admin-tickets/{admin_ticket}' || request()->route()->uri == 'ticket/assigned-ticket' || request()->route()->uri == 'admin-tickets' ? 'show' : '' }}" --}}
                    id="sidebarApps">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            {{-- <a href="#" --}}
                            {{-- <a href="{{ route('ticket.assigned') }}" --}}
                            {{-- class="nav-link {{ request()->route()->uri == 'ticket/assigned-ticket' ? 'active' : '' }}" --}}
                            data-key="t-calendar"> {{ __('general.My_ticket') }} </a>
                        </li>
                        <li class="nav-item">
                            {{-- <a href="#" <a href="{{ route('admin-tickets.index') }}" class="nav-link {{ request()->route()->uri == 'admin-tickets' ? 'active' : '' }}" --}}
                            data-key="t-chat"> {{ __('general.All Tickets') }}
                            {{-- @if ($notification->count() > 0)
                                    <span class="badge bg-danger">{{ $notification->count() }}</span>
                                @endif --}}
                            </a>
                        </li>
                    </ul>
        </div>
        </li>
        <li class="menu-title"><i class="ri-more-fill"></i> <span
                data-key="t-components">{{ __('sidebar.Website
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        Control') }}</span>
        </li>

        <li class="nav-item">
            <a class="nav-link menu-link" href="#sidebarApps1" data-bs-toggle="collapse" role="button"
                aria-expanded="false" aria-controls="sidebarApps1">
                <i class="ri-settings-2-line"></i> <span data-key="t-apps">{{ __('sidebar.Settings') }}</span>
            </a>
            <div class="collapse menu-dropdown" id="sidebarApps1">
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                        <a href="#" class="nav-link" data-key="t-calendar">
                            {{-- <a href="{{ route('topics.index') }}" class="nav-link" data-key="t-calendar"> --}}
                            {{ __('general.topics') }} </a>
                    </li>
                    <li class="nav-item">
                        {{-- <a href="{{ route('subtopics.index') }}" class="nav-link" data-key="t-chat"> --}}
                        {{ __('general.sub_topic') }} </a>
                    </li>
                </ul>
            </div>
        </li>

        </ul>
    </div>
    <!-- Sidebar -->
</div>

<div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
