@extends('layouts.admin.master')

@section('content')
  {{-- Datatable --}}
  <div class="container">
    <div class=" card mb-3">
      <div class="card-header">{{ __('Data Warga') }}
        <a class="btn btn-sm btn-primary float-end" href="{{ route('data-warga.create') }}"> Tambah</a>
      </div>

      <div class="card-body">
        <table id="table" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th class="text-center">No</th>
              <th class="text-center">Nik</th>
              <th class="text-center">Nama</th>
              <th class="text-center">Jenis Kelamin</th>
              <th class="text-center">KRW</th>
              <th class="text-center">Status</th>
              <th class="text-center">Aksi</th>
          </thead>
          <tbody>
            @forelse ($data as $warga)
              <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $warga->nik }}</td>
                <td>{{ $warga->nama }}</td>
                <td>{{ $warga->jenis_kelamin }}</td>
                <td class="text-center">{{ $warga->krw->nama_krw }}</td>
                <td class="text-center">{{ $warga->status == 0 ? 'Unverified' : 'Verified' }}</td>
                <td>
                  <div class="d-flex justify-content-center align-items-center">
                    <a class="btn btn-sm btn-info mx-2 text-light" href="{{ route('data-warga.show', $warga->id) }}">
                      <i class="fa-solid fa-eye"></i> Detail</a>
                    <a class="btn btn-sm btn-warning mx-2 text-light" href="{{ route('data-warga.edit', $warga->id) }}">
                      <i class="fa-solid fa-pen-to-square"></i> Ubah</a>
                    <form class="d-flex mx-2" action="{{ route('data-warga.destroy', $warga->id) }}" method="post"
                      onsubmit="return confirm('Yakin hapus data ?')">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i> Hapus
                      </button>
                    </form>
                  </div>
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
