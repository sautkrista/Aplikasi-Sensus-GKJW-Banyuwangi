@extends('layouts.admin.master')

@section('content')
  {{-- Datatable --}}
  <div class="container">
    <div class=" card mb-3">
      <div class="card-header">{{ __('Data Warta') }}
        <a class="btn btn-sm btn-primary float-end" href="{{ route('data-warta.create') }}"> Tambah</a>
      </div>

      <div class="card-body">
        <table id="table" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th class="text-center">No</th>
              <th class="text-center">Tanggal</th>
              <th class="text-center">Total Warta</th>
              <th class="text-center">Aksi</th>
          </thead>
          <tbody>
            @forelse ($data as $warta)
              <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>
                  {{ startDate($warta->minggu) . ' s/d ' . endDate($warta->minggu) }}
                </td>
                <td>{{ $warta->total . ' Warta' }}</td>
                <td>
                  <div class="d-flex justify-content-center align-items-center">
                    <a class="btn btn-sm btn-info mx-2 text-light"
                      href="{{ route('data-warta.show', $warta->minggu) }}">
                      <i class="fa-solid fa-eye"></i> Detail</a>
                    {{-- <a class="btn btn-sm btn-warning mx-2 text-light" href="{{ route('data-warta.edit', $warta->id) }}">
                      <i class="fa-solid fa-pen-to-square"></i> Ubah</a>
                    <form class="d-flex mx-2" action="{{ route('data-warta.destroy', $warta->id) }}" method="post"
                      onsubmit="return confirm('Yakin hapus data ?')"> --}}
                    {{-- @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i> Hapus
                    </button>
                    </form> --}}
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
