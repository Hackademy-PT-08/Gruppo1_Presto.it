<x-layout>
   <div class="container my-5">
      <div class="row">
          @foreach ($announcements as $announcement)

          <x-card
            image="https://picsum.photos/300/300"
            title="{{ $announcement->title }}"
            description="{{ $announcement->description }}"
            price="{{ $announcement->price }}"
            category="{{ $announcement->category->name }}"
            hrefSingle="{{ route('announcements.single', $announcement->id) }}"
            hrefModify="{{route('announcements.edit',$announcement->id)}}"
          />
         @endforeach
      </div>
   </div>

</x-layout>