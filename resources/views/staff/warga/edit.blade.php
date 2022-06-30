@extends('layouts.admin.master')

@section('content')
  {{-- Datatable --}}
  <div class="container">
    <div class=" card mb-3">
      <div class="card-header">{{ __('Form Ubah Warga') }}</div>

      <div class="card-body">
        <form method="POST" action="{{ route('data-warga.update', $data->id) }}">
          @csrf
          @method('PATCH')
          <div class="row mb-3">
            <div class="col">
              <div class="form-group">
                <label for="nik" class="mb-1">{{ __('NIK') }}</label>
                <input id="nik" type="text" class="form-control @error('nik') is-invalid @enderror"
                  name="nik" value="{{ $data->nik ? $data->nik : old('nik') }}" autocomplete="nik" autofocus>

                @error('nik')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

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

            <div class="col">
              <div class="form-group">
                <label for="jenis_kelamin" class="mb-1">{{ __('Jenis Kelamin') }}</label>
                <select id="jenis_kelamin" name="jenis_kelamin"
                  class="form-select @error('jenis_kelamin') is-invalid @enderror" aria-label="Default select example">
                  <option>Pilih Jenis Kelamin</option>
                  <option value="Laki laki" {{ $data->jenis_kelamin == 'Laki laki' ? 'selected' : '' }}>Laki Laki
                  </option>
                  <option value="Perempuan" {{ $data->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan
                  </option>
                </select>

                @error('jenis_kelamin')
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
                <label for="tempat_lahir" class="mb-1">{{ __('Tempat Lahir') }}</label>
                <input id="tempat_lahir" type="text" class="form-control @error('tempat_lahir') is-invalid @enderror"
                  name="tempat_lahir" value="{{ $data->tempat_lahir ? $data->tempat_lahir : old('tempat_lahir') }}"
                  autocomplete="tempat_lahir" autofocus>

                @error('tempat_lahir')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="col">
              <div class="form-group">
                <label for="tanggal_lahir" class="mb-1">{{ __('Tanggal Lahir') }}</label>
                <input type="date" class="form-control datetimepicker @error('nik') is-invalid @enderror"
                  name="tanggal_lahir" id="datepicker"
                  value="{{ $data->tanggal_lahir ? $data->tanggal_lahir : old('tanggal_lahir') }}">

                @error('tanggal_lahir')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="col">
              <div class="form-group">
                <label for="hub_dalam_kk" class="mb-1">{{ __('Hubungan Dalam KK') }}</label>
                <select id="hub_dalam_kk" name="hub_dalam_kk"
                  class="form-select @error('hub_dalam_kk') is-invalid @enderror" aria-label="Default select example">
                  <option selected>Pilih Hubungan</option>
                  <option value="Ayah" {{ $data->hub_dalam_kk == 'Ayah' ? 'selected' : '' }}>Ayah</option>
                  <option value="Ibu" {{ $data->hub_dalam_kk == 'Ibu' ? 'selected' : '' }}>Ibu</option>
                  <option value="Anak" {{ $data->hub_dalam_kk == 'Anak' ? 'selected' : '' }}>Anak</option>
                </select>

                @error('hub_dalam_kk')
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
                <label for="alamat_domisili" class="mb-1">{{ __('Alamat') }}</label>
                <input id="alamat_domisili" type="text"
                  class="form-control @error('alamat_domisili') is-invalid @enderror" name="alamat_domisili"
                  value="{{ $data->alamat_domisili ? $data->alamat_domisili : old('alamat_domisili') }}"
                  autocomplete="alamat_domisili" autofocus>

                @error('alamat_domisili')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="col">
              <div class="form-group">
                <label for="kota_domisili" class="mb-1">{{ __('Kota') }}</label>
                <input id="kota_domisili" type="text" class="form-control @error('nik') is-invalid @enderror"
                  name="kota_domisili"
                  value="{{ $data->kota_domisili ? $data->kota_domisili : old('kota_domisili') }}"
                  autocomplete="kota_domisili" autofocus>

                @error('kota_domisili')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="col">
              <div class="form-group">
                <label for="no_telp" class="mb-1">{{ __('No Telp') }}</label>
                <input id="no_telp" type="text" class="form-control @error('nik') is-invalid @enderror"
                  name="no_telp" value="{{ $data->no_telp ? $data->no_telp : old('no_telp') }}"
                  autocomplete="no_telp" autofocus>

                @error('no_telp')
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
                <label for="tempat_baptis" class="mb-1">{{ __('Tempat Baptis') }}</label>
                <input id="tempat_baptis" type="text"
                  class="form-control @error('tempat_baptis') is-invalid @enderror" name="tempat_baptis"
                  value="{{ $data->tempat_baptis ? $data->tempat_baptis : old('tempat_baptis') }}"
                  autocomplete="tempat_baptis" autofocus>

                @error('tempat_baptis')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="col">
              <div class="form-group">
                <label for="tanggal_baptis" class="mb-1">{{ __('Tanggal Baptis') }}</label>
                <input type="date" class="form-control datetimepicker @error('nik') is-invalid @enderror"
                  name="tanggal_baptis" id="datepicker"
                  value="{{ $data->tanggal_baptis ? $data->tanggal_baptis : old('tanggal_lahir') }}">

                @error('tanggal_baptis')
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
                <label for="tempat_sidi" class="mb-1">{{ __('Tempat Sidi') }}</label>
                <input id="tempat_sidi" type="text" class="form-control @error('tempat_sidi') is-invalid @enderror"
                  name="tempat_sidi" value="{{ $data->tempat_sidi ? $data->tempat_sidi : old('tempat_sidi') }}"
                  autocomplete="tempat_sidi" autofocus>

                @error('tempat_sidi')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="col">
              <div class="form-group">
                <label for="tanggal_sidi" class="mb-1">{{ __('Tanggal Sidi') }}</label>
                <input type="date" class="form-control datetimepicker @error('nik') is-invalid @enderror"
                  name="tanggal_sidi" id="datepicker"
                  value="{{ $data->tanggal_sidi ? $data->tanggal_sidi : old('tanggal_lahir') }}">

                @error('tanggal_sidi')
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
                <label for="profesi" class="mb-1">{{ __('Profesi') }}</label>
                <input id="profesi" type="text" class="form-control @error('profesi') is-invalid @enderror"
                  name="profesi" value="{{ $data->profesi ? $data->profesi : old('profesi') }}"
                  autocomplete="profesi" autofocus>

                @error('profesi')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="col">
              <div class="form-group">
                <label for="tanggal_nikah" class="mb-1">{{ __('Tanggal Nikah') }}</label>
                <input type="date" class="form-control datetimepicker @error('nik') is-invalid @enderror"
                  name="tanggal_nikah" id="datepicker"
                  value="{{ $data->tanggal_nikah ? $data->tanggal_nikah : old('tanggal_lahir') }}">

                @error('tanggal_nikah')
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
                <label for="asal_gereja" class="mb-1">{{ __('Asal Gereja') }}</label>
                <input id="asal_gereja" type="text" class="form-control @error('asal_gereja') is-invalid @enderror"
                  name="asal_gereja" value="{{ $data->asal_gereja ? $data->asal_gereja : old('asal_gereja') }}"
                  autocomplete="asal_gereja" autofocus>

                @error('asal_gereja')
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
                <label for="keterangan" class="mb-1">{{ __('Keterangan') }}</label>
                <textarea class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" id="keterangan"
                  cols="30" rows="10">
                  {{ $data->keterangan }}
                </textarea>

                @error('keterangan')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col">
              <div class="col">
                <div class="form-group">
                  <label for="krw_id" class="mb-1">{{ __('KRW') }}</label>
                  <select id="krw_id" name="krw_id" class="form-select @error('krw_id') is-invalid @enderror"
                    aria-label="Default select example">
                    <option selected>Pilih KRW</option>

                    @foreach ($data_krw as $krw)
                      <option value="{{ $krw->id }}" {{ $krw->id == $data->krw_id ? 'selected' : '' }}>
                        {{ $krw->ketua_krw . ' selaku ketua dari KRW ' . $krw->nama_krw }}</option>
                    @endforeach
                  </select>

                  @error('krw_id')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
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
