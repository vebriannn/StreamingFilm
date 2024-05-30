    <header>
        <nav class="navbar navbar-expand-lg bg-rgb  position-fixed w-100 pt-3 pb-3" style="z-index: 999;">
            <div class="container-fluid px-5">
                <a class="navbar-brand d-none" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page"
                                href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('movie') ? 'active' : '' }}"
                                href="{{ route('movie') }}">Movies</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('pricing') ? 'active' : '' }}"
                                href="{{ route('pricing') }}">Pricing</a>
                        </li>

                    </ul>
                    <ul class="navbar-nav ms-auto d-flex align-items-center">
                        @if (!is_null(Auth::user()))
                            <li class="nav-item">
                                <div class="dropdown d-flex">
                                    <p class="m-0 me-2" style="color: white;">Welcome,
                                    </p>
                                    <a class="dropdown-toggle pb-2" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false"
                                        style="border: none; background: transparent !important; text-decoration: none; color: white !important; font-size: 16px; padding:0;">
                                        {{ Auth::user()->name }}
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{route('member.logout')}}"
                                                style="border: none; background: transparent !important; color: #346089 !important; font-size: 16px;">Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="btn" href="{{ route('member.login') }}">Sign In</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </header>
