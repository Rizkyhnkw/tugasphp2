<?php


$page = $_GET['page'] ?? 'home';
$title = ucfirst($page);

include 'header.php'; ?>
<center>
    <h2>TUGAS KULIAH<br>PEMROGRAMAN WEB <br></h2>
</center>
<div>
    <center>
        <b>Program Aplikasi Mahasiswa Baru ini dibuat dalam rangka memenuhi syarat mengikut uas</b>
    </center>
</div>

<div class="d-flex justify-content-center align-items-center fw-bold">
    <div>
        <p class="m-1">Nama : Rizky Ramadhan</p>
        <p class="m-1">Nim: 4123005</p>
        <p class="m-1">Program Studi: Ilmu Komputer</p>
        <p class="m-1">Dosen: Gempa Hendratna, S.pd, M.Kom </p>
    </div>

</div>

<?php include 'footer.php'; ?>