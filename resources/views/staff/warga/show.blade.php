@extends('layouts.admin.master')

@section('content')
  {{-- Datatable --}}
  <div class="container">
    <div class=" card mb-3">
      <div class="card-header">{{ __('Detail Pengguna') }}</div>

      <div class="card-body">
        <div class="row">
          <div class="col-lg-4">
            <div class="card mb-4">
              <div class="card-body text-center">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                  class="rounded-circle img-fluid" style="width: 150px;">
                <h5 class="my-3">{{ $data->nama }}</h5>
                <p class="text-muted mb-1">{{ $data->nik }}</p>
                <p class="text-muted mb-4">{{ $data->alamat_domisili }}</p>
                <div class="d-flex justify-content-center mb-2">
                  <button type="button" class="btn btn-primary">Verifikasi</button>
                  <button type="button" class="btn btn-outline-danger ms-1">Batalkan</button>
                </div>
              </div>
            </div>
            <div class="card mb-4 mb-lg-0">
              <div class="card-body p-0">
                <ul class="list-group list-group-flush rounded-3">
                  <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                    <p class="mb-0">Tempat Baptis</p>
                    <p class="mb-0">{{ $data->tempat_baptis }}</p>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                    <p class="mb-0">Tanggal Baptis</p>
                    <p class="mb-0">{{ Carbon\Carbon::parse($data->tanggal_baptis)->format('d-M-y') }}</p>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                    <p class="mb-0">Tempat Sidi</p>
                    <p class="mb-0">{{ $data->tempat_sidi }}</p>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                    <p class="mb-0">Tanggal Sidi</p>
                    <p class="mb-0">{{ Carbon\Carbon::parse($data->tanggal_sidi)->format('d-M-y') }}</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="card mb-4">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Full Name</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">{{ $data->nama }}</p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Jenis Kelamin</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">{{ $data->jenis_kelamin }}</p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Tempat, Tanggal Lahir</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">
                      {{ $data->tempat_lahir . ', ' . Carbon\Carbon::parse($data->tanggal_lahir)->format('d-M-Y') }}
                    </p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Hubungan dalam KK</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">{{ $data->hub_dalam_kk }}</p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Tanggal Menikah</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">{{ Carbon\Carbon::parse($data->tanggal_menikah)->format('d-M-Y') }}</p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Alamat</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">{{ $data->alamat_domisili . ', ' . $data->kota_domisili }}</p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">No Telpon</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">{{ $data->no_telp }}</p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Profesi</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">{{ $data->profesi }}</p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Asal Gereja</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">{{ $data->asal_gereja }}</p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Keterangan</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">{{ $data->keterangan }}</p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Bergabung Sejak</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">{{ $data->created_at->format('d-M-Y') }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
