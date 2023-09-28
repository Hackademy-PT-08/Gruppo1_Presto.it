<x-layout-with-band type="annuncio">
  {{-- sezione articolo --}}
  <section class="container pb-md-4">
    <div class="bg-light shadow-lg rounded-3 px-4 py-lg-4 py-3 mb-4">
      <div class="py-lg-3 py-2 px-lg-3">
        <div class="row gy-4">
          {{-- imag --}}
          <div class="col-lg-6">
            <div class="position-relative rounded-3 overflow-hidden mb-lg-4 mb-3 ">

              <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
                <div class="carousel-inner">
                  @if (!$announcement->images)
                      <img src="https://picsum.photos/536/354" alt="immagine">
                  @else
                  @foreach ($announcement->images as $key=> $image)
                  <div class="carousel-item @if($loop->first) active @endif">
                    <img src="{{$image->getUrl(400,300)}} " class="d-block w-100" alt="immagine {{ $key + 1 }}">
                  </div>
                  @endforeach 
                  @endif


                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
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

            <div class="row">
              <div class="col-6 row border-end">
                <div class="col-md-3">
                  <div class="card-body">
                    <h5 class="tc-accent">Revisione immagini</h5>
                    @foreach ($announcement->images as $image)
                    <p>Adulti: <span class="{{  $image->adult}}"></span></p>
                    <p>Medicina: <span class="{{  $image->medical}}"></span></p>
                    <p>Satira: <span class="{{  $image->spoof}}"></span></p>
                    <p>Violenza: <span class="{{  $image->violence}}"></span></p>
                    <p>Contenuto Amiccante: <span class="{{  $image->racy}}"></span></p>
                    @endforeach
                  </div>
                </div>
              </div>
              <div class="col-6 row">
                <div class="col-md-3">
                  <h5 class="tc-accent mt-3">Tags</h5>

                 
                  
                     @foreach ($image->labels as $label)
                     
                     <p class="d-inline"> {{$label}} </p>
                     
                     @endforeach
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-layout-with-band>

