<x-layout>
    <h4 class="text-center text-white my-4">Tutti i tuoi annunci</h4>
    <div class="container my-5">

        <div class="row">
            @foreach ($user_announcements as $user_announcement)
                <div class="col-3">
                    <x-card userId="{{ $user_announcement->user_id }}" image="https://picsum.photos/300/300"
                        title="{{ $user_announcement->title }}" description="{{ $user_announcement->description }}"
                        price="{{ $user_announcement->price }}" category="{{ $user_announcement->category->name }}"
                        hrefCategory="{{  route('searchByCategory',$user_announcement->category->id)}}"
                        hrefSingle="{{ route('announcements.single', $user_announcement->id) }}"
                        hrefModify="{{ route('announcements.edit', $user_announcement->id) }}" />
                </div>
            @endforeach

        </div>
    </div>
</x-layout>
