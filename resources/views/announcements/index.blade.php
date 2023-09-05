<x-layout>
   @foreach ($announcements as $announcement)
   <h1>{{ $announcement->title }}</h1>
   <p>{{ $announcement->description }}</p>
   <p>{{ $announcement->price }}</p>
   @endforeach
</x-layout>