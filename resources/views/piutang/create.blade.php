<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Hutang</title>
</head>

<body>
    <h2>Formulir Tambah Hutang</h2>
    <form action="/piutang/store" method="POST">
        @csrf
        <label for="nama_kreditur">Nama Kreditur</label>
        <input type="text" name="nama_kreditur" id="nama_kreditur">
        <br>
        <label for="jumlah_hutang">Jumlah Hutang (Rp.)</label>
        <input type="text" name="jumlah_hutang" id="jumlah_hutang">
        <br>
        <label for="tgl_pinjam">Tanggal Peminjaman</label>
        <input type="date" name="tgl_pinjam" id="tgl_pinjam">
        <br>
        <label for="tgl_pengembalian">Tanggal Pengembalian</label>
        <input type="date" name="tgl_pengembalian" id="tgl_pengembalian">
        <br>
        <label for="status">Status</label>
        <select name="status" id="status">
            <option value="Belum dibayar">Belum Dibayar</option>
            <option value="Lunas">Lunas</option>
            <option value="Ditunda">Ditunda</option>
        </select>
        <br>
        <input type="submit" value="submit">
    </form>
</body>

</html>
