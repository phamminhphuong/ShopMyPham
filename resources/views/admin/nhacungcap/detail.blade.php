@extends('admin.layout.index') @section('title') Chi tiết nhà cung cấp @endsection @section('content')
<section class="content container-fluid">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Chi tiết</h3>
        </div>
        <div class="box-header with-border">
            <h4>Nhà cung cấp</h4>
        </div>
        <br>
        <div style="margin-bottom:10px">
            <dl class="dl-horizontal">
                <dt>
                    Tên nhà cung cấp
                </dt>
                <dd>
                    {!!$nhacungcap->TenNhaCC!!}
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                    Địa chỉ
                </dt>
                <dd>
                    {!!$nhacungcap->DiaChi!!}
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                    Điện thoại
                </dt>
                <dd>
                    {!!$nhacungcap->DienThoai!!}
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                    Email
                </dt>
                <dd>
                    {!!$nhacungcap->email!!}
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                    Địa chỉ web
                </dt>
                <dd>
                    {!!$nhacungcap->DiaChiWeb!!}
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                    Giới thiệu
                </dt>
                <dd>
                    {!!$nhacungcap->GioiThieu!!}
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                    Hình ảnh
                </dt>
                <dd>
                    <img src="image_NhaCC/{!!$nhacungcap->HinhAnh!!}" width="300px" height="200px" alt="">
                </dd>
            </dl>
        </div>
        <br>
        <br>
    </div>
    <div class="box-footer">
        <a href="admin/nhacungcap/edit/{!!$nhacungcap->id!!}">Sửa</a> |
        <a href="admin/nhacungcap/list">Danh sách</a>
    </div>
</section>
@endsection