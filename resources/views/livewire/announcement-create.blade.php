<div>

    <div class="container mt-5">
        <div class="row">
            <h4 class="h1 text-center text-white my-3">Aggiungi annuncio </h4>
            <div class="col-6">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner rounded">
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/300/300" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/300/300" class="d-block w-100" alt="...">
                        </div>
                        <button class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <input type="text" name="title" placeholder="Titolo annuncio"
                    class="form-control my-3 @error('title') is-invalid @enderror" wire:model="title">
                <div class="error">
                    @error('title')
                        {{ $message }}
                    @enderror
                </div>

                <textarea name="description" cols="3" rows="3" placeholder="Descrizione annuncio"
                    class="form-control my-3 @error('description') is-invalid @enderror" wire:model="description"></textarea>
                <div class="error">
                    @error('description')
                        {{ $message }}
                    @enderror
                </div>

                <input type="number" class="form-control my-3 @error('price') is-invalid @enderror" name="price"
                    placeholder="Prezzo" wire:model="price">
                <div class="error">
                    @error('price')
                        {{ $message }}
                    @enderror
                </div>

                <select class="form-select @error('category') is-invalid @enderror" wire:model="category"
                    name="categoria" id="categoria">
                    <option value="">Seleziona una categoria</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"> {{ $category->name }} </option>
                    @endforeach
                </select>
                <div class="error">
                    @error('category')
                        {{ $message }}
                    @enderror
                </div>

                <br>
                <button wire:click="store" class="btn btn-secondary m-2">Aggiungi</button>
            </div>
        </div>
    </div>
</div>
