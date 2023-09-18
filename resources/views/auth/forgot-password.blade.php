<x-layout>

  <div class="login container my-5">
    <div class="row justify-content-center">
      <div class="col-11 col-sm-10 col-md-8  shadow-lg rounded">
        <div class="row">
          <div class="col px-0 d-none d-lg-block">
            <img src="/media/login-image.jpg">
          </div>
          <div class="col py-4 px-4">
            <h1 class="h2 text-center"> Recupera password </h1>
            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>
            @endif
            <form class="form" action="{{ route('password.email') }}"  method="post">
              @csrf

              <div class="row mb-3">
                <div class="col-12">
                  <label class="form-label" for="name">Email</label>
                  <input class="form-control @error('email') is-invalid @enderror" name="email" id="email" type="email" value="{{ old('email') }}" placeholder="es mario.rossi@mail.com">
                  @error('email')
                    <span class="small text-danger"> {{ $message }} </span>
                  @enderror
                </div>
              </div>

              <div class="d-flex flex-sm-row flex-column">
                <button class="btn btn-sm btn-primary" type="submit">Invia</button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</x-layout>
