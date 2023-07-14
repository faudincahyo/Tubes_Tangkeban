@extends('layouts.admin.admin')
@section('title')
    Tambah Tempat Wisata Baru
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>@yield('title')</h4>
                </div>
                <div class="card-body">
                    <form class="form" action="{{ route('wisata.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-5">
                                <img src="#" id="preview" class="img-fluid shadow-sm" width="200"
                                    style="border-radius: 14px;" alt="Upload Image">
                                <div class="mt-3">
                                    <div class="alert alert-warning d-flex align-items-center" role="alert">
                                        <div>
                                            Gambar hanya JPG dan PNG serta Maks Size 2 MB
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="mb-3">
                                    <label class="form-label">Nama Tempat Wisata</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                        name="title" value="{{ old('title') }}" autocomplete="off">
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Masukan Harga Masuk</label>
                                    <input type="number" class="form-control @error('harga') is-invalid @enderror"
                                        name="harga" value="{{ old('harga') }}" autocomplete="off">
                                    @error('harga')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Masukan Thumbnail Tempat Wisata</label>
                                    <input type="file" class="form-control @error('image') is-invalid @enderror"
                                        name="image" autocomplete="off" accept="image/*" onchange="previewImage(event)">
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="summernote" class="form-label">Deskripsi Wisata</label>
                            <textarea class="form-control @error('desc') is-invalid @enderror" id="summernote" name="desc" rows="3">{!! old('desc') !!}</textarea>
                            @error('desc')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Kirim</button>
                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/extensions/filepond/filepond.css ') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/extensions/filepond-plugin-image-preview/filepond-plugin-image-preview.css ') }}">
    <link rel="stylesheet" href="{{ asset('assets/extensions/toastify-js/src/toastify.css ') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pages/filepond.css ') }}">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endsection

@section('scripts')
    <script src="{{ asset('assets/extensions/filepond/filepond.js') }}"></script>
    <script src="{{ asset('assets/extensions/toastify-js/src/toastify.js') }}"></script>
    <script src="{{ asset('assets/js/pages/filepond.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        $('#summernote').summernote({
            placeholder: 'Masukan Deskripsi lengkap produk',
            tabsize: 2,
            height: 120,
            toolbar: [
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link']],
                ['view', ['codeview']]
            ]
        });

        function previewImage(event){
            var input = event.target;
            if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
            var previewElement = document.getElementById('preview');
            previewElement.style.display = 'block';
            previewElement.setAttribute('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
        }
    </script>
@endsection