<?php

namespace App\Observers;

use App\Order;
use App\User;
use App\Step;
use App\Notifications\OrderCreated;
use App\Notifications\UserCreated;
use App\Notifications\OrderCancelled;
//use App\Mail\OrderCancelled;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class OrderObserver
{
	/**
	 * Handle the order "created" event.
	 *
	 * @param  \App\Order  $order
	 * @return void
	 */
	public function created(Order $order)
	{
		// get order's user
		$user = User::where('email', $order->email)->first();

		// if user doesn't exist
		if(!$user){
			$password = Str::random(10);
			$user = User::create([
				'role' => 'client',
				'name' => $order->full_name,
				'email' => $order->email,
				'password' => Hash::make($password),
				'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
				'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
			]);

			$user->notify(new UserCreated($user, $password));
		}

		// add user to order
		$order->user_id = $user->id;
		$order->save();

		// mail to the order's user
		$user->notify(new OrderCreated($order));

		// send notication to admin
		$admin = User::where('role', 'admin')->first();
		$admin->notify(new OrderCreated($order));


		// add first step
		Step::create([
			'order_id' => $order->id,
			'title' => 'Order Received',
			'done' => 1
		]);
	}

	/**
	 * Handle the order "updated" event.
	 *
	 * @param  \App\Order  $order
	 * @return void
	 */
	public function updated(Order $order)
	{
		//
	}

	/**
	 * Handle the order "deleted" event.
	 *
	 * @param  \App\Order  $order
	 * @return void
	 */
	public function deleted(Order $order)
	{
		$user = User::where('email', $order->email)->first();

		$user->notify(new OrderCancelled());
	}

	/**
	 * Handle the order "restored" event.
	 *
	 * @param  \App\Order  $order
	 * @return void
	 */
	public function restored(Order $order)
	{
		//
	}

	/**
	 * Handle the order "force deleted" event.
	 *
	 * @param  \App\Order  $order
	 * @return void
	 */
	public function forceDeleted(Order $order)
	{
		//
	}
}
