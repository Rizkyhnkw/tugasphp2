<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        /* Pastikan body memiliki tinggi layar penuh */
        html, body {
            height: 100%;
        }

        /* Atur tinggi minimum konten agar footer terdorong ke bawah */
        .content-wrapper {
            min-height: calc(100vh - 56px); /* 56px adalah tinggi navbar */
            display: flex;
            flex-direction: column;
        }

        /* Footer tetap berada di bawah */
        footer {
            margin-top: auto; /* Mendorong footer ke bawah */
        }
    </style>
</head>

<body class="d-flex flex-column">
    <nav class="navbar navbar-expand-lg bg-primary py-4">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">lorem</a>
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
   