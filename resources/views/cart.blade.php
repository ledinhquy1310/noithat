@extends('layout.Site')

@section('main')
<!-- Start Hero Section -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Cart</h1>
                </div>
            </div>
            <div class="col-lg-7">

            </div>
        </div>
    </div>
</div>
<!-- End Hero Section -->



<div class="untree_co-section before-footer-section">
    <div class="container">
        <div class="row mb-5">
            <form class="col-md-12" method="post">
                <div class="site-blocks-table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="product-thumbnail">Image</th>
                                <th class="product-name">Product</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-total">Total</th>
                                <th class="product-remove">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cart->list() as $key=>$value)
                            <tr>
                                <td class="product-thumbnail">
                                    <img src="{{asset('assets')}}/images/{{$value['image']}}" alt="Image"
                                        class="img-fluid">
                                </td>
                                <td class="product-name">
                                    <h2 class="h5 text-black">{{$value['name']}}</h2>
                                </td>
                                <td>${{number_format($value['price'], 2)}}</td>
                                <td>
                                    {{-- <div class="input-group mb-3 d-flex align-items-center quantity-container"
                                        style="max-width: 120px;">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-black decrease"
                                                type="button">&minus;</button>
                                        </div>
                                        <input name="soluong" type="text"
                                            class="form-control text-center quantity-amount" value="1" placeholder=""
                                            aria-label="Example text with button addon"
                                            aria-describedby="button-addon1">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-black increase" type="button">&plus;</button>
                                        </div>
                                    </div> --}}
                                    {{$value['quantity']}}
                                </td>
                                <td>${{number_format($value['price'] * $value['quantity'])}}.00</td>
                                
                                <td>
                                    {{-- Lỗi chỗ này --}}
                                    <form action="{{route('cart.xoa', ['id' => $value['product_id']])}}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-black btn-sm btn-block">X</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </form>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="row mb-5">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <form action="{{route('cart.remove')}}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-black btn-sm btn-block">Xóa tất cả</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-outline-black btn-sm btn-block">Tiếp tục mua sắm</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label class="text-black h4" for="coupon">Coupon</label>
                        <p>Enter your coupon code if you have one.</p>
                    </div>
                    <div class="col-md-8 mb-3 mb-md-0">
                        <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-black">Apply Coupon</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pl-5">
                <div class="row justify-content-end">
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-12 text-right border-bottom mb-5">
                                <h3 class="text-black h4 text-uppercase">Hóa đơn</h3>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <span class="text-black">Số món</span>
                            </div>
                            <div class="col-md-6 text-right">
                                <strong class="text-black">{{$cart->getToTalProduct()}}</strong>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-md-6">
                                <span class="text-black">Tổng tiền</span>
                            </div>
                            <div class="col-md-6 text-right">
                                <strong class="text-black">${{number_format($cart->getTotalPrice(), 2)}}</strong>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-black btn-lg py-3 btn-block"
                                    onclick="window.location='{{route('checkout')}}'">THANH TOÁN</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop