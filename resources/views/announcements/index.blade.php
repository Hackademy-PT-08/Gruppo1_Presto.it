<x-layout>
   <div class="container my-5">
      <div class="row">
          @foreach ($announcements as $announcement)
            <div class="col-4">
               <img src="https://picsum.photos/300/300" alt="immagine segna posto">
               <h1 class="text-light">{{ $announcement->title }}</h1>
               <p class="text-light">{{ $announcement->description }}</p>
               <p class="text-light">{{ $announcement->price }}</p>
               <p class="text-light">categoria :{{ $announcement->category->name }}</p>

            </div>
         @endforeach
      </div>
   </div>
   
</x-layout>