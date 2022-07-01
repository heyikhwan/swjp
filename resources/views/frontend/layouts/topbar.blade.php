<!-- Header -->
<header id="top-page" class="header">

    <!-- Main menu -->
    <div id="mainNav" class="main-menu-area animated">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-12 col-lg-2 d-flex justify-content-between align-items-center">

                    <!-- Logo -->
                    <div class="logo">

                        <a class="navbar-brand navbar-brand1" href="{{ route('home') }}">
                            <img src="{{ asset('frontend/images/logo-white.png') }}" alt="Naxos" data-rjs="2" />
                        </a>

                        <a class="navbar-brand navbar-brand2" href="{{ route('home') }}">
                            <img src="{{ asset('frontend/images/logo.png') }}" alt="Naxos" data-rjs="2" />
                        </a>

                    </div>

                    <!-- Burger menu -->
                    <div class="menu-bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                </div>

                <div class="op-mobile-menu col-lg-10 p-0 d-lg-flex align-items-center justify-content-end">

                    <!-- Mobile menu -->
                    <div class="m-menu-header d-flex justify-content-between align-items-center d-lg-none">

                        <!-- Logo -->
                        <a href="#" class="logo">
                            <img src="{{ asset('frontend/images/logo.png') }}" alt="Naxos" data-rjs="2" />
                        </a>

                        <!-- Close button -->
                        <span class="close-button"></span>

                    </div>

                    <!-- Items -->
                    <ul class="nav-menu d-lg-flex flex-wrap list-unstyled justify-content-center">

                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger active" href="{{ route('home') }}">
                                <span>Home</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#pricing">
                                <span>Pricing</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#features">
                                <span>Features</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#screenshots">
                                <span>Screenshots</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#support">
                                <span>Support</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#contact">
                                <span>Contact</span>
                            </a>
                        </li>

                        @auth

                        <li class="nav-item">
                            <a href="#" class="nav-link js-scroll-trigger">
                                Halo, {{ Auth::user()->name }}!
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('reservasi.index') }}" class="nav-link js-scroll-trigger">
                                <span>Riwayat Reservasi</span>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="nav-link js-scroll-trigger" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Log Out</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                        </li>

                        {{-- <li class="nav-item dropdown no-arrow">
                            <a class="nav-link" href="{{ route('login') }}">
                                <span>Halo, {{ Auth::user()->name }}</span>
                            </a>
                        </li> --}}


                        @else

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">
                                <span>Login</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">
                                <span>Daftar</span>
                            </a>
                        </li>

                        @endauth



                    </ul>

                </div>

            </div>
        </div>
    </div>

</header>
