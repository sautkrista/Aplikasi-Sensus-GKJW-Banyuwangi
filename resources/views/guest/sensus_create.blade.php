@extends('layouts.master')

@section('content')
  {{-- Datatable --}}
  <div class="container">
    <div class="card mb-3">
      <div class="card-header">{{ __('Kuisioner Jemaat') }}</div>

      <div class="card-body">
        <div class="row">
          <div class="col-4">
            <h3>Informasi Pribadi</h3>

            @forelse ($data as $warga)
              <div class="form-group mb-2">
                <label for="nama">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama" value="{{ $warga->nama }}">
              </div>
              <div class="form-group mb-2">
                <label for="nama">Jenis Kelamin</label>
                <input type="text" class="form-control" name="jenis_kelamin" value="{{ $warga->jenis_kelamin }}">
              </div>
              <div class="form-group mb-2">
                <label for="nama">Alamat</label>
                <input type="text" class="form-control" name="alamat" value="{{ $warga->alamat_domisili }}">
              </div>
              <div class="form-group mb-2">
                <label for="nama">KRW</label>
                <input type="text" class="form-control" name="krw" value="{{ $warga->krw->ketua_krw }}">
              </div>
            @empty
              <p>Data Warga Tidak ditemukan</p>
            @endforelse

          </div>
          <div class="col">
            <h3>Kuisioner</h3>
            <form action="{{ route('sensus_warga') }}" method="post">
              @csrf
              @foreach ($quisioner as $soal)
                <div class="form-group mb-2">
                  <label
                    for="kuisioner{{ $loop->iteration }}">{{ $loop->iteration . '. ' . $soal->pertanyaan }}</label>
                  <input type="text" class="form-control" id="kuisioner{{ $loop->iteration }}"
                    name="jawaban-{{ $loop->iteration }}">
                </div>
              @endforeach
              @foreach ($data as $warga)
                <input type="hidden" class="form-control" name="nik" value="{{ $warga->nik }}">
              @endforeach

              <button type="submit" class="btn btn-primary">Submit</button>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
