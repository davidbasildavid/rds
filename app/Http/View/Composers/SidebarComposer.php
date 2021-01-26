<?php

namespace App\Http\View\Composers;

use App\Setting;
use Illuminate\View\View;
use App\Page;
use App\Product;
use App\Order;
use App\User;

class SidebarComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $pages_count;
    protected $products_count;
    protected $orders_count;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct(Page $pages, Product $products, Order $order)
    {
        // Dependencies automatically resolved by service container...
        $this->pages_count = Page::count();
        $this->products_count = Product::count();
        $this->order_count = Order::count();
        $this->users_count = User::count();
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('pages_count', $this->pages_count);
        $view->with('products_count', $this->products_count);
        $view->with('orders_count', $this->orders_count);
        $view->with('users_count', $this->users_count);
    }
}
