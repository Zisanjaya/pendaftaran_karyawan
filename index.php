<?php if(isset($_GET['status'])): ?>
    
    <?php
                if($_GET['status'] == 'sukses') {
                    echo "<div class='card text-bg-info mb-3 position-absolute top-50 start-50 translate-middle message' id='message' style='max-width: 18rem;'>
                    <div class='card-header text-center'>Berhasil!</div>
                    <div class='card-body justify-content-center'>
                      <h5 class='card-title text-center'>Data Sukses ditambahkan</h5>
                    </div>    
                  </div>";
                } else {
                    echo "<div class='card text-bg-danger mb-3 position-absolute top-50 start-50 translate-middle message' id='message' style='max-width: 18rem;'>
                    <div class='card-header text-center'>Gagal!</div>
                    <div class='card-body justify-content-center'>
                      <h5 class='card-title text-center'>Data Anda Gagal ditambahkan</h5>
                    </div>    
                  </div>";
                }
  
                ?>
   
    <?php endif; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pendaftaran Karyawan baru | mie gacoan</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"  
      <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Patrick+Hand&display=swap" rel="stylesheet">
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lacquer&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Lacquer&display=swap" rel="stylesheet">
    <style>
      * {
        margin: 0;
        padding: 0;
      }

      nav img {
        height: 50px;
        
      }

      .hero {
        background-image: url('mie gaco.jpg');
        height: 100vh;
        overflow: hidden;
        -webkit-mask-image: linear-gradient(
          rgb(255, 255, 255) 85%,
          rgba(255, 255, 255, 0)
        );
        
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        position: relative;
        opacity: 0.8;
        width: 100%;
        height: 500px;
        z-index: -9999;
        
      }

      .welcome {
        position: absolute;
      }

      .main {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 15px;
        height: 150px;
      }

      @media (max-width: 768px) {
        .hero {
          height: 200px; 
        }
      }
    
      .container .nav-item .nav-link{
        font-family: 'Merriweather Sans';
        font-size: 15px;
        font-weight: 400;
      }
      h4 {
        font-family: 'Amatic SC', cursive;
        font-size: 70px;
        font-weight: 20px;
        color: #FF00FF;
      }
      .fw-bold {
        font-family: PT sans;
      }
      footer {
        background-color: #DCDCDC;
      }
    </style>


  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-info navbar-dark fixed-top shadow">
      <div class="container">
        <img src="logo 2.png" alt="logo">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="https://miegacoan.com/">OUR PROFILE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="form_daftar.php">REGISTRATION</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="carousel pt-4">
      <div class="hero d-flex align-items-center justify-content-center text-light">
        </div>
    </section>

    <section class="daftar">
      <div class="container">
         <div class="row">

          <div class="col-md-6 d-flex justify-content-end">
  
            <a class="btn btn-info btn-center"
            href="form_daftar.php">Daftar
            Sekarang</a>
          </div>
          <div class="col-md-6 d-flex justify-content-start">
            <a class="btn btn-info btn-center"
  
            href="list_siswa.php">Lihat pendaftar</a>
          </div>
          
        </div>
      </div>
    </section>



    <section class="container">
      <div class="row p-4 pt-5 pb-5 mt-5 mb-5 justify-content-center">
        <div class="col-md-2 p-3">
          <img src="pangsit.jpg" class="w-100" alt="">
        </div>
        <div class="col-md-2 p-3 align-items-center">
          <img src="halal 1.png" class="w-100 align-items-center" alt="">
        </div>
        <div class="col-md-2 p-3">
          <img src="pangsit.jpg" class="w-100" alt="">
        </div>
      </div>
    </section>
    
    <section class="main bg-info text-light">
      <h4>Info loker bos!! ayo join</h4>
    </section>

    <footer class="bg- p-4 d-flex justify-content-center">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126736.63621606935!2d107.5524963904586!3d-6.9478339363538675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e92909b2a8fd%3A0x7af05d1fde0e5e38!2sMie%20Gacoan%20-%20Buah%20Batu!5e0!3m2!1sid!2sid!4v1716700355844!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </footer>










    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script>
      let message = document.querySelector('.message');
      const tes = setTimeout(() => {
        message.style.display = 'none';
      }, 2100);

     if (message) {
      tes();
     }
    </script>
  </body>
</html>
