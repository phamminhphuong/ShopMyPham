@extends('admin.layout.index') 
@section('title')
    Danh sách nhà cung cấp
@endsection
@section('content')
<section class="content container-fluid">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Danh sách nhà cung cấp</h3>
            <h3>
                <a href="admin/nhacungcap/add">Tạo mới</a>
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
                                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                            Tài khoản
                        : activate to sort column descending" style="width: 99.7988px;">
                                        Mã nhà cung cấp
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Tên nhà cung cấp
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
                                        Email
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                       Địa chỉ web
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Hình ảnh
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Giới thiệu
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                    Thời gian tạo
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                    Thời gian sửa
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Mật khẩu
: activate to sort column ascending" style="width: 239.799px;">
                                    Tùy chọn
                                    </th>
                            </thead>
                            <tbody>
                                @foreach($nhacungcap as $ncc)
                                <tr role="row" class="odd">
                                    <td class="sorting_1">
                                        {!!$ncc->id!!}
                                    </td>
                                    <td>
                                        {!!$ncc->TenNhaCC!!}
                                    </td>
                                    <td>
                                        {!!$ncc->DiaChi!!}
                                    </td>
                                    <td>
                                        {!!$ncc->DienThoai!!}
                                    </td>
                                    <td>
                                        {!!$ncc->email!!}
                                    </td>
                                    <td>
                                        {!!$ncc->DiaChiWeb!!}
                                    </td>
                                    <td>
                                        <img src="image_NhaCC/{!!$ncc->HinhAnh!!}" width="50px" height="50px" alt="">
                                    </td>
                                    <td>
                                        {!!$ncc->GioiThieu!!}
                                    </td>
                                    
                                    <td>
                                        {!!$ncc->created_at!!}
                                    </td>
                                    <td>
                                        {!!$ncc->updated_at!!}
                                    </td>
                                    <td>
                                        <a href="admin/nhacungcap/edit/{!!$ncc->id!!}">Sửa</a> |
                                        <a href="admin/nhacungcap/detail/{!!$ncc->id!!}">Chi tiết</a> |
                                        <a onclick="return confirm('Bạn có chắc chắn muốn xóa nhà cung cấp này?');" href="admin/nhacungcap/delete/{!!$ncc->id!!}">Xóa</a>
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