@if ($type == 'profile' && Auth::user())
  <div class="page-title-overlap bg-primary pt-4">
    <div
      class="container d-flex flex-wrap flex-sm-nowrap justify-content-center justify-content-sm-between align-items-center mb-2 pt-2">
      <div class="d-flex align-items-center">
        <div class="img-thumbnail rounded-circle position-relative flex-shrink-0" style="width: 6.375rem;">
          <img class="rounded-circle" src="https://picsum.photos/90/90" alt="Immagine di {{ Auth::user()->name }}">
        </div>
        <div class="ps-3">
          <h3 class="h5 mb-2 text-light">{{ Auth::user()->name }}</h3><span class="d-block text-light small">Con noi dal
            {{ Auth::user()->created_at->format('d/m/Y') }}</span>
        </div>
      </div>
    </div>
  </div>
@elseif ($type == 'annuncio')
  <div class="page-title-overlap bg-primary pt-4">
    <div
      class="container d-flex flex-wrap flex-sm-nowrap justify-content-center justify-content-sm-between align-items-center mb-2 pt-2">
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
    </div>
  </div>
@elseif ($type == 'basic')
  <div class="page-title-overlap bg-primary pt-4">
    <div class="container d-flex flex-wrap flex-sm-nowrap justify-content-center justify-content-sm-between align-items-center mb-2 pt-2">
      <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
        <h1 class="text-white">@if(isset($title)){{ $title }}@endif</h1>
      </div>
    </div>
  </div>
@elseif ($type == 'dashboard')
  <div class="page-title-overlap bg-primary dashboard pt-4">
    <div
      class="container d-flex flex-wrap flex-sm-nowrap justify-content-center justify-content-sm-between align-items-center mb-2 pt-2">
      <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
        <h1 class="text-white">Dashboard</h1>
      </div>
      <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
            <li class="breadcrumb-item">
              <a class="text-nowrap" href="{{ route('homepage') }}"><i class="fa-solid fa-house me-2"></i>Home</a>
            </li>
            <li class="breadcrumb-item text-nowrap"><a href="{{ route('dashboard.announcements') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item text-nowrap active text-white" aria-current="page">Questa pagina</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
@endif
