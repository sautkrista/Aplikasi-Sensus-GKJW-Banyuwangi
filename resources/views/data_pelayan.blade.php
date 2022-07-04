@extends('layouts.master')

@section('content')
  {{-- Datatable --}}
  <div class="container-fluid" style="margin-top:80px;">
    <div class="card mb-3">
      <div class="card-header">{{ __('Data Pelayan Gereja') }}</div>

      <div class="card-body">
        <div class="row justify-content-center">

          @forelse ($data as $petugas)
            <div class="col-2 mb-6">
              <div class="card">
                <img src="{{ asset('image/default-user.png') }}" class="card-img-top" alt="user">
                <div class="card-body text-center">
                  <h5 class="card-title">{{ $petugas->nama }}</h5>
                  <p class="card-text">{{ $petugas->jabatan }}</p>
                </div>
              </div>
            </div>
          @empty
            <p>No Data Available</p>
          @endforelse
        </div>
      </div>
    </div>
  </div>
@endsection
