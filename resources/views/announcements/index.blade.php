<x-layout>
   <div class="container my-5">
       <div class="row justify-content-center justify-content-xxl-start">
           @foreach ($announcements as $announcement)
               <x-card userId="{{ $announcement->user_id }}" image="https://picsum.photos/300/300"
                   title="{{ $announcement->title }}" description="{{ $announcement->description }}"
                   price="{{ $announcement->price }}" category="{{ $announcement->category->name }}"
                   hrefCategory="{{  route('searchByCategory',$announcement->category->id)}}"
                   hrefSingle="{{ route('announcements.single', $announcement->id) }}"
                   hrefModify="{{ route('announcements.edit', $announcement->id) }}" />
           @endforeach
       </div>
   </div>
</x-layout>
