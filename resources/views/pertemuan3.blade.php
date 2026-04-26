<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Pertemuan 3</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #0695f4;
            color: #1376da;
            padding-bottom: 100px;
        }

        .hero-header {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
                        url('https://images.unsplash.com/photo-1523050853061-8c44f332c610?q=80&w=2070&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            margin-bottom: -50px;
        }

        .main-card {
            background: white;
            border-radius: 25px;
            padding: 40px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            border: none;
        }

        .section-label {
            font-weight: 700;
            color: #2d3394;
            margin: 40px 0 15px 0;
            display: flex;
            align-items: center;
        }

        .section-label::after {
            content: "";
            flex: 1;
            height: 2px;
            background: #e1e8ed;
            margin-left: 15px;
        }

        .list-group-item {
            border: 1px solid #f0f2f5;
            margin-bottom: 5px;
            border-radius: 12px !important;
            transition: 0.3s;
        }

        .list-group-item-action:hover {
            background-color: #f8faff;
            border-color: #2d3394;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }

        .list-group-item-secondary {
            background-color: #e3f2fd !important;
            color: #0d47a1 !important;
        }

        .list-group-item-light {
            background-color: #f0f4f8 !important;
            color: #3d75ad !important;
        }

        .list-group-item-dark {
            background-color: #1a237e !important;
            color: white !important;
        }

        .active-custom {
            background: linear-gradient(45deg, #2d3394, #4850d1) !important;
            border: none !important;
        }

        .module-spacer {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>

<div class="hero-header">
    <div class="text-center">
        <h1 class="font-weight-bold">My Academic</h1>
        <p>Sistem Informasi dan Manajemen Perkuliahan</p>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">

            <div class="main-card">

                <div class="module-spacer">
                    <div class="section-label">Modul Perkuliahan</div>
                    <ul class="list-group">
                        <li class="list-group-item">Desain Pengalaman Pengguna</li>
                        <li class="list-group-item">Data Lakehouse</li>
                        <li class="list-group-item">Pemrograman Web</li>
                    </ul>
                </div>

                <div class="module-spacer">
                    <div class="section-label">Jadwal Praktikum Semester 4</div>
                    <ul class="list-group">
                        <li class="list-group-item active active-custom">Lab 01: Pemrograman Web (08:00 - 10:00)</li>
                        <li class="list-group-item">Lab 03: Desain Pengalaman Pengguna (13:00 - 15:00)</li>
                        <li class="list-group-item">Lab 02: DMJK (15:30 - 17:00)</li>
                    </ul>
                </div>

                <div class="module-spacer">
                    <div class="section-label">Tugas Mahasiswa</div>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">Status Pengumpulan Tugas</a>
                        <a href="#" class="list-group-item list-group-item-action">Template Laporan</a>
                        <a href="#" class="list-group-item list-group-item-action">Final Project</a>
                    </div>
                </div>

                <div class="module-spacer">
                    <div class="section-label">Layanan Administrasi Digital</div>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">Cek Skem Mahasiswa</a>
                        <a href="#" class="list-group-item list-group-item-action disabled text-muted">Akses Portal Alumni (Terkunci)</a>
                        <a href="#" class="list-group-item list-group-item-action">Pengajuan Beasiswa Mahasiswa</a>
                    </div>
                </div>

                <div class="module-spacer">
                    <div class="section-label">Komunitas SI</div>
                    <ul class="list-group list-group-flush border-bottom">
                        <li class="list-group-item text-secondary">Internalisasi SI 24 - Minggu Ke-1</li>
                        <li class="list-group-item text-secondary">Company Visit - Minggu Ke-2</li>
                        <li class="list-group-item text-secondary">Coding Competition - Minggu Ke-3</li>
                    </ul>
                </div>

                <div class="module-spacer">
                    <div class="section-label">Fasilitas Kampus</div>
                    <ul class="list-group list-group-horizontal-md">
                        <li class="list-group-item flex-fill text-center font-weight-bold">CCWS</li>
                        <li class="list-group-item flex-fill text-center font-weight-bold">Perpustakaan</li>
                        <li class="list-group-item flex-fill text-center font-weight-bold">Kantin</li>
                    </ul>
                </div>

                <div class="module-spacer">
                    <div class="section-label">Status Kelengkapan Berkas</div>
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-success">Foto KTM: Terverifikasi</li>
                        <li class="list-group-item list-group-item-info">Sertifikat TEFL: Lulus</li>
                        <li class="list-group-item list-group-item-warning">Surat Keterangan Sehat: Perlu Update</li>
                        <li class="list-group-item list-group-item-danger">Bukti UKT: Sudah dibayar</li>
                        <li class="list-group-item list-group-item-primary">SKEM: Perlu Update</li>
                    </ul>
                </div>

                <div class="module-spacer">
                    <div class="section-label">Pengaturan Akun</div>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">Ganti Password Secara Berkala</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-dark">Konfigurasi Autentikasi 2 Faktor</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-light">Lihat Riwayat Perangkat Login</a>
                    </div>
                </div>

                <div class="module-spacer">
                    <div class="section-label">Notifikasi & Aktivitas</div>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Kelas B Sistem Informasi
                            <span class="badge badge-primary badge-pill shadow-sm">24</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Pesan dari Dosen
                            <span class="badge badge-warning badge-pill text-white shadow-sm">5</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Update SIAKAD
                            <span class="badge badge-success badge-pill shadow-sm">1</span>
                        </li>
                    </ul>
                </div>

            </div> </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
