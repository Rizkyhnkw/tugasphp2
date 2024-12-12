<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        html,
        body {
            height: 100%;
        }

        .content-wrapper {
            min-height: calc(100vh - 56px);
            display: flex;
            flex-direction: column;
        }

        footer {
            margin-top: auto;
        }

        .form-check-input {
            border-width: 3px;
        }
    </style>
</head>

<body class="d-flex flex-column">
    <nav class="navbar navbar-expand-lg bg-primary py-3">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">Sigma</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link text-white active" aria-current="page" href="home.php">Home</a>
                    <a class="nav-link text-white " href="tampil.php">tampil</a>
                    <a class="nav-link text-white" href="tambah.php">Tambah</a>
                    <a class="nav-link text-white" href="ubah.php">Ubah</a>
                    <a class="nav-link text-white" href="hapus.php">Hapus</a>

                </div>
            </div>
        </div>
    </nav>
    <?php
    $hal = 1; // Default halaman 1
    if (isset($_GET['hal'])) {
        $hal = $_GET['hal'];
    }

    $maxtampil = 3; // Jumlah data yang ditampilkan per halaman
    $dari = ($hal * $maxtampil) - $maxtampil;
    include 'koneksi.php';

    $data = mysqli_query($connect, "
    SELECT 
        nim, nama, jk, alamat, 
        CASE 
            WHEN studi = 'ik' THEN 'Ilmu Komputer'
            WHEN studi = 'ka' THEN 'Komputer Akuntansi'
            WHEN studi = 'mi' THEN 'Manajemen Informatika'
            ELSE 'Kode Tidak Dikenal'
        END AS studi,
        telp
    FROM data_mahasiswa
    ORDER BY nim ASC
    LIMIT $dari, $maxtampil
");
    ?>