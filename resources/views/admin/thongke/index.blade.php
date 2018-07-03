@extends('admin.layout.index')
@section('title')
    Thống kê
@endsection
@section('content')
<section class="content container-fluid">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Thống kê</h3>
        </div>
        <hr>

        <br>
        <form action="admin/thong-ke/index" enctype="multipart/form-data" method="post">
            <div class="row">
                <div class="col-md-12" style="padding:10px 40px;">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div style="width:350px; display:inline-block">
                        <span> Bắt đầu: </span>
                        <input type="date" name="startDate" value="{!!DateTime::createFromFormat('Y-m-d', $startDate)->format('Y-m-d')!!}" class="form-control" style="width:200px; display:inline-block">
                    </div>
                    <div style="width:350px; display:inline-block">
                        <span> Kết thúc: </span>
                        <input type="date" name="endDate" value="{!!DateTime::createFromFormat('Y-m-d', $endDate)->format('Y-m-d')!!}" class="form-control" style="width:200px; display:inline-block">
                    </div>
                    <div style="width:350px; display:inline-block">
                        <input type="submit" name="name" value="Thống kê" class="btn btn-primary hideable">
                    </div>
                </div>
            </div>
</form>
        <br>

        <hr>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>
                            #
                        </th>
                        <th>
                            Tiêu chí
                        </th>
                        <th>
                            Số lượng
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Số nguyên liệu nhập về</td>
                        <td>{{$soLuongNhap}}</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Số sản phẩm bán được</td>
                        <td>{{$soLuongXuat}}</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Doanh thu</td>
                        <td>{{$doanhThu}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="box-footer">
            <button type="button" class="btn btn-warning hideable" id="btnPrint" style="float:right; margin-right: 50px;">In báo cáo</button>
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
