<div class="page-title-overlap bg-primary pt-4">
  <div
    class="container d-flex flex-wrap flex-sm-nowrap justify-content-center justify-content-sm-between align-items-center mb-2 pt-2">
    @if ($type == 'profile' && Auth::user())
      <div class="d-flex align-items-center">
        <div class="img-thumbnail rounded-circle position-relative flex-shrink-0" style="width: 6.375rem;">
          <img class="rounded-circle" src="https://picsum.photos/90/90" alt="Immagine di {{ Auth::user()->name }}">
        </div>
        <div class="ps-3">
          <h3 class="h5 mb-2 text-light">{{ Auth::user()->name }}</h3><span
            class="d-block text-light fs-sm opacity-60">Con noi da
            {{ Auth::user()->created_at->toFormattedDateString() }}</span>
        </div>
      </div>
    @elseif ($type == 'annuncio')
      <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
            <li class="breadcrumb-item">
              <a class="text-nowrap" href="{{ route('homepage') }}"><i class="fa-solid fa-house me-2"></i>Home</a>
            </li>
            <li class="breadcrumb-item text-nowrap"><a href="{{ route('announcements.index') }}">Annunci</a>
            </li>
            <li class="breadcrumb-item text-nowrap active text-white" aria-current="page">Questo prodotto </li>
          </ol>
        </nav>
      </div>
    @endif


  </div>
</div>
