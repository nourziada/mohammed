<?php

namespace App\Providers;

use App\Header;
use App\HomeTestimonial;
use App\SiteSetting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        View::share('siteSettings' ,SiteSetting::first());
        View::share('header' ,Header::first());
        View::share('characterSection' ,HomeTestimonial::skip(1)->first());
        View::share('testimonialHome' ,HomeTestimonial::first());
        View::share('biographySection' ,HomeTestimonial::skip(2)->first());
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
