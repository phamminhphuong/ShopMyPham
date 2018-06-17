@extends('admin.layout.index') 
@section('title')
    Chi tiết danh mục sản phẩm
@endsection
@section('content')
<section class="content container-fluid">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Chi tiết</h3>
        </div>
        <div class="box-header with-border">
            <h4>Danh mục sản phẩm</h4>
        </div>
        <br>
        <div style="margin-bottom:10px">   
            <dl class="dl-horizontal">
                <dt>
                    Tên danh mục sản phẩm
                </dt>
                <dd>
                    {!!$danhmucsanpham->TenDanhMuc!!}
                </dd>
            </dl>
            

        </div>
        <br><br>
    </div>
    <div class="box-footer">
        <a href="admin/danhmucsanpham/edit/{!!$danhmucsanpham->id!!}">Sửa</a> |
        <a href="admin/danhmucsanpham/list">Danh sách</a>
    </div>
</section>
@endsection