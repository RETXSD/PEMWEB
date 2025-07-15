<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <style>
    /* Mengatur latar belakang halaman */
    body {
      background-color: #f8f9fa; /* Warna latar belakang abu-abu terang */
    }

    /* Menambahkan hover effect dengan warna kuning pada nama profil */
    .card-body h5:hover {
      color: #FFD700; /* Warna kuning */
      cursor: pointer;
    }

    /* Memperindah card */
    .card {
      border: none;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      border-radius: 15px;
    }

    .card-body {
      background-color: #ffffff;
      padding: 30px;
      border-radius: 15px;
    }

    /* Gambar profil */
    .card-body img {
      border: 4px solid #FFD700; /* Border kuning */
      border-radius: 50%;
    }

    /* Styling tombol di bawah profil */
    .card-body p {
      color: #6c757d; /* Warna teks abu-abu */
    }

    .card-body h5 {
      color: #343a40; /* Warna teks gelap */
      font-weight: bold;
      font-size: 24px;
    }
  </style>
</head>
<body>

  <main>
    <!-- Profile Start -->
    <div class="container mb-4">
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <div class="card text-center">
            <div class="card-body">
              <div class="mt-3 mb-4">
                <img src="{{ asset('image/LOGO-ZEF.webp') }}" alt="Profile" class="rounded-circle img-fluid" style="width: 150px;" />
              </div>
              <h5 class="my-3">Cornelius Adrian Putra</h5>
              <p class="text-muted mb-1">Fakultas Ilmu Komputer</p>
              <p class="text-muted mb-1">Sistem Informasi</p>
              <p class="text-muted mb-1">NIM : 20230803026</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Profile End -->
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>