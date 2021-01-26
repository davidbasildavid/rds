<?php

namespace App\Http\Controllers\Admin;

use App\Country;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Countries\StoreCountry;
use App\Http\Requests\Countries\UpdateCountry;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$countries = Country::get();

		return view('admin.countries.index', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		return view('admin.countries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCountry $request)
    {
		$validated = $request->validated();

		if($request->has('flag')){
			$validated['flag'] = Storage::putFile('countries/flags', $request->file('flag'));
		}

		Country::create($validated);

		return redirect()->route('admin.countries.index')->with('status', 'New country added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
		return view('admin.countries.show', compact('country'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCountry $request, Country $country)
    {
		$validated = $request->validated();

		if($request->has('flag')){
			Storage::delete($country->flag);
			$validated['flag'] = Storage::putFile('countries/flags', $request->file('flag'));
		}

		$country->update($validated);

		return redirect()->route('admin.countries.index')->with('status', 'Country updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
		Storage::delete($country->flag);

		$country->delete();

		return redirect()->route('admin.countries.index')->with('status', 'Country deleted');
    }
}

