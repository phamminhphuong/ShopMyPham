@extends('admin.layout.index') 
@section('title')
    Danh sách khách hàng
@endsection
@section('content')
<section class="content container-fluid">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Danh sách khách hàng</h3>
            <h3>
                <a href="admin/khachhang/add">Tạo mới</a>
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
                                       Mã khách hàng
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Họ tên
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Ngày sinh
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Giói tính
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Địa chỉ
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                       Điện thoại
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Hình ảnh
                                  </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Tài khoản
                                  </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Creaet_at
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Update_at
                                    </th> 
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Mật khẩu
: activate to sort column ascending" style="width: 239.799px;">
                                        Tùy chọn
                                    </th>
                            </thead>
                            <tbody>
                                @foreach($khachhang as $kh)
                                <tr role="row" class="odd">
                                    <td>
                                        {!!$kh->id!!}
                                    </td>
                                    <td>
                                        {!!$kh->HoTen!!}
                                    </td>
                                    <td>
                                        {!!$kh->NgaySinh!!}
                                    </td>
                                    <td>
                                        @if($kh->GioiTinh==1)
                                            {!!"Nam"!!}
                                        @else
                                            {!!"Nữ"!!}
                                        @endif
                                    </td>
                                    <td>
                                        {!!$kh->DiaChi!!}
                                    </td>
                                    <td>
                                        {!!$kh->DienThoai!!}
                                    </td>
                                     <td>
                                        <img src="image_KhachHang/{!!$kh->HinhAnh!!}" width="50px" height="50px" alt="">
                                    </td>
                                    <td>
                                        {!!$kh->MaTaiKhoan!!}
                                    </td>
                                     <td>
                                        {!!$kh->created_at!!}
                                    </td>
                                    <td>
                                        {!!$kh->updated_at!!}
                                    </td> 
                                    <td>
                                        <a href="admin/khachhang/edit/{!!$kh->id!!}">Sửa</a> |
                                        <a href="admin/khachhang/detail/{!!$kh->id!!}">Chi tiết</a> |
                                        <a href="admin/khachhang/delete/{!!$kh->id!!}">Xóa</a>
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