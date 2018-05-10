@extends('admin.layout.index') 
@section('title')
    Thêm danh mục sản phẩm
@endsection
@section('content')
<section class="content container-fluid">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Tạo mới danh mục sản phẩm</h3>
        </div>
        <div class="box-header with-border">
            <h4>Danh mục sản phẩm</h4>
        </div>
        @if(count($errors) >0)<div class="alert alert-danger">
            @foreach($errors->all() as $er)
                
                    {{$er}}
               
            @endforeach </div>
        @endif
        <br>
        <form action="admin/danhmucsanpham/add" method="post">
           <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-horizontal">
                <div class="form-group">
                    <b class="control-label col-md-2"> Tên danh mục sản phẩm</b>
                    <div class="col-md-10">
                        <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                            data-val-length-max="50" id="TenDanhMuc" name="TenDanhMuc" type="text" value="" placeholder="Nhập tên danh mục sản phẳm">
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2"> Độ ưu tiên</b>
                    <div class="col-md-10">
                        <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                            data-val-length-max="50" id="DoUuTien" name="DoUuTien" type="number" value="0">
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
        <a href="admin/danhmucsanpham/list">Danh sách</a>
    </div>
</section>
@endsection