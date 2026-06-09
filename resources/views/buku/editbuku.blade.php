@extends('template2')
@section('judul_halaman', 'Edit Buku')
@section('konten')

    <a href="/buku" class="btn btn-secondary mb-4">Kembali</a>

    @foreach($buku as $b)

    <div class="card">
        <div class="card-header">
            Form Edit Data Buku
        </div>

        <div class="card-body">
            <form action="/buku/update" method="post">
                {{ csrf_field() }}

                <input type="hidden" name="id" value="{{ $b->kodebuku }}">

                <div class="row mb-3">
                    <label for="merkbuku" class="col-sm-2 col-form-label">Merk Buku</label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            name="merkbuku"
                            id="merkbuku"
                            class="form-control"
                            required
                            maxlength="30"
                            value="{{ $b->merkbuku }}"
                        >
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="stockbuku" class="col-sm-2 col-form-label">Stock Buku</label>
                    <div class="col-sm-10">
                        <input
                            type="number"
                            name="stockbuku"
                            id="stockbuku"
                            class="form-control"
                            required
                            value="{{ $b->stockbuku }}"
                        >
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                    <div class="col-sm-10">
                        <select name="tersedia" id="tersedia" class="form-control" required>
                            <option value="Y" {{ $b->tersedia == 'Y' ? 'selected' : '' }}>Y - Ya</option>
                            <option value="N" {{ $b->tersedia == 'N' ? 'selected' : '' }}>N - Tidak</option>
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

    @endforeach

@endsection
