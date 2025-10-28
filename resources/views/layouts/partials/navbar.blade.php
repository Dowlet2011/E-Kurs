<nav class="navbar navbar-expand-lg navbar-dark bg-success shadow">
    <div class="container-lg">
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">E-{{ __('app.course') }}</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="{{ route('courses.index') }}" class="nav-link">{{__('app.courses')}}</a></li>
                <li class="nav-item"><a href="{{route('profile')}}" class="nav-link">{{__('app.profile')}}</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="langDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ strtoupper(app()->getLocale()) }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="langDropdown">
                        <li>
                            <a class="dropdown-item" href="{{ route('locale', 'en') }}">English</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('locale', 'tm') }}">Türkmen</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item"><a href="{{ route('logout') }}" class="nav-link text-light">{{ __('app.logout') }}</a></li>
            </ul>
        </div>
    </div>
</nav>