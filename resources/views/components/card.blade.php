<div class="card mx-2" style="width: 18rem">
  <img src="{{ $image }}" class="card-img-top" alt="...">
  <div class="card-body">
    <span class="badge text-bg-primary">{{ $category }}</span>
    <h5 class="card-title">{{ $title }}</h5>
    <p class="card-text">{{ $description }}</p>
    <p><small>{{ $price }}€</small></p>
    <a href="{{ $hrefSingle }}" class="btn btn-primary">Vedi annuncio</a>

    @if (Auth::user() && Auth::user()->id == $userId)
      <a href="{{ $hrefModify }}" class="btn btn-primary">Modifica</a>
    @endif
    
  </div>
</div>