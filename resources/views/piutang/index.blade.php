<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <a href="/piutang/create">Tambahkan Piutang</a>
    <table border="1">
        <tr>
            <td>No</td>
            <td>Nama Kreditur</td>
            <td>Jumlah Pinjam</td>
            <td>Tgl Pinjam</td>
            <td>Tgl Bayar</td>
            <td>Status</td>
            <td>Aksi</td>
        </tr>
        <?php $no = 1;
        ?>
        @foreach ($loans as $loan)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $loan->nama_kreditur }}</td>
                <td>@currency($loan->jumlah_hutang)</td>
                <td>{{ $loan->tgl_pinjam }}</td>
                <td>{{ $loan->tgl_pengembalian }}</td>
                <td>{{ $loan->status }}</td>
                <td><a href="/piutang/edit/{{ $loan->id }}">Edit</a>
                    <form action="/piutang/remove/{{ $loan->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>

</html>
