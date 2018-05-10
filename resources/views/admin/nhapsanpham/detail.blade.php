@extends('admin.layout.index') 
@section('title')
    Chi tiết khách hàng
@endsection
@section('content')
<section class="content container-fluid">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Chi tiết</h3>
        </div>
        <div class="box-header with-border">
            <h4>Khách hàng</h4>
        </div>
        <br>
        <div style="margin-bottom:10px">   
            <dl class="dl-horizontal">
                <dt>
                   Mã khách hàng
                </dt>
                <dd>
                     {!!$khachhang->id!!} 
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                   Mã tài khoản
                </dt>
                <dd>
                     {!!$khachhang->MaTaiKhoan!!} 
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                   Họ tên
                </dt>
                <dd>
                     {!!$khachhang->HoTen!!} 
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                   Ngày sinh
                </dt>
                <dd>
                     {!!$khachhang->NgaySinh!!} 
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                   Giới tính
                </dt>
                <dd>
                    @if($khachhang->GioiTinh==1)
                        {!!"Nam"!!}
                    @else
                        {!!"Nữ"!!}
                    @endif
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                   Địa chỉ
                </dt>
                <dd>
                     {!!$khachhang->DiaChi!!} 
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                   Điện thoại
                </dt>
                <dd>
                     {!!$khachhang->DienThoai!!} 
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                   Hình ảnh
                </dt>
                <dd>
                     <img src="image_KhachHang/{!!$khachhang->HinhAnh!!}" width="300px" height="200px" alt="">
                </dd>
            </dl>
        </div>
        <br><br>
    </div>
    <div class="box-footer">
        <a href="admin/khachhang/edit/{!!$khachhang->id!!}">Sửa</a> |
        <a href="admin/khachhang/list">Danh sách</a>
    </div>

</section>
@endsection