<!-- HEADER DESKTOP-->
<header class="header-desktop3 position-fixed w-100 ">
    <div class="container-fluid d-flex justify-content-between">
        <div class="button-navbar">
            <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                aria-controls="offcanvasExample">
                <i class="zmdi zmdi-view-toc zmdi-hc-2x text-white"></i>
            </button>
            <div class="offcanvas offcanvas-start bg-offcanvas" tabindex="-1" id="offcanvasExample"
                aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header pt-3">
                    <div class="account-wrap">
                        <div class="account-item account-item--style2 clearfix js-item-menu d-sm-none d-block">
                            <div class="image">
                                <img src="{{ asset('storage/profile/yn.jpeg') }}" alt="John Doe" />
                            </div>
                            <div class="content">
                                <a class="js-acc-btn text-decoration-none text-white" href="#">Vebrian Dev</a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <img src="{{ asset('storage/profile/yn.jpeg') }}" alt="John Doe" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#" id="href-icon">Vebrian Dev</a>
                                        </h5>
                                        <span class="email">yannsfullstack@example.com</span>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="setting.html">
                                            <i class="zmdi zmdi-settings"></i>Setting</a>
                                    </div>
                                </div>
                                <div class="account-dropdown__footer">
                                    <a href="#">
                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn" data-bs-dismiss="offcanvas" aria-label="Close"
                        style="outline: none;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28px" height="28px" viewBox="0 0 24 24">
                            <g fill="#ffffff">
                                <path
                                    d="M16.34 9.322a1 1 0 1 0-1.364-1.463l-2.926 2.728L9.322 7.66A1 1 0 0 0 7.86 9.024l2.728 2.926l-2.927 2.728a1 1 0 1 0 1.364 1.462l2.926-2.727l2.728 2.926a1 1 0 1 0 1.462-1.363l-2.727-2.926z" />
                                <path fill-rule="evenodd"
                                    d="M1 12C1 5.925 5.925 1 12 1s11 4.925 11 11s-4.925 11-11 11S1 18.075 1 12m11 9a9 9 0 1 1 0-18a9 9 0 0 1 0 18"
                                    clip-rule="evenodd" />
                            </g>
                        </svg>
                    </button>
                </div>
                <div class="offcanvas-body pt-4">
                    <a class="js-arrow w-100 {{ request()->is('admin/dashboard') ? 'active' : '' }}"
                        href="{{ route('admin.dashboard') }}">
                        <i class="bi bi-house-dash"></i> Dashboard
                    </a>
                    <a class="js-arrow w-100 pt-2 {{ request()->is('admin/transaction') ? 'active' : '' }}"
                        href="#">
                        <i class="bi bi-wallet"></i>Transaksi
                    </a>
                    <a class="js-arrow w-100 pt-2 {{ request()->is('admin/movies') ? 'active' : '' }}"
                        href="{{ route('admin.movies') }}">
                        <i class="bi bi-pencil-square"></i> Movies
                    </a>
                </div>
            </div>
        </div>

        <div class="profile-navbar d-none d-sm-block">
            <div class="account-wrap">
                <div class="account-item account-item--style2 clearfix js-item-menu">
                    <div class="image">
                        <img src="{{ asset('storage/profile/yn.jpeg') }}" alt="John Doe" />
                    </div>
                    <div class="content">
                        <a class="js-acc-btn text-decoration-none text-white" href="#">Vebrian Dev</a>
                    </div>
                    <div class="account-dropdown js-dropdown">
                        <div class="info clearfix">
                            <div class="image">
                                <a href="#">
                                    <img src="{{ asset('storage/profile/yn.jpeg') }}" alt="John Doe" />
                                </a>
                            </div>
                            <div class="content">
                                <h5 class="name">
                                    <a href="#" id="href-icon">Vebrian Dev</a>
                                </h5>
                                <span class="email">yannsfullstack@example.com</span>
                            </div>
                        </div>
                        <div class="account-dropdown__body">
                            <div class="account-dropdown__item">
                                <a href="setting.html">
                                    <i class="zmdi zmdi-settings"></i>Setting</a>
                            </div>
                        </div>
                        <div class="account-dropdown__footer">
                            <a href="#">
                                <i class="zmdi zmdi-power"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
