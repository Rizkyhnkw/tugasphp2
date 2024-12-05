<?php
require('koneksi.php');
$nim = $_GET['nim'];
$hapus = mysqli_query($connect, "DELETE FROM data_mahasiswa WHERE nim='$nim'");
if ($hapus) {
    echo '<script>alert("data berhasil dihapus!"); window.location.href="tampil.php";</script>';
} else {
    echo '<script>alert("data gagal dihapus!"); window.location.href="tampil.php";</script>';
}
