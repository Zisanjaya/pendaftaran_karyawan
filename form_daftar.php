<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    

    <link rel="stylesheet" href="form_daftar.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg position-sticky top-0 shadow bg-info">
      <div class="container">
      <img src="logo 2.png" alt="logo">
        <a class="navbar-brand" href="#"
          >Form Pendaftaraan Karyawan Mie Gacoan</a>
        
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="text-light" href="index.php">HOME</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section id="form" class="pb-4">
      <br /><br />
      <div class="container text-dark">
        <div
          class="row justify-content-center"
          data-aos="fade-up"
          data-aos-duration="1300"
        >
          <div class="col-md-6 pe-4 ps-4">
            <form action="proses-pendaftaran.php" method="POST">
              <div class="mb-3">
                <label for="nama" class="form-label">Nama lengkap :</label>
                <input
                  name="nama"
                  type="name"
                  class="form-control"
                  id="nama"
                  oninput="checkinput()"
                  aria-describedby="nama" required minlength="3"
                />
              </div>
              <div class="mb-3">
                <label for="alamat" class="form-label">Alamat :</label>
                <textarea
                  name="alamat"
                  class="form-control input"
                  id="alamat"
                  rows="3"
                  style="box-shadow: 0px 0px 10px #ccc"
                  placeholder="isi alamat anda" required minlength="9"
                ></textarea>
              </div>
              <div class="mb-3">
                <label for="jenis_kelamin" class="form-label"
                  >Jenis kelamin :</label
                >
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="jenis_kelamin"
                    value="Laki-laki"
                    id="flexRadioDefault1"
                  />
                  <label class="form-check-label" for="flexRadioDefault1">
                    laki-laki
                  </label>
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="jenis_kelamin"
                    value="Perempuan"
                    id="flexRadioDefault2"
                    checked
                  />
                  <label class="form-check-label" for="flexRadioDefault2">
                    perempuan
                  </label>
                </div>
              </div>
              <div class="mb-3">
                <label for="kerja_sebagai" class="form-label" required>Kerja sebagai :</label>
                <select
                  class="form-select"
                  aria-label="Default select example"
                  name="kerja_sebagai"
                >
                  <option selected>    </option>
                  <option value="Crew Gacoan">Crew Gacoan (CG)</option>
                  <option value="Store Crew">Store Crew (SC)</option>
                  <option value="Admin">Admin (A)</option>
                  <option value="Store Manager">Store Manager (SM)</option>
                  <option value="FL">Floor Leader (FL)</option>
                  <option value="Crew Kitchen">Crew Kitchen (CK)</option>
                  <option value="Waitress">Waitress (W)</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="lulusan" class="form-label"
                  >Lulusan</label
                >
                <input
                  name="lulusan"
                  type="text"
                  class="form-control"
                  id="lulusan"
                  aria-describedby="lulusan" required minlength="5"
                />
              </div>

              <div id="liveAlertPlaceholder"></div>
              <input
                class="btn btn-outline-primary"
                type="submit"
                value="Daftar"
                name="daftar"
                id="liveAlertBtn"
              />
            </form>
          </div>
        </div>
      </div>
      <br />
    </section>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
