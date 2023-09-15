<x-layout-with-band type="annunciAll">

  {{-- @livewire('index-announcement'); --}}
  <x-searchbar />

  <div class="container all-announcement mt-5">
    <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 gy-sm-4 g-4 mb-4">

      @forelse ($revised_announcements as $announcement)
        <div class="col-12 col-md-4 mb-5">
          <x-card userId="{{ $announcement->user_id }}" image="https://picsum.photos/300/300"
            title="{{ $announcement->title }}" description="{{ $announcement->description }}"
            price="{{ $announcement->price }}" category="{{ $announcement->category->name }}"
            hrefCategory="{{ route('searchByCategory', $announcement->category->id) }}"
            hrefSingle="{{ route('announcements.single', $announcement->id) }}"
            hrefModify="{{ route('announcements.edit', $announcement->id) }}"
            creator="{{ $announcement->user->name }}" />
        </div>

      @empty
        <div class="w-100 d-flex flex-column align-items-center">
          <span class="h6">Non ci sono ancora annunci</span>
          <a class="btn btn-sm btn-primary rounded-1" href="{{ route('announcements.create') }}">Crea
            annuncio</a>
        </div>
      @endforelse

    </div>
  </div>
  </div>
  </div>
 {{$revised_announcements->links()}}
</x-layout-with-band>
