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
                                    <a href="#">
                                        <span itemprop="title">Trang chủ</span>
                                    </a>
                                </span>
                            </li>
                            <li class="hidden">></li>
                            @foreach($danhmucsanpham as $dmsp)
                            <li>
                                 <a href="#">
                                <span class="item">{!!$dmsp->TenDanhMuc!!}</span>
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
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
                        <div id="sidebar-wrapper" class="js-product-facet">
                            <!-- main facet search on PLP page -->
                            <div class="sidebar-container">
                                <div class="section__sidebar section__category">
                                    <ul data-role="listview" data-inset="true" data-theme="e" data-content-theme="e" class="category-menu ">
                                        <li class="selected active category-item category-item_lv1">
                                            <a href="https://www.adayroi.com/suc-khoe-sac-dep-c139">DANH MỤC SẢN PHẨM</a>
                                            <ul data-role="listview" data-inset="true" data-theme="e" data-content-theme="e" class="category-menu child-level-1">
                                                @foreach($danhmucsanpham as $dmsp)
                                                <li class=" category-item category-item_lv2">
                                                    <a href="#">{!!$dmsp->TenDanhMuc!!}</a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <!-- 2 tags open in file vinCategoryLayout1Page.jsp -->

                                <div class="js-facet section__sidebar ">
                                    <div class="facet-group js-facet-group">
                                        <div class="facet-group-title">
                                            <a href="javascript:;"> Nhà cung cấp</a>
                                        </div>
                                        <div class="facet-group-content js-facet-form">
                                            <ul class="facet-list js-facet-list facet-list-scroll">
                                                @foreach($nhacungcap as $ncc)
                                                <li data-label="BEAUTY CONCEPT">
                                                    <span class="facet__text">
                                                        <a href="https://www.adayroi.com/suc-khoe-sac-dep-c139?q=%3Arelevance%3Amerchant%3A105004">{!!$ncc->TenNhaCC!!}</a>
                                                        <span class="facet__value__count">(99)</span>
                                                    </span>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="facet-group js-facet-group">
                                        <!-- <div class="facet__name js-facet-name"> -->
                                        <div class="facet-group-title">
                                            <!-- <span class="glyphicon facet__arrow"></span> -->
                                            <a href="javascript:;"> Giá sản phẩm</a>
                                        </div>
                                        <!-- <div class="facet__values js-facet-values js-facet-form"> -->
                                        <div class="facet-group-content js-facet-form">

                                            <ul class="facet-list js-facet-list">
                                                <!-- <ul class="facet__list js-facet-list "> -->
                                                <li data-label="≤ 500.000đ">
                                                    <span class="facet__text">
                                                        <a href="https://www.adayroi.com/suc-khoe-sac-dep-c139?q=%3Arelevance%3Aprice%3A%E2%89%A4+500.000%C4%91">≤ 500.000đ</a>
                                                        <span class="facet__value__count"></span>

                                                    </span>
                                                </li>
                                                <li data-label="500.000 - 2.000.000đ">
                                                    <span class="facet__text">
                                                        <a href="https://www.adayroi.com/suc-khoe-sac-dep-c139?q=%3Arelevance%3Aprice%3A500.000+-+2.000.000%C4%91">500.000 - 2.000.000đ</a>
                                                        <span class="facet__value__count"></span>

                                                    </span>
                                                </li>
                                                <li data-label="2.000.000 - 5.000.000đ">
                                                    <span class="facet__text">
                                                        <a href="https://www.adayroi.com/suc-khoe-sac-dep-c139?q=%3Arelevance%3Aprice%3A2.000.000+-+5.000.000%C4%91">2.000.000 - 5.000.000đ</a>
                                                        <span class="facet__value__count"></span>

                                                    </span>
                                                </li>
                                                <li data-label="5.000.000 - 10.000.000đ">
                                                    <span class="facet__text">
                                                        <a href="https://www.adayroi.com/suc-khoe-sac-dep-c139?q=%3Arelevance%3Aprice%3A5.000.000+-+10.000.000%C4%91">5.000.000 - 10.000.000đ</a>
                                                        <span class="facet__value__count"></span>

                                                    </span>
                                                </li>
                                                <li data-label="≥ 10.000.000đ">
                                                    <span class="facet__text">
                                                        <a href="https://www.adayroi.com/suc-khoe-sac-dep-c139?q=%3Arelevance%3Aprice%3A%E2%89%A5+10.000.000%C4%91">≥ 10.000.000đ</a>
                                                        <span class="facet__value__count"></span>

                                                    </span>
                                                </li>
                                                <!-- </ul> -->

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="facet-group js-facet-group">

                                        <!-- <div class="facet__name js-facet-name"> -->
                                        <div class="facet-group-title">
                                            <!-- <span class="glyphicon facet__arrow"></span> -->
                                            <a href="javascript:;"> Giảm giá</a>
                                        </div>

                                        <!-- <div class="facet__values js-facet-values js-facet-form"> -->
                                        <div class="facet-group-content js-facet-form">

                                            <ul class="facet-list js-facet-list">
                                                <!-- <ul class="facet__list js-facet-list "> -->
                                                <li data-label="Giảm giá từ 10%">
                                                    <span class="facet__text">
                                                        <a href="https://www.adayroi.com/suc-khoe-sac-dep-c139?q=%3Arelevance%3AofferDiscount%3AGi%E1%BA%A3m+gi%C3%A1+t%E1%BB%AB+10%25">Giảm giá từ 10%</a>
                                                    </span>
                                                </li>
                                                <li data-label="Giảm giá từ 20%">
                                                    <span class="facet__text">
                                                        <a href="https://www.adayroi.com/suc-khoe-sac-dep-c139?q=%3Arelevance%3AofferDiscount%3AGi%E1%BA%A3m+gi%C3%A1+t%E1%BB%AB+20%25">Giảm giá từ 20%</a>
                                                    </span>
                                                </li>
                                                <li data-label="Giảm giá từ 30%">
                                                    <span class="facet__text">
                                                        <a href="https://www.adayroi.com/suc-khoe-sac-dep-c139?q=%3Arelevance%3AofferDiscount%3AGi%E1%BA%A3m+gi%C3%A1+t%E1%BB%AB+30%25">Giảm giá từ 30%</a>
                                                    </span>
                                                </li>
                                                <li data-label="Giảm giá từ 40%">
                                                    <span class="facet__text">
                                                        <a href="https://www.adayroi.com/suc-khoe-sac-dep-c139?q=%3Arelevance%3AofferDiscount%3AGi%E1%BA%A3m+gi%C3%A1+t%E1%BB%AB+40%25">Giảm giá từ 40%</a>
                                                    </span>
                                                </li>
                                                <li data-label="Giảm giá từ 50%">
                                                    <span class="facet__text">
                                                        <a href="https://www.adayroi.com/suc-khoe-sac-dep-c139?q=%3Arelevance%3AofferDiscount%3AGi%E1%BA%A3m+gi%C3%A1+t%E1%BB%AB+50%25">Giảm giá từ 50%</a>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                        <div class="product-item__container">
                                            <a class="product-item__thumbnail " href="chi-tiet-san-pham/{!!$sp->id!!}">
                                                <img class="default lazy swiper-lazy " src="image_SanPham/{!!$sp->HinhAnh!!}"  style="width:200px;height:200px"/> 
                                                {{--
                                                <img class="hover " src="https://media.static-adayroi.com/sys_master/h04/hdc/15517085073438.jpg"
                                                    alt="Bộ 5 mặt nạ chiết xuất cam Nature Republic Real Nature Orange Mask Sheet"
                                                    title="Bộ 5 mặt nạ chiết xuất cam Nature Republic Real Nature Orange Mask Sheet"
                                                /> --}}
                                            </a>
                                            <div class="product-item__info">
                                                <a class="product-item__info-title" href="chi-tiet-san-pham/{!!$sp->id!!}">
                                                    {!!$sp->TenSanPham!!}
                                                </a>
                                                <div class="product-item__info-price">
                                                    <span class="product-item__info-price-sale"> {!!$sp->GiaUuDai!!}đ</span>
                                                    <span class="product-item__info-price-original">{!!$sp->Gia!!}đ</span>
                                                </div>
                                                <div class="product-item__info-discount">
                                                        -{!!$sp->PhanTramKhauTru!!}%
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
            </div>
        </div>
    </div>
</div>

</div>
@endsection