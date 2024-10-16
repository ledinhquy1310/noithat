<?php

namespace App\Http\Controllers;


use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class ProductsController extends Controller
{
    public function index()
    {
        $users = \DB::table('products')->paginate(8);
        // $users = Product::all();
        return view('product', compact('users')); // compact nhận vào string
    }

    public function product(Products $product)
    {
        return view('product', compact('product'));
    }
    public function show($id)
    {
        $product = Products::findOrFail($id);
        return view('chitietsanpham', compact('product'));
    }

}
