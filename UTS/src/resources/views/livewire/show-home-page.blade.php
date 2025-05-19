@php
  use App\Models\PageConfig;
  $config = PageConfig::first();
@endphp

@php
  use App\Models\Product;
  $product = Product::orderBy('id')->get();
@endphp

<main>
  <section class="banner bg-tertiary position-relative overflow-hidden">
    <!-- Video Background -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: -1;">
      <video autoplay loop muted style="width: 100%; height: 100%; object-fit: cover;">
        <source src="{{ asset('video/background hitam.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>

    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="block text-center text-lg-start pe-0 pe-xl-5">
            <h1 class="text-capitalize mb-4" style="color: gold;">{{ $config->title ?? '' }}</h1>
            <p class="mb-4" style="color: chocolate">{{ $config->detail ?? '' }}</p>
            {{-- <a type="button" class="btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#applyLoan">
              See More <span style="font-size: 14px;" class="ms-2 fas fa-arrow-right"></span>
            </a> --}}
          </div>
        </div>
        <div class="col-lg-6">
          <div class="ps-lg-5 text-center">
            <img loading="lazy" decoding="async"
              src="{{ asset('storage/' . $config->image) }}"
              alt="banner image" 
              class="img-fluid rounded shadow-lg w-75"
              style="max-height: 400px; object-fit: cover;">
          </div>
        </div>
      </div>
    </div>

    <!-- SVG Shapes -->
    <div class="has-shapes">
      <!-- (SVG code here is unchanged, already in your previous input) -->
      <!-- You can keep the SVG as is, or remove if not needed -->
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="section-title pt-4">
            <h1>Data Barang</h1>
          </div>
        </div>
      </div>

      <div class="row">
        @foreach ($product as $index => $item)
          <div class="col-lg-4 col-md-6 mb-4">
            <a class="text-black text-decoration-none" href="#">
              <div class="block p-3 border rounded shadow-sm h-100">
                <span class="colored-box text-center h3 mb-3 d-block">
                  {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                </span>

                @if ($item->image)
                  <div class="overflow-hidden rounded-lg shadow-lg mb-3" style="max-height: 300px;">
                    <img loading="lazy" decoding="async"
                      src="{{ asset('storage/' . $item->image) }}"
                      alt="product image"
                      class="img-fluid w-100"
                      style="object-fit: cover; max-height: 300px;">
                  </div>
                @endif

                <h5 class="mb-2">{{ $item->name }}</h5>
                <p>{{ $item->description }}</p>
              </div>
            </a>
          </div>
        @endforeach
      </div>
    </div>
  </section>
</main>
