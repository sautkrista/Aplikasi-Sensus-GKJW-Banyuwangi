@extends('layouts.master')

@section('content')
  {{-- Datatable --}}
  <div class="container">
    <div class="row">
      <form action="{{ route('show_warta') }}" method="post">
        @csrf
        <div class="row">
          <div class="col">
            <label for="date" class="form-label">Masukkan Minggu</label>
            <input type="week" class="form-control datetimepicker" name="minggu" id="datepicker">
          </div>
          <div class="col-1">
            <label for="" class="form-label"></label>
            <button type="submit" class="form-control btn btn-primary mt-2">Cari</button>
          </div>
        </div>
      </form>
    </div>

  </div>

  <script></script>
@endsection
