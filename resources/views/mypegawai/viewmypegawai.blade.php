@extends('template2')
@section('judul_halaman', '“Kode Soal mypegawai”')
@section('konten')

    <a href="/mypegawai" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            View Data Pegawai
        </div>

        <div class="card-body">
           <form action="/mypegawai/view" method="post">
            {{ csrf_field() }}
                <div class="row mb-3">
                    <label for="kodepegawai" class="col-sm-2 col-form-label">Kode Pegawai</label>
                    <div class="col-sm-10">
                        <input type="" name="kodepegawai" id="kodepegawai" class="form-control" maxlength="10"
                            value="{{ old('kodepegawai', $mypegawai->kodepegawai) }}" readonly>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="" name="namalengkap" id="namalengkap" class="form-control" maxlength="20"
                            value="{{ old('namalengkap', $mypegawai->namalengkap) }}" readonly>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="Divisi" class="col-sm-2 col-form-label">Divisi</label>
                    <div class="col-sm-10">
                        <input type="" name="divisi" id="divisi" class="form-control" maxlength="5"
                            value="{{ old('divisi', $mypegawai->divisi) }}" readonly>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="departemen" class="col-sm-2 col-form-label">Departemen</label>
                    <div class="col-sm-10">
                        <input type="" name="departemen" id="departemen" class="form-control"
                            value="{{ old('departemen', $mypegawai->departemen) }}" readonly>
                    </div>
                </div>


            </form>
        </div>
    </div>

@endsection
