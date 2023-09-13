<x-layout>

    <div class="login container mt-5 min-vh-100">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-10 col-md-8  shadow-lg rounded">
                <div class="row">
                    <div class="col px-0 d-none d-lg-block">
                        <img src="/media/login-image.jpg">
                    </div>
                    <div class="col py-4 px-4">
                        <h1 class="h2 text-center"> Verifica l'email </h1>
                        <form class="form" action="/email/verification-notification" method="post">
                            @csrf

                            <div class="row gy-3">
                                <div class="col-12">
                                    <div class="mb-5">Ciao! Ti abbiamo inviato un link di verifica alla tua email,
                                        <b>clickalo</b>!
                                    </div>
                                    <div class="">COSA? Non hai ricevuto il link? Richiedi un nuovo link allora!
                                    </div>
                                    <div class="d-flex flex-sm-row flex-column mt-3">
                                        <input type="submit" class="btn btn-primary" value="Richiedi link">
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
