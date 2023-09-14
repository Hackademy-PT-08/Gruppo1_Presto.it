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

    {{-- Section description --}}

    <section class="container pb-md-4">
        <div class="bg-light shadow-lg rounded-3 px-4 py-lg-4 py-3 mb-3" >
            <div class="py-lg-3 py-2 px-lg-3">
                <div class="row gy-4">
                    <div class="col-lg-6 my-lg-5 mt-5">
                        <div class="position-relative rounded-3 overflow-hidden d-flex justify-content-center align-items-center h-100" >
                            <img class="w-100 rounded" src="https://www.divittorio.it/wp-content/uploads/2020/04/lavora-con-noi.png" >
                        </div>
                    </div>

                    <div class="col-lg-6 mt-5">
                        <div class="ps-xl-5 ps-lg-3">

                            <div class="row row-cols-sm-2 row-cols-1 gy-3 gx-4 mb-4 pb-md-2">
                                {{-- creators --}}
                                <div class="col">
                                    <div class="card position-relative h-100" style="border: 1px solid var(--secondary-color)" >
                                        <div class="card-body p-3"  >
                                            <h3 class="h6 mb-2 fs-sm text-center">
                                                <i class="fa-regular fa-eye fa-2xl mt-3"></i>
                                            </h3>
                                            <div class="d-flex mx-auto p-2">
                                                <h5 class="text-center">
                                                    Guarda in anteprima tutti gli annunci
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card position-relative h-100" style="border: 1px solid var(--secondary-color)" >
                                        <div class="card-body p-3">
                                            <h3 class="h6 mb-2 fs-sm text-center">
                                                <i class="fa-solid fa-stamp fa-2xl mt-3"></i>
                                            </h3>
                                            <div class="d-flex mx-auto p-2">
                                                <h5 class="text-center">
                                                    Verifica e approva l'annuncio
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card position-relative h-100" style="border: 1px solid var(--secondary-color)" >
                                        <div class="card-body p-3">
                                            <h3 class="h6 mb-2 fs-sm text-center">
                                                <i class="fa-solid fa-shield-halved fa-2xl mt-3"></i>
                                            </h3>
                                            <div class="d-flex mx-auto p-2">
                                                <h5 class="text-center">
                                                    Aiutaci a rendere il sito sicuro
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card position-relative h-100" style="border: 1px solid var(--secondary-color)" >
                                        <div class="card-body p-3">
                                            <h3 class="h6 mb-2 fs-sm text-center">
                                                <i class="fa-solid fa-arrow-down fa-2xl mt-3"></i>
                                            </h3>
                                            <div class="d-flex mx-auto p-2">
                                                <h5 class="text-center">
                                                    Compila il form di richiesta di seguito
                                                </h5>
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

    {{-- Section login revisor --}}

    <section class="my-5 container">
        <div class="container py-2">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6 shadow rounded">
                    <div class="row">
                        <div class="col py-4 px-4">
                            @if (auth()->user()->is_reviewer == 1)
                                <div class="col-12" style="width: 100% !important">
                                    <div class="alert alert-warning py-3 shadow">
                                        <p class="lead text-center">
                                            Fai già parte del nostro team di revisori!
                                        </p>
                                    </div>
                                </div>
                            @else
                                <h1 class="h2 text-center"> Candidati </h1>
                                <form class="" action="{{route('revisor.store')}}" method="POST" id="myForm">

                                    @csrf
                                    <div class="row">
                                        <textarea name="about_you" class="form-control" placeholder="Perchè vuoi lavorare con noi?" id="Candidati"
                                            cols="30" rows="7"></textarea>
                                    </div>

                                    <input class="mt-3 ms-0 btn btn-primary" type="submit"
                                        value="Invia la tua richiesta" onclick="">

                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</x-layout>
