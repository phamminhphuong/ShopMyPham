@extends('admin.layout.index')
@section('title')
    Bảng điều khiển
@endsection
@section('content')
<section class="content">
    <!-- Small boxes (Stat box) -->
  
    <section class="content-header">
        <h1>
          Bảng điều khiển
          <small>Cập nhật tin tức</small>
        </h1>
       <br>
      </section>
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>{!!$loaitaikhoan!!}</h3>
            <p>Loại tài khoản</p>
          </div>
          <div class="icon">
            <i class="fas fa-address-book"></i>
          </div>
          <a href="admin/loaitaikhoan/list" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3>{!!$taikhoan!!}<sup style="font-size: 20px"></sup></h3>

            <p>Tài khoản</p>
          </div>
          <div class="icon">
            <i class="fas fa-user-circle"></i>
          </div>
          <a href="admin/taikhoan/list" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>{!!$nhacungcap!!}</h3>

            <p>Nhà cung cấp</p>
          </div>
          <div class="icon">
            <i class="fas fa-building"></i>
          </div>
          <a href="admin/nhacungcap/list" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3>{!!$khachhang!!}</h3>

            <p>Khách hàng</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="admin/khachhang/list" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3>{!!$danhmucsanpham!!}</h3>

            <p>Danh mục sản phẩm</p>
          </div>
          <div class="icon">
            <i class="fas fa-file-pdf"></i>
          </div>
          <a href="admin/danhmucsanpham/list" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-purple">
          <div class="inner">
            <h3>{!!$sanpham!!}</h3>

            <p>Sản phẩm</p>
          </div>
          <div class="icon">
            <i class="fab fa-product-hunt"></i>
          </div>
          <a href="admin/sanpham/list" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-orange">
          <div class="inner">
            <h3>{!!$nhapsanpham!!}</h3>

            <p>Phiếu nhập sản phẩm</p>
          </div>
          <div class="icon">
            <i class="fas fa-keyboard"></i> 
          </div>
          <a href="admin/nhapsanpham/list" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-blue">
          <div class="inner">
            <h3>{!!$xuatsanpham!!}</h3>

            <p>Phiếu xuất sản phẩm</p>
          </div>
          <div class="icon">
            <i class="fas fa-outdent"></i>
          </div>
          <a href="admin/xuatsanpham/list" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
 
    
  </section>
@endsection