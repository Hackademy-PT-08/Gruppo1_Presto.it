<div>

   {{-- <div class="container mt-2">
      <div class="row ">
         <h4 class="h1 text-center text-white my-5">Aggiungi annuncio </h4>
            <div class="col-md-6  ">

            <img class="rounded-circle mx-auto d-block " src="https://picsum.photos/300/300" alt="profile_pic">
                </a>
            </div>

                <div class="col-md-6  ">

                    <input type="text" name="title" placeholder="Titolo annuncio" class="form-control my-3 @error('title') is-invalid @enderror" wire:model="title">

                    @error('title') <div class="alert alert-dismissible alert-danger">

                        <strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Oh cavolo! </font></font></strong> <a href="#" class="alert-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $message }}</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                      </div>@enderror

                    <textarea name="description"  cols="3" rows="3" placeholder="Descrizione annuncio" class="form-control my-3 @error('description') is-invalid @enderror" wire:model="description"></textarea>
                    @error('description') <div class="alert alert-dismissible alert-danger">

                        <strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Oh cavolo! </font></font></strong> <a href="#" class="alert-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $message }}</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                      </div>@enderror

            <input type="number" class="form-control my-3 @error('price') is-invalid @enderror" name="price" placeholder="Prezzo" wire:model="price">

             @error('price') 
               <div class="alert alert-dismissible alert-danger ">

                  <strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Oh cavolo! </font></font></strong> <a href="#" class="alert-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $message }}</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
               </div>
              @enderror

           

            <select class="form-select my-3 @error('category') is-invalid @enderror" wire:model="category" name="categoria" id="categoria">
               <option value="">Seleziona una categoria</option>
               @foreach ($categories as $category)
                  <option value="{{$category->id}}"> {{$category->name}} </option>
               @endforeach
            </select>
            @error('category')
               <div class="alert alert-dismissible alert-danger">

                <strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Oh cavolo! </font></font></strong> <a href="#" class="alert-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $message }}</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
               </div>
            @enderror

            <br>
            <button wire:click="store" class="btn btn-secondary m-2 mx-auto">Aggiungi</button>
         </div>
      </div>
   </div> --}}


   {{--! sezione titolo pagina --}}
   <div class="page-title-overlap bg-primary-pt-4 bg-crea-annunci">
      <div class="container dflex flex-wrap flex-sm-nowrap justify-content-center justify-content-sm-between align-items-center mb-2-pt-2">
         <div class="d-flex align-items-center">
            <div class="h3 text-light pt-5 titolo-crea-annunci">Crea un nuovo annuncio</div>
         </div>
      </div>
   </div>

   {{--!sezione di aggiunta articolo  --}}
   <div class="container mb-5 pt-3 pb-md-5 pb-1">
      <div class="row my-5 pt-5">
         {{-- !aggiunta immagini --}}
         <div class="mb-md-5 mb-4 pb-md-0 pb-2">
            <h2 class="h3">Inserisci i dati dell'annuncio</h2>
            
            <div class="row create-form">
               <div class="col-12 col-md-8 shadow">
                  <label for="title">Titolo annuncio</label>
                  <input type="text" id="title" name="title" class="form-control mb-3  @error('title') is-invalid @enderror" wire:model="title">
                  @error('title')
                     <div class="alert alert-dismissible alert-danger">
                        <strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Oh cavolo! </font></font></strong> <a href="#" class="alert-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $message }}</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                     </div>
                  @enderror
                  
                  <label for="description">Descrizione annuncio</label>
                  <textarea name="description" id="description"  cols="3" rows="3" class="form-control mb-3 input-form @error('description') is-invalid @enderror" wire:model="description"></textarea>

                  @error('description')
                     <div class="alert alert-dismissible alert-danger">

                        <strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Oh cavolo! </font></font></strong> <a href="#" class="alert-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $message }}</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                     </div>
                  @enderror

                     <label for="price">Prezzo</label>
                  <input type="number" id="price" class="form-control mb-3 @error('price') is-invalid @enderror" name="price" wire:model="price">

                  @error('price') 
                     <div class="alert alert-dismissible alert-danger ">
      
                        <strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Oh cavolo! </font></font></strong> <a href="#" class="alert-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $message }}</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                     </div>
                 @enderror
                  
                 <select class="form-select my-3 @error('category') is-invalid @enderror" wire:model="category" name="categoria" id="categoria">
                     <option value="">Seleziona una categoria</option>
                     @foreach ($categories as $category)
                        <option value="{{$category->id}}"> {{$category->name}} </option>
                     @endforeach
                  </select>

                  @error('category')
                     <div class="alert alert-dismissible alert-danger">
      
                     <strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Oh cavolo! </font></font></strong> <a href="#" class="alert-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $message }}</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                     </div>
                  @enderror

                  <button wire:click="store" class="btn btn-secondary m-2 mx-auto">Aggiungi</button>
               </div>
               <aside class="col-lg-3 offst-lg-1 col-md-4" style="margin-left: 30px">
                  <div  style="top:100px">
                     <h4 class="h4 mb-3 text-md-start text-center">Ecco come sarà il tuo annuncio</h4>
                     {{-- !card preview --}}

                     <x-preview-card/>
                  </div>
               </aside>
            </div>
         </div>
      </div>
   </div>
</div>
