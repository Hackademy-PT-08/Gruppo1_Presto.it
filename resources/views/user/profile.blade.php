<x-layout>
    <div class="container">
        <h3 class="text-white">Modifica nome ed email</h3>
        <form action="/user/profile-information" method="post">
            @csrf
            @method('PUT')
    
            <label for="name" class="text-white">Nome</label><br>
            <input class="form-control-sm" type="text" name="name" id="name" value="{{auth()->user()->name}}"><br>
            <label for="email" class="text-white">Email</label><br>
            <input class="form-control-sm" type="email" name="email" id="email" value="{{$user->email}}"><br>
            <button class="btn btn-secondary mt-2" type="submit">modifica</button>
        </form>
    
    
        <h3 class="text-white">Modifica la password</h3>
        <form action="/user/password" method="post">
            @csrf
            @method('PUT')
            <label for="current_password" class="text-white">Password attuale</label><br>
            <input class="form-control-sm" type="password" name="current_password" id="current_password"><br>
    
            <label for="password" class="text-white">Nuova password</label><br>
            <input class="form-control-sm" type="password" name="password" id="password"><br>
    
            <label for="password-confirmation" class="text-white">Conferma password</label><br>
            <input class="form-control-sm" type="password" name="password_confirmation" id="password_confirmation"><br>
            <button class="btn btn-secondary mt-2" type="submit">Modifica</button>
    
        </form>
    </div>
</x-layout>