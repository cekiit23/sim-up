@extends('layouts.master')

@section('title')
    Dashboard
@endsection
@section('content')

    <div class="container">
            <a class="btn btn-primary mb-3 mt-3" href="/piutang/create">Tambahkan Piutang</a>
            <p><b>Hutang anda saat ini adalah : @currency($total->total_semua_hutang)</b></p>
        <table class="table table-striped table-hover">
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
           <tr>

           </tr>

            @foreach ($loans as $loan)

                <tr>

                    <td>{{ $no++ }}</td>
                    <td>{{ $loan->nama_kreditur }}</td>
                    <td>@currency($loan->jumlah_hutang)</td>
                    <td>{{ $loan->tgl_pinjam }}</td>
                    <td>{{ $loan->tgl_pengembalian }}</td>
                    <td>{{ $loan->status }}</td>
                    <td>
                        <div class="btn-group">
                        <a class="btn btn-info" href="/piutang/edit/{{ $loan->id }}">Edit</a>
                        <form action="/piutang/remove/{{ $loan->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </div>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>

@endsection
