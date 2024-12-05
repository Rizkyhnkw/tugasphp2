<?php
$page = $_GET['page'] ?? 'home';
$title = ucfirst($page);

include 'header.php';
include 'koneksi.php';

$hal = 1; // Default halaman 1
if (isset($_GET['hal'])) {
    $hal = $_GET['hal'];
}

$maxtampil = 3; // Jumlah data yang ditampilkan per halaman
$dari = ($hal * $maxtampil) - $maxtampil;

// Menampilkan data mahasiswa dengan paginasi
$data = mysqli_query($connect, "SELECT * FROM data_mahasiswa ORDER BY nim ASC LIMIT $dari, $maxtampil");
if ($data) {
?>
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Daftar Mahasiswa</h2>
        <table class="table table-striped table-hover">
            <thead class="table-primary">
                <tr>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">JK</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Studi</th>
                    <th scope="col">Telp</th>
                    <th scope="col">Proses</th>               
                </tr>
            </thead>
            <tbody>
            <?php
            while ($hasil = mysqli_fetch_assoc($data)) {
            ?>
                <tr>
                    <td><?= $hasil['nim']; ?></td>
                    <td><?= $hasil['nama']; ?></td>
                    <td><?= $hasil['jk']; ?></td>
                    <td><?= $hasil['alamat']; ?></td>
                    <td><?= $hasil['studi']; ?></td>
                    <td><?= $hasil['telp']; ?></td>
                    <td>
                    <a href="hapus.php">Hapus</a>

                    </td>
                </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
    </div>
<?php
} else {
    echo "Query gagal: " . mysqli_error($connect);
}

// Menampilkan navigasi halaman
echo '<div class="container mt-4">';
echo '<h4>Halaman: </h4>';
$qrydata = mysqli_query($connect, "SELECT * FROM data_mahasiswa");

if ($qrydata) {
    $jumlahdata = mysqli_num_rows($qrydata);
    $totalhalaman = ceil($jumlahdata / $maxtampil);

    // Loop untuk membuat link halaman
    for ($i = 1; $i <= $totalhalaman; $i++) {
        // Menampilkan link dengan jarak antar halaman
        echo '<a href="tampil.php?hal=' . $i . '" class="btn btn-primary mx-1">' . $i . '</a>';
    }
} else {
    echo "Error: " . mysqli_error($connect);
}
echo '</div>';

include 'footer.php';
?>
