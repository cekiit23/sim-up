<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <table border="1">
        <tr>
            <td>No</td>
            <td>Nama Kreditur</td>
            <td>Jumlah Pinjam</td>
            <td>Tgl Pinjam</td>
            <td>Tgl Bayar</td>
            <td>Status</td>
        </tr>
        @foreach ($loans as $loan)
            <?php $no = 1;
            ?>
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $loan->nama_kreditur }}</td>
                <td>@currency($loan->jumlah_hutang)</td>
                <td>{{ $loan->tgl_pinjam }}</td>
                <td>{{ $loan->tgl_pengembalian }}</td>
                <td>{{ $loan->status }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
