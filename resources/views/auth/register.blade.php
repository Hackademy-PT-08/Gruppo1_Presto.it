<x-layout>

  <form action="/register" method="POST">
    @csrf

    <div class="mb-3">
      <label for="name" class="form-label">Nome</label>
      <input type="text" name="name" class="form-control" id="name">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">Non condivideremo la tua e-mail con nessuno!</div>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" name="password" class="form-control" id="password">
    </div>
    <div class="mb-3">
      <label for="password_confirmation" class="form-label">Conferma Password</label>
      <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
    </div>
    <button type="submit" class="btn btn-primary">Registrati</button>
  </form>

</x-layout>