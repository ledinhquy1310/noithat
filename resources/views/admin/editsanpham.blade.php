@extends('layout.Admin');
@section('main')
    <form name="frmloaihang" action="" method="post">
        <div class="card mt-3">
            <div class="card-header">
                SỬA SẢN PHẨM
            </div>
            <div class="card-body">
                <table class="table table-striped table">
                    <thead>
                        <tr class="bg-info">
                            <th scope="col">Tên mặt hàng</th>
                            <th scope="col">Giá mặt hàng</th>
                            <th scope="col">Hình ảnh</th>
                            <th scope="col">Mô tả</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form method="post" action="{{route('admin.update', ['id'=>$edit->id])}}">
                            @csrf
                            @method('PATCH')
                            <tr>
                                <td>
                                    <input type="text" name="edit_name" class="form-control" value="{{$edit->edit_name}}">
                                </td>
                                <td>
                                    <input type="text" name="edit_price" class="form-control" value="{{$edit->edit_price}}">
                                </td>
                                <td>
                                    <input type="text" name="edit_img" class="form-control" value="{{$edit->edit_img}}">
                                </td>
                                <td>
                                    <textarea class="w-100" name="edit_mota" name="" id="" cols="50" rows="3" value="{{$edit->edit_mota}}"></textarea>
                                </td>
                            </tr>
                            <button type="submit" class="btn btn-primary">SỬA SẢN PHẨM</button>
                        </form>
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
            </div>
        </div>
    </form>

@stop
