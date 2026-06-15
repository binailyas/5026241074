@extends('template2')
@section('judul_halaman', '“Kode Soal mypegawai”')
@section('konten')

    <a href="/mypegawai" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Tambah Data Pegawai
        </div>

        <div class="card-body">
            <form action="/mypegawai/store" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="kodepegawai" class="col-sm-2 col-form-label">Kode Pegawai</label>
                    <div class="col-sm-10">
                        <input type="text" name="kodepegawai" id="kodepegawai" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" name="namalengkap" id="namalengkap" class="form-control" required
                            min="1">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
                    <div class="col-sm-10">
                        <input type="text" name="divisi" id="divisi" class="form-control" required min="0">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="departemen" class="col-sm-2 col-form-label">Departemen</label>
                    <div class="col-sm-10">
                        <input type="text" name="departemen" id="departemen" class="form-control" required
                            min="0">
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Tambah Data" class="btn btn-success">
                    </div>
                </div>

            </form>
        </div>
    </div>

    <script>
        function validasiForm() {
            let kodepegawai = document.getElementById('kodepegawai').value;


            if (kodepegawai !== 'string' && kodepegawai !== integer) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "kodepegawai harus angka dan huruf",
                    icon: "error"
                });
                return false;

            }

            //validasi huruf doang di namalengkap
            let namalengkap = document.getElementById('namalengkap').value.trim();
            let regexHuruf = /^[a-zA-Z\s]+$/; // Pola hanya huruf dan spasi

            if (regexHuruf.test(namalengkap)) {
                alert('Validasi berhasil! Data dikirim.');
                // this.submit(); // Uncomment untuk benar-benar mengirim form
            } else {
                Swal.fire({
                    title: 'Error!',
                    text: 'Input harus berupa huruf!',
                    icon: 'error'
                });
            }

            return true;
        }
    </script>

@endsection
