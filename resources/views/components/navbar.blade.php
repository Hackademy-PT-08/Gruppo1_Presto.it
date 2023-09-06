

    <nav class="navbar navbar-expand-lg bg-primary ">
        <div class="container ">
            <a class="navbar-brand text-light" href="#">Presto.it</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page"
                            href="{{ route('homepage') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('annoucements.index') }}">Annunci</a>
                    </li>
                </ul>
                {{-- TODO - Sistemare questa parte qua sotto e renderla bella visivamente --}}
                <ul class="navbar-nav mb-2 mb-lg-0 ">
                    @guest

                        <a class="btn me-3" style="background-color:#D45400;color:white" href="/register">Registrati</a>
                        <a class="btn btn-outline-danger" href="/login">Login</a>

                    @endguest
                    @auth
                        
                            <div class="d-flex align-items-center">
                                <div class=" ">
                                    <a class="btn btn-outline-danger " aria-disabled="true"
                                        href="{{ route('annoucements.create') }}">Crea annuncio</a>
                                </div>
                                <div class=" ms-3">
                                    <div class=" dropdown ">
                                        <a class="nav-link dropdown-toggle text-light" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <img class="rounded-circle" src="https://picsum.photos/50/50" alt="profile_pic">
                                        </a>
                                        <ul class="dropdown-menu end-0 left-initial">
                                            <li>
                                                <a href="#" class="dropdown-item"
                                                    onclick="event.preventDefault();getElementById('form-logout').submit()">Logout</a>
                                                <form action="/logout" method="post" id="form-logout" class="d-none">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
               

                @endauth
            </ul>

        </div>
</div>
</nav>

