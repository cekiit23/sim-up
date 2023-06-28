@extends('layouts.master')

@section('content')
    <div class="container">
        <h2>Formulir Tambah Hutang</h2>
    <form action="/piutang/store" method="POST">
        @csrf
        <div class="mb-3">
          <label for="nama_kreditur" class="form-label">Nama yang meminjamkan</label>
          <input type="text" class="form-control" id="nama_kreditur" name="nama_kreditur">
        </div>
        <div class="mb-3">
          <label for="jumlah_hutang" class="form-label">Jumlah Hutang</label>
          <input type="text" class="form-control" id="jumlah_hutang" name="jumlah_hutang">
        </div>
        <div class="mb-3">
          <label for="tgl_pinjam" class="form-label">Tanggal Pinjam</label>
          <input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam">
        </div>
        <div class="mb-3">
          <label for="tgl_pengembalian" class="form-label">Tanggal Pengembalian</label>
          <input type="date" class="form-control" id="tgl_pengembalian" name="tgl_pengembalian">
        </div>

        <select class="form-select" aria-label="Default select example">
            <option selected disabled>Pilih Status Pembayaran</option>
            <option value="Lunas">Lunas</option>
            <option value="Belum Lunas">Belum Bayar</option>
          </select>
          <br>
        <button type="submit" class="btn btn-primary" value="submit">Submit</button>
      </form>
    </div>
@endsection
