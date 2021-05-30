<header id="header" id="home">
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
            <nav class="navbar navbar-dark">
                <a class="navbar-brand" href="/">Adoptme</a>
            </nav>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    @auth
                    <li><a href="#daftarHewan">Adopsi </a></li>

                    <li><a href="{{route('user.create')}}">Donasi </a></li>
                    @endauth
                    {{-- <li><a href="#footer">Hubungi Kami</a></li> --}}
                    <li><a href="#footer">Tentang Kami</a></li>

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
                        @if(Auth::user()->role == 'admin')
                        <div class="d-flex">
                            <form class="form-inline" action="{{route('admin.index')}}" method="GET">
                                @csrf
                                <button style="margin-top: -7px; color: white" class="btn btn-login btn-navbar-right" type="submit">
                                    Admin
                                </button>
                            </form>
                        @endif
                            <button style="margin-top: -7px; color: white" class="btn" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                logout({{Auth::user()->name}})
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
