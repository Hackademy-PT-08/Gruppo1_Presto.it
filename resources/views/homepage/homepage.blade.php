<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="my-5 text-center" id="home_title">Presto.it</h1>
            </div>
        </div>
    </div>

    @auth
        <div class="text-center">
            <a class="btn btn-outline-danger btn-lg" aria-disabled="true" href="{{ route('announcements.create') }}">Crea
                annuncio</a>
        </div>
    @endauth

</x-layout>
