@php
use App\Models\Logo;
$logo = Logo::first();
@endphp

<!-- Navigation -->
<header class="navigation bg-tertiary">
  <nav class="navbar navbar-expand-xl navbar-light py-3">
    <div class="container d-flex justify-content-between align-items-center">

      <!-- HOME di paling kiri -->
      <a class="nav-link fw-bold me-auto" href="{{ route('home') }}">Home</a>

      <!-- LOGO di paling kanan -->
      <a class="navbar-brand ms-auto" href="{{ route('home') }}">
        <img loading="preload" decoding="async" class="img-fluid" width="160"
          src="{{ $logo->image ? asset('storage/' . $logo->image) : asset('front/images/default.png') }}"
          alt="Wallet">
      </a>

    </div>
  </nav>
</header>
