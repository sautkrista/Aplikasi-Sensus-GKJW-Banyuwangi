@extends('layouts.admin.master')

@section('content')
  {{-- Datatable --}}
  <div class="container">
    <div class=" card mb-3">
      <div class="card-header">{{ __('Form Ubah Pelayan') }}</div>

      <div class="card-body">
        <form method="POST" action="{{ route('data-pelayan.update', $data->id) }}" enctype="multipart/form-data">
          @csrf
          @method('PATCH')
          <div class="row mb-3">
            <div class="col">
              <div class="form-group">
                <label for="nama" class="mb-1">{{ __('Nama') }}</label>
                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror"
                  name="nama" value="{{ $data->nama ? $data->nama : old('nama') }}" autocomplete="nama" autofocus>

                @error('nama')
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
                <label for="jabatan" class="mb-1">{{ __('Jabatan') }}</label>
                <input id="jabatan" type="text" class="form-control @error('jabatan') is-invalid @enderror"
                  name="jabatan" value="{{ $data->jabatan ? $data->jabatan : old('jabatan') }}" autocomplete="jabatan"
                  autofocus>

                @error('jabatan')
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
