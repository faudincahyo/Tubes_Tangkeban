<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/style/style.css') }}">
    
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="p-3 w-25" >
                <h4 style="color: #1C6758; font-weight:bolder">BUKIT TANGKEBAN</h4>
                <h4 class="text-success" tyle="font-weight:1px">Bukit Indah Permai</h4>
            </div>
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item {{ Request::is('home') ? 'active': '' }}">
                                <a class="nav-link respon-nav text-success" aria-current="page" href="{{ route('home') }}">Beranda</a>
                            </li>
                            <li class="nav-item {{ Request::is('tiket') ? 'active': '' }}">
                                <a class="nav-link respon-nav text-success" href="/tiket">Tiket</a>
                            </li>

                            <li class="nav-item {{ Request::is('tentang') ? 'active': '' }}">
                                <a class="nav-link respon-nav text-success" href="/tentang">Tentang Kami</a>
                            </li>
                        </ul>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <form class="d-flex me-3" role="search">
                            <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Search">
                            {{-- <button class="btn btn-success" type="submit"><img width="15" height="15"
                                    src="https://img.icons8.com/ios/15/search--v1.png" alt="search--v1" /></button> --}}
                        </form>
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle rounded-start-pill text-dark"
                                    href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" v-pre>
                                    |   {{ Auth::user()->name }}
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<!-- Footer -->
<footer class="text-center text-lg-start text-success">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
        <!-- Section: Links -->
        <section class="">
            <!-- Copyright -->
            <div class="text-center p-3" >
                <h3 style="color: #1C6758; font-weight:bolder">BUKIT TANGKEBAN</h3>
                <h5 class="text-success">Bukit Indah Permai</h5>
            </div>
            <!-- Copyright -->
            <!--Grid row-->
            <div class="row">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <p>
                        <img src="{{ asset('assets/image/LOGO BUKIT TANGKEBAN 1.png') }}" alt="">

                    </p>
                </div>
                <!-- Grid column -->

                <hr class="w-100 clearfix d-md-none" />

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold" style="color: #1C6758;">Layanan Wisata</h6>
                    <p>
                        Camping Ground
                    </p>
                    <p>
                        Homestay
                    </p>
                    <p>
                        ARcafe
                    </p>
                    <p>
                        Tangkeban Park
                    </p>

                </div>
                <!-- Grid column -->

                <hr class="w-100 clearfix d-md-none" />

                <!-- Grid column -->
                <hr class="w-100 clearfix d-md-none" />

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold" style="color: #1C6758;">Tentang Kami</h6>
                    <p>
                        Sejarah Singkat
                    </p>

                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold" style="color: #1C6758;">Kontak Kami</h6>
                    <p>
                        Desa Nyalembeng, <br>
                        Kec. Pulosari, Pemalang,<br>
                        Jawa Tengah, <br>
                        <br>
                        0823 2655 9688
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold" style="color: #1C6758;">Follow us</h6>

                    <!-- Twitter -->
                    <a href="#"><img width="32" height="32"
                            src="https://img.icons8.com/fluency/32/twitter.png" alt="twitter" /></a>

                    <!-- Youtube -->
                    <a href="#"><img width="32" height="32"
                            src="https://img.icons8.com/color/32/youtube-play.png" alt="youtube-play" /></a>

                    <!-- Facebook -->
                    <a href="#"><img width="32" height="32"
                            src="https://img.icons8.com/color/32/facebook.png" alt="facebook" /></a>

                    <!-- Instagram -->
                    <a href="#"><img width="32" height="32"
                            src="https://img.icons8.com/3d-fluency/32/instagram-new.png" alt="instagram-new" /></a>

                </div>
            </div>
            <!--Grid row-->
        </section>
        <!-- Section: Links -->
    </div>
    <!-- Grid container -->


</footer>
<!-- Footer -->

</html>
