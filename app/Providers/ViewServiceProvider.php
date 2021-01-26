<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Page;
use App\Product;

class ViewServiceProvider extends ServiceProvider
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
        // Using class based composers...
        View::composer(
            'layouts.front', 'App\Http\View\Composers\PageComposer'
        );

        View::composer(
            ['layouts.front', 'layouts.admin','admin._header', 'auth.login'], 'App\Http\View\Composers\SettingComposer'
        );

        /* View::composer( */
        /*     ['admin._sidebar'], 'App\Http\View\Composers\SidebarComposer' */
        /* ); */
    }
}
