<?php

namespace App\Http\View\Composers;

use App\Page;
use App\Country;
use Illuminate\View\View;

class PageComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $pages;
    protected $countries;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct(Page $pages, Country $countries)
    {
        // Dependencies automatically resolved by service container...
        $this->pages = Page::with('country')->get();
        $this->countries = Country::get();
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('pages', $this->pages);
        $view->with('countries', $this->countries);
    }
}
