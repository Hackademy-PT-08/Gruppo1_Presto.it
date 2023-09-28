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
            <h1 class="h3 mb-4 pt-2 text-center text-sm-start">{{__('profile.information')}}</h1>
            <form action="/user/profile-information" method="post">
              @csrf
              @method('PUT')
              <div class="row gy-3 pb-md-3">
                <form >
                  <div class="col-sm-6">
                    <label class="form-label" for="name">{{__('profile.name')}}</label>
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
                <button class="btn btn-sm btn-primary" type="submit">{{__('profile.update')}}</button>
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
                    <label class="form-label" for="profile-name">{{__('profile.pass')}}</label>
                    <input class="form-control" name="current_password" id="current_password" type="password">
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label" for="profile-email">{{__('profile.new_pass')}}</label>
                    <input class="form-control" name="password" id="password" type="password">
                  </div>

                <div class="col-12">
                  <label class="form-label" for="profile-bio">{{__('profile.confirm')}}</label>
                  <input class="form-control" name="password_confirmation" id="password_confirmation" type="password">
                </div>
              </div>
              <div class="d-flex flex-sm-row flex-column">
                <button class="btn btn-sm btn-primary" type="submit">{{__('profile.up_pass')}}</button>
              </div>
            </form>
          </div>
        </section>
      </div>
    </div>
  </div>
</x-layout-with-band>
