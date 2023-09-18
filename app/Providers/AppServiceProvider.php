<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Laravel\Fortify\Fortify;
use Illuminate\Pagination\Paginator;
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

        Paginator::useBootstrap();

        if(Schema::hasTable('categories')) {
            View::share('categories', Category::all());
        }

        if(Schema::hasTable('announcements')) {
            View::share('announcement_to_revised_count', Announcement::all()->count());
        }

        Fortify::requestPasswordResetLinkView(function () {
            return view('auth.forgot-password');
        });

        Fortify::resetPasswordView(function (Request $request) {
            return view('auth.reset-password', ['request' => $request]);
        });
    }
}
