@extends('layout.Site')

@section('main')
<form action="" method="POST">
    @csrf
    <div class="container bg-success">
        <div align="center" class="">
            <h1 class="text-white mt-5"><b>Đăng Nhập</b></h1>

            <div class="mt-3">
                <input type="email" class="rounded-pill" placeholder="Nhập tên Đăng nhập" name="email" id="">
                @error('email')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mt-2">
                <input type="password" class="rounded-pill" placeholder="Nhập mật khẩu đăng nhập" name="password" id="">
                @error('password')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-outline-danger mt-3">Login</button>
            <div class="mt-3">
                <span class="border border-danger rounded-circle bg-danger text-white p-2 "> Or </span>
            </div>
            <div>
                <button type="button" class="btn btn-outline-danger mt-3 "><a href="{{ route('admin.register') }}"
                        class="text-white">Đăng Kí</a></button>
            </div>
            <div class="mt-3">a</div>
        </div>
    </div>
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>

</html>

@stop