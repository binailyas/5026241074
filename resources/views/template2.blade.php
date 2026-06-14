<!DOCTYPE html>
<html lang="en">

<head>
    <title>5026241074 Bina Ilyas Santosa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <div class="container mt-4">

        <div class="p-5 bg-primary text-white rounded mb-4">
            <h3>5026241074 Bina Ilyas Santosa</h3>
            <p>@yield('judul_halaman')</p>
        </div>

        <nav class="navbar navbar-expand-sm bg-primary navbar-light rounded mb-4">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="/pegawai">Pegawai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/buku">Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="siswa">Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="keranjang">D4</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="nilaikuliah">E5</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">EAS</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="card p-4 shadow-sm">
            @yield('konten')
        </div>

    </div>
</body>

</html>
