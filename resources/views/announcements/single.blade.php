<x-layout>
  {{-- <div class="container mt-5">
        <div class="row">
            <div class="col-6">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner rounded">
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/300/300" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/300/300" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-6">
                <span class="badge text-bg-primary mb-3">{{ $announcement->category->name }}</span>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $announcement->title }}</h5>
                        <p class="card-text">{{ $announcement->description }}</p>
                        <p class="card-text">{{ $announcement->price }}€</p>
                        @if (Auth::user() && Auth::user()->id == $announcement->user_id)
                            <a href="{{ route('announcements.edit', $announcement->id) }}"
                                class="btn btn-primary">Modifica</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div> --}}

  {{-- <div class="container mb-5 pb-3">
        <div class="bg-light shadow-lg rounded-3 overflow-hidden">
          <div class="row">
            <!-- Sidebar-->
            <section class="content col-lg-5 pt-lg-4 pb-4 mb-3">

                <!-- Sezione informazioni -->

                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://picsum.photos/300/250" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://picsum.photos/300/250" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://picsum.photos/300/250" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>

              </section>
            <!-- Content-->
            <section class="content col-lg-7 pt-lg-4 pb-4 mb-3">

                <div class="pt-2 px-4 ps-lg-0 pe-xl-5">
                    <h1 class="h3 mb-4 pt-2 text-center text-sm-start">Informazioni</h1>
                </div>


                </div>



            </section>
          </div>
        </div>
      </div> --}}
  {{-- sezione titolo --}}
  <div class="page-title-overlap bg-primary pt-4">
    <div class="container">
      <div class=" text-center">
        <h1 class=" text-light">Annuncio corrente</h1>
      </div>
    </div>
  </div>
  {{-- sezione articolo --}}
  <section class="container pb-md-4">
    <div class="bg-light shadow-lg rounded-3 px-4 py-lg-4 py-3 mb-5">
      <div class="py-lg-3 py-2 px-lg-3">
        <div class="row gy-4">
          {{-- imag --}}
          <div class="col-lg-6">
            <div class="position-relative rounded-3 overflow-hidden mb-lg-4 mb-3 "><img class="w-100 rounded "
                src="https://picsum.photos/400/300"></div>
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
              <div class="col">
                <h3 class="h6 mb-2 fs-sm text-muted">Categoria</h3>
                <h2 class="h3 mb-1"> {{ $announcement->category->name }}</h2>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>

    </div>

  </section>








</x-layout>
