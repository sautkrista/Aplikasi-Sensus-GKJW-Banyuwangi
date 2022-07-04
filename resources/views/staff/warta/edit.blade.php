@extends('layouts.admin.master')

@section('content')
  {{-- Datatable --}}
  <div class="container">
    <div class=" card mb-3">
      <div class="card-header">{{ __('Tambah Warta') }}</div>

      <div class="card-body">
        <form method="POST" action="{{ route('data-warta.update', $data->id) }}" enctype="multipart/form-data">
          @csrf
          @method('PATCH')
          <div class="row mb-3">
            <div class="col">
              <div class="form-group">
                <label for="minggu" class="mb-1">{{ __('Minggu') }}</label>
                <input id="minggu" type="week" class="form-control datepicker @error('minggu') is-invalid @enderror"
                  name="minggu" value="{{ $data->minggu ? $data->minggu : old('minggu') }}" autofocus>

                @error('minggu')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col">
              <div class="form-group">
                <label for="halaman" class="mb-1">{{ __('halaman') }}</label>
                <input id="halaman" type="text" class="form-control @error('halaman') is-invalid @enderror"
                  name="halaman" value="{{ $data->halaman ? $data->halaman : old('halaman') }}" autocomplete="halaman"
                  autofocus>

                @error('halaman')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col">
              <div class="form-group">
                <label for="foto" class="mb-1">{{ __('Foto') }}</label>
                <input id="foto" type="file" class="form-control @error('foto') is-invalid @enderror"
                  name="foto" value="{{ old('foto') }}" autocomplete="foto" autofocus>

                @error('foto')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col d-flex justify-content-end">
              <button type="submit" class="btn btn-primary">
                {{ __('Ubah') }}
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
