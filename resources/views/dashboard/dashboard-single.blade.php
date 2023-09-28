<x-layout-with-band type="dashboard">

  <div class="container dashboard mb-5 pb-3">
    <div class="bg-light shadow-lg rounded-3 overflow-hidden">
      <div class="row">
        <!-- Sidebar-->
        <x-dashboard-sidebar announcementToRevisedCount="{{ $announcements_to_revised_count }}"
          requestsCount="{{ $requests_count }}" usersCount="{{ $revisors_count }}" />
        <!-- Content-->
        <section class="col-lg-9 pt-lg-4 pb-4 mb-3">
          <div class="pt-2 px-4 ps-lg-0 pe-xl-5">
            <div>
              {{-- titolo --}}
              <div class="text-center">
                <h2 class="h3">{{ $announcement->title }}</h2>
              </div>
              <div
                class="d-flex aling-items-center justify-content-sm-between justify-content-center flex-wrap mb-sm-4 mb-3 mt-3">
                <div class="mb-2 me-sm-3 me-2 d-flex aling-items-center small">
                  <p>
                    <i class="fa-regular fa-calendar me-2"></i>
                    <span>{{ $announcement->created_at->format('d/m/Y') }}</span>
                  </p>
                  <p>
                    <a class="border-start ms-2 ps-2 user"
                      href="{{ route('dashboard.user', $announcement->user->id) }}">
                      <i class="fa-regular fa-user me-2"></i>
                      <span>{{ $announcement->user->name }}</span>
                    </a>
                  </p>
                </div>
                <div>
                  <a class="btn btn-sm btn-success mb-2"
                    onclick="event.preventDefault();getElementById('form-accept-announcement').submit()">
                    <i class="fa-solid fa-check me-2"></i>{{__('dash.accept')}}
                  </a>
                  <form action="{{ route('dashboard.accept-announcement', $announcement->id) }}" method="post"
                    class="d-none" id="form-accept-announcement">
                    @csrf
                    @method('PATCH')
                  </form>
                  <a class="btn btn-sm btn-danger mb-2 ms-2 me-3"
                    onclick="event.preventDefault();getElementById('form-reject-announcement').submit()">
                    <i class="fa-solid fa-xmark me-2"></i>{{__('dash.reject')}}
                  </a>
                  <form action="{{ route('dashboard.reject-announcement', $announcement->id) }}" method="post"
                    class="d-none" id="form-reject-announcement">
                    @csrf
                    @method('PATCH')
                  </form>
                </div>
              </div>
            </div>

            <div class="row row-cols-md-2 row-cols-1 gy-3 gx-4 mb-4 pb-md-2">

              <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
                <div class="carousel-inner">

                  @foreach ($announcement->images as $key => $image)
                    <div class="carousel-item @if ($loop->first) active @endif">
                      <img src="{{ $image->getUrl(400, 300) }} " class="d-block w-100"
                        alt="immagine {{ $key + 1 }}">
                    </div>
                  @endforeach

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide"
                  data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide"
                  data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              {{-- creator --}}
              <div class="col">

                {{-- description --}}
                <div class="col">
                  <p class="mb-4 pb-md-2 fs-sm"> {{ $announcement->description }} </p>
                </div>
                {{-- price --}}
                <div class="col">
                  <h3 class="h6 mb-2 fs-sm text-muted">{{__('dash.price')}}</h3>
                  <h2 class="h3 mb-1"> € {{ $announcement->price }}</h2>
                </div>
                {{-- category --}}
                <div class="col">
                  <h3 class="h6 mb-2 fs-sm text-muted">{{__('dash.category')}}</h3>
                  <h2 class="h3 mb-1"> {{ $announcement->category->name }}</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="row pt-2 px-4 ps-lg-0 pe-xl-5">
            <span class="h5 mb-3">Google Helper</span>
            <div class="col-md-6">
              <div class="card-body">
                <h5 class="h6 mb-2 fs-sm text-muted">Revisione immagini</h5>
                @foreach ($announcement->images as $image)
                  <p class="small"><span class="small {{ $image->adult }}"></span> Adulti</p>
                  <p class="small"><span class="small {{ $image->medical }}"></span> Medicina</p>
                  <p class="small"><span class="small {{ $image->spoof }}"></span> Satira</p>
                  <p class="small"><span class="small {{ $image->violence }}"></span> Violenza</p>
                  <p class="small"><span class="small {{ $image->racy }}"></span> Contenuto Amiccante</p>
                @endforeach
              </div>
            </div>
            <div class="col-md-6">
              <h5 class="h6 mb-2 fs-sm text-muted">Tags</h5>

              {{-- @dd($announcement->images); --}}
              @foreach ($announcement->images as $image)
                @foreach ($image->labels as $label)
                  <p class="d-inline small me-1"> {{ $label }} </p>
                @endforeach
              @endforeach
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>

</x-layout-with-band>
