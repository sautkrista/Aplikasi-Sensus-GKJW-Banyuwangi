@extends('layouts.admin.master')

@section('content')
  {{-- Datatable --}}
  <div class="container">
    <div class=" card mb-3">
      <div class="card-header">{{ __('Form Ubah KRW') }}</div>

      <div class="card-body">
        <form method="POST" action="{{ route('data-krw.update', $data->id) }}">
          @csrf
          @method('PATCH')
          <div class="row mb-3">
            <div class="col">
              <div class="form-group">
                <label for="nama_krw" class="mb-1">{{ __('Nama KRW') }}</label>
                <input id="nama_krw" type="text" class="form-control @error('nama_krw') is-invalid @enderror"
                  name="nama_krw" value="{{ $data->nama_krw ? $data->nama_krw : old('nama_krw') }}"
                  autocomplete="nama_krw" autofocus>

                @error('nama_krw')
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
                <label for="ketua_krw" class="mb-1">{{ __('Ketua KRW') }}</label>
                <input id="ketua_krw" type="text" class="form-control @error('ketua_krw') is-invalid @enderror"
                  name="ketua_krw" value="{{ $data->ketua_krw ? $data->ketua_krw : old('ketua_krw') }}"
                  autocomplete="ketua_krw" autofocus>

                @error('ketua_krw')
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
