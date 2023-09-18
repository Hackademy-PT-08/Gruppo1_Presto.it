<x-layout>

  <div class="login container my-5">
    <div class="row justify-content-center">
      <div class="col-11 col-sm-10 col-md-8  shadow-lg rounded">
        <div class="row">
          <div class="col px-0 d-none d-lg-block">
            <img src="/media/login-image.jpg">
          </div>
          <div class="col py-4 px-4">
            <h1 class="h2 text-center"> Inserisci nuova password </h1>
            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>
            @endif
            <form class="form" action="{{ route('password.update') }}"  method="post">
              @csrf

              <input type="hidden" name="token" value="{{ request()->token }}">

              <div class="row mb-3">
                <div class="col-12">
                  <label class="form-label" for="name">Email</label>
                  <input class="form-control @error('email') is-invalid @enderror" name="email" id="email" type="email" value="{{ old('email') }}" placeholder="es. mario.rossi@mail.com">
                  @error('email')
                    <span class="small text-danger"> {{ $message }} </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-12">
                  <label class="form-label" for="name">Nuova Password</label>
                  <input class="form-control @error('password') is-invalid @enderror" name="password" id="password" type="password" placeholder="es abc!123">
                  @error('password')
                    <span class="small text-danger"> {{ $message }} </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-12">
                  <label class="form-label" for="name">Conferma Password</label>
                  <input class="form-control" name="password_confirmation" id="password_confirmation" type="password" placeholder="es. abc!123">
                </div>
              </div>

              <div class="d-flex flex-sm-row flex-column">
                <button class="btn btn-sm btn-primary" type="submit">Reimposta</button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</x-layout>
