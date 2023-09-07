<div class="card mx-2" id="card_container" style="width: 18rem">
    <img src="{{ $image }}" id="img_card" class="card-img-top" alt="...">
    <div class="card-body">
        <span class="badge text-bg-primary mt-1"><a href="{{$hrefCategory}}">{{ $category }}</a></span>  
        <h5 class="card-title mt-3 text-center">{{ $title }}</h5>
        <p class="card-text mt-3">{{ $description }}</p>
        <p id="card_price" class="mt-3 h5">{{ $price }}€</p>
        <div class="d-flex justify-content-between">
            <a href="{{ $hrefSingle }}" class="btn btn-success">Vedi annuncio</a>

            @if (Auth::user() && Auth::user()->id == $userId)
                <a href="{{ $hrefModify }}" class="btn btn-primary">Modifica</a>
            @endif
        </div>
    </div>
</div>
