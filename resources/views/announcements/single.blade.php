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
                    {{-- description --}}
                    <div class="col-lg-6">
                        <div class="ps-xl-5 ps-lg-3">
                            {{-- titolo --}}
                            <div class="text-center">
                                <h2 class="h3" >Titolo del prodotto</h2>
                            </div>
                            <div class="d-flex aling-items-centre flex-wrap text-nowrap mb-sm-4 mb-3 fs-sm ">
                                <div class="mb-2 me-sm-3 me-2">Publicato il 3/04/1993</div>
                                <div class="mb-2 me-sm-3 me-2 ps-sm-3 ps-2 border-start"><i
                                        class="fas fa-eye me-2"></i>15 views</div>
                                <div class="mb-2 me-sm-3 me-2 ps-sm-3 ps-2 border-start"><i
                                        class="far fa-heart me-2"></i>4 favorite</div>
                            </div>

                            <div class="row row-cols-sm-2 row-cols-1 gy-3 gx-4 mb-4 pb-md-2">
                                {{-- creators --}}
                                <div class="col">
                                    <div class="card position-relative h-100">
                                        <div class="card-body p-3">
                                            <h3 class="h6 mb-2 fs-sm text-muted">Creator</h3>
                                            <div class="d-flex align-items-center">
                                              <img class="rounded-circle me-2" src="https://picsum.photos/300/300" width="36">
                                              <a class="ms-2" href="">@foxnet_creator</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- revisor --}}
                                <div class="col">
                                    <div class="card position-relative h-100">
                                      <div class="card-body p-3">
                                        <h3 class="h6 mb-2 fs-sm text-muted">Revisor</h3>
                                        <div class="d-flex align-items-center"><img class="rounded-circle me-2" src="https://picsum.photos/300/300" width="36""><a class="ms-2 " href="nft-catalog-v2.html">Cartzilla art collage</a></div>
                                      </div>
                                    </div>
                                </div>

                        </div>
                        <p class="mb-4 pb-md-2 fs-sm">Hendrerit interdum sit massa lobortis. Habitant faucibus lorem dui mauris. Pellentesque nunc, tortor quam consequat odio. Sed faucibus id rhoncus, scelerisque tristique ultricies nam.</p>

                        <div class="row row-cols-sm-2 row-cols-1 gy-3 mb-4 pb-md-2">
                            <div class="col">
                              <h3 class="h6 mb-2 fs-sm text-muted">Prezzo</h3>
                              <h2 class="h3 mb-1">da collegare</h2>
                            </div>
                            <div class="col">
                                <h3 class="h6 mb-2 fs-sm text-muted">Categoria</h3>
                                <h2 class="h3 mb-1"> da collegare</h2>
                            </div>
                          </div>
                    </div>

                </div>


            </div>

        </div>

    </section>








</x-layout>
