<?php
// Definisikan konstanta untuk koneksi ke database
define("HOST", "localhost");
define("USER", "root");
define("PASS", "Rizky666");
define("DB", "mahasiswa");

// Membuat koneksi ke database
$connect = mysqli_connect(HOST, USER, PASS);

if (!$connect) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$db = mysqli_select_db($connect, DB);
if (!$db) {
    die("Database gagal dipilih: " . mysqli_error($connect));
}