@extends('admin.layout.index') 
@section('title')
    Sửa sản phẩm
@endsection
@section('content')
<section class="content container-fluid">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Sửa sản phẩm</h3>
        </div>
        <div class="box-header with-border">
            <h4>Sản phẩm</h4>
        </div>
        @if(count($errors) >0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $er)
                    {{$er}}
            @endforeach 
        </div>
        @endif
        <br>
        <form action="admin/sanpham/edit/{!!$sanpham->id!!}" method="post" enctype="multipart/form-data">
           <input type="hidden" name="_token" value="{{csrf_token()}}">
           <div class="form-horizontal">
                    <div class="form-group">
                            <b class="control-label col-md-2"> Danh mục sản phẩm</b>
                            <div class="col-md-10">
                                <select class="form-control" id="MaDanhMuc" name="MaDanhMuc">
                                    @foreach($danhmucsanpham as $dm)
                                         <option @if($dm->id==$sanpham->MaDanhMuc){!!'selected'!!} @endif value="{!!$dm->id!!}">{!!$dm->TenDanhMuc!!}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    <div class="form-group">
                            <b class="control-label col-md-2"> Tên sản phẩm</b>
                            <div class="col-md-10">
                                <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                                    data-val-length-max="50" id="TenSanPham" name="TenSanPham" type="text" value="{!!$sanpham->TenSanPham!!}" placeholder="Nhập tên sản phẩm">
                            </div>
                        </div>
                        <div class="form-group">
                            <b class="control-label col-md-2"> Xuất xứ</b>
                            <div class="col-md-10">
                                <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                                    data-val-length-max="50" id="XuatXu" name="XuatXu" type="text" value="{!!$sanpham->XuatXu!!}" placeholder="Nhập xuất xứ">
                            </div>
                        </div>
                        <div class="form-group">
                            <b class="control-label col-md-2"> Thành phần</b>
                            <div class="col-md-10">
                                <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                                    data-val-length-max="50" id="ThanhPhan" name="ThanhPhan" type="text" value="{!!$sanpham->ThanhPhan!!}" placeholder="Nhập thành phần">
                            </div>
                        </div>
                        <div class="form-group">
                            <b class="control-label col-md-2"> Công dụng</b>
                            <div class="col-md-10">
                                <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                                    data-val-length-max="50" id="CongDung" name="CongDung" type="text" value="{!!$sanpham->CongDung!!}" placeholder="Nhập công dụng">
                            </div>
                        </div>
                        <div class="form-group">
                            <b class="control-label col-md-2"> Hạn sử dụng</b>
                            <div class="col-md-10">
                               <input type="date" name="HanSuDung" class="form-control" value="{!!$sanpham->HanSuDung!!}">
                            </div>
                        </div>
    
    
                        <div class="form-group">
                            <b class="control-label col-md-2"> Mô tả sản phẩm</b>
                            <div class="col-md-10">
                                <textarea name="MieuTa" id="MieuTa">{!!$sanpham->MieuTa!!}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <b class="control-label col-md-2"> Hình ảnh</b>
                            <div class="col-md-10">
                            <img src="image_SanPham/{!!$sanpham->HinhAnh!!}" width="300px" height="200px" alt=""><br>
                            <br>
                              <input type="file" name="HinhAnh" class="form-control">
                            </div>
                        </div>
                            <div class="form-group">
                                <b class="control-label col-md-2"> Số lượng</b>
                                <div class="col-md-10">
                                   <input type="number" class="form-control" name="SoLuong" value="{!!$sanpham->SoLuong!!}">
                                </div>
                            </div>
                 
                        <div class="form-group">
                                <b class="control-label col-md-2"> Giá</b>
                                <div class="col-md-10">
                                    <input type="text" name="Gia" class="form-control" placeholder="Nhập giá" value="{!!$sanpham->Gia!!}"> 
                                </div>
                        </div>
                        <div class="form-group">
                                <b class="control-label col-md-2"> Phần trăm khấu trừ</b>
                                <div class="col-md-10">
                                    <input type="text" name="PhanTramKhauTru" class="form-control" placeholder="Nhập phần trăm khấu trừ" value="{!!$sanpham->PhanTramKhauTru!!}"> 
                                </div>
                        </div>
                       
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input type="submit" value="Sửa" class="btn btn-primary">
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