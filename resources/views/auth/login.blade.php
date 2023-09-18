<x-layout>

  <div class="login container my-5">
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
                  <input class="form-control @error('email') is-invalid @enderror" name="email" id="email" type="email" value="{{ old('email') }}"
                    placeholder="es. mario.rossi@mail.com">
                  @error('email')
                    <span class="small text-danger"> {{ $message }} </span>
                  @enderror
                </div>
                <div class="col-12">
                  <label class="form-label" for="password">Password</label>
                  <input class="form-control @error('password') is-invalid @enderror" name="password" id="password" type="password"
                    placeholder="es. abc!123">
                  @error('password')
                    <span class="small text-danger"> {{ $message }} </span>
                  @enderror
                </div>
              </div>
              <div class="d-flex justify-content-between">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="remember" value="1" id="rememberMe">
                  <label class="form-check-label small" for="rememberMe">
                    Ricordami
                  </label>
                </div>
                @if (Route::has('password.request'))
                  <a href="{{ route('password.request') }}" class="password-forget form-link small mb-3">Password
                    dimenticata</a>
                @endif
              </div>
              <div class="d-flex flex-sm-row flex-column">
                <button class="btn btn-sm btn-primary" type="submit">Accedi</button>
              </div>
              <div class="d-flex flex-sm-row flex-column mt-2 justify-content-between">
                <a class="small" href="auth/github/redirect">Accedi con github</a>
                <a class="small" href="auth/google/redirect">Accedi con google</a>
              </div>
              <div class="d-flex flex-sm-row flex-column mt-2">
                @error('socialEmailError')
                  <a target="_blank" href="https://github.com/settings/profile" class="small text-danger"> {{ $message }} </a>
                @enderror
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
