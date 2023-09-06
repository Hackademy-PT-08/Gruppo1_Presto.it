<div>
   <div class="container">
      <div class="row justify-content-center">
         <div class=" col-12 col-md-8">
            <h4 class="h1 text-center text-white my-3">Aggiungi annuncio </h4>

            <input type="text" name="title" placeholder="titolo annuncio" class="form-control my-3 @error('title') is-invalid @enderror" wire:model="title">
            <div class="error">@error('title') {{ $message }} @enderror</div>

            <textarea name="description"  cols="3" rows="3" placeholder="Descrizione annuncio" class="form-control my-3 @error('description') is-invalid @enderror" wire:model="description"></textarea>
            <div class="error">@error('description') {{ $message }} @enderror</div>

            <input type="number" name="price" placeholder="prezzo" class="@error('price') is-invalid @enderror" wire:model="price">
            <div class="error">@error('price') {{ $message }} @enderror</div>
            <br>
            <button wire:click="store" class="btn btn-secondary m-2">Aggiungi</button>

         </div>
         </div>
   </div>
</div>
