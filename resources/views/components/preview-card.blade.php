<article class="card h-100 border-0 shadow " style="500px">
    <div class="card-img-top position-relative overflow-hidden">
        <img src="https://picsum.photos/200/300" alt="Product image">
      <span class="badge text-bg-secondary position-absolute bottom-0 start-0 m-2"></span>
    </div>
    <div class="card-body">
      <h3 class="product-title mb-2 fs-6">
        <span class="d-block text-truncate" href="">Titolo</span>
      </h3>
      <div class="row">
        <div class="col-6 small"><h4 class="mt-1 mb-0 fs-6 text-darker">Sport</h4></div>
        <div class="col-6 small"><h4 class="mt-1 mb-0 fs-6 text-darker">100€</h4></div>
      </div>
      <span class="fs-sm text-muted"></span>
    </div>
    <div class="card-footer mt-n1 py-0 border-0">
      <div class="d-flex align-items-center justify-content-between position-relative mb-1 py-3 border-top">
        <div class="user">
          <img class="me-2 rounded-circle" src="https://picsum.photos/300/300" width="32" alt="Avatar">
          <span class="nav-link-style fs-sm stretched-link" href="#">{{auth()->user()->name}}</span>
        </div>

      </div>
    </div>
  </article>
