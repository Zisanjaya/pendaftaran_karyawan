<?php

include("config.php");

if(isset($_POST['daftar'])){

    //ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $ks = $_POST['kerja_sebagai'];
    $lulusan = $_POST['lulusan'];

    //buat array
    
    $sql = "INSERT INTO calon_gaco (nama, alamat, jenis_kelamin, kerja_sebagai, lulusan) VALUE ('$nama', '$alamat', '$jk', '$ks', '$lulusan')";
    $query = mysqli_query($db, $sql);

    //apakah queery simpan berhasil?
    if( $query ) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }
} else {
    die("akses dilarang...");
}

?>