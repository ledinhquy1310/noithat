<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Products;

class CartController extends Controller
{
    // Tạo đối tượng bằng depedentci
    public function index(Cart $cart) {
        return view('cart', compact('cart'));
    }

    public function add(Request $request, Cart $cart) {
        $product = Products::find($request->id);
        $quantity = $request->quantity;
        $cart->add($product, $quantity);
        // dd($request->all());
        return redirect()->route('cart');
    }

    // Lỗi
    public function deleteProduct(Request $request, Cart $cart) {
        $id = Products::find($request->id);
        // dd($id);
        $cart->removeProduct($id);
        return redirect()->route('cart');
    }

    public function removeAll(Cart $cart) {
        $cart->deleteProduct();
        return redirect()->route('cart');
    }
}
