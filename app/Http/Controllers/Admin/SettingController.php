<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Settings\UpdateSetting;
use Illuminate\Support\Facades\Storage;
use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		if(Cache::has('settings')){
			$settings = Cache::get('settings');
		} else {
			$settings = Setting::first();
		}

		return view('admin.settings.index', compact('settings'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSetting $request, Setting $setting)
    {
		$validated = $request->validated();

		if($request->has('logo'))
		{
			unset($validated['logo']);
			if($setting->logo != 'global/logo.png'){
				Storage::delete($setting->logo);
			}
			$path = Storage::putFile('global/', $request->file('logo'));
			$validated['logo'] = $path;
		}
	
		$setting->update($validated);

		if(Cache::has('settings')){
			Cache::forget('settings');
			Cache::put('settings', $setting);
		}

		return back()->with('status', 'Settings Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
