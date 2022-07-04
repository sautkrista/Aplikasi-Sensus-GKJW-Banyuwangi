@extends('layouts.admin.master')

@section('content')
  {{-- Datatable --}}
  <div class="container">
    <div class=" card mb-3">
      <div class="card-header">{{ __('Detail Warta') }}</div>

      <div class="card-body">
        <div class="row">
          <div class="col">
            <h5 class="mt-2">{{ 'Mulai Tanggal = ' . $start . ' s/d ' . $end }}</h5>
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
                <div class="row">
                  <div class="col d-flex justify-content-end mb-2" style="z-index: 1000">
                    <a class="btn btn-sm btn-warning mx-2 text-light" href="{{ route('data-warta.edit', $warta->id) }}">
                      <i class="fa-solid fa-pen-to-square"></i> Ubah</a>
                    <form class="d-flex mx-2" action="{{ route('data-warta.destroy', $warta->id) }}" method="post"
                      onsubmit="return confirm('Yakin hapus data ?')">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i> Hapus
                      </button>
                    </form>
                  </div>
                </div>

                <img src="{{ asset('image/warta/' . $warta->minggu . '-' . $warta->halaman . '.png') }}"
                  class="w-100 h-auto" alt="{{ $warta->minggu . ' halaman ' . $warta->halaman }}">
              </div>
            @endforeach

            {{-- <div class="carousel-item">
                <img src="{{ asset('image/default-img.png') }}" class="w-100 h-auto" alt="Gambar 2">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('image/default-img.png') }}" class="w-100 h-auto" alt="Gambar 3">
              </div> --}}
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
