@extends('layouts.admin.master')

@section('content')
  {{-- Datatable --}}
  <div class="container">
    <div class=" card mb-3">
      <div class="card-header">{{ __('Data Pelayan') }}
        <a class="btn btn-sm btn-primary float-end" href="{{ route('data-pelayan.create') }}"> Tambah</a>
      </div>
      <div class="card-body">
        <table id="table" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th class="text-center">No</th>
              <th class="text-center">Nama</th>
              <th class="text-center">Jabatan</th>
              <th class="text-center">Foto</th>
              <th class="text-center">Aksi</th>
          </thead>
          <tbody>
            @forelse ($data as $pelayan)
              <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $pelayan->nama }}</td>
                <td>{{ $pelayan->jabatan }}</td>
                @if ($pelayan->foto)
                  <td class="text-center"><img width="40px" height="40px"
                      src="{{ asset('image/pelayan/' . $pelayan->foto) }}" alt="{{ $pelayan->foto }}"></td>
                  <td>
                  @else
                  <td class="text-center"><img width="40px" height="40px" src="{{ asset('image/default-user.png') }}"
                      alt="Default User"></td>
                  <td>
                @endif

                <div class="d-flex justify-content-center align-items-center">
                  {{-- <a class="btn btn-sm btn-info mx-2 text-light"
                      href="{{ route('data-pelayan.show', $pelayan->id) }}">
                      <i class="fa-solid fa-eye"></i> Detail</a> --}}
                  <a class="btn btn-sm btn-warning mx-2 text-light"
                    href="{{ route('data-pelayan.edit', $pelayan->id) }}">
                    <i class="fa-solid fa-pen-to-square"></i> Ubah</a>
                  <form class="d-flex mx-2" action="{{ route('data-pelayan.destroy', $pelayan->id) }}" method="post"
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
