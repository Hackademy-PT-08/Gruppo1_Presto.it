<x-layout>

  <div class="login container mt-5">
    <div class="row justify-content-center">
      <div class="col-11 col-sm-10 col-md-8  shadow-lg rounded">
        <div class="row">
          <div class="col px-0 d-none d-lg-block">
            <img src="/media/login-image.jpg">
          </div>
          <div class="col py-4 px-4">
            <h1 class="h2 text-center"> Login </h1>
            <form class="form" action="/login" method="post">
              @csrf

              <div class="row gy-3">
                  <div class="col-12">
                    <label class="form-label" for="name">Email</label>
                    <input class="form-control" name="email" id="email" type="email"
                      placeholder="Inserisci la tua email">
                    @error('email')
                      <span class="small text-danger"> {{ $message }} </span>
                    @enderror
                  </div>
                  <div class="col-12">
                    <label class="form-label" for="password">Password</label>
                    <input class="form-control" name="password" id="password" type="password"
                      placeholder="Inserisci la tua password">
                    @error('email')
                      <span class="small text-danger"> {{ $message }} </span>
                    @enderror
                  </div>
              </div>
              <div class="d-flex justify-content-between">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label small" for="flexCheckDefault">
                    Ricordami
                  </label>
                </div>
                <button class="password-forget form-link small mb-3">Password dimenticata? </a>

              </div>
              <div class="d-flex flex-sm-row flex-column">
                <button class="btn btn-primary" type="submit">Accedi</button>
              </div>
              <hr>
              <div class="d-flex flex-sm-row flex-column">
                <p class="small">Non hai ancora un account? <a class="form-link" href="/register">Registrati</a></p>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</x-layout>
{{--  --}}