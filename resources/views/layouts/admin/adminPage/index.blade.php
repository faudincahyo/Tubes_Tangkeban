@extends('layouts.admin.admin')
@section('title')
    Daftar Tempat Wisata
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif

            @if (session('galat'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{ session('galat') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>@yield('title')</h4>
                </div>
                <div class="card-body">
                    <form action="" method="GET">
                        <div class="row g-3 align-items-center">
                            <div class="col-md-6">
                                <label for="cari" class="form-label">Cari Kata Kunci</label>
                                <input type="text" name="cari" class="form-control" autocomplete="off" id="cari">
                            </div>
                            <div class="col-md-3">
                                <div class="mt-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="bi bi-search"></i> Search
                                    </button>
                                    <button onClick="window.location.reload()" class="btn btn-danger">
                                        <i class="bi bi-arrow-clockwise"></i> Reload
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- Table with outer spacing -->
                    <div class="table-responsive">
                        <table class="table table-lg">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>NAMA WISATA</th>
                                    <th>HARGA MASUK</th>
                                    <th>GAMBAR</th>
                                    <th>ACTION</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-bold-500">{{ $item->title }}</td>
                                        <td>Rp. {{ number_format($item->harga) }}</td>
                                        <td class=" w-25"><img src="/img/{{ $item->image }}" alt="" class="w-50 img-fluid " /></td>

                                        <td class="text-bold-500 d-flex">
                                            <a href="{{ route('wisata.edit', $item->id) }}"
                                                class="btn icon btn-primary me-2"><i class="bi bi-pencil"></i></a>
                                            <form action="{{ route('wisata.destroy', $item->id) }}" method="POST">
                                                @csrf @method('DELETE')
                                                <button type="submit" class="btn icon btn-danger"><i
                                                        class="bi bi-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection