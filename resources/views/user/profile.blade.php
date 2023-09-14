<x-layout-with-band type="profile">

  <div class="container profile mb-5 pb-3">
    <div class="bg-light shadow-lg rounded-3 overflow-hidden">
      <div class="row">
        <!-- Sidebar-->
        <x-profile-sidebar userAnnouncementsCount="{{ $user_announcements_count }}" />
        <!-- Content-->
        <section class="content col-lg-9 pt-lg-4 pb-4 mb-3">

          <!-- Sezione informazioni -->
          <div class="pt-2 px-4 ps-lg-0 pe-xl-5">
            <h1 class="h3 mb-4 pt-2 text-center text-sm-start">Informazioni</h1>
            <div class="bg-secondary rounded-3 p-4 mb-4 text-center text-sm-start">
              <div class="d-flex flex-sm-row flex-column align-items-sm-start align-items-center">
                <img class="rounded mb-sm-0 mb-3" src="https://picsum.photos/90/90" width="90" alt="Createx Studio">
                <div class="ms-n2 ps-sm-4">
                  <button class="btn btn-sm btn-primary mb-2" type="button">
                    <i class="fa-solid fa-rotate"></i>Cambia immagine
                  </button>
                  <button class="btn btn-sm btn-outline-danger mb-2 ms-2" type="button">
                    <i class="fa-solid fa-trash-can"></i>Cancella immagine
                </button>
                  <div class="pt-1 mb-0 small text-muted">Ti consigliamo di mettere immagini 400x400 :)
                  </div>
                </div>
              </div>
            </div>
            <form action="/user/profile-information" method="post">
              @csrf
              @method('PUT')
              <div class="row gy-3 pb-md-3">
                <form >
                  <div class="col-sm-6">
                    <label class="form-label" for="name">Nome</label>
                    <input class="form-control" name="name" id="name" type="text" value="{{ $user->name }}">
                    @error('name') {{ $message }} @enderror
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label" for="email">Email</label>
                    <input class="form-control" name="email" id="email" type="email" value="{{ $user->email }}">
                  </div>

                {{-- <div class="col-12">
                  <label class="form-label" for="bio">Biografia</label>
                  <textarea class="form-control" id="bio" name="bio" rows="4" placeholder="Dici qualcosa su di te con 500 caratteri">@if ( isset($user->description) )
                    value="{{ $user->description }}"
                  @endif</textarea>
                </div> --}}
              </div>
              <div class="d-flex flex-sm-row flex-column">
                <button class="btn btn-sm btn-primary" type="submit">Aggiorna informazioni</button>
              </div>
            </form>
            <hr class="my-5">

            <!-- Sezione password -->
            <form>
              @csrf
              @method('PUT')
              <div class="row gy-3 pb-md-3">
                <form action="/user/password" method="post">
                  <div class="col-sm-6">
                    <label class="form-label" for="profile-name">Password attuale</label>
                    <input class="form-control" name="current_password" id="current_password" type="password">
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label" for="profile-email">Nuova Password</label>
                    <input class="form-control" name="password" id="password" type="password">
                  </div>

                <div class="col-12">
                  <label class="form-label" for="profile-bio">Conferma nuova password</label>
                  <input class="form-control" name="password_confirmation" id="password_confirmation" type="password">
                </div>
              </div>
              <div class="d-flex flex-sm-row flex-column">
                <button class="btn btn-sm btn-primary" type="submit">Aggiorna password</button>
              </div>
            </form>
          </div>
        </section>
      </div>
    </div>
  </div>
</x-layout-with-band>
