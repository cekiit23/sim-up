
@extends('layouts.master')

@section('content')
    <div class="container">
        <h2>Formulir Pelunasan Hutang</h2>
    <form action="/piutang/update/{{ $utang->id }}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="nama_kreditur" class="form-label">Nama yang meminjamkan</label>
          <input type="text" class="form-control" id="nama_kreditur" name="nama_kreditur" value="{{ $utang->nama_kreditur }}" >
        </div>
        <div class="mb-3">
          <label for="jumlah_hutang" class="form-label" >Jumlah Hutang</label>
          <input type="text" class="form-control" id="jumlah_hutang" name="jumlah_hutang" value="{{ $utang->jumlah_hutang }}" >
        </div>
        <div class="mb-3">
          <label for="tgl_pinjam" class="form-label" >Tanggal Pinjam</label>
          <input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam" value="{{ $utang->tgl_pinjam }}" >
        </div>
        <div class="mb-3">
          <label for="tgl_pengembalian" class="form-label" >Tanggal Pengembalian</label>
          <input type="date" class="form-control" id="tgl_pengembalian" name="tgl_pengembalian" value="{{ $utang->tgl_pengembalian }}" >
        </div>

        <select class="form-select" aria-label="Default select example" name="status">
            <option>Pilih Status Pembayaran</option>
            <option value="Lunas" @if($utang->status == 'Lunas') selected @endif>Lunas</option>
            <option value="Belum Lunas" @if($utang->status == 'Belum dibayar') selected @endif>Belum Bayar</option>
          </select>
          <br>
        <button type="submit" class="btn btn-primary" value="submit">Submit</button>
      </form>
    </div>
@endsection
