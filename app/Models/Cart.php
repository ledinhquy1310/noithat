<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;


class Cart extends Model
{
    private $items = [];
    private $total_quantity = 0;
    private $total_price = 0;

    public function __construct() {
        $this->items = session('cart')?session('cart'):[];
    }


    //Phương thức lấy về sản phẩm của session
    public function list() {
        return $this->items;
    }
    // Phương thức thêm mới sản phẩm vào session
    public function add($product, $quantity=1) {
        $item = [
            'product_id'=> $product->id,
            'name'=> $product->name,
            'price'=> $product->price,
            'image' => $product->image,
            'quantity' => $quantity,
        ];
        $this->items[$product->id] = $item;
        session(['cart'=>$this->items]);
    }
    // Phương thức lấy về tổng tiền
    public function getTotalPrice() {
        $totalPrice = 0;
        foreach($this->items as $item) {
            $totalPrice += $item['price'] * $item['quantity'];
        }
        return $totalPrice;
    }

    //Phương thức lấy số sản phẩm
    public function getTotalProduct() {
        return count($this->items);
    }

    // xóa từng giỏ hàng
    // Lỗi
    public function removeProduct($product_id) {
        Session::forget('cart' . $product_id);
        // unset($this->items[$product_id]);
    }

    // Phương thức xóa tất cả sản phẩm 
    public function deleteProduct() {
        // return Session::flush(); // Lệnh này xóa tất cả session
        Session::forget('cart');
        $this->items = []; // Cập nhật lại mảng $items bằng mảng trống
    }
}
