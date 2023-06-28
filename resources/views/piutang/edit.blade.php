<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Piutang</title>
</head>

<body>
    <h2>Formulir Edit Piutang</h2>
    <form action="/piutang/update/{{ $utangbyid->id }}" method="POST">
        @method('put')
        @csrf
        <label for="nama_kreditur">Nama Kreditur</label>
        <input type="text" name="nama_kreditur" id="nama_kreditur" value="{{ $utangbyid->nama_kreditur }}">
        <br>
        <label for="jumlah_hutang">Jumlah Hutang (Rp.)</label>
        <input type="text" name="jumlah_hutang" id="jumlah_hutang" value="{{ $utangbyid->jumlah_hutang }}">
        <br>
        <label for="tgl_pinjam">Tanggal Peminjaman</label>
        <input type="date" name="tgl_pinjam" id="tgl_pinjam" value="{{ $utangbyid->tgl_pinjam }}">
        <br>
        <label for="tgl_pengembalian">Tanggal Pengembalian</label>
        <input type="date" name="tgl_pengembalian" id="tgl_pengembalian" value="{{ $utangbyid->tgl_pengembalian }}">
        <br>
        <label for="status">Status</label>
        <select name="status" id="status">
            <option value="Belum dibayar" @if($utangbyid->status == "Belum Bayar")selected @endif>Belum Dibayar</option>
            <option value="Lunas" @if($utangbyid->status == "Lunas") selected @endif>Lunas</option>
            <option value="Ditunda" @if($utangbyid->status == "Ditunda") selected @endif>Ditunda</option>
        </select>
        <br>
        <input type="submit" value="submit">
    </form>
</body>

</html>
