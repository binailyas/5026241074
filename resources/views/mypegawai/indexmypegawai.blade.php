@extends('template2')
@section('judul_halaman', '“Kode Soal mypegawai”')
@section('konten')

<p>
    <br>
    <a href="/mypegawai/tambah" class="btn btn-success">Tambah Data</a>
</p>
<br/>

<table class="table table-striped table-hover">
    <tr>
        <th>Kode Pegawai</th>
        <th>Nama Lengkap</th>
        <th>Divisi</th>
        <th>Departemen</th>
    </tr>
    @foreach($mypegawai as $k)
    <tr>
        <td>{{ $k->kodepegawai }}</td>
        <td>{{ $k->namalengkap }}</td>
        <td>{{ $k->divisi }}</td>
        <td>{{ $k->departemen }}</td>

        <td>
            <a href="/mypegawai/view/{{ $k->kodepegawai }}" class="btn btn-danger">View</a>
        </td>
    </tr>
    @endforeach
</table>

@endsection
