@extends('layouts.master')

@section('content')
  {{-- Datatable --}}
  <div class="container">
    <div class="row">
      <form action="{{ route('create_sensus_warga') }}" method="post">
        @csrf
        <div class="row">
          <div class="col">
            <label for="" class="form-label">NIK</label>
            <input class="form-control" name="nik" id="" placeholder="Masukkan NIK...">
          </div>
          <div class="col-1">
            <label for="" class="form-label"></label>
            <button type="submit" class="form-control btn btn-primary mt-2">Cari</button>
          </div>
        </div>
      </form>
    </div>

  </div>
@endsection
