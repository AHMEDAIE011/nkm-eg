<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\RelatedNewsSite;
use App\Models\Setting;
use Illuminate\Support\ServiceProvider;

class CheckSettingProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $getSetting = Setting::firstOr(function(){
            return Setting::create([
                'site_name'=>'NKM',
                'logo'=>'/test/logo.png',
                'favicon'=>'default',
                'email'=>'NKM@gmail.com',
                'facebook'=>'https://www.facebook.com/',
                'twitter'=>'https://www.twitter.com/',
                'insagram'=>'https://www.instagram.com/',
                'youtupe'=>'https://www.youtupe.com/',
                'country'=>'Egypt',
                'city'=>' ',
                'street'=>'',
                'phone'=>'01035292735 /  01093343981',
                'small_desc'=>'At NKM – New Kitchen Mechanism, we’re more than just a brand… we’re your partner in creating smarter and more elegant spaces ',
            ]);
        });

        $getSetting->whatsapp = "https://wa.me/".$getSetting->phone;
        view()->share([
            'getSetting'=>$getSetting,
        ]);

    }
}
