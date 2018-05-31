@extends('layout.index') @section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-3 col-lg-2">
           
        </div>
        <div class="col-sm-12 col-md-9 col-lg-10">
            <section class="section__content-profile">
                <div class="profile-title-block">
                    <h1 class="profile-title"> Thông tin cá nhân</h1>
                    <button class="profile-menu-toggle visible-xs visible-sm js-toggle-profile-menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
                @if(count($errors) >0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $er) {{$er}}
                    <br> @endforeach
                </div>
                @endif
                <div class="profile-content profile-detail">
                    <div class="panel panel-profile">
                        <div class="panel-body">
                            <form id="acc_profile_update_form" class="form-horizontal" action="sua-thong-tin-ca-nhan" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                        
                                <div class="form-group ">
                                    <label for="full-name-txt" class="col-sm-3 control-label"> HỌ TÊN
                                        <span>*</span>
                                    </label>
                                    <div class="col-sm-6 col-lg-5">
                                        <input id="full-name-txt" name="HoTen" placeholder="Nhập họ tên" class="form-control" type="text"
                                            value="{!!Auth::user()->KhachHang->first()->HoTen!!}">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="full-name-txt" class="col-sm-3 control-label"> NGÀY SINH
                                        <span>*</span>
                                    </label>
                                    <div class="col-sm-6 col-lg-5">
                                        <input id="full-name-txt" name="NgaySinh" class="form-control" type="date"
                                            value="{!!Auth::user()->KhachHang->first()->NgaySinh!!}">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="full-name-txt" class="col-sm-3 control-label"> HÌNH ẢNH
                                        <span>*</span>
                                    </label>
                                    <div class="col-sm-6 col-lg-5">
                                        <input id="full-name-txt" name="HinhAnh" class="form-control" type="file"
                                            value="">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="full-name-txt" class="col-sm-3 control-label"> GIỚI TÍNH
                                        <span>*</span>
                                    </label>
                                    <div class="col-sm-6 col-lg-5">
                                            <select class="form-control" id="GioiTinh" name="GioiTinh">
                                                    <option value="1">Nam</option>
                                                    <option value="0">Nữ</option>
                                             </select>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="full-name-txt" class="col-sm-3 control-label"> ĐỊA CHỈ
                                        <span>*</span>
                                    </label>
                                    <div class="col-sm-6 col-lg-5">
                                        <input id="full-name-txt" name="DiaChi" placeholder="Nhập địa chỉ" class="form-control" type="text"
                                            value="{!!Auth::user()->KhachHang->first()->DiaChi!!}">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="full-name-txt" class="col-sm-3 control-label"> ĐIỆN THOẠI
                                        <span>*</span>
                                    </label>
                                    <div class="col-sm-6 col-lg-5">
                                        <input id="full-name-txt" name="DienThoai" placeholder="Nhập điện thoại" class="form-control" type="text"
                                            value="{!!Auth::user()->KhachHang->first()->DienThoai!!}">
                                    </div>
                                </div>
                                
                                
                                <div class="form-group">
                                    <div class="col-sm-push-3 col-sm-6">
                                        <button id="acc_profile_update_submit" type="submit" class="btn btn-positive"> Lưu thông tin</button>
                                    </div>
                                </div>
                               
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<br>
<br> @endsection