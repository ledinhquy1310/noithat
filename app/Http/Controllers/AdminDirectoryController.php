<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDirectoryController extends Controller
{
    public function index() {
        $allProducts = \DB::table('products')->get();
        return view('admin.sanpham', compact('allProducts'));
    }
}
