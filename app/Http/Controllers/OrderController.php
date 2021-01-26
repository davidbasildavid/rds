<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\User;
use App\Events\OrderCreated as OrderCreatedEvent;
use Illuminate\Http\Request;
use App\Http\Requests\Orders\StoreOrder;
use App\Mail\OrderCreated;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Product $product)
    {
		return view('orders.create', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrder $request)
    {
		$validated = $request->validated();

		$order = Order::create($validated);

		// using App\Observervers\OrderObserver;

		\Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
		$token = $_POST['stripeToken'];

		$charge = \Stripe\Charge::create([
			'amount' => $order->price,
			'currency' => 'eur',
			'description' => 'Example charge',
			'source' => $token
		]);

		return back()->with('status', 'Thank You!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

}
