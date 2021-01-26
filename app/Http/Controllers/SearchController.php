<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class SearchController extends Controller
{
  /**
   * Handle the incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function __invoke(Request $request)
  {
    $term = $request->input('term');

    $results = Page::where('title', 'like', '%' . $term . '%')
      ->orWhere('body', 'like', '%' . $term . '%')
      ->get();

    return view('search', compact(['results', 'term']));
  }
}
