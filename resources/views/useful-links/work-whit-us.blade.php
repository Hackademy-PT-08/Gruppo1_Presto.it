<x-layout>

    <div class="page-title-overlap bg-primary pt-4">
        <div class="container">
            <div class=" text-center">
                <h1 class=" text-light">Vuoi lavorare con noi?</h1>
                <div class="row text-light">
                    <div>
                        <p>
                            Mettiti alla prova come revisor
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="container pb-md-4">
        <div class="bg-light shadow-lg rounded-3 px-4 py-lg-4 py-3 mb-5">
            <div class="py-lg-3 py-2 px-lg-3">
                <div class="row gy-4">
                    <div class="col-lg-6">
                        <div class="position-relative rounded-3 overflow-hidden mb-lg-4 mb-3 "><img
                                class="w-100 rounded "
                                src="https://www.divittorio.it/wp-content/uploads/2020/04/lavora-con-noi.png"></div>
                    </div>

                    <div class="col-lg-6">
                        <div class="ps-xl-5 ps-lg-3">

                            <div class="row row-cols-sm-2 row-cols-1 gy-3 gx-4 mb-4 pb-md-2">
                                {{-- creators --}}
                                <div class="col">
                                    <div class="card position-relative h-100">
                                        <div class="card-body p-3">
                                            <h3 class="h6 mb-2 fs-sm text-muted">ffffff</h3>
                                            <div class="d-flex align-items-center">
                                                <img class="rounded-circle me-2" src="https://picsum.photos/300/300"
                                                    width="36">
                                                <a class="ms-2" href="">@foxnet_creator</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card position-relative h-100">
                                        <div class="card-body p-3">
                                            <h3 class="h6 mb-2 fs-sm text-muted">ffffff</h3>
                                            <div class="d-flex align-items-center">
                                                <img class="rounded-circle me-2" src="https://picsum.photos/300/300"
                                                    width="36">
                                                <a class="ms-2" href="">@foxnet_creator</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card position-relative h-100">
                                        <div class="card-body p-3">
                                            <h3 class="h6 mb-2 fs-sm text-muted">ffffff</h3>
                                            <div class="d-flex align-items-center">
                                                <img class="rounded-circle me-2" src="https://picsum.photos/300/300"
                                                    width="36">
                                                <a class="ms-2" href="">@foxnet_creator</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card position-relative h-100">
                                        <div class="card-body p-3">
                                            <h3 class="h6 mb-2 fs-sm text-muted">ffffff</h3>
                                            <div class="d-flex align-items-center">
                                                <img class="rounded-circle me-2" src="https://picsum.photos/300/300"
                                                    width="36">
                                                <a class="ms-2" href="">@foxnet_creator</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <section>
        <div class="login container py-2">
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
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault">
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
                                    <p class="small">Non hai ancora un account? <a class="form-link"
                                            href="/register">Registrati</a></p>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </section>

</x-layout>
