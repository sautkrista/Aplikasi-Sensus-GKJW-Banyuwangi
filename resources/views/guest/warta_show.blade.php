@extends('layouts.master')

@section('content')
  {{-- Datatable --}}
  <div class="container">
    <div class="card mb-3">
      <div class="card-header">{{ __('Warta Jemaat') }}</div>

      <div class="card-body">
        <div class="row">
          <div class="col">

            <h5 class="mt-2">{{ 'Mulai Tanggal = ' . $start . ' s/d ' . $end }}</h5>
          </div>
          <div class="col-2">
            <a href="{{ route('warta') }}" class="form-control btn btn-danger mt-2">Cari Warta</a>
          </div>
        </div>

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel"">
          <div class="carousel-indicators">
            @foreach ($data as $warta)
              <button type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="{{ $loop->iteration }}" class="active" aria-current="true"
                aria-label="Slide {{ $loop->iteration }}"></button>
            @endforeach
          </div>
          <div class="carousel-inner">
            @foreach ($data as $warta)
              <div class="carousel-item {{ $loop->iteration == 1 ? 'active' : '' }}">
                <img src="{{ asset('image/warta/' . $warta->gambar . '-' . $warta->halaman . '.png') }}"
                  class="w-100 h-auto" alt="{{ $warta->gambar . ' halaman ' . $warta->halaman }}">
              </div>
            @endforeach
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
      </div>
    </div>
  </div>
@endsection
