<footer>
    <!-- Section: Social media -->
    <section class="container-fluid d-flex justify-content-center justify-content-lg-between p-4 border-bottom ">
        <!-- Left -->
        <div class="me-5 d-none d-lg-block small">
            <span>Resta connesso con i nostri social:</span>
        </div>

        <!-- Right -->
        <div class="d-flex gap-4">
            <a href="#" class="text-reset">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="text-reset">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="text-reset">
                <i class="fab fa-google"></i>
            </a>
            <a href="#" class="text-reset">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="text-reset">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="#" class="text-reset">
                <i class="fab fa-github"></i>
            </a>
        </div>
    </section>


    <!-- Section: Links  -->
    <section class="">
        <div class="container text-center text-md-start mt-5">
            <div class="row mt-3">
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <a href="{{ route('homepage') }}" class="footer-brand">
                        <h6 class="footer-brand mb-4">Presto.it</h6>
                    </a>
                    <p class="small">Per ogni annuncio che inserisci, o guadagno che riesci a fare sulla nostra piattaforma ci devi una commisione del 50%</p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-5 d-flex flex-column gap-1">
                    <h6 class="mb-ld-3 mb-1">Menù</h6>
                    <a class="footer-link small" href="{{ route('homepage') }}">Home</a>
                    <a class="footer-link small" href="{{ route('announcements.index') }}">Tutti gli annunci</a>
                </div>

                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-5 d-flex flex-column gap-1">
                    <h6 class="mb-ld-3 mb-1">Link Utili</h6>
                    <a class="footer-link small" href="{{ route('work') }}" class="text-reset">Lavora con noi</a>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-5 d-flex flex-column gap-1">
                    <h6 class="mb-ld-3 mb-1">Contatti</h6>
                    <p clasS="small mb-sm-1 mb-0"><i class="fa-solid fa-map me-2"></i>Bari, BA 70100, Italia</p>
                    <p clasS="small mb-sm-1 mb-0"><i class="fa-solid fa-envelope me-2"></i>presto@info.it</p>
                    <p clasS="small mb-sm-1 mb-0"><i class="fa-solid fa-phone me-2"></i>+39 123 456 789</p>
                </div>
            </div>
        </div>
    </section>

    <div class="text-center py-3 small" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2023 Copyright: I diritti sono nostri!!!
    </div>

</footer>
