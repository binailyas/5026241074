@extends('template2')
@section('judul_halaman', 'Tambah Buku')
@section('konten')
    <a href="/buku" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Tambah Data Buku
        </div>

        <div class="card-body">
            <form action="/buku/store" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="merkbuku" class="col-sm-2 col-form-label">Merk Buku</label>
                    <div class="col-sm-10">
                        <input type="text" name="merkbuku" id="merkbuku" class="form-control" required maxlength="30">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="stockbuku" class="col-sm-2 col-form-label">Stock Buku</label>
                    <div class="col-sm-10">
                        <input type="number" name="stockbuku" id="stockbuku" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                    <div class="col-sm-10">
                        <select name="tersedia" id="tersedia" class="form-control" required>
                            <option value="Y">Y - Ya</option>
                            <option value="N">N - Tidak</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
