<?php 

include("config.php");

// kalau tidak ada id di query string
if (!isset($_GET['id']) ) {
    header('Location: list_siswa.php');
}

// ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_gaco WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang diedit tidak ditemukan
if ( mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link

      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"

      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"  
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    

    <link rel="stylesheet" href="form_edit.css">
    
    
    <title>Pendaftaran Karyawan baru | mie gacoan</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg position-sticky top-0 shadow bg-info">

      <div class="container">
  
        <a class="navbar-brand" href="#">Edit Form Pendaftaraan Calon Karyawan Gacoan</a>
      
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
              <li class="nav-item">
              <a class="nav-link" href="index.php">HOME</a>
              </li>
          </ul>
        </div>
      </div>
    </nav>

  <section id="form" class="pb-4">

    <br><br>

    <div class="container text-dark">
      
      <div class="row justify-content-center" data-aos="fade-up"
      data-aos-duration="1300">
        <div class="col-md-6 pe-4 ps-4">
          
          <form action="proses-edit.php"
          method="POST">
            <input type="hidden" name="id" value="<?php echo $siswa['id']?>"/>
            
            <div class="mb-3">
              <label for="nama" class="form-label">Nama lengkap</label>
              <input name="nama" type="name" class="form-control" id="nama" required minlength="3"
              aria-describedby="nama" value="<?php echo $siswa['nama']?>">
            </div>
            <div class="mb-3">
              <label for="alamat" class="form-label">Alamat</label>
              <textarea name="alamat" class="form-control input" id="alamat" rows="3"
              style="box-shadow: 0px 0px 10px #ccc;" placeholder="" <?php echo
              $siswa['alamat']?> ></textarea>
            </div>
            <div class="mb-3">
              <label for="jenis_kelamin" class="form-label">Jenis kelamin</label>
              <?php $jk = $siswa['jenis_kelamin']; ?>
            <div class="form-check">
                <input class="form-check-input" type="radio"
                name="jenis_kelamin" value="Laki-laki"   id="flexRadioDefault1"
                <?php echo ($jk == 'Laki-laki') ? "checked": ""?>>
                <label class="form-check-label" for="flexRadioDefault1">
                    laki-laki
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio"
                name="jenis_kelamin" value="Perempuan" id="flexRadioDefault2"
                checked  <?php echo ($jk == 'Perempuan') ? "checked": ""?>>
                <label class="form-check-label" for="flexRadioDefault2">
                    perempuan
                </label>
                </div>
            </div>
            <div class="mb-3">
              <label for="kerja_sebagai" class="form-label">kerja</label>
              <?php $ks = $siswa['kerja_sebagai'];?>
              <select class="form-select" aria-label="Default select example" name="kerja_sebagai">
                <option selected>Kerja sebagai</option>
                <option value="CG" <?php echo ($ks == 'CG') ? "selected":
                ""?>>Crew Gacoan (CG)</option>
                <option value="SC" <?php echo ($ks == 'SC') ?
                "selected": ""?>>Store Crew (SC)</option>
                <option value="A" <?php echo ($ks == 'A') ?
                "selected": ""?>>Admin (A)</option>
                <option value="SM" <?php echo ($ks == 'SM') ? "selected":
                ""?>>Store Manager (SM)</option>
                <option value="FL" <?php echo ($ks == 'FL') ? "selected":
                ""?>>Floor Leader (FL)</option>
                <option value="CK" <?php echo ($ks == 'CK') ?
                "selected": ""?>>Crew Kitchen (CK)</option>
                <option value="W" <?php echo ($ks == 'W') ?
                "selected": ""?>>Waitress (W)</option>
                </select>
            </div>
            <div class="mb-3">
              <label for="lulusan" class="form-label">Lulusan</label>
              <input name="lulusan" type="text" value="<?php echo $siswa['lulusan'] ?>" class="form-control" id="lulusan" required minlength="6"
              aria-describedby="lulusan">
            </div>

            
            <input class="btn" type="submit" value="Simpan"
            name="simpan">
          </form>
        </div>
      </div>
    </div>
    <br>
  </section>

    <script

      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"

      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
</body>
</html>