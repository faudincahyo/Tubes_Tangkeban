@extends('layouts.navbar.navbar')
@section('content')
    <h3 class="text-center mb-3">Pesan Tiket Anda</h3>
    <div class="containerm d-flex justify-content-center">
        <div class="card">
            <div class="card-body">
                <div style="border-bottom: 1px solid #000;">
                    <div class="card mb-3">
                        <div class="card-body">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control mb-2">
                            <label for="telp">Nomor Telepon</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="fw-bold">Tiket Masuk {{ $data->title }}</p>
                            <p class="fw-bold">Wisata Bukit Tangkeban dibuka setiap hari (Senin - Minggu), 07.00-17.00 WIB</p>
                            <label for="datepicker">Pilih Jadwal</label>
                            <input type="date" class="form-control mb-2" id="datepicker" name="datepicker"
                                onchange="previewDate(event)" required>
                            <label for="time">Pilih Jam</label>
                            <input type="time" class="form-control mb-2" onchange="previewTime()">

                            <p>Syarat dan Ketentuan Tiket</p>
                            <p>Eticket hanya berlaku pada tanggal kunjungan yang dipilih (tidak dapat digunakan pada
                                tanggal lain).</p>
                            <p>
                            <p class="fw-bold text-end">Rp. {{ number_format($data->harga) }},00
                            </p>

                            </p>

                        </div>
                    </div>
                    <p></p>
                </div>
                <div>
                    <p class="fw-bold">SubTotal</p>

                    <p>
                    <h5 class="mb-3">Pilih Banyak Tiket</h5>
                    <div class="input-group w-25">
                        <button class="btn btn-outline-secondary border-0" type="button" id="minusBtn">
                            <i class="fas fa-minus"></i>
                        </button>
                        <input type="number" class="form-control text-center border-0" value="0" id="numberInput" oninput="handleInput(event)">
                        <button class="btn btn-outline-secondary border-0" type="button" id="plusBtn" onclick="calculateSubtotal()">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                    <p class="fw-bold text-end" id="price">
                        Rp 0
                    </p>
                    <button type="button" class="btn btn-outline-primary" style="float: right">Lanjutkan</button>
                    </button>
                    </p>

                </div>
            </div>
        </div>

    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("minusBtn").addEventListener("click", function() {
        var value = parseInt(document.getElementById("numberInput").value);
        if (value > 0) {
          document.getElementById("numberInput").value = value - 1;
          const total = (value-1) * {{ $data->harga }};
          document.getElementById("price").textContent = "Rp " + total.toLocaleString();
        }
      });

      document.getElementById("plusBtn").addEventListener("click", function() {
        var value = parseInt(document.getElementById("numberInput").value);
        document.getElementById("numberInput").value = value + 1;
        const total = (value+1) * {{ $data->harga }};
        document.getElementById("price").textContent = "Rp " + total.toLocaleString();

      });
    });

    function handleInput(event) {
      const inputNumber = parseInt(event.target.value);
      if (!isNaN(inputNumber)) {
        number = inputNumber;
      }else{
        number = 0
      }
      document.getElementById("price").textContent = number;
        const total = number * {{ $data->harga }};
        document.getElementById("price").textContent ="Rp " + total.toLocaleString();
    }
    </script>
@endsection
