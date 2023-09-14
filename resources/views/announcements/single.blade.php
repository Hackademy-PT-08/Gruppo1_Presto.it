<x-layout-with-band type="annuncio">
  {{-- sezione articolo --}}
  <section class="container pb-md-4">
    <div class="bg-light shadow-lg rounded-3 px-4 py-lg-4 py-3 mb-4">
      <div class="py-lg-3 py-2 px-lg-3">
        <div class="row gy-4">
          {{-- imag --}}
          <div class="col-lg-6">
            <div class="position-relative rounded-3 overflow-hidden mb-lg-4 mb-3 ">
              <img class="w-100 rounded " src="https://picsum.photos/400/300">
            </div>
          </div>
          <div class="col-lg-6">
            <div>
              {{-- titolo --}}
              <div class="text-center">
                <h2 class="h3">{{ $announcement->title }}</h2>
              </div>
              <div class="d-flex aling-items-centre flex-wrap text-nowrap mb-sm-4 mb-3 small ">
                <div class="mb-2 me-sm-3 me-2">
                  <i class="fa-regular fa-calendar me-2"></i>
                  {{ $announcement->created_at->format('d/m/Y') }}
                </div>
                <div class="mb-2 me-sm-3 me-2">
                  <i class="fa-regular fa-user me-2"></i>
                  {{ $announcement->user->name }}
                </div>
                <div class="mb-2 me-sm-3 me-2">
                  <i class="fa-solid fa-car me-2"></i>
                  {{ $announcement->category->name }}
                </div>
              </div>
            </div>
            {{-- description --}}
            <p class="mb-4 pb-md-2 fs-sm"> {{ $announcement->description }} </p>
            <div class="row row-cols-sm-2 row-cols-1 gy-3 mb-4 pb-md-2">
              <div class="col">
                <h3 class="h6 mb-2 fs-sm text-muted">Prezzo</h3>
                <h2 class="h3 mb-1"> € {{ $announcement->price }}</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-layout-with-band>
