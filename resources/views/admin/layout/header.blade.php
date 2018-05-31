<header class="main-header">
    <!-- Logo -->
    <a href="admin/bangdieukhien/index" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">
            <b>M</b>H</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">
            Shop Mỹ Huyền</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                @if(Auth::user())
                
                <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="image_KhachHang/{!!empty(Auth::user()->KhachHang->first())?'':Auth::user()->KhachHang->first()->HinhAnh!!}" alt="" class="user-image">
                                
                                <span class="hidden-xs"> {!!Auth::user()->email!!}</span>
                            </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                                <img src="image_KhachHang/{!!empty(Auth::user()->KhachHang->first())?'':Auth::user()->KhachHang->first()->HinhAnh!!}" alt="" class="img-circle">
                                <p>
                                    {{-- Account --}}
                                    {!!Auth::user()->email!!}
                                </p>
                            </li>
                        <!-- Menu Body -->
                        {{--  <li class="user-body">
                            <div class="row">
                                <div class="col-xs-4 text-center">
                                    <a href="#">Followers</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">Sales</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">Friends</a>
                                </div>
                            </div>
                            <!-- /.row -->
                        </li>  --}}
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="admin/taikhoan/update-profile" class="btn btn-default btn-flat">Sửa</a>
                            </div>
                            <div class="pull-right">
                                <a href="dangxuat" class="btn btn-default btn-flat">Đăng xuất</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                @endif
            </ul>
        </div>
    </nav>
</header>