<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        $results = Products::where('name', 'like', '%' . $query . '%')
            ->orWhere('price', 'like', '%' . $query . '%')
            ->get();

        return view('product', compact('results'));
    }
}
