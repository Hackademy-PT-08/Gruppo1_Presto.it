<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if(Schema::hasTable('categories')) {
            View::share('categories', Category::all());
        }

        if(Schema::hasTable('announcements')) {
            View::share('announcement_to_revised_count', Announcement::all()->count());
        }
    }
}
