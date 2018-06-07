@extends('admin.layout.index') 
@section('title')
    Danh sách nhập sản phẩm
@endsection
@section('content')
<section class="content container-fluid">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Danh sách nhập sản phẩm</h3>
            <h3>
                <a href="admin/nhapsanpham/add">Nhập hàng</a>
            </h3>
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
                                       Hóa đơn nhập
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Mã nhà cung cấp
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Mã tài khoản
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Ngày nhập
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
                                @foreach($nhapsanpham as $nsp)
                                <tr role="row" class="odd">
                                    <td>
                                        {!!$nsp->id!!}
                                    </td>
                                    <td>
                                        {!!$nsp->MaNhaCC!!}
                                    </td>
                                    <td>
                                        {!!$nsp->MaTaiKhoan!!}
                                    </td>
                                   
                                    <td>
                                        {!!$nsp->NgayNhap!!}
                                    </td>
                                    <td>
                                        {!!$nsp->ChuThich!!}
                                    </td>
                                    <td>
                                        @if($nsp->TrangThai)
                                            <span class="text-success"> Đã giao hàng </span>
                                        @endif
                                        @if(!$nsp->TrangThai)
                                            <span class="text-danger"> Chưa giao hàng </span>
                                        @endif
                                    </td>
                                     <td>
                                        {!!$nsp->created_at!!}
                                    </td>
                                    <td>
                                        {!!$nsp->updated_at!!}
                                    </td> 
                                    <td>
                                        @if(empty($xsp->NgayNhap))
                                            <a href="admin/nhapsanpham/giao-hang/{!!$nsp->id!!}">Giao hàng</a> |
                                        @endif
                                        <a href="admin/nhapsanpham/export/{!!$nsp->id!!}">In hóa đơn</a> |
                                        <a href="admin/nhapsanpham/detail/{!!$nsp->id!!}">Chi tiết</a>
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