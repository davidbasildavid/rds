<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Steps\StoreStep;
use App\Step;
use App\Order;
use App\User;
use App\Notifications\StepAdded;
use App\Notifications\StepChecked;

class StepController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStep $request, Order $order)
    {
		if(!$order->trashed()){
			$validated = $request->validated();

			$step = Step::create([
				'title' => $validated['title'],
				'order_id' => $order->id
			]);

			// using StepObserver
			/* $user = User::where('email', $order->email)->first(); */
			/* $user->notify(new StepAdded()); */

			return view('admin.orders._step', compact(['step', 'order']));
		}

		abort(403, 'Order is cancelled');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Step  $step
     * @return \Illuminate\Http\Response
     */
    public function show(Step $step)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Step  $step
     * @return \Illuminate\Http\Response
     */
    public function edit(Step $step)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Step  $step
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Step $step)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Step  $step
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order, Step $step)
    {
		$step = Step::where('order_id', $order->id)->where('id', $step->id);

		$step->delete();

		return 'success';

    }

	// custom methods
	public function check(Request $request, $orderId, $stepId)
	{
		$order = Order::findOrFail($orderId);
		if(!$order->trashed()){
			$user = User::where('email', $order->email)->first();

			$step = Step::where('order_id', $orderId)
				->where('id', $stepId)
				->firstOrFail();

			$step->done = !$step->done;

			$step->save();

			if($step->done == 1)
			{
				$user->notify(new StepChecked());
			}

			return view('admin.orders._step', compact(['step', 'order']));
		}
		abort(403, 'Order is cancelled');
	}
}
