<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminAddController;
use App\Http\Controllers\AdminDangkyController;
use App\Http\Controllers\AdminDangNhapController;
use App\Http\Controllers\AdminDirectoryController;
use App\Http\Controllers\AdminEditController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ThankyouController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Users
Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::post('/add-cart', [CartController::class, 'add'])->name('cart.add');
Route::post('/xoa-sp', [CartController::class, 'deleteProduct'])->name('cart.xoa'); // Lỗi
Route::post('/remove-all', [CartController::class, 'removeAll'])->name('cart.remove');
Route::get('/cart', [CartController::class, 'index'])->name('cart');

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/service', [ServiceController::class, 'index'])->name('service');
// san pham
Route::get('/product', [ProductsController::class, 'index'])->name('product');
Route::get('/product/{product}', [ProductsController::class, 'product'])->name('home.product');
Route::get('/products/{id}', [ProductsController::class, 'show'])->name('products.show');


Route::get('/thankyou', [ThankyouController::class, 'index'])->name('thankyou');



Route::group(['prefix' => ''], function () {
    Route::get('/', [IndexController::class, 'index'])->name('index');
});
// dang nhap
Route::get('login', [AdminController::class, 'login'])->name('admin.login');
Route::post('login', [AdminController::class, 'check_login']);
// dangky
Route::get('register', [AdminController::class, 'register'])->name('admin.register');
Route::post('register', [AdminController::class, 'check_register']);
//dangxuat
Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
// admin
Route::group(['middleware' => 'auth'], function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin.index');
        Route::get('/danhmuc', [AdminDirectoryController::class, 'index'])->name('admin.directory');
        Route::get('/addsanpham', [AdminAddController::class, 'index'])->name('admin.add');
        Route::post('/add-sp', [AdminAddController::class, 'store'])->name('admin.addsp');
        Route::delete('/remove/{id}', [AdminAddController::class, 'destroy'])->name('admin.remove');
        
        Route::get('/editsanpham/{id}', [AdminAddController::class, 'edit'])->name('admin.edit');
        Route::patch('update/{id}',[AdminAddController::class, 'update'])->name('admin.update');

        Route::get('/dangky', [AdminDangkyController::class, 'index'])->name('admin.dangky');
    });
});

Route::get('/search', [SearchController::class, 'search'])->name('search');
