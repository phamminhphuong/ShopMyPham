@extends('admin.layout.index') 
@section('title') 
Sửa khách hàng
@endsection
 @section('content')
<section class="content container-fluid">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Sửa hồ sơ xin việc</h3>
        </div>
        <div class="box-header with-border">
            <h4>Hồ sơ xin việc</h4>
        </div>
        @if(count($errors) >0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $er) {{$er}}
            <br> @endforeach
        </div>
        @endif
        <br>
        <form action="admin/khachhang/edit/{!!$khachhang->id!!}" enctype="multipart/form-data" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-horizontal">
                <div class="form-group">
                    <b class="control-label col-md-2">Mã tài khoản</b>
                    <div class="col-md-10">
                        <select class="form-control" id="MaTaiKhoan" name="MaTaiKhoan">
                            @foreach($taikhoan as $tk)
                            <option @if($tk->id==$khachhang->MaTaiKhoan) {!!"selected"!!}@endif value="{!!$tk->id!!}">{!!$tk->email!!}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2"> Họ tên</b>
                    <div class="col-md-10">
                        <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                            data-val-length-max="50" id="HoTen" name="HoTen" type="text" value="{!!$khachhang->HoTen!!}" placeholder="Nhập họ tên">
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2"> Ngày sinh </b>
                    <div class="col-md-10">
                        <input type="date" class="form-control" name="NgaySinh" value="{!!$khachhang->NgaySinh!!}">
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2"> Giới tính</b>
                    <div class="col-md-10">
                        <select class="form-control" id="GioiTinh" name="GioiTinh">
                            <option @if($khachhang->GioiTinh==1) {!!"selected"!!} @endif value="1">Nam</option>
                            <option @if($khachhang->GioiTinh==0) {!!"selected"!!} @endif value="0">Nữ</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2">Địa chỉ</b>
                    <div class="col-md-10">
                        <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                            data-val-length-max="50" id="DiaChi" name="DiaChi" type="text" value="{!!$khachhang->DiaChi!!}" placeholder="Nhập địa chỉ">
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2">Điện thoại</b>
                    <div class="col-md-10">
                        <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                            data-val-length-max="50" id="DienThoai" name="DienThoai" type="text" value="{!!$khachhang->DienThoai!!}" placeholder="Nhập điện thoại">
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2">Hình ảnh</b>
                    <div class="col-md-10">
                        <img src="image_KhachHang/{!!$khachhang->HinhAnh!!}" width="300px" height="200px"  alt=""><br><br>
                        <input type="file" name="HinhAnh" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input type="submit" value="Sửa" class="btn btn-primary">
                        <br>
                        <br>
                    </div>
                </div>
            </div>
    </form>
    </div>
    <div class="box-footer">
        <a href="admin/khachhang/list">Danh sách</a>
    </div>
</section>
@endsection
 @section('script')
<script>
    CKEDITOR.replace('NguyenVongLamViec');
</script> @endsection