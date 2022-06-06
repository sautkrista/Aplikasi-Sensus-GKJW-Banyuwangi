@extends('layouts.master')

@section('content')
  {{-- Datatable --}}
  <div class="container-fluid" style="margin-top:80px;">
    <div class="row">
      <form action="" method="post">
        @csrf
        <div class="row">
          <div class="col">
            <label for="" class="form-label">Minggu ke-</label>
            <input class="form-control" name="minggu" list="list_minggu" id="" placeholder="Pilih Minggu...">
            <datalist id="list_minggu">
              <option value="Pertama">
              <option value="Kedua">
              <option value="Ketiga">
              <option value="Keempat">
            </datalist>
          </div>
          <div class="col">
            <label for="" class="form-label">Bulan</label>
            <input class="form-control" name="bulan" list="list_bulan" id="" placeholder="Pilih Bulan...">
            <datalist id="list_bulan">
              <option value="Januari">
              <option value="Februari">
              <option value="Maret">
              <option value="April">
              <option value="Mei">
              <option value="Juni">
              <option value="Juli">
              <option value="Agustus">
              <option value="September">
              <option value="Oktober">
              <option value="November">
              <option value="Desember">
            </datalist>
          </div>
          <div class="col">
            <label for="" class="form-label">Tahun</label>
            <input class="form-control" name="tahun" list="list_tahun" id="" placeholder="Pilih Tahun...">
            <datalist id="list_tahun">
              @for ($i = 2000; $i <= 2022; $i++)
                <option value="{{ $i }}">
              @endfor
            </datalist>
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
