<?php


$page = $_GET['page'] ?? 'home';
$title = ucfirst($page);

include 'header.php';
include 'koneksi.php';

if (isset($_POST["simpanData"])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $studi = $_POST['studi'];
    $telp = $_POST['telp'];

    // Cek apakah nim sudah terdaftar
    $cek = mysqli_query($connect, "SELECT * FROM data_mahasiswa WHERE nim='$nim'");
    if (mysqli_num_rows($cek) >= 1) {
        echo "NIM telah terdaftar <br>";
    } else {
        // Validasi input
        if ($nim == '') {
            echo 'NIM belum diisi<br>';
        }
        if ($nama == '') {
            echo 'Nama belum diisi<br>';
        }
        if ($jk == '') {
            echo 'Jenis kelamin belum diisi<br>';
        }
        if ($alamat == '') {
            echo 'alamat belum diisi<br>';
        }
        if ($studi == '') {
            echo 'studi belum diisi<br>';
        }
        if ($telp == '') {
            echo 'telp belum diisi<br>';
        }

        // Jika semua input valid, masukkan data ke database
        if ($nim != '' && $nama != '' && $jk != '' && $alamat != '' && $studi != '' && $telp != '') {
            $insert = mysqli_query($connect, "INSERT INTO data_mahasiswa (nim, nama, jk, alamat, studi, telp) VALUES ('$nim', '$nama', '$jk','$alamat', '$studi', '$telp')");

            if ($insert) {
                echo '<script>alert("data berhasil ditambahkan!"); window.location.href="tambah.php";</script>';
            } else {
                echo "Data gagal dimasukkan: " . mysqli_error($connect);
            }
        }
    }
}
?>

<div class="container mt-5 border" >
    <h3 class="mx-2 mb-4 ">PROGRAM APLIKASI TAMBAH DATA</h3>
    <div class="mx-5 mb-4">
        <form action="tambah.php" method="POST" class="container mt-5">
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" id="nim" name="nim" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" id="nama" name="nama" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" id="alamat" name="alamat" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="telp" class="form-label">Telephone</label>
                <input type="text" id="telp" name="telp" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="jkL" name="jk" value="L" required>
                        <label class="form-check-label" for="jkL">Laki-Laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="jkP" name="jk" value="P" required>
                        <label class="form-check-label" for="jkP">Perempuan</label>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Program Studi</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="studiIK" name="studi" value="ik" required>
                        <label class="form-check-label" for="studiIK">Ilmu Komputer</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="studiMI" name="studi" value="mi" required>
                        <label class="form-check-label" for="studiMI">Manajemen Informatika</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="studiKA" name="studi" value="ka" required>
                        <label class="form-check-label" for="studiKA">Komputer Akuntansi</label>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <button type="submit" name="simpanData" class="btn btn-primary">Simpan</button>
            </div>
        </form>

    </div>
</div>

</body>

</html>
<?php include 'footer.php'; ?>