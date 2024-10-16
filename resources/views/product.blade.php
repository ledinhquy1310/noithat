@extends('layout.Site')
@section('main')
<!-- Start Hero Section -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <form action="{{ route('search') }}" method="GET">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                      <h1>SHOP</h1>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="input-group">
                        <input type="text" class="form-control" name="query" placeholder="Search">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit">
                                Search
                            </button>
                        </div>
                    </div>
                </div>
            </form>


        </div>
    </div>
</div>
<!-- End Hero Section -->
<div> <h1 class="text-danger text-center mt-5"><b>Sản Phẩm</b></h1></div>
@if(isset($results))
<div class="untree_co-section product-section before-footer-section">
    <div class="container">

        <div class="row">
            @foreach ($results as $item)
            <!-- Start Column 1 -->
            <div class="col-12 col-md-4 col-lg-3 mb-5">
                @if(auth()->check())
                <a class="product-item" href="{{ route('products.show', $item->id) }}">
                    <form action="{{route('cart.add')}}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$item->id}}">
                        <img style="" src="{{asset('assets')}}/images/{{$item->img}}" name="image"
                            class="img-fluid product-thumbnail">
                        {{-- <input type="hidden" value="{{asset('assets')}}/images/{{$item->img}}" name="image"> --}}
                        <h3 name="name" class="product-title">{{$item->name}}</h3>
                        <strong name="price" class="product-price">${{$item->price}}.00</strong>
                        <input type="hidden" name="quantity" value="1">

                        <button type="submit" class="icon-cross">
                            <img src="{{asset('assets')}}/images/cross.svg" class="img-fluid">
                        </button>
                    </form>
                </a>
                @else
                <a class="product-item" href="{{ route('admin.login') }}" onclick="alert('Bạn phải đăng nhập')">
                    <form action="{{route('cart.add')}}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$item->id}}">
                        <img style="" src="{{asset('assets')}}/images/{{$item->img}}" name="image"
                            class="img-fluid product-thumbnail">
                        {{-- <input type="hidden" value="{{asset('assets')}}/images/{{$item->img}}" name="image"> --}}
                        <h3 name="name" class="product-title">{{$item->name}}</h3>
                        <strong name="price" class="product-price">${{$item->price}}.00</strong>
                        <input type="hidden" name="quantity" value="1">

                        <button type="button" class="icon-cross">
                            <img src="{{asset('assets')}}/images/cross.svg" class="img-fluid">
                        </button>
                    </form>
                </a>
                @endif

            </div>
            <!-- End Column 1 -->
            @endforeach

        </div>
    </div>
</div>
@else
<div class="untree_co-section product-section before-footer-section">
    <div class="container">
        <div class="row">
            @foreach ($users as $item)
            <!-- Start Column 1 -->
            <div class="col-12 col-md-4 col-lg-3 mb-5">
                @if(auth()->check())
                <a class="product-item" href="{{ route('products.show', $item->id) }}">
                    <form action="{{route('cart.add')}}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$item->id}}">
                        <img style="" src="{{asset('assets')}}/images/{{$item->img}}" name="image"
                            class="img-fluid product-thumbnail">
                        {{-- <input type="hidden" value="{{asset('assets')}}/images/{{$item->img}}" name="image"> --}}
                        <h3 name="name" class="product-title">{{$item->name}}</h3>
                        <strong name="price" class="product-price">${{$item->price}}.00</strong>
                        <input type="hidden" name="quantity" value="1">

                        <button type="submit" class="icon-cross">
                            <img src="{{asset('assets')}}/images/cross.svg" class="img-fluid">
                        </button>
                    </form>
                </a>
                @else
                <a class="product-item" href="{{ route('admin.login') }}" onclick="alert('Bạn phải đăng nhập')">
                    <form action="{{route('cart.add')}}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$item->id}}">
                        <img style="" src="{{asset('assets')}}/images/{{$item->img}}" name="image"
                            class="img-fluid product-thumbnail">
                        {{-- <input type="hidden" value="{{asset('assets')}}/images/{{$item->img}}" name="image"> --}}
                        <h3 name="name" class="product-title">{{$item->name}}</h3>
                        <strong name="price" class="product-price">${{$item->price}}.00</strong>
                        <input type="hidden" name="quantity" value="1">

                        <button type="button" class="icon-cross">
                            <img src="{{asset('assets')}}/images/cross.svg" class="img-fluid">
                        </button>
                    </form>
                </a>
                @endif
            </div>
            <!-- End Column 1 -->
            @endforeach
            <div class="d-flex justify-content-center">
                {{$users->links()}}
            </div>

        </div>
    </div>
</div>

@endif
@stop
