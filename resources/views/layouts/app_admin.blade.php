<li class="nav-item">
    <a class="nav-link" href="{{ route('client.index') }}">{{ __('Clients') }}</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('vrm.export') }}">{{ __('Export VRM') }}</a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ route('coupon.index') }}">{{ __('QR Code') }}</a>
</li>

<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        {{ __('Tickets') }} @if ($notification->count() > 0)
            <span class="badge bg-danger">{{ $notification->count() }}</span>
        @endif
    </a>

    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">
            {{ __('My Tickets') }}
        </a>
        <a class="dropdown-item" href="{{ route('admin-tickets.index') }}">
            {{ __('All Tickets') }} @if ($notification->count() > 0)
                <span class="badge bg-danger">{{ $notification->count() }}</span>
            @endif
        </a>
    </div>
</li>

<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        {{ __('Settings') }}
    </a>

    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('topics.index') }}">
            {{ __('Topics') }}
        </a>
        <a class="dropdown-item" href="{{ route('subtopics.index') }}">
            {{ __('Subtopics') }}
        </a>
    </div>
</li>
