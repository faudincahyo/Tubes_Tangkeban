@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0">
                <div class="card-header border-0 text-center fw-bold" style="font-size: 35px;">{{ __('Daftar AKun') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <span class="mb-3">
                            <h6 class="text-success text-center">Daftarkan data diri Anda agar  dapat mengakses akun pribadi Anda.</h6>
                        </span>

                        <div class="row mb-3 justify-content-center align-items-center">                            
                            <div class="col-md-8">
                                <label for="name" class="col-md-4 col-form-label">{{ __('Nama') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center align-items-center">                            
                            <div class="col-md-8">
                                <label for="email" class="col-md-4 col-form-label">{{ __('Email') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center align-items-center">                            
                            <div class="col-md-8">
                                <label for="telp" class="col-md-4 col-form-label">{{ __('No. Telp') }}</label>
                                <input id="telp" type="text" class="form-control @error('telp') is-invalid @enderror" name="telp" value="{{ old('telp') }}" required autocomplete="telp">

                                @error('telp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center align-items-center">                            
                            <div class="col-md-8">
                                <label for="password" class="col-md-4 col-form-label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-4 justify-content-center align-items-center">                            
                            <div class="col-md-8">
                                <label for="password-confirm" class="col-md-6 col-form-label">{{ __('Konfirmasi Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-8 offset-md-2">
                                <button type="submit" class="btn btn-success" style="width: 100%">
                                    {{ __('Lanjutkan') }}
                                </button>
                            </div>
                        </div>

                        <div class="row justify-content-center align-items-center">
                            <div class="col-md-8 mb-3">
                                <h4 class="text-center me-3 text-success">Atau</h4>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <button type="submit" class="btn btn-outline-success" style="width: 98%">
                                    {{ __('Continue with Google') }}
                                    <img width="20" height="20" style="margin-bottom:2px; margin-left:3px;" src="https://img.icons8.com/fluency/20/google-logo.png" alt="google-logo"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
