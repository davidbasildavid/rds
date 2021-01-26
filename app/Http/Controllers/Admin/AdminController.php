<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;

class AdminController extends Controller
{
	public function index()
	{
		$orderCount = Order::count();

//		$notifications = auth()->user()->unreadNotifications;

		return view('admin.index', compact('orderCount'));
	}
}
