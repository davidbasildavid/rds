<?php

namespace App\Observers;

use App\Step;
use App\Order;
use App\User;
use App\Notifications\StepAdded;
use App\Notifications\StepChecked;

class StepObserver
{
    /**
     * Handle the step "created" event.
     *
     * @param  \App\Step  $step
     * @return void
     */
    public function created(Step $step)
    {
		$order = Order::where('id', $step->order_id)->first();

		if($step->id != $order->steps->first()->id){
			$user = User::where('id', $order->user_id)->first();
			$user->notify(new StepAdded());
		}

    }

    /**
     * Handle the step "updated" event.
     *
     * @param  \App\Step  $step
     * @return void
     */
    public function updated(Step $step)
    {
		if($step->done == 1){
			$order = Order::where('id', $step->order_id)->first();
			$user = User::where('id', $order->user_id)->first();

			$user->notify(new StepChecked());
		}
    }

    /**
     * Handle the step "deleted" event.
     *
     * @param  \App\Step  $step
     * @return void
     */
    public function deleted(Step $step)
    {
        //
    }

    /**
     * Handle the step "restored" event.
     *
     * @param  \App\Step  $step
     * @return void
     */
    public function restored(Step $step)
    {
        //
    }

    /**
     * Handle the step "force deleted" event.
     *
     * @param  \App\Step  $step
     * @return void
     */
    public function forceDeleted(Step $step)
    {
        //
    }
}
