<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class AdminAddController extends Controller
{
    public function index()
    {
        return view('admin.addloaisanpham');
    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required|unique:products',
            'price' => 'required',
            'img' => 'required',
            'description' => 'required'
        ], [
            'name.required' => 'Tên không được để trống.',
            'name.unique' => 'Tên sản phẩm đã tồn tại',
            'price.required' => 'Giá sản phẩm không được để trống.',
            'img.required' => 'Ảnh sản phẩm không được để trống.',
            'description.required' => 'Mô tả sản phẩm không được để trống.'
        ]);


        $name = $request->input('name');
        $price = $request->input('price');
        $img = $request->input('img');
        $description = $request->input('description');
        Products::create([
            'name' => $name,
            'price' => $price,
            'img' => $img,
            'description' => $description,
        ]);

        return redirect()->route('admin.add');
    }

    public function edit(string $id)
    {
        $edit = Products::findOrFail($id);
        return view('admin.editsanpham', compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'edit_name' => 'required',
            'edit_mota' => 'required',
            'edit_img' => 'required',
            'edit_price' => 'required|numeric',
        ]);
        Products::whereId($id)->update();
        return redirect()->route('admin.directory');
    }


    public function destroy(string $id)
    {
        $product = Products::findOrFail($id);
        $product->delete();
        return redirect()->route('admin.directory');
    }
}
