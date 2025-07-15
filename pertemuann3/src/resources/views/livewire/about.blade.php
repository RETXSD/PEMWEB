<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>about</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <style>
    /* Mengatur latar belakang halaman */
    body {
      background-color: rgb(16, 39, 62); /* Warna latar belakang abu-abu terang */
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif; /* Menambahkan font keluarga */
    }

    /* Box-sizing untuk menghindari padding dan border menghitung keluar lebar dan tinggi elemen */
    *, *::before, *::after {
      box-sizing: border-box;
    }

    /* Memperindah card */
    .card {
      border: none;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      border-radius: 15px;
    }

    /* Styling untuk bagian header dan teks di dalam card */
    .card-body {
      background-color: #ffffff;
      padding: 30px;
      border-radius: 15px;
    }

    .card-body p, .card-body h5 {
      color: #343a40;
    }

    /* Gaya untuk bagian link personal */
    .list-group-item a {
      color: #343a40;
      font-size: 14px;
    }

    .list-group-item a:hover {
      color: #FFD700; /* Warna hover kuning */
    }

    /* Progress Bar */
    .progress {
      height: 8px;
      border-radius: 20px;
    }

    .progress-bar {
      height: 100%;
      line-height: 8px;
      text-align: center;
      border-radius: 20px;
    }

    /* Styling footer */
    footer {
      background-color: brown;
      color: white;
      padding: 10px;
    }

    footer p {
      margin: 0;
    }

    /* Styling untuk responsivitas */
    @media (max-width: 768px) {
      .card {
        margin-bottom: 20px;
      }

      .card-body {
        padding: 20px;
      }

      .list-group-item {
        font-size: 12px;
      }
    }

    /* Styling tambahan untuk card "About Me" */
    .about-card {
      margin-top: 40px;
      border-radius: 20px;
      overflow: hidden;
    }

    .about-card .card-body {
      padding: 20px;
    }

    .about-card .card-body p {
      line-height: 1.6;
      color: #6c757d;
    }
  </style>
</head>
<body>

<main>
  <!-- About Start -->
  <div class="container mb-4">
    <div class="card about-card">
      <div class="card-body text-center">
        <p class="lead fw-normal mb-2">About Me</p>
        <p>
          Halo! Saya adalah mahasiswa <strong>Universitas Esa Unggul</strong>, dari <strong>Fakultas Ilmu Komputer</strong> dengan program studi <strong>Sistem Informasi</strong>. Saat ini saya sedang menjalani <strong>semester 4</strong>. Di luar kegiatan akademik, saya memiliki hobi <strong>bermain badminton</strong> yang menjadi salah satu cara saya untuk tetap aktif dan sehat.
        </p>
      </div>
    </div>
  </div>
  <!-- About End -->

  <!-- Link Personal Start -->
  <div class="container mb-4">
    <div class="d-flex justify-content-center">
      <div class="card" style="width: 300px;">
        <div class="card-body p-0">
          <ul class="list-group list-group-flush text-center">
            <li class="list-group-item">
              <a href="https://esaunggul.ac.id" class="text-decoration-none">
                <i class="fa fa-globe me-2"></i>MY WEBSITE
              </a>
            </li>
            <li class="list-group-item">
              <a href="https://www.threads.net/@rianxd_11?xmt=AQGzir05dOd7Xi7191H2xorvFxeMwRuGFghYpB3jAmp4Nzg" class="text-decoration-none">
                <i class="fab fa-threads me-2"></i>MY THREADS
              </a>
            </li>
            <li class="list-group-item">
              <a href="https://github.com/" class="text-decoration-none">
                <i class="fab fa-github me-2"></i>MY GITHUB
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Link Personal End -->

  <!-- SKILL Start -->
  <div class="container mb-4">
    <div class="card">
      <div class="card-body">
        <h5 class="mb-4">MY Skills</h5>
        
        <p class="mb-1" style="font-size: .9rem;">HTML</p>
        <div class="progress rounded mb-3" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
          <div class="progress-bar bg-success" style="width: 70%;">70%</div>
        </div>

        <p class="mb-1" style="font-size: .9rem;">CSS</p>
        <div class="progress rounded mb-3" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
          <div class="progress-bar bg-info" style="width: 60%;">60%</div>
        </div>

        <p class="mb-1" style="font-size: .9rem;">Bahasa Inggris</p>
        <div class="progress rounded mb-3" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
          <div class="progress-bar bg-danger" style="width: 60%;">60%</div>
        </div>
      </div>
    </div>
  </div>
  <!-- SKILL End -->


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</main>

</body>
</html>
