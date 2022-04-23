<?php

namespace App\Providers;

use App\Models\PropertyAdsType;
use App\Models\PropertyType;
use App\Models\search;
use App\Models\SiteSetting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        View::composer(['front.buy.buy', 'front.rent.rent', 'front.commercial.commercial','front.search.search'], function ($view){
            $view->with('propertyAdsTypes', PropertyAdsType::where('status', 1)->get());
        });
        View::composer(['front.buy.buy', 'front.rent.rent', 'front.commercial.commercial', 'front.home.home','front.search.search', 'front.newProject.newProject'], function ($view){
            $view->with('propertyTypes', PropertyType::where('status', 1)->get());
        });
        View::composer(['front.buy.buy', 'front.rent.rent', 'front.commercial.commercial', 'front.home.home','front.search.search'], function ($view){
            $view->with('popularSearches', search::orderBy('hit_count', 'DESC')->take(5)->get());
        });
        View::composer(['front.buy.buy', 'front.rent.rent', 'front.commercial.commercial', 'front.home.home','front.search.search'], function ($view){
            $view->with('trendingSearches', search::orderBy('id', 'DESC')->take(5)->get());
        });
        View::composer(['front.incluedes.header', 'front.home.home'], function ($view){
            $view->with('siteSetting', SiteSetting::orderBy('id', 'DESC')->first());
        });
    }
}
