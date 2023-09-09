<div>
    {{--   
    <div class="container my-5">
        <div class="row">
            <div class="col-8"></div>
            <div class="col-4">
                <form class="d-flex gap-3" role="search">
                    <div class="col-7">
                        <input wire:model="query_name" wire:keyup.debounce="reloadPosts" class="form-control me-2"
                            type="search" placeholder="Search" aria-label="Cerca">
                    </div>
                    <div class="col-5">
                        <select wire:model="query_category_id" wire:change="reloadPosts" class="form-select"
                            aria-label="Default select example">
                            <option selected value="all">Categorie</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </form>
            </div>
        </div>

        <div class="container d-flex">
            <div class="row">
                @foreach ($announcements as $announcement)
                    <div class="d-flex col-md-3 col-sm-12">
                        <x-card userId="{{ $announcement->user_id }}" image="https://picsum.photos/300/300"
                            title="{{ $announcement->title }}" description="{{ $announcement->description }}"
                            price="{{ $announcement->price }}" category="{{ $announcement->category->name }}"
                            hrefCategory="{{ route('searchByCategory', $announcement->category->id) }}"
                            hrefSingle="{{ route('announcements.single', $announcement->id) }}"
                            hrefModify="{{ route('announcements.edit', $announcement->id) }}" />
                    </div>
                @endforeach
            </div>
        </div>
    </div> --}}

    <div class="container py-5">
        <div class="row justify-content-center">
            @foreach ($announcements as $announcement)
                <div class="col-12 col-lg-4">
                    <div class="card box-shadow mx-auto my-5" style="width: 18rem;">
                        <x-card userId="{{ $announcement->user_id }}" image="https://picsum.photos/300/300"
                            title="{{ $announcement->title }}" description="{{ $announcement->description }}"
                            price="{{ $announcement->price }}" category="{{ $announcement->category->name }}"
                            hrefCategory="{{ route('searchByCategory', $announcement->category->id) }}"
                            hrefSingle="{{ route('announcements.single', $announcement->id) }}"
                            hrefModify="{{ route('announcements.edit', $announcement->id) }}" />
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</div>
