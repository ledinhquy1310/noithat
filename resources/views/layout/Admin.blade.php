<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--
    <script src="../node_modules/jquery/dist/jquery.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script> -->
    <!-- link đăng nhập -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- link đăng nhập -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- end -->
    <!-- end link đăng nhập -->
    <link rel="stylesheet" type="text/css" href="./Content/CSS/Tour.css" />
    <title>Admin SanPham</title>
</head>

<body>

    <header class="row no-gutters">
        <!-- nav san pham -->
        <section class="col-12" style="height:40px;">
            <div class="col-12">
                <div class="row">

                    <!-- test -->
                    <nav class="navbar navbar-expand-sm bg-light navbar-light">
                        <!-- Brand -->
                        <a class="navbar-brand" href="#">Logo</a>

                        <!-- Links -->
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="dropdown-item" href="{{route('admin.directory')}}">DANH MỤC</a>
                            </li>

                            <!-- Quản trị Doanh Mục -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                    Quản Trị Doanh Mục
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{route('admin.add')}}">Thêm sản phẩm</a>
                                    {{-- <a class="dropdown-item" href="{{route('admin.edit')}}">Sửa sản phẩm</a> --}}
                                </div>
                            </li>
                            <!-- Đăng xuất -->
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="{{route('admin.logout')}}">
                                    Đăng xuất
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- end test -->
                </div>
            </div>

        </section>



    </header>
    <!-- dang ky -->
    @yield('main');
</body>

</html>