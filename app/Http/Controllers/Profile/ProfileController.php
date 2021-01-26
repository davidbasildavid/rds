<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Profile\UpdateProfile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\User;

class ProfileController extends Controller
{
	public function index()
	{
		$user = auth()->user();

		return view('profile.index', compact('user'));
	}

	public function update(UpdateProfile $request, User $user)
	{
		$validated = $request->validated();

		if($request->has('avatar')){
			unset($validated['avatar']);
			if($user->avatar != 'users/images/avatar.png'){
				Storage::delete($user->avatar);
			}
			$path = Storage::putFile('users/images/', $request->file('avatar'));
			$validated['avatar'] = $path;
		}

		if($validated['new_password']){
			unset($validated['password']);
			$validated['password'] = Hash::make($validated['new_password']);
		}

		unset($validated['old_password']);
		unset($validated['new_password']);

		$user->update($validated);

		return back()->with('status', 'Profile Updated');
	}
}
