<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDangkyController extends Controller
{
    public function index() {
        return view('admin.dangky');
    }
}
