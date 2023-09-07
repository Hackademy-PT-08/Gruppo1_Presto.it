<div class="card m-3 p-0" id="card_container" style="width: 18rem; height: fit-content">
    <img src="{{ $image }}" id="img_card" class="card-img-top" alt="...">
    <div class="card-body">
        <span class="badge text-bg-primary mt-1 card-category"><a class="a-modified" href="{{$hrefCategory}}">{{ $category }}</a></span>  
        <h5 class="card-title mt-3 text-center">{{ $title }}</h5>
        <p class="card-description card-text mt-3">{{ $description }}</p>
        <p class="card-price mt-3 h5">{{ $price }}€</p>
        <div class="d-flex justify-content-between">
            <a href="{{ $hrefSingle }}" class="btn btn-success">Vedi annuncio</a>

            @if (Auth::user() && Auth::user()->id == $userId)
                <a href="{{ $hrefModify }}" class="btn btn-primary">Modifica</a>
            @endif
        </div>
    </div>
</div>