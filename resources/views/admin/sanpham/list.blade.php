@extends('admin.layout.index') 
@section('title')
    Danh sách sản phẩm
@endsection
@section('content')
<section class="content container-fluid">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Danh sách sản phẩm</h3>
            <h3>
                <a href="admin/sanpham/add">Tạo mới</a>
            </h3>
        </div>
        <!-- /.box-header -->
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
                                       Mã danh mục
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Tên sản phẳm
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Xuất xứ
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Thành phần
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                       Công dụng
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Hạn sử dụng
                                    </th>
                                    {{--  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Miêu tả
                                    </th>  --}}
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Hình ảnh
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                       Số lượng
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                       Giá
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                       Giá ưu đãi
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                       Phần trăm khấu trừ
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                      Độ ưu tiên
                                    </th>
                                    {{--  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                    Thời gian tạo
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                    Thời gian sửa
                                    </th>  --}}
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Mật khẩu
: activate to sort column ascending" style="width: 239.799px;">
                                    Tùy chọn
                                    </th>
                            </thead>
                            <tbody>
                                @foreach($sanpham as $sp)
                                <tr role="row" class="odd">
                                    <td class="sorting_1">
                                        {!!$sp->MaDanhMuc!!}
                                    </td>
                                    <td>
                                        {!!$sp->TenSanPham!!}
                                    </td>
                                    <td>
                                        {!!$sp->XuatXu!!}
                                    </td>
                                    <td>
                                        {!!$sp->ThanhPhan!!}
                                    </td>
                                    <td>
                                        {!!$sp->CongDung!!}
                                    </td>
                                    <td>
                                        {!!$sp->HanSuDung!!}
                                    </td>
                                    {{--  <td>
                                        {!!$sp->MieuTa!!}
                                    </td>  --}}
                                    <td>
                                        <img src="image_SanPham/{!!$sp->HinhAnh!!}" width="70px" height="70px" alt="">
                                    </td>
                                    <td>
                                        {!!$sp->SoLuong!!}
                                    </td>
                                    <td>
                                        {!!$sp->Gia!!}
                                    </td>
                                    <td>
                                        {!!$sp->GiaUuDai!!}
                                    </td>
                                    <td>
                                        {!!$sp->PhanTramKhauTru!!}
                                    </td>
                                    <td>
                                        {!!$sp->DoUuTien!!}
                                    </td>
                                    <td>
                                        <a href="admin/sanpham/edit/{!!$sp->id!!}">Sửa</a> |
                                        <a href="admin/sanpham/detail/{!!$sp->id!!}">Chi tiết</a> |
                                        <a href="admin/sanpham/delete/{!!$sp->id!!}" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?');">Xóa</a>
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