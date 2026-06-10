@extends('template2')
@section('judul_halaman', 'Keranjang Belanja')
@section('konten')

<p>
    <br>
    <a href="/keranjang/tambah" class="btn btn-success">Beli</a>
</p>
<br/>

<table class="table table-striped table-hover">
    <tr>
        <th>Kode Pembelian</th>
        <th>Kode Barang</th>
        <th>Jumlah Pembelian</th>
        <th>Harga per item</th>
        <th>Total</th>
        <th>Action</th>
    </tr>
    @foreach($keranjang as $k)
    <tr>
        <td>{{ $k->ID }}</td>
        <td>{{ $k->KodeBarang }}</td>
        <td>{{ number_format($k->Jumlah, 0, ',', '.') }}</td>
        <td>Rp {{ number_format($k->Harga, 0, ',', '.') }}</td>
        <td>Rp {{ number_format($k->Jumlah * $k->Harga, 0, ',', '.') }}</td>
        <td>
            <a href="/keranjang/hapus/{{ $k->ID }}" class="btn btn-danger">Batal</a>
        </td>
    </tr>
    @endforeach
</table>

@endsection
