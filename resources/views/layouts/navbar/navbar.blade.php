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
        <h3 class="ms-3 text-success">Bukit Tangkeban</h3>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active text-success" aria-current="page" href="#">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="/tiket">Tiket</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link " href="#">Tentang</a>
                            </li>
                        </ul>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <form class="d-flex me-3" role="search">
                            <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Search">
                            <button class="btn btn-success" type="submit"><img width="15" height="15"
                                    src="https://img.icons8.com/ios/15/search--v1.png" alt="search--v1" /></button>
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle rounded-start-pill text-light"
                                    href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" v-pre>
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<!-- Footer -->
<footer class="text-center text-lg-start text-white" style="background-color: #0f4d33">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
        <!-- Section: Links -->
        <section class="">
            <!--Grid row-->
            <div class="row">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">
                        Bukit Tangkeban
                    </h6>
                    <p>
                        Here you can use rows and columns to organize your footer
                        content. Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit.
                    </p>
                </div>
                <!-- Grid column -->

                <hr class="w-100 clearfix d-md-none" />

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Halaman</h6>
                    <p>
                        <a class="text-white">Beranda</a>
                    </p>
                    <p>
                        <a class="text-white">Tiket</a>
                    </p>
                    <p>
                        <a class="text-white">Tentang</a>
                    </p>

                </div>
                <!-- Grid column -->

                <hr class="w-100 clearfix d-md-none" />

                <!-- Grid column -->
                <hr class="w-100 clearfix d-md-none" />

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                    <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                    <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
                    <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                    <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>

                    <!-- Twitter -->
                    <a href="#"><img width="32" height="32" src="https://img.icons8.com/fluency/32/twitter.png" alt="twitter"/></a>

                    <!-- Youtube -->
                    <a href="#"><img width="32" height="32" src="https://img.icons8.com/color/32/youtube-play.png" alt="youtube-play"/></a>

                    <!-- Facebook -->
                    <a href="#"><img width="32" height="32" src="https://img.icons8.com/color/32/facebook.png" alt="facebook"/></a>

                    <!-- Instagram -->
                    <a href="#"><img width="32" height="32" src="https://img.icons8.com/3d-fluency/32/instagram-new.png" alt="instagram-new"/></a>

                </div>
            </div>
            <!--Grid row-->
        </section>
        <!-- Section: Links -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2020 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->

</html>
