<x-layout>

  <h3 class="text-light text-center mt-5">Registrati</h3>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <form action="/register" method="POST">
          @csrf

          <div class="mb-3">
            <label for="name" class="form-label text-light mt-5">Nome</label>
            <input type="text" name="name" class="form-control" id="name">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label text-light mt-3">Email</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text text-light">Non condivideremo la tua e-mail con nessuno!</div>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label text-light mt-3">Password</label>
            <input type="password" name="password" class="form-control" id="password">
          </div>
          <div class="mb-3">
            <label for="password_confirmation" class="form-label text-light mt-3">Conferma Password</label>
            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
          </div>
          <button type="submit" class="btn btn-danger">Registrati</button>
        </form>
      </div>
    </div>
  </div>

  

</x-layout>