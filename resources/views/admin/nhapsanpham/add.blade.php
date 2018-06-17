@extends('admin.layout.index') 
@section('title') Nhập hàng
@endsection
 
@section('content')
<section class="content container-fluid">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Nhập hàng</h3>
        </div>
        @if(count($errors) >0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $er) {{$er}}
            <br> @endforeach
        </div>
        @endif
        <br>
        <form action="admin/nhapsanpham/add" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-horizontal">
                <h4>Thông tin nhập hàng:</h4>
                <hr />
                <div class="row">
                    <div class="col-md-4 col-xs-6">
                        <div class="form-group">
                            <b class="control-label col-md-4"> Nhà cung cấp</b>
                            <div class="col-md-8">
                                <input type="text" name="MaNhaCC"  placeholder="Enter N" id="cominityId"  class="form-control autocomplete1"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="form-group">
                            <b class="control-label col-md-4"> Ngày nhập</b>
                            <div class="col-md-8">
                                <input type="date" name="NgayNhap" value=""  class="form-control"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="form-group">
                            <b class="control-label col-md-4"> Chú thích</b>
                            <div class="col-md-8">
                                <input type="text" name="ChuThich" value=""  class="form-control"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
            <br />
            <div class="row">
                <div class="col-md-4 col-xs-6">
                    <div class="form-group">
                        <b class="control-label col-md-4"> Chọn sản phẩm</b>
                        <div class="col-md-8">
                            <input class="form-control autocomplete" placeholder="Enter P" id="productId"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-6">
                    <div class="form-group">
                        <b class="control-label col-md-4"> Số lượng</b>
                        <div class="col-md-8">
                            <input type="number" name="name" value="" id="productQty" class="form-control"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-6">
                    <div class="form-group">
                        <button type="button" class="btn btn-primary" id="btnAddProduct">Thêm</button>
                    </div>
                </div>
            </div>

            <hr />
            <br />

            <table id="example1" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>
                            Tên sản phẩm
                        </th>
                        <th>
                            Hình ảnh
                        </th>
                        <th>
                            Đơn giá
                        </th>
                        <th>
                            Số lượng
                        </th>
                        <th>

                        </th>
                    </tr>
                </thead>
                <tbody id="loadMore">
                    
                </tbody>
            </table>

            <hr />
            <br />
            <div class="form-group">
                <div class="col-md-offset-2 col-md-10">
                    <input type="submit" value="Tạo mới" class="btn btn-primary" />
                </div>
            </div>
        </form>
    </div>
    <div class="box-footer">
        <a href="admin/nhapsanpham/list">Danh sách</a>
    </div>
</section>
@endsection
 
@section('script')
<script>

    var ltmApp = {};

    $(function () {
        $.get("admin/sanpham/api/all", function (data) {
            console.log("oki");
            $(".autocomplete").autocomplete({
                source: data
            });
        })
    });
    $(function () {
        $.get("admin/nhacungcap/api1/all1", function (data) {
            console.log("oki");
            $(".autocomplete1").autocomplete({
                source: data
            });
        })
    });
    ltmApp.count = 0;
</script>
<script>
    $("#btnAddProduct").click(function () {
        var productId = $("#productId").val().split("-")[0];
        var comunityId = $("#cominityId").val().split("-")[0];
        var productQty = $("#productQty").val();
        console.log(productId);
        console.log(cominityId);
        console.log(productQty);
        $.get("admin/sanpham/api/find-one/" + productId, function (data) {
            console.log("load oki");
            console.log("data", data);
            $("#loadMore").append(
                "<tr id='product_"+ltmApp.count +"'><td>" +
                    data.TenSanPham  +
                "</td><td>" +
                    "<img src='image_SanPham/"+ data.HinhAnh +"'" + " width='70px' height='70px' />" +
                "</td><td>" +
                    "<input type='number' name='SoLuong[" + ltmApp.count + "]' value='" + productQty + "'/>" +
                    "<input type='hidden' name='MaSanPham[" + ltmApp.count + "]' value='" + productId + "'/>" +
                "</td><td>" +
                    "<a href='#' onclick='return removeProduct("+ ltmApp.count +")'>Xóa</a>" +
                "</td></tr>");
            ltmApp.count++;
        })
    });
</script>
<script>
    function removeProduct(id) {
        $("#product_" + id).remove();
        return false;
    }
</script>
</script>
@endsection