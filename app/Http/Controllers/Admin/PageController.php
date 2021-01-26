<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Requests\Pages\StorePage;
use App\Http\Requests\Pages\UpdatePage;
use App\Page;
use App\Image;
use App\Country;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$pages = Page::latest()->get();

		return view('admin.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$countries = Country::get();

		return view('admin.pages.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePage $request)
    {
		$validated = $request->validated();

		$page = Page::create($validated);

		if($request->filled('keywords')){
			foreach($request->input('keywords') as $keyword)
			{
				$page->keywords()->create(['title' => $keyword]);
			}
		}

		if($request->has('images')){
			foreach($request->images as $image)
			{
				$path = Storage::putFile('pages/images', $image);
				$page->images()->create(['path' => $path]);
			}
		}

		$page->save();

		return redirect(route('admin.pages.index'))->with('status', 'Page Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
		$countries = Country::get();

		return view('admin.pages.show', compact(['page', 'countries']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePage $request, Page $page)
    {
		$validated = $request->validated();

		$page->update($validated);

		if($request->filled('keywords')){
			$page->keywords()->delete();
			foreach($request->input('keywords') as $keyword)
			{
				$page->keywords()->create(['title' => $keyword]);
			}
		} else {
			$page->keywords()->delete();
		}

		if($request->has('images')){
			foreach($request->images as $image)
			{
				$path = Storage::putFile('pages/images', $image);
				$page->images()->create(['path' => $path]);
			}
		}

		return redirect(route('admin.pages.index'))->with('status', 'Page Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
		$images = $page->images;

		foreach($images as $image)
		{
			Storage::delete($image->path);
		}

		$page->delete();

		return redirect(route('admin.pages.index'))->with('status', 'Page Deleted');
    }
}
