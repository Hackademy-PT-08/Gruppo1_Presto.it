<x-layout-with-band type="dashboard">

  <div class="container dashboard mb-5 pb-3">
    <div class="bg-light shadow-lg rounded-3 overflow-hidden">
      <div class="row">
        <!-- Sidebar-->
        <x-dashboard-sidebar />
        <!-- Content-->
        <section class="col-lg-9 pt-lg-4 pb-4 mb-3">
          <div class="pt-2 px-4 ps-lg-0 pe-xl-5">
            <div class="d-flex flex-sm-row flex-column align-items-sm-center justify-content-between mb-4">
              <h1 class="h3 mb-sm-0 mb-2 pb-1 text-sm-start text-center">Richieste revisore</h1>
            </div>
            <!-- Items grid-->
            <div class="row gy-sm-4 gy-3 gx-3 mb-4">
              <!-- Product-->
              @foreach ($users as $user)
                <a class="col user" href="{{ route('dashboard.user', $user->id) }}">
                  <div class="d-flex align-items-center py-2 bg-secondary rounded">
                    <div class="d-flex align-items-center position-relative">
                      <img class="rounded-circle ms-2" src="https://picsum.photos/300/300" width="48"
                        alt="Avatar">
                      <div class="ms-2">
                        <h4 class="mb-0 fs-6">
                          <span class="nav-link-style" href="nft-vendor.html">{{ $user->name }}</span>
                        </h4>
                        <span class="small text-muted">{{ $user->email }}</span>
                      </div>
                    </div>
                  </div>
                </a>
              @endforeach
            </div>
          </div>
      </div>
      </section>
    </div>
  </div>
  </div>

</x-layout-with-band>
