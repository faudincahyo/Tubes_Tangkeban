@extends('layouts.navbar.navbar')
@section('content')
    <div class="containerm d-flex justify-content-center">
        <div class="card">
            <div class="card-body">
                <div style="border-bottom: 1px solid #000;">
                    <h2>
                        Tiket Masuk Pintu Utama
                    </h2>
                    <p class="card-text">Bukit Tangkeban</p>
                </div>
                <div style="border-bottom: 1px solid #000;">
                    <div class="form-group">
                        <p></p>
                        <label for="datepicker">Pilih</label>
                        <input type="date" class="form-control" id="datepicker" name="datepicker" required>
                    </div>
                    <p class="card-text">Tiket untuk Senin, 8 Mei 2023</p>
                    <div class="card">
                        <div class="card-body">
                            <p class="fw-bold">Tiket Masuk Utama</p>
                            <p>
                                <img src="https://img.icons8.com/?size=1x&id=3160&format=png" alt="">
                                8 Mei’23, 07:00-17:30 WIB
                            </p>
                            <p>Syarat dan Ketentuan Tiket</p>
                            <p>Eticket hanya berlaku pada tanggal kunjungan yang dipilih (tidak dapat digunakan pada
                                tanggal lain).</p>
                            <p>Eticket berlaku untuk 1 x Promo Tiket Bundling</p>
                            <p>
                            <p class="fw-bold text-end">Rp. 15.000
                                <button class="btn btn-primary">
                                    <span class="button-text">Tambah</span>
                                </button>
                            </p>

                            </p>

                        </div>
                    </div>
                    <p></p>
                </div>
                <div style="border-bottom: 1px solid #000;">
                    <p></p>
                    <p class="fw-bold">SubTotal</p>

                    <p>
                    <p class="fw-light">0 Ticket</p>
                    <p class="fw-bold text-end">Rp. 0
                        <button type="button" class="btn btn-secondary" disabled>Pilih Tiket</button>
                        </button>
                    </p>

                    </p>

                </div>
                <p></p>
                <p class="text-center">Metode Pembayaran yang Tersedia : </p>
                <div class="text-center">
                    <img src="https://seeklogo.com/images/Q/quick-response-code-indonesia-standard-qris-logo-F300D5EB32-seeklogo.com.png"
                        class="rounded" alt="...">
                </div>
            </div>
        </div>

    </div>
@endsection
