@php
    use App\Models\PageConfig;
    use App\Models\Logo;

    $logo = logo::first();
    $config = PageConfig::first();
@endphp


<body>
  <main>
    <!-- Banner Section -->
    <section class="banner" style="position: relative; overflow: hidden; padding: 80px 0;">
      <!-- Video Background -->
      <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: -1;">
        <video autoplay loop muted style="width: 100%; height: 100%; object-fit: cover;">
          <!-- Menggunakan asset() untuk mengakses video di folder public -->
          <source src="{{ asset('video/background hitam.mp4') }}" type="video/mp4">
          Your browser does not support the video tag.
        </video>
      </div>

      <div class="container">
        <div class="row align-items-center justify-content-center text-white flex-row-reverse">

          <!-- Kolom Kanan: Tulisan -->
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="text-center text-lg-start ps-lg-5">
              <h1 class="mb-4" style="color: #FFFFFF; font-weight: 700;">{{ $config->title ?? '' }}</h1>
              <p class="mb-4" style="font-size: 18px; color: #FFD700;">{{ $config->detail ?? '' }}
              </p>
              <a type="button"
                class="btn"
                href="#"
                data-bs-toggle="modal"
                data-bs-target="#applyLoan"
                id="playSoundButton"
                style="background-color: #FFD700; color: #004AAD; font-weight: bold; border: none;">
                pencet aku dong
                <span style="font-size: 14px;" class="ms-2 fas fa-arrow-right"></span>
              </a>
            </div>
          </div>

          <!-- Kolom Kiri: Gambar -->
          <div class="col-lg-6">
            <div class="text-center pe-lg-5">
              <img 
                loading="lazy" 
                decoding="async"
                src="{{ $config->image ? asset('storage/' . $config->image) : asset('front/images/default.png') }}"
                alt="banner image"
                class="img-fluid rounded shadow-lg"
                style="border: 4px solid #FFD700;">
            </div>
          </div>
        </div>
      </div>

      <!-- Audio Element -->
      <audio id="clickSound" src="{{ asset('audio/chuaks.mp3') }}" preload="auto"></audio>

      <!-- Hiasan SVG -->
      <div class="position-absolute top-0 start-0 w-100 h-100" style="pointer-events: none;">
        <!-- Tambahin shape SVG atau gradient efek di sini kalau mau -->
      </div>

      <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="section-title pt-4">
          <p class="text-primary text-uppercase fw-bold mb-3">Our Services</p>
          <h1>Our online services</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipreiscing elit. Lacus penatibus tincidunt</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 service-item">
        <a class="text-black" href="service-details.html">
          <div class="block"> <span class="colored-box text-center h3 mb-4">01</span>
            <h3 class="mb-3 service-title">Digital Marketing</h3>
            <p class="mb-0 service-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
              eirmod</p>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-md-6 service-item">
        <a class="text-black" href="service-details.html">
          <div class="block"> <span class="colored-box text-center h3 mb-4">02</span>
            <h3 class="mb-3 service-title">Web Design</h3>
            <p class="mb-0 service-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
              eirmod</p>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-md-6 service-item">
        <a class="text-black" href="service-details.html">
          <div class="block"> <span class="colored-box text-center h3 mb-4">03</span>
            <h3 class="mb-3 service-title">SEO</h3>
            <p class="mb-0 service-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
              eirmod</p>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-md-6 service-item">
        <a class="text-black" href="service-details.html">
          <div class="block"> <span class="colored-box text-center h3 mb-4">04</span>
            <h3 class="mb-3 service-title">Logo Design</h3>
            <p class="mb-0 service-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
              eirmod</p>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-md-6 service-item">
        <a class="text-black" href="service-details.html">
          <div class="block"> <span class="colored-box text-center h3 mb-4">05</span>
            <h3 class="mb-3 service-title">Graphic Design</h3>
            <p class="mb-0 service-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
              eirmod</p>
          </div>
        </a>
      </div>
    </div>
  </div>
    </section>
  </main>


  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // Mendapatkan elemen tombol dan audio
    const playSoundButton = document.getElementById('playSoundButton');
    const clickSound = document.getElementById('clickSound');

    // Menambahkan event listener untuk memainkan suara saat tombol diklik
    playSoundButton.addEventListener('click', () => {
      clickSound.play(); // Memutar suara
    });
  </script>
</body>
