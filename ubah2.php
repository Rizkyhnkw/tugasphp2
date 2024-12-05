<?php
$page = $_GET['page'] ?? 'home';
$title = ucfirst($page);

include 'header.php';
include 'koneksi.php';

// Validasi parameter nim
$nim = $_GET['nim'] ?? null;
if ($nim === null) {
    echo '<script>alert("Parameter NIM tidak ditemukan!"); window.location.href="ubah.php";</script>';
    exit();
}

if (isset($_POST["btnEdit"])) {
    $update = mysqli_query($connect, "UPDATE data_mahasiswa SET 
        nama='$_POST[nama]', 
        jk='$_POST[jk]', 
        alamat='$_POST[alamat]', 
        studi='$_POST[studi]', 
        telp='$_POST[telp]' 
        WHERE nim='$_POST[nim]'");

    if ($update) {
        echo '<script>alert("Data berhasil diubah!"); window.location.href="ubah.php";</script>';
    } else {
        echo '<script>alert("Data gagal diubah!"); window.location.href="ubah.php";</script>';
        exit();
    }
}

$cek = mysqli_query($connect, "SELECT * FROM data_mahasiswa WHERE nim='$nim'");
if ($cek && mysqli_num_rows($cek) >= 1) {
    $data = mysqli_fetch_assoc($cek);
?>

<div class="container mt-5 border" >
    <h3 class="mx-2 mb-4 ">PROGRAM APLIKASI UBAH DATA</h3>
<form action="ubah2.php?nim=<?= $nim; ?>" method="POST" class="container mt-5">
    <input type="hidden" name="nim" value="<?= $data['nim']; ?>">

    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" id="nama" name="nama" class="form-control" value="<?= $data['nama']; ?>" required>
    </div>

    <div class="mb-3">
        <label for="jk" class="form-label">Jenis Kelamin</label>
        <select id="jk" name="jk" class="form-select" required>
            <option value="L" <?= $data['jk'] == 'L' ? 'selected' : ''; ?>>Laki-laki</option>
            <option value="P" <?= $data['jk'] == 'P' ? 'selected' : ''; ?>>Perempuan</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea id="alamat" name="alamat" class="form-control" rows="3" required><?= $data['alamat']; ?></textarea>
    </div>

    <div class="mb-3">
        <label for="studi" class="form-label">Program Studi</label>
        <select id="studi" name="studi" class="form-select" required>
            <option value="ik" <?= $data['studi'] == 'ik' ? 'selected' : ''; ?>>Ilmu Komputer</option>
            <option value="mi" <?= $data['studi'] == 'mi' ? 'selected' : ''; ?>>Manajemen Informatika</option>
            <option value="ka" <?= $data['studi'] == 'ka' ? 'selected' : ''; ?>>Komputer Akuntansi</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="telp" class="form-label">Telepon</label>
        <input type="text" id="telp" name="telp" class="form-control" value="<?= $data['telp']; ?>" required>
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-primary" name="btnEdit">Update Data</button>
        <a href="tampil.php" class="btn btn-secondary">Kembali</a>
    </div>
</form>
</div>

<?php
} else {
    echo "Data tidak ditemukan.";
}
include 'footer.php';
?>
