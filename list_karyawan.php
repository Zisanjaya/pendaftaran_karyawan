<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pendaftaran Karyawan baru | mie gacoan</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"  
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    

    <link rel="stylesheet" href="list_siswa.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg position-sticky shadow bg-info">
      <div class="container">
        <a class="navbar-brand" href="#">Form Pendaftaraan Karyawan Mie Gacoan</a>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                <a class="text-light" href="index.php">HOME</a>
                </li>
            </ul>
          </div>
      </div>
    </nav>



    <div class="judul text-center p-4">
        <h4>Nama karyawan yang sudah mendaftar</h4>
    </div>

    <br>
 
    <div class="tabel-karyawan d-flex justify-content-center">
    <table border="2" >
        <thead border="">
            <tr>
                <th>nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Kerja sebagai</th>
                <th>Lulusan</th>
            </tr>
        </thead>
        <tbody border="1">

            <?php
            $sql = "SELECT * FROM calon_gaco";
            $query = mysqli_query($db, $sql);

            while($siswa = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>".$siswa['nama']."</td>";
                echo "<td>".$siswa['alamat']."</td>";
                echo "<td>".$siswa['jenis_kelamin']."</td>";
                echo "<td>".$siswa['kerja_sebagai']."</td>";
                echo "<td>".$siswa['lulusan']."</td>";

                echo "<td>";
                echo "<a class='edit text-primary' href='form_edit.php?id=".$siswa['id']."'>edit </a>";
                echo "<a class='delete text-danger' id='btn-delete' href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
                echo "</td>";
            }
            ?>

        </tbody>
    </table>
    </div>

    

    <h5 class="text-center p-5">Jumlah Peserta: <?php echo mysqli_num_rows($query) ?></h5>


    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script>
        const hapus = document.getElementById('btn-delete');

hapus.addEventListener("click", e => {
    const konfirmasi = confirm('apakah Anda Yakin ingin menghapus akun ini?');
    if (konfirmasi == false) {
        e.preventDefault();
    }
});
    </script>

</body>
</html>