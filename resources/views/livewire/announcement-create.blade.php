<div>

  {{-- !sezione di aggiunta articolo  --}}
  <div class="container mb-5 pb-3">
    <div class="row">
      {{-- !aggiunta immagini --}}
      <div class="mb-md-5 mb-4 pb-md-0 pb-2 d-flex justify-content-center">
        <div class="row create-form mt-4">
          <div class="col-12 col-md-8">
            <div class="row bg-light rounded-3 shadow py-3">
              <div class="col-12 mb-3">
                <label for="title">Titolo annuncio</label>
                <input type="text" id="title" name="title"
                  class="form-control @error('title') is-invalid @enderror" wire:model="title"
                  wire:model="previewTitle">
                @error('title')
                  <span class="small text-danger">Oh cavolo! {{ $message }} </span>
                @enderror
              </div>

              <div class="col-12 mb-3">
                <label for="description">Descrizione annuncio</label>
                <textarea name="description" id="description" cols="3" rows="3"
                  class="form-control input-form @error('description') is-invalid @enderror" wire:model="description"></textarea>
                @error('description')
                  <span class="small text-danger">Oh cavolo! {{ $message }} </span>
                @enderror
              </div>

              <div class="col-6 mb-3">
                <label for="price">Prezzo</label>
                <input type="text"
                  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" id="price"
                  class="form-control @error('price') is-invalid @enderror" name="price" wire:model="price">

                @error('price')
                  <span class="small text-danger">Oh cavolo! {{ $message }} </span>
                @enderror
              </div>

              <div class="col-6 mb-3">
                <select class="form-select mt-4 @error('category') is-invalid @enderror" wire:model="category"
                  name="categoria" id="categoria">
                  <option value="">Seleziona una categoria</option>
                  @foreach ($categories as $category)
                    <option value="{{ $category->id }}"> {{ $category->name }} </option>
                  @endforeach
                </select>

                @error('category')
                  <span class="small text-danger">Oh cavolo! {{ $message }} </span>
                @enderror
              </div>

              <div class="col-2 mb-3">
                <button wire:click="store" class="btn btn-primary m-2 mx-auto">Aggiungi</button>
              </div>


            </div>
          </div>
          <aside class="col-lg-3 offset-lg-1 col-md-4 mt-md-0 mt-4 position-relative">
            <div>
              {{-- !card preview --}}
              <x-preview-card />
              {{-- @livewire('preview-card', ['previewTitle'=>$title,'previewPrice'=>$price,'previewCategory'=>$category]) --}}
            </div>
          </aside>
        </div>
      </div>
    </div>
  </div>
</div>
