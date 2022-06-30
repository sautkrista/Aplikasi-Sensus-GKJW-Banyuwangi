@extends('layouts.admin.master')

@section('content')
  {{-- Datatable --}}
  <div class="container">
    <div class=" card mb-3">
      <div class="card-header">{{ __('Form Edit Pengguna') }}</div>

      <div class="card-body">
        <form method="POST" action="{{ route('pengguna.update', $data->id) }}">
          @csrf
          @method('PATCH')

          <div class="row mb-3">
            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

            <div class="col-md-6">
              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                value="{{ $data->name ? $data->name : old('name') }}" required autocomplete="name" autofocus>

              @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>

          <div class="row mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

            <div class="col-md-6">
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                name="email" value="{{ $data->email ? $data->email : old('email') }}" required autocomplete="email"
                disabled>

              @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>

          <div class="row mb-3">
            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

            <div class="col-md-6">
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                name="password" required autocomplete="new-password">

              @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>

          <div class="row mb-3">
            <label for="password-confirm"
              class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

            <div class="col-md-6">
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                autocomplete="new-password">
            </div>
          </div>

          <div class="row mb-3">
            <label for="role" class="col-md-4 col-form-label text-md-end">{{ __('Role') }}</label>

            <div class="col-md-6">
              <input id="role" type="text" class="form-control @error('role') is-invalid @enderror" name="role"
                value="{{ $data->role ? $data->role : old('role') }}" required autocomplete="role">
            </div>

            @error('role')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>

          <div class="row mb-0">
            <div class="col-md-6 offset-md-4">
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
