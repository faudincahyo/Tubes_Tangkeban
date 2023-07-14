@extends('layouts.navbar.navbar')

@section('content')
        <div class="row justify-content-center"> 
          @foreach ($data as $item)
          <div class="card border-success" style="width: 23rem; margin-right:12px">
              <img src="/img/{{ $item->image  }}"
                  class="card-img-top" alt="Uploaded" style="width: 300px;height:310px; margin-left:1.3rem; padding-top:2rem">
              <div class="card-body ms-3">
                  <h5 class="card-title" style="color: green">{{ $item->title }}</h5>
                  <p class="card-text text-success">{!! $item->desc !!}</p>
                  <div class="row mt-4">
                    <div class="col-md-7 mt-2">
                      <h4>Rp. {{ number_format($item->harga) }},00</h4>
                    </div>
                    <div class="col-md-5">
                      <a href="{{ route('pesan', $item->id) }}" class="btn btn-success">Pesan Tiket</a>
                    </div>
                  </div>
              </div>
          </div>
      @endforeach
        </div>
@endsection
