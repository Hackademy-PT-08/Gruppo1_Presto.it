<x-layout>

  <div class="login container mt-5 min-vh-100">
    <div class="row justify-content-center">
      <div class="col-11 col-sm-10 col-md-8  shadow-lg rounded">
        <div class="row">
          <div class="col px-0 d-none d-lg-block">
            <img src="/media/login-image.jpg">
          </div>
          <div class="col py-4 px-4">
            <h1 class="h2 text-center"> Registrati </h1>
            <form class="form" action="/register" method="post">
              @csrf

              <div class="row gy-3">
                  <div class="col-12">
                    <label class="form-label" for="name">Nome</label>
                    <input class="form-control" name="name" id="name" type="text" value="{{ old('name') }}
                      placeholder="Inserisci il tuo nome">
                    @error('name')
                      <span class="small text-danger"> {{ $message }} </span>
                    @enderror
                  </div>
                  <div class="col-12">
                    <label class="form-label" for="name">Email</label>
                    <input class="form-control" name="email" id="email" type="email" value="{{ old('email') }}
                      placeholder="Inserisci la tua email">
                    @error('email')
                      <span class="small text-danger"> {{ $message }} </span>
                    @enderror
                  </div>
                  <div class="col-12">
                    <label class="form-label" for="password">Password</label>
                    <input class="form-control" name="password" id="password" type="password"
                      placeholder="Inserisci la tua password">
                    @error('password')
                      <span class="small text-danger"> {{ $message }} </span>
                    @enderror
                  </div>
                  <div class="col-12">
                    <label class="form-label" for="password_confirmation">Conferma Password</label>
                    <input class="form-control" name="password_confirmation" id="password_confirmation" type="password"
                      placeholder="Inserisci la tua password">
                  </div>
              </div>
              <div class="d-flex flex-sm-row flex-column mt-3">
                <button class="btn btn-primary" type="submit">Registrati</button>
              </div>
              <hr>
              <div class="d-flex flex-sm-row flex-column">
                <p class="small">Non hai ancora un account? <a class="form-link" href="/login">Accedi</a></p>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</x-layout>
