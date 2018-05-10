@extends('admin.layout.index') 
@section('title')
    Thêm sản phẩm
@endsection
@section('content')
<section class="content container-fluid">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Tạo mới sản phẩm</h3>
        </div>
        <div class="box-header with-border">
            <h4>Sản phẩm</h4>
        </div>
        @if(count($errors) >0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $er)
                
                    {{$er}}<br>
                
            @endforeach
        </div>
        @endif
        <br>
        <form action="admin/sanpham/add" method="post" enctype="multipart/form-data">
           <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-horizontal">
                    <div class="form-group">
                        <b class="control-label col-md-2"> Danh mục sản phẩm</b>
                        <div class="col-md-10">
                            <select class="form-control" id="MaDanhMuc" name="MaDanhMuc">
                                @foreach($danhmucsanpham as $dm)
                                     <option value="{!!$dm->id!!}">{!!$dm->TenDanhMuc!!}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <b class="control-label col-md-2"> Tên sản phẩm</b>
                        <div class="col-md-10">
                            <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                                data-val-length-max="50" id="TenSanPham" name="TenSanPham" type="text" value="" placeholder="Nhập tên sản phẩm">
                        </div>
                    </div>
                    <div class="form-group">
                        <b class="control-label col-md-2"> Xuất xứ</b>
                        <div class="col-md-10">
                            <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                                data-val-length-max="50" id="XuatXu" name="XuatXu" type="text" value="" placeholder="Nhập xuất xứ">
                        </div>
                    </div>
                    <div class="form-group">
                        <b class="control-label col-md-2"> Thành phần</b>
                        <div class="col-md-10">
                            <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                                data-val-length-max="50" id="ThanhPhan" name="ThanhPhan" type="text" value="" placeholder="Nhập thành phần">
                        </div>
                    </div>
                    <div class="form-group">
                        <b class="control-label col-md-2"> Công dụng</b>
                        <div class="col-md-10">
                            <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                                data-val-length-max="50" id="CongDung" name="CongDung" type="text" value="" placeholder="Nhập công dụng">
                        </div>
                    </div>
                    <div class="form-group">
                        <b class="control-label col-md-2"> Hạn sử dụng</b>
                        <div class="col-md-10">
                           <input type="date" name="HanSuDung" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <b class="control-label col-md-2"> Mô tả sản phẩm</b>
                        <div class="col-md-10">
                            <textarea name="MieuTa" id="MieuTa"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <b class="control-label col-md-2"> Hình ảnh</b>
                        <div class="col-md-10">
                          <input type="file" name="HinhAnh" class="form-control">
                        </div>
                    </div>
                        <div class="form-group">
                            <b class="control-label col-md-2"> Số lượng</b>
                            <div class="col-md-10">
                               <input type="number" class="form-control" name="SoLuong" value="0">
                            </div>
                        </div>
             
                    <div class="form-group">
                            <b class="control-label col-md-2"> Giá</b>
                            <div class="col-md-10">
                                <input type="text" name="Gia" class="form-control" placeholder="Nhập giá" value=""> 
                            </div>
                    </div>
                    <div class="form-group">
                            <b class="control-label col-md-2"> Giá ưu đãi</b>
                            <div class="col-md-10">
                                <input type="text" name="GiaUuDai" class="form-control" placeholder="Nhập giá ưu đãi" value=""> 
                            </div>
                    </div>
                    <div class="form-group">
                            <b class="control-label col-md-2"> Phần trăm khấu trừ</b>
                            <div class="col-md-10">
                                <input type="text" name="PhanTramKhauTru" class="form-control" placeholder="Nhập phần trăm khấu trừ" value=""> 
                            </div>
                    </div>
                    <div class="form-group">
                            <b class="control-label col-md-2"> Độ ưu tiên</b>
                            <div class="col-md-10">
                                <input type="number" name="DoUuTien" class="form-control" value="0"> 
                            </div>
                    </div>
                    <div class="form-group">
                            <b class="control-label col-md-2"> Số lượt xem</b>
                            <div class="col-md-10">
                                <input type="number" name="SoLuotXem" class="form-control" value="0"> 
                            </div>
                    </div>
                    <div class="form-group">
                            <b class="control-label col-md-2"> Số lượt mua</b>
                            <div class="col-md-10">
                                <input type="number" name="SoLuotMua" class="form-control" value="0"> 
                            </div>
                    </div>
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input type="submit" value="Tạo mới" class="btn btn-primary">
                        <br><br>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="box-footer">
        <a href="admin/sanpham/list">Danh sách</a>
    </div>
</section>
@endsection
@section('script')
    <script>
        CKEDITOR.replace( 'MieuTa');
   </script>
@endsection