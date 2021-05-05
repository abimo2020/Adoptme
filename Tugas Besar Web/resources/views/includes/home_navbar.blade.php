<header id="header" id="home">
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
            <nav class="navbar navbar-dark">
                <a class="navbar-brand" href="/">Cathub</a>
            </nav>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="/">Home</a></li>
                    <li><a href="#fillDonatesCats">Cats Donate</a></li>
                    <li><a href="#cardCats">Cats</a></li>
                    <li><a href="#contactUs">Contact Us</a></li>
                    <li><a href="#testimonail">About Us</a></li>
                    <li>
                        @guest
                        <!-- Desktop Button -->
                        <form class="form-inline">
                            <button style="margin-top: -7px; color: white" class="btn btn-login btn-navbar-right" type="button"
                                onclick="event.preventDefault(); location.href='{{ url('login')}}';">
                                Login
                            </button>
                        </form>
                        @endguest

                        @auth
                        <!-- Desktop Button -->
                        <div class="d-flex">
                            <form class="form-inline" action="{{ route('admin.dashboard') }}" method="GET">
                                @csrf
                                <button style="margin-top: -7px; color: white" class="btn btn-login btn-navbar-right " type="submit">
                                    Admin
                                </button>
                            </form>
                            <button style="margin-top: -7px; color: white" class="btn" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                log out
                            </button>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                        @endauth
                    </li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header><!-- #header -->
