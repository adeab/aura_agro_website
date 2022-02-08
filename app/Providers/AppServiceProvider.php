<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Appearance;
use stdClass;

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
        //
        Schema::defaultStringLength(191);
        
        $demo_appearance = new stdClass;
        $demo_appearance->address = "Demo Address";
        $demo_appearance->phone_number = "01XXXXXXXX";
        $demo_appearance->facebook = "facebook page";
        $demo_appearance->about_us = "demo about us";
        $demo_appearance->youtube = "youtube channel";
        // $demo_appearance->
        view()->share('appearance', $demo_appearance);
    }
}
