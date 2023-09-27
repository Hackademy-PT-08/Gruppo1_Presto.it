<x-layout-with-band type="dashboard">

    <div class="container dashboard mb-5 pb-3">
        <div class="bg-light shadow-lg rounded-3 overflow-hidden">
            <div class="row">
                <!-- Sidebar-->
                <x-dashboard-sidebar announcementToRevisedCount="{{ $announcements_to_revised_count }}"
                    requestsCount="{{ $requests_count }}" usersCount="{{ $revisors_count }}" />
                <!-- Content-->
                <section class="col-lg-9 pt-lg-4 pb-4 mb-3">
                    <div class="pt-2 px-4 ps-lg-0 pe-xl-5">
                        <div class="d-flex flex-sm-row flex-column align-items-sm-center justify-content-between mb-4">
                            <h1 class="h3 mb-sm-0 mb-2 pb-1 text-sm-start text-center">{{ __('dash.revision') }}</h1>
                            @if (isset($last_annoucement) && $last_annoucement->updated_at >= now()->subMinutes(5))
                                <a class="btn btn-sm btn-primary rounded-1 ms-lg-4 ms-2"
                                    onclick="event.preventDefault();getElementById('form-cancel-last-reject').submit()">{{ __('dash.undo') }}</a>
                                <form action="{{ route('dashboard.cancel-last-reject') }}" method="post" class="d-none"
                                    id="form-cancel-last-reject">
                                    @csrf
                                    @method('PATCH')
                                </form>
                            @endif
                        </div>

                        <div class="row row-cols-md-3 row-cols-sm-2 row-cols-1 gy-sm-4 gy-3 gx-3 mb-4">
                            @forelse ($announcements as $announcement)
                                <div class="col mb-2">
                                    <x-card userId="{{ $announcement->id }}"
                                        image="{{ $announcement->images()->first()->getUrl() }}"
                                        title="{{ $announcement->title }}"
                                        description="{{ $announcement->description }}"
                                        price="{{ $announcement->price }}"
                                        category="{{ $announcement->category->name }}"
                                        hrefCategory="{{ route('searchByCategory', $announcement->category->id) }}"
                                        hrefSingle="{{ route('dashboard.single', $announcement->id) }}"
                                        creator="{{ $announcement->user->name }}" />
                                </div>

                            @empty
                                <span class="h6 w-100 text-sm-start text-center">{{__('dash.oh')}}</span>
                            @endforelse
                        </div>
                    </div>
            </div>
            </section>
        </div>
    </div>
    </div>

</x-layout-with-band>
