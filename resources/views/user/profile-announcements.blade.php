<x-layout-with-band type="profile">


  <div class="container profile mb-5 pb-3">
    <div class="bg-light shadow-lg rounded-3 overflow-hidden">
      <div class="row">
        <!-- Sidebar-->
        <x-profile-sidebar userAnnouncementsCount="{{ $user_announcements_count }}" />
        <!-- Content-->
        <section class="col-lg-9 pt-lg-4 pb-4 mb-3">
          <div class="pt-2 px-4 ps-lg-0 pe-xl-5">
            <div class="d-flex flex-sm-row flex-column align-items-sm-center justify-content-between mb-4">
              <h1 class="h3 mb-sm-0 mb-2 pb-1 text-sm-start text-center">I miei annunci</h1>
            </div>
            <!-- Items grid-->
            <div class="row row-cols-md-3 row-cols-sm-2 row-cols-1 gy-sm-4 gy-3 gx-3 mb-4">
              <!-- Product-->
              @forelse ($user_announcements as $user_announcement)
                <div class="col mb-2">
                  <x-card userId="{{ $user_announcement->user_id }}" image="https://picsum.photos/300/300"
                    title="{{ $user_announcement->title }}" description="{{ $user_announcement->description }}"
                    price="{{ $user_announcement->price }}" category="{{ $user_announcement->category->name }}"
                    hrefCategory="{{ route('searchByCategory', $user_announcement->category->id) }}"
                    hrefSingle="{{ route('announcements.single', $user_announcement->id) }}"
                    hrefModify="{{ route('announcements.edit', $user_announcement->id) }}"
                    creator="{{ $user_announcement->user->name }}" />

                </div>
              @empty
                <span class="h6 w-100 text-sm-start text-center">Non hai ancora creato nessun annuncio</span>
              @endforelse
            </div>
            <!-- Create new item-->
            <div class="d-flex flex-sm-row flex-column">
              <a class="btn btn-sm btn-primary" href="{{ route('announcements.create') }}">Crea nuovo annuncio</a>
            </div>
          </div>
      </div>
      </section>
    </div>
  </div>
  </div>
</x-layout-with-band>
