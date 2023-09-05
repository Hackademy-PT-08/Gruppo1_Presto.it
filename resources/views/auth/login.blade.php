<x-layout>

  <h2 class="text-light mt-3 text-center">Login</h2>

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
    <button type="submit" class="btn btn-primary">Accedi</button>
  </form>

</x-layout>