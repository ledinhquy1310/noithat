<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view('admin.index');
    }
    public function login()
    {
        return view('dangnhap');
    }
    public function check_login()
    {
        request()->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required',
        ]);

        $data = request()->only('email', 'password');

        if (auth()->attempt($data)) {
            $user = auth()->user();

            // Nếu trường is_admin của người dùng là null hoặc không phải là admin, chuyển hướng về trang chủ
            if (is_null($user->is_admin) || !$user->is_admin) {
                return redirect()->route('index');
            } else {
                // Nếu người dùng là admin, chuyển hướng đến trang admin/danhmuc
                return redirect()->route('admin.directory');
            }
        }

        return redirect()->back();
    }

    public function register()
    {
        return view('dangki');
    }
    public function check_register()
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);
        $data = request()->all('email', 'name');
        $data['password'] = bcrypt(request('password'));
        User::create($data);
        return redirect()->route('admin.login');
    }
    //dang xuat
    public function logout()
    {
        Auth::logout(); // Đăng xuất người dùng
        return redirect()->route('admin.login'); // Chuyển hướng đến trang đăng nhập
    }
}
