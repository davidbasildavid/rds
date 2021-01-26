<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use App\Page;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Products\UpdateProduct;
use App\Http\Requests\Products\StoreProduct;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$products = Product::get();

		return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$pages = Page::get();

		return view('admin.products.create', compact('pages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProduct $request)
    {
		$validated = $request->validated();

		$pages = $validated['pages'];

		unset($validated['pages']);

		if($request->has('image')){
			$path = Storage::putFile('products/images', $request->image);
			$validated['image'] = $path;
		}

		$product = Product::create($validated);

		$product->pages()->sync($pages);

		return redirect()->route('admin.products.index')
			->with('status', 'Product Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
		$pages = Page::get();
		//$product->load('pages');

		return view('admin.products.show', compact(['product', 'pages']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProduct $request, Product $product)
    {
		$validated = $request->validated();

		$pages = $validated['pages'];

		unset($validated['pages']);

		if($request->has('image')){
			if($product->image != 'products/images/default.png')
			{
				Storage::delete($product->image);
			} 
				$path = Storage::putFile('products/images', $request->image);
				$validated['image'] = $path;
		}

		$product->update($validated);

		$product->pages()->sync($pages);

		return redirect()
			->route('admin.products.index')
			->with('status', 'Product Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
		$product->pages()->detach();

		if($product->image != 'products/images/default.png')
		{
			Storage::delete($product->image);
		}

		$product->delete();

		return redirect()
			->route('admin.products.index')
			->with('status', 'Product Deleted');
    }
}
