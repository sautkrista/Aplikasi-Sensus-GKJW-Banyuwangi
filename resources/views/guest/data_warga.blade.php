@extends('layouts.master')

@section('content')
  {{-- Datatable --}}
  <div class="container">
    <div class="card mb-3">
      <div class="card-header">{{ __('Data Warga Jemaat') }}</div>

      <div class="card-body">
        <table id="table" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th class="text-center">No</th>
              <th class="text-center">Nama</th>
              <th class="text-center">Jenis Kelamin</th>
              <th class="text-center">Alamat</th>
              <th class="text-center">No Telp</th>
              <th class="text-center">KRW</th>
          </thead>
          <tbody>
            @forelse ($data as $warga)
              <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $warga->nama }}</td>
                <td>{{ $warga->jenis_kelamin }}</td>
                <td>{{ $warga->alamat_domisili }}</td>
                <td>{{ $warga->no_telp }}</td>
                <td>{{ $warga->krw->ketua_krw }}</td>
              </tr>
            @empty
            @endforelse

          </tbody>
        </table>

      </div>
    </div>
  </div>
@endsection
