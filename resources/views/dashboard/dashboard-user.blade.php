<x-layout-with-band type="dashboard">

  <div class="container profile mb-5 pb-3">
    <div class="bg-light shadow-lg rounded-3 overflow-hidden">
      <div class="row">
        <!-- Sidebar -->
        <x-dashboard-sidebar announcementToRevisedCount="{{ $announcements_to_revised_count }}"
          requestsCount="{{ $requests_count }}" usersCount="{{ $revisors_count }}" />
        <!-- Content -->
        <section class="content col-lg-9 pt-lg-4 pb-4 mb-3">

          <!-- Sezione informazioni -->
          <div class="pt-2 px-4 ps-lg-0 pe-xl-5">
            <h1 class="h3 mb-4 pt-2 text-center text-sm-start">{{__('dash.information')}}</h1>
            <div class="bg-secondary rounded-3 p-4 mb-4 text-center text-sm-start">
              <div class="d-flex flex-sm-row flex-column align-items-sm-start align-items-center">
                <img class="rounded mb-sm-0 mb-3" src="https://picsum.photos/90/90" width="90" alt="Createx Studio">
                <div class="ms-n2 ps-sm-4">
                  @if ($revisor != null)
                    <a class="btn btn-sm btn-success mb-2"
                      onclick="event.preventDefault();getElementById('form-accept-reviewer').submit()">
                      <i class="fa-solid fa-check me-2"></i>{{__('dash.rev_accept')}}
                    </a>
                    <form action="{{ route('dashboard.accept-reviewer', $user->id) }}" method="post" class="d-none"
                      id="form-accept-reviewer">
                      @csrf
                      @method('PATCH')
                    </form>
                    <a class="btn btn-sm btn-danger mb-2 ms-2 me-3"
                      onclick="event.preventDefault();getElementById('form-reject-reviewer').submit()">
                      <i class="fa-solid fa-xmark me-2"></i>{{__('dash.rev_reject')}}
                    </a>
                    <form action="{{ route('dashboard.reject-reviewer', $user->id) }}" method="post" class="d-none"
                      id="form-reject-reviewer">
                      @csrf
                      @method('PATCH')
                    </form>
                  @endif
                  <button class="btn btn-sm btn-outline-danger mb-2 ms-2" type="button">
                    <i class="fa-solid fa-ban"></i>{{__('dash.block')}}
                  </button>
                </div>
              </div>
            </div>
            <div class="row gy-3 pb-md-3">
              <div class="col-sm-6">
                <label class="form-label" for="name">{{__('dash.name')}}</label>
                <input readonly class="form-control-plaintext" name="name" id="name" type="text"
                  value="{{ $user->name }}">
                @error('name')
                  {{ $message }}
                @enderror
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="email">Email</label>
                <input readonly class="form-control-plaintext" name="email" id="email" type="email"
                  value="{{ $user->email }}">
              </div>
              @if ($revisor != null)
              <div class="col-12">
                <label class="form-label" for="bio">{{__('dash.message')}}</label><br>
                <span>{{ $revisor->first()->about_you }}</span>
              @endif
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>




  {{-- <div class="container mt-5">
        <div class="row">
            Container al centro in caso non ci sarà modifica immagine profilo
            <div class="col-12 text-center">
                <h3 class="text-white">Modifica nome ed email</h3>
                <form action="/user/profile-information" method="post">
                    @csrf
                    @method('PUT')

                    <label for="name" class="text-white mt-3">Nome</label><br>
                    <input class="form-control-sm" type="text" name="name" id="name"
                        value="{{ auth()->user()->name }}"><br>
                    <label for="email" class="text-white mt-3">Email</label><br>
                    <input class="form-control-sm" type="email" name="email" id="email"
                        value="{{ $user->email }}"><br>
                    <button class="btn btn-secondary mt-3" type="submit">modifica</button>
                </form>
            </div>
        </div>


        <h3 class="text-white mt-5">Modifica la password</h3>
        <form action="/user/password" method="post">
            @csrf
            @method('PUT')
            <label for="current_password" class="text-white mt-3">Password attuale</label><br>
            <input class="form-control-sm" type="password" name="current_password" id="current_password"><br>

            <label for="password" class="text-white mt-3">Nuova password</label><br>
            <input class="form-control-sm" type="password" name="password" id="password"><br>

            <label for="password-confirmation" class="text-white mt-3">Conferma password</label><br>
            <input class="form-control-sm" type="password" name="password_confirmation" id="password_confirmation"><br>
            <button class="btn btn-secondary mt-3" type="submit">Modifica</button>
        </form>

    </div> --}}
</x-layout-with-band>
