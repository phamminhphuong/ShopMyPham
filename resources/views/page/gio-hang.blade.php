@extends('layout.index') @section('content')
<div class="container" style="padding-left:200px;margin-top:20px">
    <div id="cboxContent" style=" width: 932px; height: 507px;border:1px solid black;">
        <div id="cboxLoadedContent" style="width: 932px; overflow: auto; height: 491px;">
            <div class="mini-cart js-mini-cart">
                <div class="mini-cart-body js-cart--container">
                    <div class="cart">
                        <div class="cart-header">
                            <a class="cart-title" href="gio-hang">
                                <span class="cart-subtitle">Giỏ hàng của bạn </span>
                                <span class="bracket">(</span>
                                <span class="js-cart-total-unit">4</span>
                                <span>sản phẩm</span>
                                <span class="bracket">)</span>
                            </a>
                        </div>

                        <div class="js-cart-items--container cart-body">
                            <div class="js-cart-session-timeout"></div>
                            <div class="cart-products">
                                <div class="cart-products__header">
                                    <div class="cart-product__item">Sản phẩm</div>
                                    <div class="cart-product__price">Đơn giá</div>
                                    <div class="cart-product__quantity"> Số lượng</div>
                                    <div class="cart-product__subtotal"> Thành tiền</div>
                                </div>
                                @foreach(Cart::content() as $item)
                                <div class="cart-products__body" style="max-height: 280px; margin: 15px 0px; padding: 0px 15px 0px 5px; overflow-y: hidden; outline: none;"
                                    tabindex="0">
                                    <div class="cart-product  entry-item-1">
                                        <!-- //TODO Variant -->
                                        <div class="cart-product__item__thumbnail">
                                            <a href="chi-tiet-san-pham/{!!$item->name->id!!}">
                                                <img class="img-responsive" data-product="1342017" src="image_SanPham/{!!$item->name->HinhAnh!!}"/>
                                            </a>
                                        </div>
                                        <div class="cart-product__item__info">
                                            <h3 class="cart-product__item__title">
                                                <a data-product="1342017" href="chi-tiet-san-pham/{!!$item->name->id!!}">{!!$item->name->TenSanPham!!}</a>
                                            </h3>
                                            <div class="clearfix"></div>
                                            <div>
                                            </div>
                                            <a class="cart-product__item__remove" href="gio-hang/bo-san-pham/{!!$item->rowId!!}">
                                                <i class="adr-icon icon-trash"></i>Bỏ sản phẩm</a>
                                        </div>
                                        <div class="cart-product__price">
                                            <div class="cart-product__price-sale">{!!$item->price!!} đ</div>
                                            <div class="cart-product__price-original">{!!$item->name->Gia!!} đ</div> 
                                        </div>


                                        <div class="cart-product__quantity">
                                            <div class="item__quantity">
                                                <input type="text" value="{!!$item->qty!!}" onchange="changeQty(this, '{!!$item->rowId!!}');">
                                            </div>
                                        </div>
                                        <div class="cart-product__subtotal">
                                            <div class="item__total js-item-total hidden-xs">{!!$item->qty * $item->name->GiaUuDai!!} đ</div>
                                        </div>
                                        <div class="js-item-warnings" style="display:none;">
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="js-cart-total--container">
                            <div class="cart-footer">
                                <div class="cart-footer__row">
                                    <div class="cart-total">
                                        <div class="cart-total__item">
                                            <div class="cart-total__item-label">Thành tiền:</div>
                                            <div class="cart-total__item-value text-red cart-total__bill">{!! Cart::subtotal() !!} đ</div>
                                        </div>
                                       
                                    </div>
                                    <div class="cart-note">
                                    </div>
                                </div>

                                <div class="cart-footer__row">
                                    <div class="cart-back">
                                        <a class="js-cart-continue-shopping-button" href="">◀ Tiếp tục mua hàng</a>
                                    </div>
                                    <div class="cart-submit">
                                        <a href="thanh-toan" class="btn btn-primary js-cart-checkout-button ">Tiến hành thanh toán&nbsp;
                                            <img class="visible-xs-inline visible-sm-inline" src="">
                                        </a>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function changeQty(element, rowId) {
        var quantity = parseInt(element.value);
        if(Number.isInteger(quantity)) {
            window.location.href = "gio-hang/change-quantity/" + rowId+"?quantity=" + quantity;
        }
    }
</script>
@endsection