@extends('layouts.master')

@section('content')
  {{-- Datatable --}}
  <div class="container-fluid" style="margin-top:80px;">
    <div class="card mb-3">
      <div class="card-header">{{ __('Data Warga Jemaat') }}</div>

      <div class="card-body">
        <table id="table" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th class="text-center">Nama</th>
              <th class="text-center">Jenis Kelamin</th>
              <th class="text-center">Alamat</th>
              <th class="text-center">No Telp</th>
              <th class="text-center">KRW</th>
              <th class="text-center">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($data as $warga)
              <tr>
                <td>{{ $warga->nama }}</td>
                <td>{{ $warga->jenis_kelamin }}</td>
                <td>{{ $warga->alamat_domisili }}</td>
                <td>{{ $warga->no_telp }}</td>
                <td>{{ $warga->krw_id }}</td>
                <td class="text-center">
                  <button class="btn btn-primary">View</button>
                  <button class="btn btn-success">Update</button>
                  <button class="btn btn-danger">Delete</button>
                </td>
              </tr>
            @empty
            @endforelse

          </tbody>
        </table>

      </div>
    </div>
  </div>
@endsection
