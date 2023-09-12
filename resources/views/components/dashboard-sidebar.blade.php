<aside class="col-lg-3 pe-xl-5">
  <div class="d-block d-lg-none p-4">
    <a class="btn btn-outline-primary d-block" href="#account-menu" data-bs-toggle="collapse">
      <i class="fa-solid fa-bars me-3"></i>Dashboard menu
    </a>
  </div>
  <div class="h-100 border-end mb-2">
    <div class="d-lg-block collapse" id="account-menu">
      <ul class="list-unstyled mb-0">
        <li class="border-bottom mb-0">
          <a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ route('dashboard.announcements') }}">
            <i class="fa-solid fa-images"></i>Annunci da revisionare
            <span class="text-muted ms-auto small">{{ $announcementToRevisedCount }}</span>
          </a>
        </li>
        @if (Auth::user()->is_admin)
        <li class="border-bottom mb-0">
          <a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ route('dashboard.requests') }}">
            <i class="fa-solid fa-envelope"></i>Richieste revisori
            <span class="text-muted ms-auto small">{{ $requestsCount }}</span>
          </a>
        </li>
        <li class="border-bottom mb-0">
          <a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ route('dashboard.users') }}">
            <i class="fa-solid fa-users"></i>Utenti
            <span class="text-muted ms-auto small">{{ $usersCount }}</span>
          </a>
        </li>
        @endif
      </ul>
    </div>
  </div>
</aside>
