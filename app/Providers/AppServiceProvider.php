<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use DB;

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
        $appname = DB::table('cms_settings')->where('name', 'appname')->first();
        $logo = DB::table('cms_settings')->where('name', 'logo')->first();
        $address = DB::table('cms_settings')->where('name', 'address')->first();
        $phone = DB::table('cms_settings')->where('name', 'phone')->first();
        $email = DB::table('cms_settings')->where('name', 'email')->first();
        $social_setting = DB::table('social_settings')->get();
        $page_types = DB::table('static_page_types')->get();

        View::share(['logo'=>$logo,'appname' => $appname, 'address'=> $address, 'phone'=> $phone, 'email'=>$email, 'social_setting'=>$social_setting, 'page_types'=>$page_types ]);  
    }
}
