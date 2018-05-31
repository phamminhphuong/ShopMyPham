@extends('admin.layout.index') 
@section('title')
    Danh sách xuất sản phẩm
@endsection
@section('content')
<section class="content container-fluid">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Danh sách xuất sản phẩm</h3>
            @if(count($errors) >0) 
            <div class="alert alert-danger">
                @foreach($errors->all() as $er)
                        {{$er}}<br>
                @endforeach 
            </div>
            @endif
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
                                       Mã nhập sản phẩm
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Mã khách hàng
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Tên vận chuyển
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Chú thích
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Trạng thái
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Ngày xuất
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
                                @foreach($xuatsanpham as $xsp)
                                <tr role="row" class="odd">
                                    <td>
                                        {!!$xsp->id!!}
                                    </td>
                                    <td>
                                        {!!$xsp->MaKhachHang!!}
                                    </td>
                                    <td>
                                        {!!$xsp->TenVanChuyen!!}
                                    </td>
                                   
                                    <td>
                                        {!!$xsp->ChuThich!!}
                                    </td>
                                    <td>
                                        {!!$xsp->TrangThai!!}
                                    </td>
                                    
                                    <td>
                                        {!!$xsp->NgayXuat!!}
                                    </td>
                                   
                                     <td>
                                        {!!$xsp->created_at!!}
                                    </td>
                                    <td>
                                        {!!$xsp->updated_at!!}
                                    </td> 
                                    <td>
                                        @if(empty($xsp->NgayXuat))
                                            <a href="admin/xuatsanpham/giao-hang/{!!$xsp->id!!}">Giao hàng</a> |
                                        @endif
                                        <a href="admin/xuatsanpham/detail/{!!$xsp->id!!}">Chi tiết</a>
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