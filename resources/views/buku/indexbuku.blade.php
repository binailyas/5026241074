@extends('template2')
@section('judul_halaman', 'Data Buku')
@section('konten')
<p>
    <br> <a href="/buku/tambah" class="btn btn-success"> Tambah Buku Baru</a>
</p>
    <br/>
    <br/>

    <p>Cari Data Buku :</p>
    <form action="/buku/cari" method="GET">
        <input type="text" name="cari" placeholder="Cari Buku .." class="form-control">
        <input type="submit" value="CARI" class="btn btn-success mt-2">
    </form>

    <br/>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Buku</th>
            <th>Merk Buku</th>
            <th>Stock</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>
        @foreach($buku as $b)
        <tr>
            <td>{{ $b->kodebuku }}</td>
            <td>{{ $b->merkbuku }}</td>
            <td>{{ $b->stockbuku }}</td>
            <td>{{ $b->tersedia }}</td>
            <td>
                <a href="/buku/edit/{{ $b->kodebuku }}" class="btn btn-warning">Edit</a>
                |
                <a href="/buku/hapus/{{ $b->kodebuku }}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
    {{ $buku->links() }}
@endsection
