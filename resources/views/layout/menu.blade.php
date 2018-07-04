<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
        <div id="sidebar-wrapper" class="js-product-facet">
            <!-- main facet search on PLP page -->
            <div class="sidebar-container">
                <div class="section__sidebar section__category">
                    <ul data-role="listview" data-inset="true" data-theme="e" data-content-theme="e" class="category-menu ">
                        <li class="selected active category-item category-item_lv1">
                            <a href="#">DANH MỤC SẢN PHẨM</a>
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
                            <a href="javascript:;"> Sản phẩm bán chạy</a>
                        </div>
                        <div class="facet-group-content js-facet-form ">
                            <ul class="facet-list js-facet-list facet-list-scroll" style="max-height:550px">
                                @foreach($bestSeller as $item)
                                <li data-label="BEAUTY CONCEPT" style="margin-left:18px; margin-bottom:10px;">
                                    <span class="facet__text">
                                        {{--  <a href="#">{!!$item->TenSanPham!!}</a>  --}}
                                        <a href="san-pham-ban-chay/{!!$item->id!!}"><img src="image_SanPham/{!!$item->HinhAnh!!}" width="125px" height="125px" alt=""></a>
                                        <div>
                                            <span style="color: #ed1d24;font-size: 16px;font-weight: 700;padding:5px 0;"> {{$item->GiaUuDai}}</span> 
                                            <span style="text-decoration: line-through; float:right; margin-right:35px; margin-top:4px;">{{$item->Gia}}</span> 
                                            <br>
                                            <a href="san-pham-ban-chay/{!!$item->id!!}"><span>{{ str_limit($item->TenSanPham, 20, $end = '...') }}</span></a></div>
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
                                <div>
                                <video width="240" height="128" controls>
                                    <source src="video\a.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <video width="240" height="128" controls>
                                    <source src="video\b.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>