<x-layout>
    <div class="container mt-5">
        <div class="row">
            {{-- Container al centro in caso non ci sarà modifica immagine profilo --}}
            <div class="col-12 text-center">
                <h3 class="text-white">Modifica nome ed email</h3>
                <form action="/user/profile-information" method="post">
                    @csrf
                    @method('PUT')

                    <label for="name" class="text-white mt-3">Nome</label><br>
                    <input class="form-control-sm" type="text" name="name" id="name"
                        value="{{ auth()->user()->name }}"><br>
                    <label for="email" class="text-white mt-3">Email</label><br>
                    <input class="form-control-sm" type="email" name="email" id="email"
                        value="{{ $user->email }}"><br>
                    <button class="btn btn-secondary mt-3" type="submit">modifica</button>
                </form>
            </div>
        </div>


        <h3 class="text-white mt-5">Modifica la password</h3>
        <form action="/user/password" method="post">
            @csrf
            @method('PUT')
            <label for="current_password" class="text-white mt-3">Password attuale</label><br>
            <input class="form-control-sm" type="password" name="current_password" id="current_password"><br>

            <label for="password" class="text-white mt-3">Nuova password</label><br>
            <input class="form-control-sm" type="password" name="password" id="password"><br>

            <label for="password-confirmation" class="text-white mt-3">Conferma password</label><br>
            <input class="form-control-sm" type="password" name="password_confirmation" id="password_confirmation"><br>
            <button class="btn btn-secondary mt-3" type="submit">Modifica</button>
        </form>

    </div>
</x-layout>
