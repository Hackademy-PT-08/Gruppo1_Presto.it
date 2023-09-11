<div>
  <div class="container">
    <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 gy-sm-4 g-4 mb-4">

      @foreach ($announcements as $announcement)
        <div class="col">
          <x-card userId="{{ $announcement->user_id }}" image="https://picsum.photos/300/300"
            title="{{ $announcement->title }}" description="{{ $announcement->description }}"
            price="{{ $announcement->price }}" category="{{ $announcement->category->name }}"
            hrefCategory="{{ route('searchByCategory', $announcement->category->id) }}"
            hrefSingle="{{ route('announcements.single', $announcement->id) }}"
            hrefModify="{{ route('announcements.edit', $announcement->id) }}" 
            creator="{{$announcement->user->name}}"/>
        </div>
      @endforeach

    </div>
  </div>
</div>
</div>

</div>
