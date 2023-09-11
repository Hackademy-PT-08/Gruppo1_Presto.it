<x-layout>
  
    {{-- sezione titolo --}}
    <div class="page-title-overlap bg-primary pt-4">
        <div class="container">
            <div class=" text-center">
                <h1 class=" text-light">Annuncio corrente</h1>
            </div>
        </div>
    </div>
    {{-- sezione articolo --}}
    <section class="container pb-md-4">
        <div class="bg-light shadow-lg rounded-3 px-4 py-lg-4 py-3 mb-5">
            <div class="py-lg-3 py-2 px-lg-3">
                <div class="row gy-4">
                    {{-- imag --}}
                    <div class="col-lg-6">
                        <div class="position-relative rounded-3 overflow-hidden mb-lg-4 mb-3 "><img class="w-100 rounded "
                                src="https://picsum.photos/400/300"></div>
                    </div>
                    {{-- description --}}
                    <div class="col-lg-6">
                        <div class="ps-xl-5 ps-lg-3">
                            {{-- titolo --}}
                            <div class="text-center">
                                <h2 class="h3" >{{$announcement->title}}</h2>
                            </div>
                            <div class="d-flex aling-items-centre flex-wrap text-nowrap mb-sm-4 mb-3 fs-sm ">
                                <div class="mb-2 me-sm-3 me-2">creato il:{{$announcement->created_at->format('d/m/Y')}}</div>
                                <div class="mb-2 me-sm-3 me-2 ps-sm-3 ps-2 border-start"><i
                                        class="fas fa-eye me-2"></i>15 views</div>
                                <div class="mb-2 me-sm-3 me-2 ps-sm-3 ps-2 border-start"><i
                                        class="far fa-heart me-2"></i>4 favorite</div>
                            </div>

                            <div class="row row-cols-sm-2 row-cols-1 gy-3 gx-4 mb-4 pb-md-2">
                                {{-- creators --}}
                                <div class="col">
                                    <div class="card position-relative h-100">
                                        <div class="card-body p-3">
                                            <h3 class="h6 mb-2 fs-sm text-muted">{{$announcement->user->name}}</h3>
                                            <div class="d-flex align-items-center">
                                              <img class="rounded-circle me-2" src="https://picsum.photos/300/300" width="36">
                                              <a class="ms-2" href="">@foxnet_creator</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- revisor --}}
                                <div class="col">
                                    <div class="card position-relative h-100">
                                      <div class="card-body p-3">
                                        <h3 class="h6 mb-2 fs-sm text-muted">Revisor</h3>
                                        <div class="d-flex align-items-center"><img class="rounded-circle me-2" src="https://picsum.photos/300/300" width="36""><a class="ms-2 " href="nft-catalog-v2.html">Cartzilla art collage</a></div>
                                      </div>
                                    </div>
                                </div>

                        </div>
                        <p class="mb-4 pb-md-2 fs-sm"> {{$announcement->description}} </p>

                        <div class="row row-cols-sm-2 row-cols-1 gy-3 mb-4 pb-md-2">
                            <div class="col">
                              <h3 class="h6 mb-2 fs-sm text-muted">Prezzo</h3>
                              <h2 class="h3 mb-1"> € {{$announcement->price}}</h2>
                            </div>
                            <div class="col">
                                <h3 class="h6 mb-2 fs-sm text-muted">Categoria</h3>
                                <h2 class="h3 mb-1"> {{$announcement->category->name}}</h2>
                            </div>
                          </div>
                    </div>

                </div>


            </div>

        </div>

    </section>








</x-layout>
