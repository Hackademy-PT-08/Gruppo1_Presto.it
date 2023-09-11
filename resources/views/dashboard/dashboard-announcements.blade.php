<x-layout-with-band type="dashboard">

  <div class="container dashboard mb-5 pb-3">
    <div class="bg-light shadow-lg rounded-3 overflow-hidden">
      <div class="row">
        <!-- Sidebar-->
        <x-dashboard-sidebar />
        <!-- Content-->
        <section class="col-lg-9 pt-lg-4 pb-4 mb-3">
          <div class="pt-2 px-4 ps-lg-0 pe-xl-5">
            <div class="d-flex flex-sm-row flex-column align-items-sm-center justify-content-between mb-4">
              <h1 class="h3 mb-sm-0 mb-2 pb-1 text-sm-start text-center">Annunci da revisionare</h1>
            </div>
            <div class="row row-cols-md-3 row-cols-sm-2 row-cols-1 gy-sm-4 gy-3 gx-3 mb-4">
              @forelse ($user_announcements as $user_announcement)
              <div class="col mb-2">
                <x-card userId="{{ $user_announcement->user_id }}" image="https://picsum.photos/300/300"
                  title="{{ $user_announcement->title }}" description="{{ $user_announcement->description }}"
                  price="{{ $user_announcement->price }}" category="{{ $user_announcement->category->name }}"
                  hrefCategory="{{ route('searchByCategory', $user_announcement->category->id) }}"
                  hrefSingle="{{ route('dashboard.single', $user_announcement->id) }}"
                  creator="{{$user_announcement->user->name}}"/>
              </div>
              @empty
                <span class="h6 w-100 text-sm-start text-center">Cavoli! Non ci sono annunci da revisionare</span>
                @endforelse
            </div>
          </div>
      </div>
      </section>
      </div>
    </div>
  </div>

</x-layout-with-band>