<x-layout>
   <div class="container my-5">
      <div class="row">
          @foreach ($announcements as $announcement)
            <div class="col-4">
               <h1 class="text-light">{{ $announcement->title }}</h1>
               <p class="text-light">{{ $announcement->description }}</p>
               <p class="text-light">{{ $announcement->price }}</p>
            </div>
         @endforeach
      </div>
   </div>
   
</x-layout>