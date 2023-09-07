<div class="card m-3 p-0" id="card_container" style="width: 18rem; height: fit-content">
    <img src="{{ $image }}" id="img_card" class="card-img-top" alt="...">
    <div class="card-body">
        <span class="badge text-bg-primary mt-1">{{ $category }}</span>
        <h5 class="card-title mt-3 text-center">{{ $title }}</h5>
        <p id="card_description" class="card-text mt-3">{{ $description }}</p>
        <p id="card_price" class="mt-3 h5">{{ $price }}€</p>
        <div class="d-flex justify-content-between">
            <a href="{{ $hrefSingle }}" class="btn btn-success">Vedi annuncio</a>

            @if (Auth::user() && Auth::user()->id == $userId)
                <a href="{{ $hrefModify }}" class="btn btn-primary">Modifica</a>
            @endif
        </div>
    </div>
</div>
