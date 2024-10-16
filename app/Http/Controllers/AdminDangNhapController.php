<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDangNhapController extends Controller
{
    public function index() {
        return view('admin.dangnhap');
    }
}
