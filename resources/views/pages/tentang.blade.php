@extends('layouts.navbar.navbar')
@section('content')
    <div class="container">
        <div class="row mb-5" style="height: 50px;">
            <div class="col-md-12 d-flex text-right">
                <div>
                    <img src="{{ asset('assets/image/location_on.png') }}" width="30" alt="">
                </div>
                <div class="ms-4">
                    <h4 class="fw-bold">Lokasi</h4>
                    <p>Jl. Bukit Tangkeban, Sawah Dan Kebun, Nyalembeng, <br> 
                        Kec. Pulosari, Kabupaten Pemalang, Jawa Tengah 52355.</p>
                </div>
            </div>
        </div>
        <div class="row" style="height: 50px; margin-bottom:6rem;">
            <div class="col-md-12 d-flex text-right">
                <div>
                    <img src="{{ asset('assets/image/schedule.png') }}" width="30" alt="">
                </div>
                <div class="ms-4">
                    <h4 class="fw-bold">Jam Buka</h4>
                    <p>Jam Buka Pintu Masuk : <br>
                        Setiap Hari ( Senin s.d Minggu ) <br>
                        07:00 s.d 17:00 WIB
                        <br>
                        Camping Ground :
                        16:00 s.d 23:30 WIB</p>
                </div>
            </div>
        </div>

        <div class="row mb-5 mt-5" style="height: 50px;">
            <div class="col-md-12 d-flex text-right">
                <div>
                    <img src="{{ asset('assets/image/email.png') }}" width="30" alt="">
                </div>
                <div class="ms-4">
                    <h4 class="fw-bold">Email</h4>
                    <a href=""><p>tangkebanpemalang@gmail.com</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
