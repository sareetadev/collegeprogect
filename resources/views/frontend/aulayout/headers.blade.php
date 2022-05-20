<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

        <h1 class="logo me-auto me-lg-0" ><img src="{{asset('images/flogo.png')}}" ><span></span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
       <!--<a href="index.html" class="logo me-auto me-lg-0"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto" href="#services">Services</a></li>
                <li><a class="nav-link scrollto" href="#team"> </a></li>


                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                @guest
                @else
                    <li class="dropdown"><a href="#"><span>{{ Auth::user()->name }}</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>

                            <li><a onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </ul>
                    </li>

                @endguest

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>

        </nav><!-- .navbar -->

        @guest
            <a href="{{ route('login') }}" class="get-started-btn scrollto">Login Now</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="get-started-btn scrollto">Register </a>
            @endif
        @endguest


    </div>
</header><!-- End Header -->
