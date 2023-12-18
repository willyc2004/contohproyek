<nav class="navbar navbar-expand-lg" style="background-color: #000;">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">


                <li class="nav-item">
                    <a class="nav-link {{ $pagetitle == 'Home' ? 'active' : '' }}" aria-current="page" href="/"
                        style="color: #fff; font-size: 18px; font-weight: bold;">Welcome</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $pagetitle == 'About Us' ? 'active' : '' }}" href="/tentangkita"
                        style="color: #fff; font-size: 18px; font-weight: bold;">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $pagetitle == 'Contact' ? 'active' : '' }}" href="/kontakkita"
                        style="color: #fff; font-size: 18px; font-weight: bold;">Contact Us</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ $pagetitle == 'AFL1' ? 'active' : '' }}" href="/menu"
                        style="color: #fff; font-size: 18px; font-weight: bold;">AFL1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $pagetitle == 'My Project' ? 'active' : '' }}" href="/project"
                        style="color: #fff; font-size: 18px; font-weight: bold;">Project</a>
                </li>

                @auth
                    <li class="nav-item">
                        <a class="nav-link {{ $pagetitle == 'Writer' ? 'active' : '' }}" href="/writer"
                            style="color: #fff; font-size: 18px; font-weight: bold;">Writer</a>
                    </li>

                    @if (Auth::user()->isEditor())
                        <li class="nav-item">
                            <a class="nav-link {{ $pagetitle == 'Shop' ? 'active' : '' }}" href="{{ route('editor.shop') }}"
                                style="color: #fff; font-size: 18px; font-weight: bold;">Shop</a>
                        </li>
                    @endif

                    @if (Auth::user()->isAdmin())
                        <li class="nav-item">
                            <a class="nav-link {{ $pagetitle == 'Sales' ? 'active' : '' }}" href="{{ route('admin.sales') }}"
                                style="color: #fff; font-size: 18px; font-weight: bold;">Sales</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $pagetitle == 'Shop' ? 'active' : '' }}" href="{{ route('admin.shop.index') }}"
                                style="color: #fff; font-size: 18px; font-weight: bold;">Shop</a>
                        </li>
                    @endif

                @endauth


            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}" style="color: #fff;">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}"
                                style="color: #fff;">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" style="color: #fff;"
                            role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
