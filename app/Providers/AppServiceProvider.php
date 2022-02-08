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
        $demo_appearance->welcome_message = "demo welcome message";
        $demo_appearance->welcome_header = "demo welcome header";
        $demo_appearance->team_message = "demo team message";
        $demo_appearance->team_header = "demo team header";

        $appearance = Appearance::take(1)->first();
        if ($appearance) {
            view()->share('appearance', $appearance);
        } else {
            view()->share('appearance', $demo_appearance);    
        }
        


        // $demo_appearance->
        
    }
}
