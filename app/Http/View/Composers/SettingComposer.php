<?php

namespace App\Http\View\Composers;

use App\Setting;
use Illuminate\View\View;
use Illuminate\Support\Facades\Cache;

class SettingComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $settings;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct(Setting $settings)
    {
        // Dependencies automatically resolved by service container...
		if(Cache::has('settings')){
			$settings = Cache::get('settings');
		} else {
			$settings = Setting::first();
			Cache::put('settings', $settings);
		}

        $this->settings = $settings;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('settings', $this->settings);
    }
}
