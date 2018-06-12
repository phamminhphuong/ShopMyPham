@extends('layout.index') 
@section('content')
<div class="section__checkout">

    <div class="container">
        <div class="row">
            @if(empty($messageSuccess))
            <div class="col-xs-12 col-sm-12 col-md-12 checkout-main">
                <div id="checkoutSummaryInformation1">
                    <h2 class="checkout-title">
                        <span class="visible-xs-inline"><i class="adr-icon icon-black-cart"></i></span> ĐƠN HÀNG
                    <span class="sidebar-checkout-title__quanity"> ({{count(Cart::content())}} &nbsp;sản phẩm)</span>
                        <a href="gio-hang" 
                            title="Thay đổi"><i class="adr-icon icon-edit-circle"></i>
                            <span class="hidden-xs">Thay đổi</span>
                        </a>
                        <a href="#" class="checkout-title-menu-btn visible-xs js-toggle-panel" data-target="#right-sidebar-product__list"><i class="adr-icon icon-view-menu-down"></i></a>
                    </h2>
                    <div class="checkout-block clearfix">
                        <ul class="sidebar-product__list" id="right-sidebar-product__list">
                            <div class="sidebar-product__item no-border visible-xs">
                                <a class="sidebar-product__item-change-btn js-link-change-cart" href="#checkout-confirm-stop-flow" data-toggle="modal" data-url="/cart">
                                <i class="adr-icon icon-blue-back"></i> Thay đổi đơn hàng</a>
                            </div>
                            <div class="sidebar-product__item no-border">
                                <span class="sidebar-product__item-delivery-info">
                            </div>

                            @foreach(Cart::content() as $item)
                            <div class="sidebar-product__item ">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="sidebar-product__item-thumb">
                                            <img class="img-responsive" data-product="PRI669514" src="image_SanPham/{!!$item->name->HinhAnh!!}"/>
                                        </div>

                                    </div>
                                    <div class="col-xs-5">
                                        <div class="sidebar-product__item-info">
                                            <h4>{!!$item->name->TenSanPham!!}</h4>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="sidebar-product__item-order">
                                            <p class="sidebar-product__item-price">
                                                    {!!$item->price!!}  đ</p>
                                            <p class="sidebar-product__item-quantity">x {!!$item->qty!!} </p>
                                            <p class="sidebar-product__item-total">
                                                    {!!$item->qty * $item->name->GiaUuDai!!} đ</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </ul>
                        <div class="subtotals sidebar-product__order ">
                            <div class="sidebar-product-order__item">
                                <span class="sidebar-product-order__label" style="margin-left:25px;margin-top:20px">Số tiền cần phải trả</span>
                                <span id="js-checkout-cart-total-price" class="sidebar-product-order__value sidebar-product-order__total text-red">
                                {!! Cart::subtotal() !!} đ</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="checkoutAddressWrapper">
                    <form action="thanh-toan" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <h2 class="checkout-title">Thông tin nhận hàng</h2>
                        <div class="checkout-block clearfix">
                            <input type="hidden" name="isModifyPage" value="">
                            <ul class="checkout-receiver-address list-unstyled js-checkout-receiver-address">
                                <li class="active">
                                    <div class="checkout-receiver-address__form" style="display: block;">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-10 col-md-push-1">
                                                <div class="form-horizontal">
                                                    <div class="form-group ">
                                                        <div class="row">
                                                            <label for="" class="col-sm-3">Họ và tên*</label>
                                                            <div class="col-sm-9">
                                                                <input id="fullName" name="fullName" class="form-control js-script-check" placeholder="Vui lòng nhập Họ và tên" type="text"
                                                                    value="{!!empty(Auth::user()) ? '':Auth::user()->KhachHang->first()->HoTen!!}" maxlength="50">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <div class="row">
                                                            <label for="" class="col-sm-3">Điện thoại*</label>
                                                            <div class="col-sm-9">
                                                                <input id="phone" name="phone" class="form-control" placeholder="Vui lòng nhập Điện thoại" type="text" 
                                                                value="{!!empty(Auth::user()) ? '':Auth::user()->KhachHang->first()->DienThoai!!}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <div class="row">
                                                            <label for="" class="col-sm-3">Địa chỉ chi tiết*</label>
                                                            <div class="col-sm-9">
                                                                <input id="detailedAddress" name="address" class="form-control" placeholder="Vui lòng nhập Địa chỉ chi tiết" type="text"
                                                                    value="{!!empty(Auth::user()) ? '':Auth::user()->KhachHang->first()->DiaChi!!}" maxlength="255">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-7"></div>
                                                        <div class="col-xs-12 col-sm-8 col-md-5">
                                                            <button type="submit" class="btn btn-block btn-primary">Mua hàng </button>
                                                        </div>
                                                    </div>
                            
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-7 col-md-offset-5 col-xs-12 text-right">
                                                            <div class="content">
                                                                <br>
                                                                <p>Bằng việc ấn nút mua hàng trên, Quý khách xác nhận mua hàng trên shop Mỹ Huyền thành công!!!
                                                                    </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
            @endif

            @if(!empty($messageSuccess))
            <div class="col-xs-12 col-sm-12 col-md-12 checkout-main">
                <h2>{!!$messageSuccess!!}</h2>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection