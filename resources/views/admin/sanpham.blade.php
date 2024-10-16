@extends('layout.Admin')
@section('main')
    <h2 class="text-center">DANH SÁCH HÀNG HÓA</h2>
    <div class="container">
        <div class="row col-12">
            <a href="{{ route('admin.add') }}">
                <h4>Thêm sản phẩm</h4>
            </a>
        </div>
        <div class="row">

            <table class="table">
                <thead>
                    <tr class="table-primary text-center">
                        <th>Tên hàng</th>
                        <th>Đơn giá</th>
                        <th>Mô tả</th>
                        <th>Hình</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($allProducts as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>${{ number_format($item->price, 2) }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                <img style="width: 80px; height: 80px" src="{{ asset('assets') }}/images/{{ $item->img }}"
                                    alt="">
                            </td>
                            <td class="d-flex">
                                {{-- <form action="{{route('admin.edit', ['id' => $item->id])}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-primary mx-1">SỬA</button>
                                </form> --}}
                                <a href="{{ route('admin.edit', ['id' => $item->id]) }}" type="submit" class="btn btn-primary">SỬA</a>
                                <form action="{{ route('admin.remove', ['id' => $item->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger mx-1">XÓA</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

@stop
