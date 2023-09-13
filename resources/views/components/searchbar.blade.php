<div id="searchbar" class="shadow-lg mt-2 mb-4">
    <div class="card shadow-none" style="background-color: var(--primary-color);">
      <div class="card-body">
        <form action="{{route('announcements.filterbar')}}">
          <div class="row">
            <div class="col-12 col-lg-3 mb-3">
              <input id="searchInput" type="text" class="form-control form-control-lg mt-2" placeholder="Cosa ti serve?" name="searched" value="{{request('searched')}}">
              
            </div>
            <!-- select -->
            <div class="col-12 col-lg-3 mb-3 ">
              <select id="categorySelect" class="form-control form-control-lg mt-2" name="category">
                <option value="" >
                  Seleziona categoria
                </option>
               @foreach ($categories as $category )
                   <option value="{{$category->id}}"  {{ request('category') == $category->id ? 'selected' : ''}} >{{$category->name}}</option>
               @endforeach
              </select>
              
            </div>
            <div class="col-12 col-lg-3 mb-3 mb-lg-3">
              <div class="row">
                <div class="col-6 mb-3 mb-lg-4">
                  <input  type="number" placeholder="Min.......€" name="min_price" class="  form-control form-control-lg mt-2" min="0" value="{{request('min_price')}}"/>
                </div>
                <div class="col-6 mb-3 mb-lg-3">
                  <input type="number" name="max_price" placeholder="Max.......€" class="  form-control form-control-lg mt-2" value="{{ request('max_price') }}"/>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-3 mb-3 mb-lg-3 d-grid justify-items-center">

                <div class="row ">
                    <div class="col-12 mb-3 mb-lg-3 py-2">
                        <input type="submit" class="btn btn-lg btn-light" value="Cerca annunci">
                    </div>
                </div>
              
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  