<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="#">Presto.it</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="{{route('homepage')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="{{route('annoucements.index')}}">Annunci</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="{{route('annoucements.create')}}">Crea</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Utente
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/register">Registrati</a></li>
            <li><a class="dropdown-item" href="/login">Login</a></li>
            <li class="nav-item">
              <form action="/logout" method="post">
                @csrf
                <button class="btn btn-sm btn-danger">Esci</button>
              </form>
            </li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Trova annuncio" aria-label="Search">
        <button class="btn btn-outline-danger" type="submit">Cerca</button>
      </form>
      
    </div>
  </div>
</nav>