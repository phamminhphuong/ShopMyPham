@extends('admin.layout.index') 
@section('title')
    Chi tiết xuất sản phẩm
@endsection
@section('content')
<section class="content container-fluid">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Chi tiết xuất sản phẩm</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row" style="padding:0 10%;">
                <div class="col-md-6">
                    <p>Mã phiếu xuất: {{$xuatSanPham->id}}</p>
                    <p>Tên vận chuyển: {{$xuatSanPham->id}}</p>
                    <p>Ngày xuất: {{$xuatSanPham->NgayXuat}}</p>
                    <p>Trạng thái: {{$xuatSanPham->TrangThai}}</p>
                    <p>Chú thích: {{$xuatSanPham->ChuThich}}</p>
                </div>
                <div class="col-md-6" >
                    <p style="text-align:right;">Mã khách hàng: {{$xuatSanPham->MaKhachHang}}</p>
                    <p style="text-align:right;">Địa chỉ: {{$xuatSanPham->DiaChi}}</p>
                    <p style="text-align:right;">Điện thoại: {{$xuatSanPham->DienThoai}}</p>
                </div>
            </div>
        </div>

        <div class="box-body">
            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
             
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="example1_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                       Mã sản phẩm
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Tên sản phẩm
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Hình ảnh
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Giá
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Số lượng
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Thành tiền
                                    </th>
                            </thead>
                            <tbody>
                                @foreach($xuatSanPham->ChiTietXuats as $item)
                                <tr role="row" class="odd">
                                    <td>
                                        {!!$item->MaSanPham!!}
                                    </td>
                                    <td>
                                        {!!$item->SanPham->TenSanPham!!}
                                    </td>
                                    <td>
                                        <img width="150" src="image_SanPham/{!!$item->SanPham->HinhAnh!!}" alt="">
                                    </td>
                                    <td>
                                        {!!$item->Gia!!}
                                    </td>
                                    <td>
                                        {!!$item->SoLuong!!}
                                    </td>
                                    <td>
                                        {!!$item->Gia * $item->SoLuong!!} 
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
</section>
@endsection
@section('script')
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': false,
                'ordering': true,
                'info': true,
                'autoWidth': false
            })
        })
    </script>
@endsection