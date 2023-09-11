<x-layout-with-band type="dashboard">

  <div class="container dashboard mb-5 pb-3">
    <div class="bg-light shadow-lg rounded-3 overflow-hidden">
      <div class="row">
        <!-- Sidebar-->
        <x-dashboard-sidebar />
        <!-- Content-->
        <section class="col-lg-9 pt-lg-4 pb-4 mb-3">

          <div class="pt-2 px-4 ps-lg-0 pe-xl-5">
            <div>
              {{-- titolo --}}
              <div class="text-center">
                <h2 class="h3">{{ $announcement->title }}</h2>
              </div>
              <div class="d-flex aling-items-center justify-content-sm-between justify-content-center flex-wrap mb-sm-4 mb-3 mt-3">
                <div class="mb-2 me-sm-3 me-2 d-flex aling-items-center">
                  <p>creato il: {{ $announcement->created_at->format('d/m/Y') }}</p></div>
                <div>
                  <button class="btn btn-success mb-2 ms-2" type="button">
                    <i class="fa-solid fa-check me-2"></i>Accetta
                  </button>
                  <button class="btn btn-danger mb-2 ms-2 me-3" type="button">
                    <i class="fa-solid fa-xmark me-2"></i>Rifiuta
                  </button>
                </div>
                {{-- <div class="mb-2 me-sm-3 me-2 ps-sm-3 ps-2 border-start"><i class="fas fa-eye me-2"></i>15 views</div>
              <div class="mb-2 me-sm-3 me-2 ps-sm-3 ps-2 border-start"><i class="far fa-heart me-2"></i>4 favorite --}}
              </div>
            </div>

            <div class="row row-cols-md-2 row-cols-1 gy-3 gx-4 mb-4 pb-md-2">

              <div class="col">
                <div class="position-relative rounded-3 overflow-hidden mb-lg-4 mb-3 ">
                  <img class="w-100 rounded" src="https://picsum.photos/400/300">
                </div>
              </div>
              {{-- creator --}}
              <div class="col">

                <div class="row row-cols-1 gy-3 gx-4 mb-4 pb-md-2">
                  <div class="col creator">
                    <a href="{{ route('dashboard.user', $announcement->user->id) }}">
                      <div class="card position-relative h-100">
                        <div class="card-body p-3">
                          <div class="d-flex align-items-center">

                            <img class="rounded-circle me-2" src="https://picsum.photos/300/300" width="36">
                            <span>{{ $announcement->user->name }}</span>

                          </div>
                        </div>
                    </a>
                  </div>
                </div>

              </div>
              {{-- description --}}
              <div class="col">
                <p class="mb-4 pb-md-2 fs-sm"> {{ $announcement->description }} </p>
              </div>
              {{-- price --}}
              <div class="col">
                <h3 class="h6 mb-2 fs-sm text-muted">Prezzo</h3>
                <h2 class="h3 mb-1"> € {{ $announcement->price }}</h2>
              </div>
              {{-- category --}}
              <div class="col">
                <h3 class="h6 mb-2 fs-sm text-muted">Categoria</h3>
                <h2 class="h3 mb-1"> {{ $announcement->category->name }}</h2>
              </div>
            </div>

          </div>
      </div>

    </div>
    {{-- <p class="mb-4 pb-md-2 fs-sm"> {{ $announcement->description }} </p> --}}

    {{-- <div class="row row-cols-sm-2 row-cols-1 gy-3 mb-4 pb-md-2">
              <div class="col">
                <h3 class="h6 mb-2 fs-sm text-muted">Prezzo</h3>
                <h2 class="h3 mb-1"> € {{ $announcement->price }}</h2>
              </div>
              <div class="col">
                <h3 class="h6 mb-2 fs-sm text-muted">Categoria</h3>
                <h2 class="h3 mb-1"> {{ $announcement->category->name }}</h2>
              </div>
            </div> --}}
  </div>
  </div>
  </div>
  </section>
  </div>
  </div>
  </div>

</x-layout-with-band>
