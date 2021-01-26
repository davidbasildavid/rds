<?php

namespace App\Http\Controllers;

use App\Product;
/* use Illuminate\Http\Request; */
/* use Illuminate\Http\Response; */

class ProductController extends Controller
{
	public function show(Product $product)
	{
		return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }
}


