<div id="searchbar" class="container col-lg-8 col-md-10 col-12">
  <form action="{{ route('announcements.filterbar') }}">
    <div class="bg-light shadow rounded p-4 mt-4 mb-4 ">
      <div class="row gy-3 gx-4 justify-content-between">
        <div class="col-xl-5 col-12 ">
          <input id="searchInput" type="text" class="form-control" placeholder="Cosa ti serve?" name="searched"
            value="{{ request('searched') }}">
        </div>
        <div class="col-xl-2 col-md-4 col-sm-6 col-12">
          <div class="input-group">
            <select id="categorySelect" class="form-control" name="category">
              <option value="">
                Categorie
              </option>
              @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                  {{ $category->name }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="col-xl-3 col-md-4 col-sm-6 col-12">
          <div class="d-flex align-items-center flex-shrink-0">
            <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
              placeholder="Min €" name="min_price" class="form-control me-2" min="0"
              value="{{ request('min_price') }}" />
            <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
              placeholder="Max €" name="max_price" class="form-control" min="0"
              value="{{ request('min_price') }}" />
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-12">
          <input type="submit" class="btn btn-sm btn-primary w-100" value="Cerca">
        </div>
      </div>
    </div>
  </form>
</div>
