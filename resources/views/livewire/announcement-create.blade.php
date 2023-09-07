<div>

   <div class="container mt-2">
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

             @error('price') <div class="alert alert-dismissible alert-danger ">

                <strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Oh cavolo! </font></font></strong> <a href="#" class="alert-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $message }}</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
              </div>@enderror

           {{-- <div class=" ">{{ $message }}</div> --}}

            <select class="form-select my-3 @error('category') is-invalid @enderror" wire:model="category" name="categoria" id="categoria">
               <option value="">Seleziona una categoria</option>
               @foreach ($categories as $category)
                  <option value="{{$category->id}}"> {{$category->name}} </option>
               @endforeach
            </select>
            @error('category') <div class="alert alert-dismissible alert-danger">

                <strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Oh cavolo! </font></font></strong> <a href="#" class="alert-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $message }}</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
              </div>@enderror

            <br>
            <button wire:click="store" class="btn btn-secondary m-2 mx-auto">Aggiungi</button>
         </div>
      </div>
   </div>
</div>
