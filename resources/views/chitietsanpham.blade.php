@extends('layout.Site')
@section('main')
<!-- Start Hero Section -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Product Details</h1>
                </div>
            </div>
            <div class="col-lg-7">
                <!-- Additional content if needed -->
            </div>
        </div>
    </div>
</div>
<!-- End Hero Section -->

<div class="untree_co-section product-section before-footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="{{ asset('assets/images/' . $product->img) }}" alt="Product Image" class="img-fluid">
            </div>
            <div class="col-lg-6">
                <h3 > <b class="text-danger">Tên Sản Phẩm:  </b>{{ $product->name }}</h3>
                <h3><strong><b class="text-danger">Giá: </b></strong> {{ $product->price }}$</h3>


                <!-- Add more details if needed -->

                <!-- Example: Add to Cart Form -->
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <input type="hidden" name="name" value="{{ $product->name }}">
                    <input type="hidden" name="price" value="{{ $product->price }}">
                    <input type="hidden" name="quantity" value="1">
                    <a href="{{ route('admin.login') }}" type="submit" class="btn btn-primary">Add to Cart</a>
                    <p class="mt-3"><b class="text-danger fs-5"> Chính Sách Bảo Hành: </b>Thời hạn bảo hành được tính kể từ ngày mua hàng được quy định rõ trên phiếu bảo hành. Đối với những bộ ghế sofa nhập khẩu được Nội Thất Xinh áp dụng bảo hành: <br>
 <b class="text-danger">+ Ghế sofa nhập khẩu chính hãng Malaysia: </b>
<br>
Khung gỗ: Bảo hành khung 5 năm <br>

Chất liệu: Bảo hành 1 năm da <br>
 <b class="text-danger">+ Ghế sofa nhập khẩu chính hãng Italia: </b>
<br>
Khung gỗ: Bảo hành 5 năm  <br>
Chất liệu: Bảo hành 2 năm da <br>
Những trường hợp không được bảo hành hoặc phát sinh phí bảo hành
<br>
- Quá thời gian bảo hành.
<br>
- Phiếu bảo hành bị rách, hay bị sửa đổi
<br>
- Khách hàng tự ý can thiệp sửa chữa sản phẩm hoặc đã sửa chữa sản phẩm tại đơn vị khác.
<br>
- Sản phẩm bị hư hỏng do lỗi người sử dụng, và lỗi hư không nằm trong phạm vi bảo hành.
</p>
                </form>
            </div>
            <div class="row">
                <h3 class=" text-center text-danger mt-5"><b>Chi Tiết Sản Phẩm</b></h3>
                <p class="fs-5">{{ $product->description }}</p>
               <img src="../assets/images/hinh1-1.jpg" alt=""> <br> <img src="../assets/images/hinh1-2.jpg" alt=""> <br> <img src="../assets/images/hinh1-3.jpg" alt=""> <br> <img src="../assets/images/hinh1-4.jpg" alt=""> <br>
            </div>
        </div>
    </div>
</div>
@endsection
