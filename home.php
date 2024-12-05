<?php


$page = $_GET['page'] ?? 'home';
$title = ucfirst($page);

include 'header.php'; ?>

<div class="container my-5">
    <!-- Header Section -->
    <div class="text-center mb-4">
        <h2 class="fw-bold">TUGAS KULIAH</h2>
        <h3 class="text-secondary">PEMROGRAMAN WEB</h3>
    </div>

    <!-- Deskripsi Section -->
    <div class="text-center mb-5">
        <p class="fs-5">
            <b>
                Program Aplikasi Mahasiswa Baru ini dibuat dalam rangka <br> memenuhi syarat mengikuti UAS.
            </b>
        </p>
    </div>

    <!-- Informasi Mahasiswa Section -->
    <div class="d-flex justify-content-center align-items-center">
        <div class="card shadow" style="width: 25rem;">
            <div class="card-body">
                <h5 class="card-title text-center mb-4">Informasi Mahasiswa</h5>
                <p class="mb-2"><b>Nama:</b> Rizky Ramadhan</p>
                <p class="mb-2"><b>NIM:</b> 4123005</p>
                <p class="mb-2"><b>Program Studi:</b> Ilmu Komputer</p>
                <p class="mb-2"><b>Dosen:</b> Dosen: Gempa Hendratna, S.pd, M.Kom</p>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>