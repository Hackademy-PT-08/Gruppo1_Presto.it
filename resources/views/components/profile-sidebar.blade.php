<aside class="col-lg-3 pe-xl-5">
  <div class="d-block d-lg-none p-4">
    <a class="btn btn-outline-accent d-block" href="#account-menu" data-bs-toggle="collapse">
      <i class="ci-menu me-2"></i>Account menu
    </a>
  </div>
  <div class="h-100 border-end mb-2">
    <div class="d-lg-block collapse" id="account-menu">
      <ul class="list-unstyled mb-0">
        <li class="border-bottom mb-0">
          <a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ route('user.profile') }}">
            <i class="fa-solid fa-id-card"></i>Informazioni</a>
        </li>
        <li class="border-bottom mb-0">
          <a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ route('user.profile-announcements') }}">
            <i class="fa-solid fa-file-image"></i>I miei annunci<span class="fs-sm text-muted ms-auto">50</span>
          </a>
        </li>
        <li class="border-bottom mb-0">
          <a class="nav-link-style d-flex align-items-center px-4 py-3" href="#" onclick="event.preventDefault();getElementById('form-logout').submit()">
            <i class="fa-solid fa-arrow-right-from-bracket"></i>Log out
            <form action="/logout" method="post" id="form-logout" class="d-none">
              @csrf
            </form>
          </a>
        </li>
      </ul>
    </div>
  </div>
</aside>
