<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\AppProfile;
use App\Models\Menu;
use View;

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
        $list_menu = Menu::where('cate_menu','sub1')->where('del',1)->orderBy('order','asc')->get();
        $list_menu_sub = Menu::where('cate_menu','sub2')->where('del',1)->orderBy('order','asc')->get();
        $list_menu_sub_sub = Menu::where('cate_menu','sub3')->where('del',1)->orderBy('order','asc')->get();

        $app_profile = AppProfile::first();

        $locations = [
            ['HO', 17.9919200000,102.6384830000],
            ['ODX', 20.6958340000,101.9891320000],
            ['SVK ', 16.6067350000,104.7933790000],
            ['LNT', 21.0031800000,101.4082110000],
            ['ATP', 14.8130030000,106.8239750000],
            ['XSB', 21.6445060000,101.9088620000],
        ];

        View::share(['list_menu'=>$list_menu,'list_menu_sub'=>$list_menu_sub, 'list_menu_sub_sub'=>$list_menu_sub_sub, 'app_profile'=>$app_profile, 'locations'=>$locations]);
    }
}
