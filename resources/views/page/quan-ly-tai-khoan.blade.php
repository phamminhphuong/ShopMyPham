@extends('layout.index') @section('content')
<div class="container">
    <div class="row" style="margin-top:50px">
  <div class="col-md-1"></div>
  <div class="col-md-9">
        <section class="section__content-profile">
                <div class="profile-title-block">
                    <h1 class="profile-title"> Thông tin tài khoản</h1>
                    <button class="profile-menu-toggle visible-xs visible-sm js-toggle-profile-menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
                <div class="profile-content profile-account-information">
                    <div class="panel panel-profile">
                        <div class="panel-heading visible-xs">
                            <h3 class="panel-title"> Thông tin tài khoản</h3>
                        </div>
                        <div class="panel-body">
                            <div class="profile-overview">
                                <div class="row">
                                    <div class="col-xs-10">
                                        <div class="profile-info">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="profile-info-item">
                                                        <h3>Thông tin đăng nhập</h3>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="profile-info-item">
                                                        <p> Email</p>
                                                        <h5>{!!Auth::user()->email!!}</h5>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="profile-info-item">
                                                        <p> Password</p>
                                                        <h3></h3>
                                                    </div>
                                                </div>
                                                <br><br>
                                                <div class="col-xs-12">
                                                    <a href="sua-tai-khoan-dang-nhap" class="btn btn-negative" title="Sửa thông tin tài khoản">Sửa thông tin đăng nhập</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="profile-overview">
                                <div class="row">
                                    <div class="col-xs-10">
                                        <div class="profile-info">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="profile-info-item">
                                                        <h3>Thông tin cá nhân</h3>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-sm-4 col-md-2">
                                                    <div class="profile-info-item">
                                                        <p> Họ tên</p>
                                                        <h5>{!!empty(Auth::user()->KhachHang->first())?'':Auth::user()->KhachHang->first()->HoTen!!}</h5>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-sm-4 col-md-2">
                                                    <div class="profile-info-item">
                                                        <p> Ngày sinh</p>
                                                        <h5>{!!empty(Auth::user()->KhachHang->first())?'':Auth::user()->KhachHang->first()->NgaySinh!!}</h5>
                                                    </div>
                                                </div>
                                                <div class="clearfix visbile-xs visible-sm"></div>
                                                <div class="col-xs-6 col-sm-4 col-md-2">
                                                    <div class="profile-info-item">
                                                        <p> Hình ảnh</p>
                                                        <img src="image_KhachHang/{!!empty(Auth::user()->KhachHang->first())?'':Auth::user()->KhachHang->first()->HinhAnh!!}" alt="not img" width="100px" height="100px">
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-sm-4 col-md-1">
                                                    <div class="profile-info-item">
                                                        <p> Giới tính</p>
                                                        <h5>
                                                        @if(Auth::user()->KhachHang->first()->GioiTinh==1)
                                                            {{"Nam"}}
                                                        @else
                                                            {{"Nữ"}}
                                                        @endif
                                                        </h5>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-sm-4 col-md-3">
                                                    <div class="profile-info-item">
                                                        <p> Địa chỉ</p>
                                                        <h5>{!!empty(Auth::user()->KhachHang->first())?'':Auth::user()->KhachHang->first()->DiaChi!!}</h5>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-sm-4 col-md-2">
                                                    <div class="profile-info-item">
                                                        <p> Điện thoại</p>
                                                        <h5>{!!empty(Auth::user()->KhachHang->first())?'':Auth::user()->KhachHang->first()->DienThoai!!}</h5>
                                                    </div>
                                                </div>
                                               
                                                <div class="col-xs-12">
                                                    <a href="sua-thong-tin-ca-nhan" class="btn btn-negative" title="Sửa thông tin tài khoản">Sửa thông tin cá nhân</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
  </div>
    </div>
</div>
<br>
<br> @endsection