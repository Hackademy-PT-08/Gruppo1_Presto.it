  <article class="card h-100 border-0 shadow">
    <div class="card-img-top position-relative overflow-hidden">
      <a class="d-block" href="{{ $hrefSingle }}">
        <img src="{{ $image }}" alt="Product image">
      </a>
      <!-- Edit button-->
      @if (Auth::user() && Auth::user()->id == $userId && isset($hrefModify))
        <a class="btn-edit btn-sm position-absolute top-0 end-0 m-2" href="{{ $hrefModify }}" data-bs-toggle="tooltip"
          data-bs-placement="left" aria-label="Edit" data-bs-original-title="Edit">
          <i class="fa-regular fa-pen-to-square"></i>
        </a>
      @endif
      <span class="badge text-bg-secondary position-absolute bottom-0 start-0 m-2">{{ $category }}</span>
    </div>
    <div class="card-body">
      <h3 class="product-title mb-2 fs-6">
        <a class="d-block text-truncate" href="{{ $hrefSingle }}">{{ $title }}</a>
      </h3>
      {{-- <span class="fs-sm text-muted text-truncate " style="max-width: 200px">{{ $description }}</span> --}}
      <p class="text-truncate"> {{$description}}</p>
    </div>
    <div class="card-footer mt-n1 py-0 border-0">
      <div class="d-flex align-items-center justify-content-between position-relative mb-1 py-3 border-top">
        <div class="user">

          <a class="nav-link-style fs-sm" href="#">
            <img class="me-2 rounded-circle" src="https://picsum.photos/300/300" width="32" alt="Avatar">
            {{$creator}}
          </a>
        </div>
        <h4 class="mt-1 mb-0 fs-6 text-darker">{{ $price }}€</h4>
      </div>
    </div>
  </article>

