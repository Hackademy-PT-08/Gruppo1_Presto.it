<x-layout>

  <h3 class="text-light mt-5 text-center">Login</h3>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8">
        <form action="/login" method="POST">
          @csrf

          <div class="mb-3">
            <label for="email" class="form-label text-light mt-5">Email address</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text text-light">Non condivideremo la tua e-mail con nessuno!</div>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label text-light">Password</label>
            <input type="password" name="password" class="form-control" id="password">
          </div>
          <button type="submit" class="btn btn-danger">Accedi</button>
        </form>
      </div>
    </div>
  </div>
  

</x-layout>