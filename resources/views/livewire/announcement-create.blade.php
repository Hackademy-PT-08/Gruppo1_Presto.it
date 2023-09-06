<div>
   <div class="container">
      <div class="row justify-content-center">
         <div class=" col-12 col-md-8">
            <h4 class="h1 text-center text-white my-3">Aggiungi annuncio </h4>

            <input type="text" name="titolo" placeholder="titolo annuncio" class="form-control my-3" wire:model="title" value="{{$title}}">
               
            <textarea name="descrizione"  cols="3" rows="3" placeholder="Descrizione annuncio" class="form-control my-3" wire:model="description">{{$description}}</textarea>
            
            <input type="number" name="prezzo" placeholder="prezzo" wire:model="price" value="{{$price}}"><br>
            <button wire:click="store" class="btn btn-secondary m-2">Aggiungi</button>
            
         </div>
         </div>
   </div>
</div>
