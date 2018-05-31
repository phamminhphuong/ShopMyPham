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
                                    <a href="san-pham-danh-muc/{!!$dmsp->id!!}">{!!$dmsp->TenDanhMuc!!}</a>
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
                                        <a href="san-pham-theo-gia/1">≤ 500.000đ</a>
                                        <span class="facet__value__count"></span>

                                    </span>
                                </li>
                                <li data-label="500.000 - 2.000.000đ">
                                    <span class="facet__text">
                                        <a href="san-pham-theo-gia/2">500.000 - 2.000.000đ</a>
                                        <span class="facet__value__count"></span>

                                    </span>
                                </li>
                                <li data-label="2.000.000 - 5.000.000đ">
                                    <span class="facet__text">
                                        <a href="san-pham-theo-gia/3">2.000.000 - 5.000.000đ</a>
                                        <span class="facet__value__count"></span>

                                    </span>
                                </li>
                                <li data-label="5.000.000 - 10.000.000đ">
                                    <span class="facet__text">
                                        <a href="san-pham-theo-gia/4">5.000.000 - 10.000.000đ</a>
                                        <span class="facet__value__count"></span>

                                    </span>
                                </li>
                                <li data-label="≥ 10.000.000đ">
                                    <span class="facet__text">
                                        <a href="san-pham-theo-gia/5">≥ 10.000.000đ</a>
                                        <span class="facet__value__count"></span>

                                    </span>
                                </li>
                                <!-- </ul> -->

                            </ul>
                        </div>
                    </div>
                    {{--  <div class="facet-group js-facet-group">

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
                    </div>  --}}
                </div>
            </div>
        </div>
    </div>