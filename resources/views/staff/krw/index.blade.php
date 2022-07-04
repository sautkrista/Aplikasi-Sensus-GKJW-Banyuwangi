@extends('layouts.admin.master')

@section('content')
  {{-- Datatable --}}
  <div class="container">
    <div class=" card mb-3">
      <div class="card-header">{{ __('Data KRW') }}
        <a class="btn btn-sm btn-primary float-end" href="{{ route('data-krw.create') }}"> Tambah</a>
      </div>

      <div class="card-body">
        <table id="table" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th class="text-center">No</th>
              <th class="text-center">Nama KRW</th>
              <th class="text-center">Ketua KRW</th>
              <th class="text-center">Aksi</th>
          </thead>
          <tbody>
            @forelse ($data as $krw)
              <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $krw->nama_krw }}</td>
                <td>{{ $krw->ketua_krw }}</td>
                <td>
                  <div class="d-flex justify-content-center align-items-center">
                    {{-- <a class="btn btn-sm btn-info mx-2 text-light" href="{{ route('data-krw.show', $krw->id) }}">
                      <i class="fa-solid fa-eye"></i> Detail</a> --}}
                    <a class="btn btn-sm btn-warning mx-2 text-light" href="{{ route('data-krw.edit', $krw->id) }}">
                      <i class="fa-solid fa-pen-to-square"></i> Ubah</a>
                    <form class="d-flex mx-2" action="{{ route('data-krw.destroy', $krw->id) }}" method="post"
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
