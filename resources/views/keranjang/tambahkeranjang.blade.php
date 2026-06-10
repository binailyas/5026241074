@extends('template2')
@section('judul_halaman', 'Tambah Keranjang Belanja')
@section('konten')

    <a href="/keranjang" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Beli Barang
        </div>

        <div class="card-body">
            <form action="/keranjang/store" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="KodeBarang" class="col-sm-2 col-form-label">Kode Barang</label>
                    <div class="col-sm-10">
                        <input type="text" name="KodeBarang" id="KodeBarang" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="Jumlah" class="col-sm-2 col-form-label">Jumlah Pembelian</label>
                    <div class="col-sm-10">
                        <input type="text" name="Jumlah" id="Jumlah" class="form-control" required min="1">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="Harga" class="col-sm-2 col-form-label">Harga per item</label>
                    <div class="col-sm-10">
                        <input type="text" name="Harga" id="Harga" class="form-control" required min="0">
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Beli" class="btn btn-success">
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection
