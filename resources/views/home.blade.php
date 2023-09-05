<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="my-5 text-center" id="home_title">Presto.it</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="Presto.it" method="POST">
                    @csrf
                    <input type="text" placeholder="Inserisci nome utente">
                    <input type="submit" value="Invio">
                </form>
            </div>
        </div>
    </div>
    

</x-layout>