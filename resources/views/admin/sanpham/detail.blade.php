@extends('admin.layout.index') @section('title') Chi tiết sản phẩm @endsection @section('content')
<section class="content container-fluid">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Chi tiết</h3>
        </div>
        <div class="box-header with-border">
            <h4>Sản phẩm</h4>
        </div>
        <br>
        <div style="margin-bottom:10px">
            <dl class="dl-horizontal">
                <dt>
                    Danh mục
                </dt>
                <dd>
                    {!!$sanpham->danhmucsanpham->TenDanhMuc!!}
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                  Tên sẳn phẩm
                </dt>
                <dd>
                    {!!$sanpham->TenSanPham!!}
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                   Xuất xứ
                </dt>
                <dd>
                    {!!$sanpham->XuatXu!!}
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                   Thành phần
                </dt>
                <dd>
                    {!!$sanpham->ThanhPhan!!}
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                   Công dụng
                </dt>
                <dd>
                    {!!$sanpham->CongDung!!}
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                  Hạn sử dụng
                </dt>
                <dd>
                    {!!$sanpham->HanSuDung!!}
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                   Mô tả sản phẩm
                </dt>
                <dd>
                    {!!$sanpham->MieuTa!!}
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                   Hình ảnh
                </dt>
                <dd>
                    <img src="image_SanPham/{!!$sanpham->HinhAnh!!}" width="500px" height="300px" alt="">
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                   Số lượng
                </dt>
                <dd>
                    {!!$sanpham->SoLuong!!}
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                   Giá
                </dt>
                <dd>
                    {!!$sanpham->Gia!!}
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                   Giá ưu đãi
                </dt>
                <dd>
                    {!!$sanpham->GiaUuDai!!}
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                   Phần trăm khấu trừ
                </dt>
                <dd>
                    {!!$sanpham->PhanTramKhauTru!!}
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                   Số lượng bán được
                </dt>
                <dd>
                    {!!$sanpham->SoLuongBanDuoc!!}
                </dd>
            </dl>
            <br>
            <br>
        </div>
        <br><br>
    </div>
    <div class="box-footer">
        <a href="admin/sanpham/edit/{!!$sanpham->id!!}">Sửa</a> |
        <a href="admin/sanpham/list">Danh sách</a>
    </div>
</section>
@endsection