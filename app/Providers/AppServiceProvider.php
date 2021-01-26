<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use App\Order;
use App\Step;
use App\Page;
use App\Observers\OrderObserver;
use App\Observers\StepObserver;

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

		//View::share('pages', Page::whereNotIn('slug', ['home'])->get());
		
		// order observer
		Order::observe(OrderObserver::class);
		// step observer
		Step::observe(StepObserver::class);
    }
}
