<x-layout>




  <section class="mb-lg-2" style="padding-top: 30px; ">

    <div class="container py-4">
      <div class="row align-items-center justify-content-center gy-3 py-3 text-lg-start text-center">
        <div class="col-lg-5 col-md-8 col-sm-10">
          <h1 class="mb-2 pb-lg-2">Scopri le migliori offerte per te e la tua casa</h1>
          <p class="mb-lg-5 mb-4 fs-lg">Registrati e crea i tuoi annunci in maniera completamente gratuita.</p>
          <div class="d-lg-flex d-none flex-sm-row flex-column justify-content-lg-start justify-content-center">
            <a class="btn btn-primary me-sm-3 mb-sm-3 mb-2 " href="{{ route('announcements.index') }}">Esplora tutti gli
              annunci</a>
            <a class="btn btn-outline-primary mb-sm-3 mb-2" href="{{ route('announcements.create') }}">Crea il tuo
              Annuncio</a>
          </div>
        </div>
        {{-- Carousel items
                 --}}
        <div class="col-lg-6 offset-lg-1 ">
          <div id="carouselExampleInterval" class="carousel slide " data-bs-ride="carousel">

            <div class="carousel-inner px-2" tabindex="-1">
              @foreach ($random_announcements as $random_announcement)
                <div class="carousel-item @if($loop->first) active @endif px-2" data-bs-interval="2000">
                  <img src="{{  $random_announcement->images()->first()->getUrl(400,300)}}" class="d-block w-100 rounded" alt="...">
                  <div class="position-relative">
                    <div class="position-absolute bottom-0 w-100 mb-6  p-sm-4 p-3">
                      <div class="pt-2 px-sm-4 bg-white rounded ">
                        <div class="row gx-5">
                          <div class="col-sm-4 col-6 position-relative py-sm-3 py-2">
                            <h6 class="mb-1 text-muted small">Titolo</h6><span class="h6 mb-0">{{ $random_announcement->title }}</span>
                          </div>
                          <div class="col-sm-4 col-6 position-relative py-sm-3 py-2">
                            <hr class="hr-vertical position-absolute start-0 top-0 ml-n4">
                            <h6 class="mb-1 text-muted small">Categoria</h6><span class="h6 mb-0">{{ $random_announcement->category->name }}</span>
                          </div>
                          <div class="col-sm-4 position-relative py-sm-3 py-2">
                            <hr class="hr-vertical position-absolute start-0 top-0 ml-n4 d-sm-block d-none">
                            <div class="d-flex align-items-center h-100">
                              <a class="btn btn-sm btn-primary w-100" href="{{ route('announcements.single', $random_announcement->id) }}">Vai all'annuncio</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
        <div class="d-lg-none d-flex flex-sm-row flex-column justify-content-lg-start justify-content-center">
          <a class="btn btn-primary me-sm-3 mb-sm-3 mb-2" href="{{ route('announcements.index') }}">Esplora tutti gli
            annunci</a>
          <a class="btn btn-outline-primary me-sm-3 mb-sm-3 mb-2" href="{{ route('announcements.create') }}">Crea il tuo
            Annuncio</a>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-secondary py-4">
    <div class="container">
    <h2>Gli ultimi arrivi</h5>
      <div class="row">
        <div class="owl-carousel owl-theme">

          @foreach ($revised_announcements as $announcement)
            <div class="item">
              <x-card userId="{{ $announcement->user_id }}" image="{{$announcement->images()->first()->getUrl(400,300)}}"
                title="{{ $announcement->title }}" description="{{ $announcement->description }}"
                price="{{ $announcement->price }}" category="{{ $announcement->category->name }}"
                hrefCategory="{{ route('searchByCategory', $announcement->category->id) }}"
                hrefSingle="{{ route('announcements.single', $announcement->id) }}"
                hrefModify="{{ route('announcements.edit', $announcement->id) }}"
                creator="{{ $announcement->user->name }}" />
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>



</x-layout>
