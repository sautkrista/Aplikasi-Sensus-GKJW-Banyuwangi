@extends('layouts.admin.master')

@section('content')
  {{-- Datatable --}}
  <div class="container">
    <div class=" card mb-3">
      <div class="card-header">{{ __('Form Tambah Warga') }}</div>

      <div class="card-body">
        <form method="POST" action="{{ route('data-warga.store') }}">
          @csrf
          <div class="row mb-3">
            <div class="col">
              <div class="form-group">
                <label for="nik" class="mb-1">{{ __('NIK') }}</label>
                <input id="nik" type="text" class="form-control @error('nik') is-invalid @enderror"
                  name="nik" value="{{ old('nik') }}" autocomplete="nik" autofocus>

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
                <input id="nama" type="text" class="form-control @error('nik') is-invalid @enderror"
                  name="nama" value="{{ old('nama') }}" autocomplete="nama" autofocus>

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
                  <option selected>Pilih Jenis Kelamin</option>
                  <option value="Laki laki">Laki Laki</option>
                  <option value="Perempuan">Perempuan</option>
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
                  name="tempat_lahir" value="{{ old('tempat_lahir') }}" autocomplete="tempat_lahir" autofocus>

                @error('tempat_lahir')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="col">
              <div class="form-group">
                <label for="tanggal_baptis" class="mb-1">{{ __('Tanggal Lahir') }}</label>
                <input type="date" class="form-control datetimepicker @error('nik') is-invalid @enderror"
                  name="tanggal_lahir" id="datepicker">

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
                  <option value="Ayah">Ayah</option>
                  <option value="Ibu">Ibu</option>
                  <option value="Anak">Anak</option>
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
                <label for="alamat_domisili" class="mb-1">{{ __('Alamat') }}</label>
                <input id="alamat_domisili" type="text"
                  class="form-control @error('alamat_domisili') is-invalid @enderror" name="alamat_domisili"
                  value="{{ old('alamat_domisili') }}" autocomplete="alamat_domisili" autofocus>

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
                  name="kota_domisili" value="{{ old('kota_domisili') }}" autocomplete="kota_domisili" autofocus>

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
                  name="no_telp" value="{{ old('no_telp') }}" autocomplete="no_telp" autofocus>

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
                  value="{{ old('tempat_baptis') }}" autocomplete="tempat_baptis" autofocus>

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
                  name="tanggal_baptis" id="datepicker">

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
                  name="tempat_sidi" value="{{ old('tempat_sidi') }}" autocomplete="tempat_sidi" autofocus>

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
                  name="tanggal_sidi" id="datepicker">

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
                  name="profesi" value="{{ old('profesi') }}" autocomplete="profesi" autofocus>

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
                  name="tanggal_nikah" id="datepicker">

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
                  name="asal_gereja" value="{{ old('asal_gereja') }}" autocomplete="asal_gereja" autofocus>

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
                  {{ old('keterangan') }}
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
                      <option value="{{ $krw->id }}">
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
                {{ __('Tambah') }}
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
