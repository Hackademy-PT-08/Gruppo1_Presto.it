<x-layout>
    <div class="container">
        <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 gy-sm-4 g-4 my-4">

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

                <div class="col-12" style="width: 100% !important">
                    <div class="alert alert-warning py-3 shadow">
                        <p class="lead text-center">
                            Non ci sono annunci per questa ricerca
                        </p>
                    </div>
                </div>

                
            @endforelse

        </div>
    </div>

    
</x-layout>
