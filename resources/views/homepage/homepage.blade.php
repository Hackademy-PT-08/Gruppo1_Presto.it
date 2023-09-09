<x-layout>

    ì
    {{-- hero --}}
    <section id="Hero">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-centre mb-5">
                        <h1 class=" text-center" id="home_title">Crea e trova gli annunci migliori <br> per te e la tua
                            casa</h1>
                    </div>
                    <div class="col-12">
                        @auth
                            <div class="text-center mt-5">
                                <a class="btn btn-outline-danger btn-lg" aria-disabled="true"
                                    href="{{ route('announcements.create') }}">Crea
                                    annuncio</a>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
        <video autoplay muted loop id="myvideo">
            <source src="/media/video-back.mp4" type="video/mp4">
        </video>
        <div class="blur"></div>
    </section>
    <section id="Hero">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-centre mb-5">
                        <h1 class=" text-center" id="home_title">Crea e trova gli annunci migliori <br> per te e la tua
                            casa</h1>
                    </div>
                    <div class="col-12">
                        @auth
                            <div class="text-center mt-5">
                                <a class="btn btn-outline-danger btn-lg" aria-disabled="true"
                                    href="{{ route('announcements.create') }}">Crea
                                    annuncio</a>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
        <video autoplay muted loop id="myvideo">
            <source src="/media/video-back.mp4" type="video/mp4">
        </video>
        <div class="blur"></div>
    </section>

</x-layout>
