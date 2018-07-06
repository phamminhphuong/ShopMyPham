@extends('layout.index') @section('content')
<div id="content" class="clearfix">
    <a id="skip-to-content"></a>
    <div class="page-category">
        <div class="category__section category__section-1">
            <div class="section__breadcrumb-inner">
                <div class="section__breadcrumb section__breadcrumb--full">
                    <div class="container">
                        <ol id="header__breadcrumb" class="header__breadcrumb breadcrumb">
                            <li>
                                <span class="item">
                                    <a href="">
                                        <span itemprop="title">Trang chủ</span>
                                    </a>
                                </span>
                            </li>
                            <li class="hidden">></li>
                            @foreach($danhmucsanpham as $dmsp)
                            <li>
                                <a href="san-pham-danh-muc/{!!$dmsp->id!!}">
                                    <span>{!!$dmsp->TenDanhMuc!!}</span>
                                </a>
                            </li>
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="category__section category__section-5">
            <div class="container">
                <div class="row">
                    @include('layout.menu')
                    <div class="col-sm-12 col-md-9 col-lg-10 product-list__wrapper">
                        <div class="product-list__header">
                            <div class="row">
                                <div class="col-md-6 col-lg-7">
                                    <h1 class="header__title">Shop Mỹ Phẩm</h1>
                                    <span class="header__search-result">
                                        Hiện có {!!count($sanpham)!!} sản phẩm</span>
                                    <div class="header__description hidden-xs">
                                        <p></p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="product-list__container">
                            <div class="row">
                                @foreach($sanpham as $sp)
                                <div class="col-xs-6 col-sm-4 col-lg-3 product-item__wrapper product-item__wrapper--hover">
                                    <div class="product-item__placeholder hidden-sm hidden-xs"></div>
                                    <div class="product-item">
                                    <form action="gio-hang" method="post">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <input type="hidden" name="productId" value="{!!$sp->id!!}">
                                        <input type="hidden" name="quantity" value="1">
                                        <div class="product-item__container">
                                            <a class="product-item__thumbnail " href="chi-tiet-san-pham/{!!$sp->id!!}">
                                                <img class="default lazy swiper-lazy " src="image_SanPham/{!!$sp->HinhAnh!!}"  style="width:200px;height:200px"/>
                                                <img class="hover " src="image_SanPham/{!!$sp->HinhAnh!!}"/>
                                            </a>
                                            <div class="product-item__info">
                                                <a class="product-item__info-title" href="chi-tiet-san-pham/{!!$sp->id!!}">
                                                    {!!$sp->TenSanPham!!}
                                                </a>
                                                <div class="product-item__info-price">
                                                    <span class="product-item__info-price-sale"> {{ number_format($sp->GiaUuDai, 0, '.', '.') }}đ</span>
                                                    <span class="product-item__info-price-original">{{ number_format($sp->Gia, 0, '.', '.') }}đ</span>
                                                </div>
                                                <div class="product-item__info-discount">
                                                        -{!!$sp->PhanTramKhauTru!!}%
                                                </div>
                                                <div style="padding: 15px 40px">
                                                    <button type="submit" class="btn btn-block btn-primary btnAddToCart">Cho vào giỏ hàng</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 @endforeach
                            </div>
                        </div>

                        <div id="addToCartTitle" class="display-none">
                            <div class="add-to-cart-header">
                                <div class="headline">
                                    <span class="headline-text">Added to Your Shopping Cart</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <section class="section__pagination text-center">
                    <nav class="Page navigation">
                        <ul class="pagination hidden-xs">
                            <li><a href="?page=1"
                                @if($paging->page == 1)
                                    class='btn disabled'
                                @endif
                            ><i class="adr-icon icon-arrow-left-sm"></i> Trang đầu</a></li>
                            <li><a href="?page={{$paging->page - 1}}" aria-label="Next"
                                @if($paging->page == 1)
                                    class='btn disabled'
                                @endif
                            > Trang trước<i class="adr-icon icon-arrow-right-sm"></i></a></li>
                            <li class="active"><a href="?page={{$paging->page}}">{{$paging->page}}</a></li>
                            <li><a href="?page={{$paging->page + 1}}" aria-label="Next"
                                @if($paging->page == $paging->numberOfPages)
                                    class='btn disabled'
                                @endif
                            > Trang sau<i class="adr-icon icon-arrow-right-sm"></i></a></li>
                            <li><a aria-label="Next" href="?page={{$paging->numberOfPages}}"
                                @if($paging->page == $paging->numberOfPages)
                                    class='btn disabled'
                                @endif
                            > Trang cuối<i class="adr-icon icon-arrow-right-sm"></i></a></li>
                        </ul>
                        <div class="clearfix visible-xs"></div>
                    </nav>
                </section>
            </div>
        </div>
    </div>
</div>

</div>
@endsection
