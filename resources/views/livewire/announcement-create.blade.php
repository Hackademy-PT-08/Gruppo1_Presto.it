<div>
    <div class="container mb-5 pb-3">
        <div class="row">
            <div class="mb-md-5 mb-4 pb-md-0 pb-2 d-flex justify-content-center">
                <div class="row create-form mt-4">
                  <div class="col-12 col-md-8">
                        <div class="row bg-light rounded-3 shadow py-3">
                            <div class="col-12 mb-3">
                                <label for="title">{{ __('ann_create.title') }}</label>
                                <input type="text" id="title" name="title"
                                    class="form-control @error('title') is-invalid @enderror" wire:model.lazy="title"
                                    >
                                @error('title')
                                    <span class="small text-danger">Oh cavolo! {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="col-12 mb-3">
                                <label for="description">{{ __('ann_create.description') }}</label>
                                <textarea name="description" id="description" cols="3" rows="3"
                                    class="form-control input-form @error('description') is-invalid @enderror" wire:model.lazy="description" ></textarea>
                                @error('description')
                                    <span class="small text-danger">Oh cavolo! {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="col-6 mb-3">
                                <label for="price">{{ __('ann_create.price') }}</label>
                                <input type="text"
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                    id="price" class="form-control @error('price') is-invalid @enderror"
                                    name="price" wire:model.lazy="price" >
                                @error('price')
                                    <span class="small text-danger">Oh cavolo! {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="col-6 mb-3">
                                <select class="form-select mt-4 @error('category') is-invalid @enderror"
                                    wire:model="category"  name="categoria" id="categoria">
                                    <option value="">{{ __('ann_create.select') }}</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"> {{ $category->name }} </option>
                                    @endforeach
                                </select>
                                @error('category')
                                    <span class="small text-danger">Oh cavolo! {{ $message }} </span>
                                @enderror
                            </div>
                            <div class="col-12 mb-3">
                                <label for="images">{{ __('ann_create.picture') }}</label>
                                <input type="file" id="images" name="images" multiple
                                    class="form-control @error('temporary_images.*') is-invalid @enderror @error('images') is-invalid @enderror"
                                    wire:model="temporary_images" >
                                @error('temporary_images.*', 'images')
                                    <span class="small text-danger">Oh cavolo! {{ $message }} </span>
                                @enderror

                                @error('images')
                                    <span class="small text-danger">Oh cavolo! {{ $message }} </span>
                                @enderror
                            </div>
                        </div>

                        @if (!empty($images))
                            <div class="row">
                                <div class="col-12">
                                    <p>Preview</p>
                                    <div class="row border border-4 border-info rounded shadow py-4">
                                        @foreach ($images as $key => $image)
                                            <div class="col my-3">
                                                <div class="mx-auto shadow rounded preview-images"
                                                    style="background-image: url({{ $image->temporaryUrl() }})"></div>
                                                <input type="button"
                                                    class="btn btn-danger shadow d-block text-center mt-2 mx-auto"
                                                    wire:click.lazy="removeImage({{ $key }})" value="Cancella">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div class="col-2 mb-3">
                            <button wire:click="store"
                                class="btn btn-primary m-2 mx-auto">{{ __('ann_create.add') }}</button>
                        </div>
                  </div>

                  <aside class="col-lg-3 offset-lg-1 col-md-4 mt-md-0 mt-4">
                    <h5 class="h2 text-white">Preview Card</h5>
                    @if (!$images)
                    <article class="card border-0 shadow">
                        <div class="card-img-top position-relative overflow-hidden">
                          
                            <img src="https://picsum.photos/536/354" alt="Product image">
                          </a>
                          <!-- Edit button-->
                          <span class="badge text-bg-secondary position-absolute bottom-0 start-0 m-2">Categoria</span>
                        </div>
                        <div class="card-body">
                          <h3 class="product-title mb-2">
                            <a class="d-block text-truncate" href="">Titolo</a>
                          </h3>
                          {{-- <span class="fs-sm text-muted text-truncate " style="max-width: 200px">{{ $description }}</span> --}}
                          <p class="text-truncate"> Descrizione</p>
                        </div>
                        <div class="card-footer mt-n1 py-0 border-0">
                          <div class="d-flex align-items-center justify-content-between position-relative mb-1 py-3 border-top">
                            <div class="user">
                              <a class="nav-link-style d-flex align-items-center text-truncate" href="#">
                                <img class="me-2 rounded-circle" src="https://picsum.photos/300/300" style="width: 32px; height: 32px" alt="Avatar">
                                <span class="small">{{auth()->user()->name}}</span>
                              </a>
                            </div>
                            <span class="small mb-0 text-darker">800€</span>
                          </div>
                        </div>
                      </article>
                    @else
                    <article class="card  border-0 shadow">
                        <div class="card-img-top position-relative overflow-hidden"> 
                            <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
                            <div class="carousel-inner">
            
                                @foreach ($images as $image)
                                <div class="carousel-item @if($loop->first) active @endif" style="width:400px;height:300px ">
                                <img src="{{$image->temporaryUrl()}}" alt="immagine " style="max-height: 100%;max-width:100%;">
                                </div>
                                @endforeach
            
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                            </div>
                            
                            
                            <!-- Edit button-->
  
                            <span class="badge text-bg-secondary position-absolute bottom-0 start-0 m-2">
                                {{$category->name}}
                            </span>
                        </div>
                        <div class="card-body">
                            <h3 class="product-title mb-2">
                                <a class="d-block text-truncate" href="">{{ $title }}</a>
                            </h3>
  
                            <p class="text-truncate"> {{ $description }}</p>
                        </div>
                        <div class="card-footer mt-n1 py-0 border-0">
                            <div
                                class="d-flex align-items-center justify-content-between position-relative mb-1 py-3 border-top">
                                <div class="user">
                                    <a class="nav-link-style d-flex align-items-center text-truncate"
                                        href="#">
                                        <img class="me-2 rounded-circle" src="https://picsum.photos/300/300"
                                            style="width: 32px; height: 32px" alt="Avatar">
                                        <span class="small">{{ auth()->user()->name }}</span>
                                    </a>
                                </div>
                                <span class="small mb-0 text-darker">{{ $price }}€</span>
                            </div>
                        </div>
                    </article>
                    @endif

                 </aside>
                </div>


            </div>
        </div>
    </div>
</div>
