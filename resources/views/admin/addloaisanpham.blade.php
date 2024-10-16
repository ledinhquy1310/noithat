@extends('layout.Admin')
@section('main')
    ;
    <div class="card mt-3">
        <div class="card-header info">
            QUẢN LÝ LOẠI HÀNG
        </div>
        <div class="card-body">

            <form action="{{route('admin.addsp')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Tên mặt hàng</label>
                    <input type="text" name="name" class="form-control">
                    @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="form-group">
                    <label for="">Giá Tiền</label>
                    <input type="text" name="price" class="form-control">
                    @error('price') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="form-group">
                    <label for="">Hình ảnh</label>
                    <input placeholder="name.png" type="text" name="img" class="form-control">
                    @error('img') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="form-group">
                    <label for="">Mô tả sản phẩm</label>
                    <input name="description" class="form-control" id="" class="w-100" rows="5"></input>
                    @error('description') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </div>
            </form>
        </div>
    </div>
@endsection
