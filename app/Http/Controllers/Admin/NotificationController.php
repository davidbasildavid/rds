<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
	public function update()
	{
		auth()->user()->unreadNotifications->markAsRead();

		return 'success';
	}
}
