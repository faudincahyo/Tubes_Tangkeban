@extends('layouts.navbar.navbar')

@section('content')
    <div class="container">

        {{-- Caraousel --}}
        <h4 style="font-size: 35px;" class="text-center">Selamat Datang di Wisata Alam Bukit Tangkeban</h4>
        <div id="carouselExampleIndicators" class="carousel slide mb-5">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner ">
                <div class="carousel-item active bg-carousel d-flex justify-content-center align-items-center mb-4">
                    <img src="{{ asset('assets/image/carousel1.png') }}" class="d-block bg-style w-25" alt="...">
                    <img src="{{ asset('assets/image/carousel2.png') }}" class="d-block bg-style w-25 " alt="...">
                    <img src="{{ asset('assets/image/carousel3.png') }}" class="d-block bg-style w-25" alt="...">

                </div>
                <div class="carousel-item bg-carousel">
                </div>
                <div class="carousel-item bg-carousel">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        {{-- Konten --}}
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
            <div class="col">
                <div class="card border-0" style="background: rgb(199, 235, 199)">
                    <img src="{{ asset('assets/image/bg-carousel.png') }}" class="card-img-top">
                    <h5>Judul</h5>
                </div>
            </div>
        </div>

        {{-- Sejarah Singkat --}}
        <div class="card mb-3 mt-5
        " style="max-width: 100%;">
            <div class="row g-3">
                <div class="col-md-4">
                    <img src="{{ asset('assets/image/bg-carousel.png') }}" class="rounded-start"
                        style="width: 100%; height: 100%;" alt="Sejarah Bukit Tangkeban">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title fw-bold">Sejarah Singkat Bukit Tangkeban</h3>
                        <p class="card-text">
                            Bukit Tangkeban merupakan salah satu titik tengah Jawa Tengah, yang sering
                            digunakan sebagai tempat belajar mengaji oleh para santri. Untuk itu, ada
                            mushola yang dibangun pada tahun 1994 dan direnovasi pada tahun 2016.
                            Dahulu, Bukit Tangkeban adalah bukit dengan tanaman liar yang merupakan
                            pekarangan beberapa rumah warga, pemuda Desa Nyalembeng kemudian
                            bergerak menjadikan kawasan tersebut sebagai lokasi wisata. Wisata Alam Bukit Tangkeban di
                            bangun pada tahun 2017 yaitu masa perintisan dengan luas lahan 13 hektar berada di perbukitan
                            dan merupakan lahan milik desa.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
