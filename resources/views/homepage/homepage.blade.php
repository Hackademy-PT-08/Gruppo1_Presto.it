<x-layout>

    <section class="mb-lg-2" style="padding-top: 30px; ">
        <div class="container py-4">
          <div class="row align-items-center justify-content-center gy-3 py-3 text-lg-start text-center">
            <div class="col-lg-5 col-md-8 col-sm-10">
              <h1 class="ms-4 mb-2 pb-lg-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Scopri le migliori offerte per te e la tua casa</font></font></h1>
              <p class="ms-4 mb-lg-5 mb-4 fs-lg"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Registrati e crea i tuoi annunci in maniera completamente gratuita.</font></font></p>
              <div class="d-lg-flex d-none flex-sm-row flex-column justify-content-lg-start justify-content-center"><a class="btn btn-lg btn-outline-primary  me-sm-3 mb-sm-3 mb-2 " href="{{ route('announcements.index') }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Esplora tutti gli annunci</font></font></a><a class="btn btn-lg btn_primary btn-outline-primary mb-sm-3 mb-2" href="{{ route('announcements.create') }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Crea il tuo Annuncio</font></font></a></div>
            </div>
            {{-- Carousel items
                 --}}
            <div class="col-lg-6  offset-lg-1 ">
                <div id="carouselExampleInterval" class="carousel slide "  data-bs-ride="carousel">

                     <div class="carousel-inner px-2" tabindex="-1">
                      <div class="carousel-item active px-2" data-bs-interval="2000">
                        <img src="https://picsum.photos/300/200" class="d-block w-100 rounded" alt="...">
                         <div class="position-relative">
                            <div class="position-absolute bottom-0 w-100 mb-6  p-sm-4 p-3">
                                <div class="pt-2 px-sm-4 bg-white rounded ">
                                  <div class="row gx-5">
                                  <div class="col-sm-4 col-6 position-relative py-sm-3 py-2">
                                    <h6 class="mb-1 fs-sm fw-normal text-muted ">Offerta:</h6><span class="h6 mb-0">0.5 ETH</span>
                                  </div>
                                  <div class="col-sm-4 col-6 position-relative py-sm-3 py-2">
                                    <hr class="hr-vertical position-absolute start-0 top-0 ml-n4">
                                    <h6 class="mb-1 fs-sm fw-normal text-muted">Finisce tra:</h6><span class="h6 mb-0">18 hours</span>
                                  </div>
                                  <div class="col-sm-4 position-relative py-sm-3 py-2">
                                    <hr class="hr-vertical position-absolute start-0 top-0 ml-n4 d-sm-block d-none">
                                    <div class="d-flex align-items-center h-100"><a class="btn btn-sm btn-dark w-100" href="nft-single-auction-live.html">Vai all'annuncio</a></div>
                                  </div>
                                </div>
                            </div>
                            </div>
                         </div>


                      </div>
                      <div class="carousel-item px-2">
                        <img src="https://picsum.photos/300/200" class="d-block w-100 rounded" alt="...">
                        <div class="position-relative">
                            <div class="position-absolute bottom-0 w-100 mb-6  p-sm-4 p-3">
                                <div class="pt-2 px-sm-4 bg-white rounded ">
                                  <div class="row gx-5">
                                  <div class="col-sm-4 col-6 position-relative py-sm-3 py-2">
                                    <h6 class="mb-1 fs-sm fw-normal text-muted">Offerta:</h6><span class="h6 mb-0">0.5 ETH</span>
                                  </div>
                                  <div class="col-sm-4 col-6 position-relative py-sm-3 py-2">
                                    <hr class="hr-vertical position-absolute start-0 top-0 ml-n4">
                                    <h6 class="mb-1 fs-sm fw-normal text-muted">Finisce tra:</h6><span class="h6 mb-0">18 hours</span>
                                  </div>
                                  <div class="col-sm-4 position-relative py-sm-3 py-2">
                                    <hr class="hr-vertical position-absolute start-0 top-0 ml-n4 d-sm-block d-none">
                                    <div class="d-flex align-items-center h-100"><a class="btn btn-sm btn-dark w-100" href="nft-single-auction-live.html">Vai all'annuncio</a></div>
                                  </div>
                                </div>
                            </div>
                            </div>
                         </div>
                      </div>
                      <div class="carousel-item px-2">
                        <img src="https://picsum.photos/300/200" class="d-block w-100 rounded" alt="...">
                        <div class="position-relative">
                            <div class="position-absolute bottom-0 w-100 mb-6  p-sm-4 p-3">
                                <div class="pt-2 px-sm-4 bg-white rounded ">
                                  <div class="row gx-5">
                                  <div class="col-sm-4 col-6 position-relative py-sm-3 py-2">
                                    <h6 class="mb-1 fs-sm fw-normal text-muted">Offerta:</h6><span class="h6 mb-0">0.5 ETH</span>
                                  </div>
                                  <div class="col-sm-4 col-6 position-relative py-sm-3 py-2">
                                    <hr class="hr-vertical position-absolute start-0 top-0 ml-n4">
                                    <h6 class="mb-1 fs-sm fw-normal text-muted">Finisce tra:</h6><span class="h6 mb-0">18 hours</span>
                                  </div>
                                  <div class="col-sm-4 position-relative py-sm-3 py-2">
                                    <hr class="hr-vertical position-absolute start-0 top-0 ml-n4 d-sm-block d-none">
                                    <div class="d-flex align-items-center h-100"><a class="btn btn-sm btn-dark w-100" href="nft-single-auction-live.html">Vai all'annuncio</a></div>
                                  </div>
                                </div>
                            </div>
                            </div>
                         </div>
                      </div>
                    </div>



                    {{-- <div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                    </div> --}}

                </div>





            </div>
            <div class="d-lg-none d-flex flex-sm-row flex-column justify-content-lg-start justify-content-center"><a class="btn btn-lg btn-outline-primary  me-sm-3 mb-sm-3 mb-2" href="{{ route('announcements.index') }}">Esplora tutti gli annunci</a><a class="btn btn-lg btn-outline-primary  me-sm-3 mb-sm-3 mb-2" href="{{ route('announcements.create') }}">Crea il tuo Annuncio</a>
            </div>
          </div>
        </div>
      </section>

      <section id="latest">
        {{-- <h3 class="h3 text-center">Gli ultimi annunci</h3> --}}
        <div class="container">
          <div class="row">

            @forelse ($announcements as $announcement)
              <div class="col-12 col-md-4 mb-5">
                <x-card userId="{{ $announcement->user_id }}" image="https://picsum.photos/300/300"
                  title="{{ $announcement->title }}" description="{{ $announcement->description }}"
                  price="{{ $announcement->price }}" category="{{ $announcement->category->name }}"
                  hrefCategory="{{ route('searchByCategory', $announcement->category->id) }}"
                  hrefSingle="{{ route('announcements.single', $announcement->id) }}"
                  hrefModify="{{ route('announcements.edit', $announcement->id) }}" 
                  creator="{{$announcement->user->name}}"/>
              </div>

            @empty  

              <div class="col-12">
                <div class="alert alert-warning py-3 shadow">
                  <p class="lead">
                    Non ci sono annunci per questa ricerca
                  </p>
                </div>
              </div>
            @endforelse
          </div>
        </div>
      </section>
 
</x-layout>
