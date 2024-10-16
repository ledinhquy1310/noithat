@extends('layout.Site')
@section('main')
<form action="" method="POST">
    @csrf
    <div class="container bg-success">
        <div align="center" class="">
            <h1 class="text-white mt-5"><b>Đăng Ký</b></h1>
            <div class="mt-3">
                <b class="text-white">Họ và Tên:</b><br>
                <input type="text" class="rounded-pill" placeholder="Nhập Họ và Tên" name="name" id="">
                @error('name')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mt-3">
                <b class="text-white">Ngày Sinh:</b> <br>
                <input type="date" class="rounded-pill" name="birthday" id="">
                @error('birthday')
                <div class="text-danger">{{ $message }}</div>
                @enderror

            </div>
            <div class="mt-3">

                <b class="text-white">Giới Tính:</b><br>
                <input type="radio" name="gender" id=""><b class="text-white">Nam</b>
                <input type="radio" name="gender" id=""><b class="text-white">Nữ</b>
                @error('gender')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mt-3">
                <b class="text-white">Email:</b><br>
                <input type="email" class="rounded-pill " placeholder="Nhập Email" name="email" id="">
                @error('email')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mt-2">
                <b class="text-white">Password:</b><br>
                <input type="password" class="rounded-pill mt-2" placeholder="Nhập mật khẩu " name="password" id="">
                @error('password')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <br>
                <input type="password" class="rounded-pill mt-2" placeholder="Nhập lại mật khẩu "
                    name="confirm_password" id="">
                @error('confirm_password')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-outline-danger mt-3">Đăng Kí</button>
            <div class="mt-3">
                <span class="border border-danger rounded-circle bg-danger text-white p-2"> Or </span>
            </div>
            <div>
                <button type="button" class="btn btn-outline-danger mt-3 "><a href="{{ route('admin.login') }}"
                        class="text-white">Đăng Nhập</a></button>
            </div>
            <div class="mt-3">a</div>
        </div>
    </div>
    </div>
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>

@stop