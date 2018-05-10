@extends('admin.layout.index') 
@section('title') Thêm nhà cung cấp
@endsection 
@section('content')
<section class="content container-fluid">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Tạo mới nhà cung cấp</h3>
        </div>
        <div class="box-header with-border">
            <h4>Nhà cung cấp</h4>
        </div>
        @if(count($errors) >0) 
         <div class="alert alert-danger">
            @foreach($errors->all() as $er)
                 {{$er}}<br>
            @endforeach
         </div>
         @endif
        <br>
        <form action="admin/nhacungcap/add" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-horizontal">
                <div class="form-group">
                    <b class="control-label col-md-2"> Tên nhà cung cấp</b>
                    <div class="col-md-10">
                        <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                            data-val-length-max="50" id="TenNhaCC" name="TenNTD" type="text" value="" placeholder="Nhập tên nhà cung cấp">
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2"> Địa chỉ</b>
                    <div class="col-md-10">
                        <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                            data-val-length-max="50" id="DiaChi" name="DiaChi" type="text" value="" placeholder="Nhập địa chỉ">
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2"> Điện thoại</b>
                    <div class="col-md-10">
                        <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                            data-val-length-max="50" id="DienThoai" name="DienThoai" type="text" value="" placeholder="Nhập điện thoại">
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2"> Email</b>
                    <div class="col-md-10">
                        <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                            data-val-length-max="50" id="email" name="email" type="email" value="" placeholder="Nhập email">
                    </div>
                </div>
               
                <div class="form-group">
                    <b class="control-label col-md-2"> Địa chỉ web</b>
                    <div class="col-md-10">
                        <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                            data-val-length-max="50" id="DiaChiWeb" name="DiaChiWeb" type="text" value="" placeholder="Nhập địa chỉ web">
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2"> Giới thiệu</b>
                    <div class="col-md-10">
                        <textarea name="GioiThieu" id="GioiThieu"></textarea>
                    </div>
                </div>
                    <div class="form-group">
                        <b class="control-label col-md-2"> Hình ảnh</b>
                        <div class="col-md-10">
                            <input type="file" name="HinhAnh" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-10">
                            <input type="submit" value="Tạo mới" class="btn btn-primary">
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        </div>
        <div class="box-footer">
            <a href="admin/nhacungcap/list">Danh sách</a>
        </div>
</section>
@endsection
@section('script')
    <script>
        CKEDITOR.replace( 'GioiThieu'); 
   </script>
@endsection