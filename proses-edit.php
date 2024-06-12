<?php 

include('config.php');

// cek apakah tombol simpan sudah diklik atau belum?
if (isset($_POST['simpan'])) {

    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $ks = $_POST['kerja_sebagai'];
    $lulusan = $_POST['lulusan'];

    // buat query update
    $sql = "UPDATE calon_gaco SET nama='$nama', alamat='$alamat', jenis_kelamin='$jk', kerja_sebagai='$ks', lulusan='$lulusan' WHERE id=$id";

    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if ($query) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: list_siswa.php');
    } else {
        // Kalau gagal tampilkan pesan
        die("Gagal Menyimpan perubahan");
    }
} else {
    die("Akses dilarang....");
}

?>