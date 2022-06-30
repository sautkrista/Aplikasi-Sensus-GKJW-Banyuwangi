@extends('layouts.admin.master')

@section('content')
  {{-- Datatable --}}
  <div class="container">
    <div class=" card mb-3">
      <div class="card-header">{{ __('Data Pengguna') }}
        <a class="btn btn-sm btn-primary float-end" href="{{ route('pengguna.create') }}"> Tambah</a>
      </div>

      <div class="card-body">
        <table id="table" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th class="text-center">No</th>
              <th class="text-center">Nama</th>
              <th class="text-center">Email</th>
              <th class="text-center">Role</th>
              <th class="text-center">Aksi</th>
          </thead>
          <tbody>
            @forelse ($data as $pengguna)
              <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $pengguna->name }}</td>
                <td>{{ $pengguna->email }}</td>
                <td class="text-center">{{ $pengguna->role }}</td>
                <td>
                  <div class="d-flex justify-content-center align-items-center">
                    {{-- <a class="btn btn-sm btn-info mx-2 text-light" href="{{ route('pengguna.show', $pengguna->id) }}">
                      <i class="fa-solid fa-eye"></i> Detail</a> --}}
                    <a class="btn btn-sm btn-warning mx-2 text-light"
                      href="{{ route('pengguna.edit', $pengguna->id) }}">
                      <i class="fa-solid fa-pen-to-square"></i> Ubah</a>
                    <form class="d-flex mx-2" action="{{ route('pengguna.destroy', $pengguna->id) }}" method="post"
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
