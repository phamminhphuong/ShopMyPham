@extends('layout.index') 
@section('content')
<div id="content" class="clearfix">
    <a id="skip-to-content"></a>
    <div class="section__breadcrumb-inner">
        <div class="section__breadcrumb section__breadcrumb--full">
            <div class="container">
                <ol id="header__breadcrumb" class="header__breadcrumb breadcrumb">
                    <li>
                        <span class="item">
                            <a itemprop="url" href="/">
                                <span itemprop="title">Trang chủ</span>
                        </a>
                        </span>
                    </li>
                    <li class="hidden">&gt;</li>
                    @foreach($danhmucsanpham as $dm)
                    <li>
                        <span itemscope="">
                            <a href="#" itemprop="url">
                                <span itemprop="title">{!!$dm->TenDanhMuc!!}</span>
                        </a>
                        </span>
                    </li>
                    <li class="hidden">&gt;</li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
    <section class="product-detail__section product-detail__fresh">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="product-detail__left" id="header-position">
                        <!--  pop up rating overview -->
                        <div id="js-rating-overview" class="hidden">
                            <div class="product-detail__rating-overview">
                                <h5 class="rating-overview__title">
                                    Đánh giá trung bình
                                    <span class="value-rate">0</span>
                                </h5>
                                <!-- star rating -->
                                <div class="rating-overview__progess-rate">
                                </div>
                            </div>
                        </div>
                        <!-- end pop up rating overview -->
                        <div class="row">
                            <div class="col-sm-12 visible-xs product-detail__info-block">
                                <div class="product-detail__title">

                                    <div class="product-detail__title-brand">
                                        Thương hiệu:
                                        <a href="/Cây-br332519323" title="Cây"> Cây&nbsp;</a>
                                        <span class="divider">|</span>
                                        <a href="/c/272?q=%3aprice-asc%3abrand%3abr332519323">Tinh dầu xông &amp; thăng hương &nbsp;Cây
                                        </a>
                                        <span class="divider">|</span>
                                        <a href="#panel-review-container" id="js-focus-ratingbox">Hãy là người đầu tiên đánh giá</a>
                                    </div>
                                </div>
                            </div>
                            <!-- section gallery -->
                            <div class="col-sm-5 product-detail__info-block">
                                <script type="text/javascript">
                                    var productJsonMedias = [{ "type": "IMAGE", "container": "TDTT10ml_1", "format": "fresh_product_details_thumbnail_format", "url": "https://media.static-adayroi.com/sys_master/images/h9d/h83/14565122572318.jpg", "carouselUrl": "https://media.static-adayroi.com/sys_master/images/haa/h9a/14565122506782.jpg", "zoomUrl": "https://media.static-adayroi.com/sys_master/images/hcc/hdc/14565122703390.jpg", "description": "", "altText": "Tinh dầu tràm trà Cây Tea Tree Essential Oil Premium 10ml" }];
                                    var pdpTemplateType = 'FRESH';
                                </script>
                                <div id="productJsonMedias"></div>
                                <div class="product-detail__gallery js-product-detail__gallery">
                                    <div class="product-gallery__stage">
                                        <div class="product-gallery__stopper">
                                        </div>
                                        <img class="stage" src="https://media.static-adayroi.com/sys_master/images/hcc/hdc/14565122703390.jpg" data-zoom-image="https://media.static-adayroi.com/sys_master/images/hcc/hdc/14565122703390.jpg"
                                            data-image="https://media.static-adayroi.com/sys_master/images/hcc/hdc/14565122703390.jpg">
                                        <img class="stage" src="https://media.static-adayroi.com/sys_master/images/hcc/hdc/14565122703390.jpg" data-zoom-image="https://media.static-adayroi.com/sys_master/images/hcc/hdc/14565122703390.jpg"
                                            data-image="https://media.static-adayroi.com/sys_master/images/hcc/hdc/14565122703390.jpg"></div>
                                    <div class="product-gallery__thumbnail">
                                        <div class="row">
                                            <div class="col-xs-2-5">
                                                <div class="gallery-thumbnail__item-wrapper">
                                                    <div class="gallery-thumbnail__item gallery-thumbnail__item-image" data-type="image" data-image="https://media.static-adayroi.com/sys_master/images/hcc/hdc/14565122703390.jpg"
                                                        data-zoom-image="https://media.static-adayroi.com/sys_master/images/hcc/hdc/14565122703390.jpg">
                                                        <img class="img-responsive" src="https://media.static-adayroi.com/sys_master/images/h9d/h83/14565122572318.jpg">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-2-5">
                                                <div class="gallery-thumbnail__item-wrapper">
                                                    <div class="gallery-thumbnail__item gallery-thumbnail__item-image" data-type="image"
                                                        data-image="https://media.static-adayroi.com/sys_master/images/hcc/hdc/14565122703390.jpg"
                                                        data-zoom-image="https://media.static-adayroi.com/sys_master/images/hcc/hdc/14565122703390.jpg"><img class="img-responsive" src="https://media.static-adayroi.com/sys_master/images/h9d/h83/14565122572318.jpg"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!--VIN WARNING MESSAGE-->
                                <div class="product-detail__notice">
                                </div>
                                <!-- include facebook plugin tag -->
                                <!--google button-->
                                <div class="product-detail__share">
                                    <div class="product-detail__save-facebook text-center">
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <div class="fb-save fb_iframe_widget" data-uri="https://www.adayroi.com///tinh-dau-tram-tra-cay-tea-tree-essential-oil-premium-10ml-p-1342017"
                                                    data-size="large" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=749384515190849&amp;container_width=152&amp;locale=vi_VN&amp;sdk=joey&amp;size=large&amp;uri=https%3A%2F%2Fwww.adayroi.com%2F%2F%2Ftinh-dau-tram-tra-cay-tea-tree-essential-oil-premium-10ml-p-1342017"><span style="vertical-align: bottom; width: 152px; height: 28px;"><iframe name="f6e8140677b548" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:save Facebook Social Plugin" src="https://www.facebook.com/plugins/save.php?app_id=749384515190849&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FRQ7NiRXMcYA.js%3Fversion%3D42%23cb%3Dfaf674d843e358%26domain%3Dlocalhost%26origin%3Dhttp%253A%252F%252Flocalhost%253A8080%252Ff265cfd29ebc7%26relation%3Dparent.parent&amp;container_width=152&amp;locale=vi_VN&amp;sdk=joey&amp;size=large&amp;uri=https%3A%2F%2Fwww.adayroi.com%2F%2F%2Ftinh-dau-tram-tra-cay-tea-tree-essential-oil-premium-10ml-p-1342017" style="border: none; visibility: visible; width: 152px; height: 28px;" class=""></iframe></span></div>
                                            </div>
                                            <div class="pull-left">
                                                <a href="https://www.facebook.com/saved/" target="_blank" class="btn btn-white save-facebook__list">Xem sản phẩm đã lưu</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-detail__sharing-button text-center">
                                        <div class="clearfix">
                                            <div class="fb-like fb_iframe_widget pull-left" data-href="https://www.adayroi.com/tinh-dau-tram-tra-cay-tea-tree-essential-oil-premium-10ml-p-1342017"
                                                data-layout="button_count" data-action="like" data-size="small" data-show-faces="false"
                                                data-share="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=749384515190849&amp;container_width=68&amp;href=https%3A%2F%2Fwww.adayroi.com%2Ftinh-dau-tram-tra-cay-tea-tree-essential-oil-premium-10ml-p-1342017&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;share=false&amp;show_faces=false&amp;size=small"><span style="vertical-align: bottom; width: 68px; height: 20px;"><iframe name="f51e2281554338" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/plugins/like.php?action=like&amp;app_id=749384515190849&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FRQ7NiRXMcYA.js%3Fversion%3D42%23cb%3Dfbd352209a1638%26domain%3Dlocalhost%26origin%3Dhttp%253A%252F%252Flocalhost%253A8080%252Ff265cfd29ebc7%26relation%3Dparent.parent&amp;container_width=68&amp;href=https%3A%2F%2Fwww.adayroi.com%2Ftinh-dau-tram-tra-cay-tea-tree-essential-oil-premium-10ml-p-1342017&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;share=false&amp;show_faces=false&amp;size=small" style="border: none; visibility: visible; width: 68px; height: 20px;" class=""></iframe></span></div>

                                            <div class="pull-left" id="widget-div" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 38px; height: 24px;">
                                                <iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 38px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 24px;"
                                                    tabindex="0" vspace="0" width="100%" id="I1_1525834767906" name="I1_1525834767906"
                                                    src="https://apis.google.com/u/0/se/0/_/+1/fastbutton?usegapi=1&amp;origin=https%3A%2F%2Fwww.adayroi.com&amp;url=https%3A%2F%2Fwww.adayroi.com%2Ftinh-dau-tram-tra-cay-tea-tree-essential-oil-premium-10ml-p-1342017&amp;gsrc=3p&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.vi.L718caA3rLA.O%2Fm%3D__features__%2Fam%3DAQE%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCM77so5l4YibwjqUW984Yjo-G_dsQ#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh&amp;id=I1_1525834767906&amp;_gfid=I1_1525834767906&amp;parent=https%3A%2F%2Fwww.adayroi.com&amp;pfname=&amp;rpctoken=42644554"
                                                    data-gapiattached="true" title="G+"></iframe>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>



                            <!-- end section galery -->
                            <div class="col-sm-7 product-detail__info product-detail__info-block">
                                <div class="hidden-xs">
                                    <div class="product-detail__title">
                                        <h1>{!!$chitietsanpham->TenSanPham!!}</h1>
                                        <div class="product-detail__title-brand">
                                            Thương hiệu:&nbsp;
                                            <a href="/b/br332519323" title="Cây">Cây&nbsp;</a>
                                            <span class="divider">|</span>
                                            <a href="/c/272?q=%3aprice-asc%3abrand%3abr332519323">Tinh dầu xông &amp; thăng hương&nbsp;-&nbsp;Cây</a>
                                            <span class="divider">|</span>
                                            <a href="#panel-review-container" id="js-focus-ratingbox">Hãy là người đầu tiên đánh giá</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-detail__short-des js-height-toggle-description" style="max-height: none;">
                                    <div class="short-des__content" data-role="content" data-total="6" data-item-height="27" style="height: 100px;">
                                        <ul>
                                            <li class="nobullet">
                                                <ul>
                                                    <li>Tinh dầu tràm trà &nbsp;của Cây có nguồn gốc từ&nbsp;Koree Herb Australia.</li>
                                                    <li>&nbsp;Tràm trà khá nổi tiếng với công dụng kháng viêm, điều trị các vấn
                                                        đề về da và tóc do vi khuẩn gây nên.</li>
                                                    <li>Nếu bị mụn, hãy để tinh dầu tràm chăm sóc!</li>
                                                    <li>Đối với các nốt mụn viêm đầu trắng:&nbsp;&nbsp;dùng tăm bông thấm 1-2
                                                        giọt tràm trà Cây&nbsp;và chấm lên các nốt mụn 2 lần/ngày vào buổi
                                                        sáng và tối</li>
                                                    <li>Tinh chất α-Terpineol có trong dầu tràm trà sẽ khiến cho các nốt mụn
                                                        này nhanh chóng khô đầu, giảm tình trạng sưng viêm.</li>
                                                    <li>Tinh dầu tràm trà rất tốt cho trẻ nhỏ, nhỏ vào nước tắm giúp giữ ấm cơ
                                                        thể và làm sạch nhẹ nhàng.</li>
                                                </ul>
                                            </li>
                                            <li class="nobullet">
                                                <ul>
                                                    <li>Thành phần tách xuất từ lá cây tràm trà Úc</li>
                                                    <li>Giúp trị mụn và chăm sóc da mụn</li>
                                                    <li>Xuất xứ: Australia</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    var productPrice = '275.000';
                                    var outofstockFlag = 'false';
                                </script>
                                <div class="product-detail__price">
                                    <div class="product-detail__price-info">
                                        <span class="price-info__sale">275.000đ</span>
                                    </div>
                                    <div class="insPurchase">
                                        <span class="insBold">5 khách</span> đã đặt mua trong 1 tiếng trước.</div>
                                    <div class="product-detail__price-vinid">
                                        <i class="adr-icon icon-vinid"></i>
                                        <div class="price-vinid__description">
                                            Giá cho chủ thẻ VinID (-2%)
                                            <br>
                                            <span class="price-vinid__value">269.000đ</span>
                                            <span class="price-vinid__discount-info">(6.000đ&nbsp; sẽ được hoàn vào thẻ VinID)
                                            </span>
                                            <div class="tooltip">
                                                <i class="adr-icon icon-hint"></i>
                                                <span class="tooltiptext">- Thẻ VinID là thẻ khách hàng thân thiết của Tập đoàn Vingroup cho phép khách
                                                    hàng tích và tiêu điểm với nhiều ưu đãi hấp dẫn.
                                                    <br>- Số tiền tích điểm sẽ được hoàn vào thẻ VinID sau khi giao hàng thành
                                                    công.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Add To Cart section // BEGIN -->
                                <!-- Add To Cart Button section // BEGIN -->

                                <div class="product-detail__order addtocart-component">
                                    <div class="product-order__title">
                                        <span class="txt-level-count-stock">Số lượng: </span>
                                        <span class="txt-total-stock">Còn 5 sản phẩm</span>
                                    </div>

                                    {{-- LuanTM Đoạn này đã oki đừng xóa --}}
                                    <div class="row">
                                        <form action="gio-hang" method="post">
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                            <input type="hidden" name="productId" value="{{$chitietsanpham->id}}">
                                            <div class="clearfix visible-md visible-lg"></div>
                                            <div class="col-xs-12 col-sm-2 col-md-2">
                                                <div class="product-order__quanity js-qty-selector js-product-order__quanity">
                                                    <div class="product-order__form-control pdpAddtoCartSelectSection adr-dropdown" id="pdpAddtoCartSelectSection">
                                                        <select name="quantity" id="pdpAddtoCartSelect" class="product-order__quanity-select form-control">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-5 col-md-5">
                                                <button type="submit" class="btn btn-block btn-primary">Cho vào giỏ hàng</button>
                                            </div>
                                        </form>
                                    {{-- LuanTM end --}}




                                        <div class="col-xs-12 col-sm-3 col-md-5">
                                            <div class="product-order__1click-checkout">
                                            </div>
                                        </div>
                                        <!-- show message error when value of date is not avaliable -->
                                    </div>
                                    <div class="product-detail__right--mobile"></div>
                                    <div class="addtocartErrorMsg alert alert-warning col-xs-12 hidden">
                                        <i class="adr-icon icon-warning"></i>
                                        <span id="addtocartErrorMsg"></span>
                                    </div>
                                </div>
                                
                                <!-- promotion banners end -->
                                <!---->
                            </div>
                            <!-- end five supplier different -->
                            <!-- can not delete id below -->
                            <div id="place-show__sticky"></div>
                            <!--  infor product  -->

                            <div id="js-product-classifications" class="col-sm-12 product-info">
                                <div class="panel panel-product-detail">
                                    <div class="panel-body product-classifications product-detail__specs-modal">
                                        <h1 class="product-detail__specs-title">Thông tin sản phẩm
                                            
                                        </h1>
                                        <!-- 	<h1 class="product-detail__specs-title hidden-xs">ThÃÂ´ng tin sÃ¡ÂºÂ£n phÃ¡ÂºÂ©m</h1> -->
                                        <div class="product-detail__specs" id="js-product-detail__specs">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="product-specs__table">
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="specs-table__property">Xuất xứ</td>
                                                                    <td class="specs-table__value">{!!$chitietsanpham->XuatXu!!}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="specs-table__property">Thành phần</td>
                                                                    <td class="specs-table__value">{!!$chitietsanpham->ThanhPhan!!}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="specs-table__property">Cồng dụng</td>
                                                                    <td class="specs-table__value">{!!$chitietsanpham->CongDung!!}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="specs-table__property">Hạn sử dụng</td>
                                                                    <td class="specs-table__value">{!!$chitietsanpham->HanSuDung!!}</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal modal-adr modal-adr-fix-height fade in" tabindex="-1" role="dialog" id="allClassificationAtrrModal" aria-hidden="true"
                                        data-backdrop="static" data-keyboard="false">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content" style="text-align: left; padding: 15px;">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                    <span aria-hidden="true">Ã</span>
                                                </button>
                                                <div class="modal-body">
                                                    <div class="panel-body product-classifications product-detail__specs-modal">
                                                        <h1 class="product-detail__specs-title">Thông tin sản phẩm</h1>
                                                        <!-- 	<h1 class="product-detail__specs-title hidden-xs">ThÃÂ´ng tin sÃ¡ÂºÂ£n phÃ¡ÂºÂ©m</h1> -->
                                                        <div class="product-detail__specs" id="js-product-detail__specs">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="product-specs__table">
                                                                        <table>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="specs-table__property">Xuất xứ</td>
                                                                                    <td class="specs-table__value">Australia</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="specs-table__property">Dung tích</td>
                                                                                    <td class="specs-table__value">10ml</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="specs-table__property">Hạn sử dụng</td>
                                                                                    <td class="specs-table__value">2 năm từ ngày sản xuất</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="specs-table__property">Thành phần</td>
                                                                                    <td class="specs-table__value">Tách xuất từ lá cây tràm trà Úc</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
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
                            </div>
                            <!-- end infor product -->
                            <!-- trademark -->
                            <div class="col-sm-12 detail__info">
                                <div class="panel panel-product-detail">
                                    <div class="panel-heading">
                                        Mô tả sản phẩm</div>
                                    <div class="panel-body">
                                        <div class="product-detail__description">
                                            <p>{!!$chitietsanpham->MieuTa!!}<p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /end trademark -->

                            <!-- suggest product -->
                            <!-- end suggest product -->

                            <!-- comment client -->
                            <div class="col-sm-12">
                                <div class="panel panel-product-detail panel-product-comment">
                                    <div class="panel-heading">

                                        <span class="hidden-xs">Có</span>
                                        <span id="totalComment">0</span> bình luận
                                        <span class="hidden-xs">về sản phẩm này</span>
                                        {{--  <div class="product-comment__rating-overview">
                                            <span class="rating-overview__title  hidden-xs hidden-sm">Đánh giá trung bình:
                                                <b id="productAverageRating" class=" hidden-xs hidden-sm">
                                                </b>
                                            </span>
                                            <div class="adr-rating-view js-ratingCalc" data-rating="">
                                                <div class="rating-view-list">
                                                    <i class="glyphicon glyphicon-star-empty"></i>
                                                    <i class="glyphicon glyphicon-star-empty"></i>
                                                    <i class="glyphicon glyphicon-star-empty"></i>
                                                    <i class="glyphicon glyphicon-star-empty"></i>
                                                    <i class="glyphicon glyphicon-star-empty"></i>
                                                </div>
                                                <div class="rating-view-active js-yellowStars" style="width: 0%;">
                                                    <div class="rating-view-active-container">
                                                        <i class="glyphicon glyphicon-star"></i>
                                                        <i class="glyphicon glyphicon-star"></i>
                                                        <i class="glyphicon glyphicon-star"></i>
                                                        <i class="glyphicon glyphicon-star"></i>
                                                        <i class="glyphicon glyphicon-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <span id="rating-overview__counter" class="rating-overview__counter  hidden-xs hidden-sm">
                                            </span>
                                        </div>  --}}
                                    </div>
                                    <div class="panel-body">
                                        <div class="product-detail__comment">
                                            <form id="vinReviewForm" class="product-comment__form js-validation-10-charactor" action="/tinh-dau-tram-tra-cay-tea-tree-essential-oil-premium-10ml-p-1342017/review?offer=1342017_094175"
                                                method="post">
                                                <div class="comment-form__container">
                                                    <div class="form-group">
                                                        <label class="" for="reviewComment">
                                                            <span class="skip"></span>
                                                        </label>

                                                        <textarea id="reviewComment" name="comment" class="form-control" placeholder="Mời bạn viết đánh giá về sản phẩm này, vui lòng viết tiếng Việt có dấu....."></textarea>
                                                    </div>
                                                    <div class="help-block new-block hidden" style="color: #c53131">
                                                        Nội dung bình luận phải từ 10 kí tự trở lên</div>
                                                    <div class="help-block over-character-block hidden" style="color: #c53131">
                                                        Nội dung bình luận không vượt quá 500 kí tự</div>
                                                    <grammarly-btn>
                                                        <div style="z-index: 2; opacity: 1; transform: translate(861.5px, 156px);" class="_9b5ef6-textarea_btn _9b5ef6-not_focused"
                                                            data-grammarly-reactid=".0">
                                                            <div class="_9b5ef6-transform_wrap" data-grammarly-reactid=".0.0">
                                                                <div title="Protected by Grammarly" class="_9b5ef6-status" data-grammarly-reactid=".0.0.0"></div>
                                                            </div>
                                                        </div>
                                                    </grammarly-btn>
                                                    <div class="comment-form__message">
                                                        <div id="commentCounter" class="comment-form__counter hidden-xs">
                                                            <span id="currentCommentCounter">0</span>/ 500 ký tự</div>

                                                        <div id="commentErrMsg" class="comment-form__error" style="display: none"></div>
                                                    </div>
                                                </div>
                                                <div class="comment-form__navigation">
                                                    <div class="row">
                                                        <div id="anonymous-info">
                                                            {{--  <div class="col-xs-12 col-sm-3" id="alias-comment-process">
                                                                <div class="form-group">
                                                                    <label class="control-label invisible-label hidden" for="alias">
                                                                    </label>

                                                                    <input id="alias" name="alias" class="form-control form-control" placeholder="Tên của bạn" type="text" value="">
                                                                </div>
                                                            </div>  --}}
                                                        </div>
                                                        {{--  <div class="comment-form__rating-wrapper js-review-write">
                                                            <div class="form-group comment-form__rating">
                                                                <div class="vertical-alignment-helper">
                                                                    <div class="vertical-align-center">
                                                                        <span class="comment-form__rating-label">Đánh giá</span>
                                                                        <div class="rating rating-set js-ratingCalcSet">
                                                                            <div class="rating-stars js-writeReviewStars" id="all-starts">
                                                                                <span class="js-ratingIcon glyphicon glyphicon-star fh"></span>
                                                                                <span class="js-ratingIcon glyphicon glyphicon-star lh"></span>
                                                                                <span class="js-ratingIcon glyphicon glyphicon-star fh"></span>
                                                                                <span class="js-ratingIcon glyphicon glyphicon-star lh"></span>
                                                                                <span class="js-ratingIcon glyphicon glyphicon-star fh"></span>
                                                                                <span class="js-ratingIcon glyphicon glyphicon-star lh"></span>
                                                                                <span class="js-ratingIcon glyphicon glyphicon-star fh"></span>
                                                                                <span class="js-ratingIcon glyphicon glyphicon-star lh"></span>
                                                                                <span class="js-ratingIcon glyphicon glyphicon-star fh"></span>
                                                                                <span class="js-ratingIcon glyphicon glyphicon-star lh"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="control-label sr-only" for="review.rating">
                                                                                Your Rating</label>

                                                                            <input id="review.rating" name="rating" class="sr-only js-ratingSetInput form-control" type="text" value="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>  --}}
                                                        <div class="comment-form__captcha-wrapper">
                                                            <div class="comment-form__captcha">
                                                            </div>
                                                            <div class="g-recaptcha_incorrect error-captcha"></div>
                                                        </div>
                                                        <input type="hidden" name="isAnonymous" value="true">
                                                        <div class="col-xs-12 col-sm-1-5">
                                                            <button type="button" class="btn btn-block btn-positive comment-form__submit js-review-submit" value="Gửi" data-url="/tinh-dau-tram-tra-cay-tea-tree-essential-oil-premium-10ml-p-1342017/review?offer=1342017_094175"
                                                                disabled="disabled">
                                                                Gửi</button>

                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- message sucess -->
                                                <div id="comment-form__message--sucess"></div>
                                                <div>
                                                    <input type="hidden" name="CSRFToken" value="8221e548-c24b-416d-8d30-c3d7213b2a5e">
                                                </div>
                                            </form>
                                            <div class="product-comment__container">
                                                <div class="product-comment__list js-view-more-review" id="reviews" data-reviews="/tinh-dau-tram-tra-cay-tea-tree-essential-oil-premium-10ml-p-1342017/reviewhtml/all"
                                                    data-allreviews="/tinh-dau-tram-tra-cay-tea-tree-essential-oil-premium-10ml-p-1342017/reviewhtml/all"
                                                    data-totalreviews="">
                                                    <div id="showingAllReviews" data-showingallreviews="true"></div>
                                                    <div class="review-list " data-totalreviews="0">
                                                        <a href="javascript:;" class="btn btn-white btn-view-more-review  hidden">Xem thêm bình luận</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end comment client -->
                            <!-- banner promotion -->
                            <!-- product similar -->
                            <!-- product similar -->
                            <div class="col-sm-12">
                                <!-- should be replace by product.addToCartEnable when complete ATS  -->
                                <div class="product-detail__sticky-header hidden-xs js-product-detail__sticky-header animated sticky slideInDown">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <div class="sticky-header__info">
                                                    <div class="sticky-header__thumbnail">
                                                        <img class="img-responsive" data-product="1342017" src="https://media.static-adayroi.com/sys_master/images/h9d/h83/14565122572318.jpg"
                                                            alt="Tinh dầu tràm trà Cây Tea Tree Essential Oil Premium 10ml">
                                                    </div>
                                                    {{--  <div class="sticky-header__info-title">Tinh dầu tràm trà Cây Tea Tree Essential Oil Premium 10ml</div>  --}}
                                                    <div class="sticky-header__info-subtitle">
                                                        <span class="sticky-header__info-price">
                                                            275.000đ
                                                        </span>
                                                        <span class="divider hidden-sm">&nbsp;|</span>
                                                        <span class="sticky-header__info-delivery-time">
                                                            &nbsp;Giao hàng từ 2 - 5 ngày làm việc.</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="sticky-header__button">
                                                    <a href="#" id="sticky_add_to_cart" class="btn btn-positive js-sticky-atc">Cho vào giỏ hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Debug info -->
                                <input type="hidden" value="true" id="stk_isShowable">
                                <input type="hidden" value="true" id="stk_isPurchasable">
                                <input type="hidden" value="false" id="stk_isEmptyCurrentOffer">
                                <input type="hidden" value="" id="stk_zeroprice">
                                <input type="hidden" value="" id="stk_noprice">
                                <input type="hidden" value="" id="stk_hasOfferOutOfArea">
                                <input type="hidden" value="false" id="stk_isNotConfigDuration">
                                <input type="hidden" value="false" id="stk_countryWideDelivery">
                                <input type="hidden" value="true" id="stk_isOnlineCurrentOffer">
                            </div>
                        </div>

                        <div class="modal modal-adr modal-theatre fade in" role="dialog" id="modal-theatre-image" aria-hidden="false">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">

                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                        <span aria-hidden="true">Ã</span>
                                    </button>

                                    <div class="modal-body">
                                        <div class="product-detail__theatre">
                                            <div class="product-detail__theatre-content">
                                                <div class="clearfix">
                                                    <div class="col-xs-12 col-sm-push-2 col-sm-10">
                                                        <div class="theatre-image__content">
                                                            <div class="theatre-image__content-wrapper">
                                                                <div class="swiper-container js-theatre-image__swiper">
                                                                    <div class="swiper-wrapper">
                                                                        <div class="swiper-slide">
                                                                            <a class="theatre-image__stage-item" href="#" data-type="image" data-index="0">
                                                                                <img class="img-responsive lazy" src="https://media.static-adayroi.com/sys_master/images/haa/h9a/14565122506782.jpg" alt="">
                                                                            </a>
                                                                        </div>
                                                                        <div class="swiper-slide"><a class="theatre-image__stage-item" href="#" data-type="image"
                                                                                data-index="0"><img width="100%" height="auto" class="img-responsive lazy" src="https://media.static-adayroi.com/sys_master/images/haa/h9a/14565122506782.jpg" alt=""></a></div>
                                                                    </div>
                                                                    <div class="swiper-button-prev"></div>
                                                                    <div class="swiper-button-next"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-pull-10 col-sm-2 theatre-image__list">
                                                        <div class="theatre-image__list-wrapper">
                                                            <div class="swiper-container js-theatre-image__list">
                                                                <!-- Additional required wrapper -->
                                                                <div class="swiper-wrapper">
                                                                    <div class="swiper-slide">
                                                                        <a class="theatre-image__list-item" data-type="image" href="#" data-index="0">
                                                                            <img class="img-responsive lazy" width="92" src="https://media.static-adayroi.com/sys_master/images/haa/h9a/14565122506782.jpg" alt="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="swiper-slide"><a class="theatre-image__list-item" data-type="image"
                                                                            href="#" data-index="0"><img class="img-responsive lazy" width="92" src="https://media.static-adayroi.com/sys_master/images/haa/h9a/14565122506782.jpg" alt=""></a></div>
                                                                </div>
                                                                <!-- If we need scrollbar -->
                                                                <div class="swiper-scrollbar"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <div class="modal modal-adr modal-theatre fade in" role="dialog" id="modal-theatre-video" aria-hidden="false">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                        <span aria-hidden="true">Ã</span>
                                    </button>
                                    <div class="modal-body">
                                        <div class="product-detail__theatre">
                                            <div class="product-detail__theatre-title">
                                                <h1></h1>
                                            </div>
                                            <div class="product-detail__theatre-content"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pannel-right">
                    <div class="product-detail__right">
                        <div class="product-detail__sidebar">
                            <div class="product-detail__sidebar__location-checker">

                                <div id="product-shipping-status">
                                    <h3 class="product-detail__sidebar__title">
                                        <i class="icon-location"></i>
                                        <div class="js-change-location">
                                            <span>Giao hàng đến:
                                                <strong>Phường Minh Khai, Quận Hai Bà Trưng, Hà Nội. </strong>
                                            </span>
                                            <a href="javascript:void(0);" class="change-location">Thay đổi</a>
                                        </div>
                                    </h3>
                                </div>
                                <div class="clearfix"></div>
                                <div id="product-shipping-section" class="hidden">
                                    <h3 class="product-detail__sidebar__title">
                                        <i class="icon-location"></i>
                                        <strong class="title-check">Chọn nơi bạn muốn nhận hàng</strong>
                                    </h3>
                                    <form id="product-shipping-form" action="" class="location-selectize js-location-selectize">
                                        <div class="form-group">
                                            <select id="product--detail-city" class="js-selectize selectized" name="city" placeholder="Chọn Tỉnh/Thành Phố" tabindex="-1"
                                                style="display: none;"><option value="4" selected="selected">Hà Nội</option></select>
                                            <div
                                                class="selectize-control js-selectize selectized single">
                                                <div class="selectize-input items full has-options has-items">
                                                    <div class="item" data-value="4">Hà Nội</div><input type="text" autocomplete="off" tabindex="-1" id="product--detail-city-selectized"
                                                        style="width: 4px;"></div>
                                                <div class="selectize-dropdown single js-selectize selectized"
                                                    style="display: none; width: 100px; top: 150px; left: 0px;">
                                                    <div class="selectize-dropdown-content">
                                                        <div class="option selected active" data-selectable="" data-value="4">Hà Nội</div>
                                                        <div class="option" data-selectable="" data-value="8">Hồ Chí Minh</div>
                                                        <div class="option" data-selectable="" data-value="76">An Giang</div>
                                                        <div class="option" data-selectable="" data-value="64">Bà Rịa – Vũng Tàu</div>
                                                        <div class="option" data-selectable="" data-value="781">Bạc Liêu</div>
                                                        <div class="option" data-selectable="" data-value="240">Bắc Giang</div>
                                                        <div class="option" data-selectable="" data-value="281">Bắc Kạn</div>
                                                        <div class="option" data-selectable="" data-value="241">Bắc Ninh</div>
                                                        <div class="option" data-selectable="" data-value="750">Bến Tre</div>
                                                        <div class="option" data-selectable="" data-value="650">Bình Dương</div>
                                                        <div class="option" data-selectable="" data-value="56">Bình Định</div>
                                                        <div class="option" data-selectable="" data-value="651">Bình Phước</div>
                                                        <div class="option" data-selectable="" data-value="62">Bình Thuận</div>
                                                        <div class="option" data-selectable="" data-value="26">Cao Bằng</div>
                                                        <div class="option" data-selectable="" data-value="780">Cà Mau</div>
                                                        <div class="option" data-selectable="" data-value="710">Cần Thơ</div>
                                                        <div class="option" data-selectable="" data-value="511">Đà Nẵng</div>
                                                        <div class="option" data-selectable="" data-value="500">Đắk Lắk</div>
                                                        <div class="option" data-selectable="" data-value="501">Đắk Nông</div>
                                                        <div class="option" data-selectable="" data-value="230">Điện Biên</div>
                                                        <div class="option" data-selectable="" data-value="61">Đồng Nai</div>
                                                        <div class="option" data-selectable="" data-value="67">Đồng Tháp</div>
                                                        <div class="option" data-selectable="" data-value="59">Gia Lai</div>
                                                        <div class="option" data-selectable="" data-value="219">Hà Giang</div>
                                                        <div class="option" data-selectable="" data-value="351">Hà Nam</div>
                                                        <div class="option" data-selectable="" data-value="39">Hà Tĩnh</div>
                                                        <div class="option" data-selectable="" data-value="320">Hải Dương</div>
                                                        <div class="option" data-selectable="" data-value="31">Hải Phòng</div>
                                                        <div class="option" data-selectable="" data-value="711">Hậu Giang</div>
                                                        <div class="option" data-selectable="" data-value="218">Hòa Bình</div>
                                                        <div class="option" data-selectable="" data-value="321">Hưng Yên</div>
                                                        <div class="option" data-selectable="" data-value="58">Khánh Hòa</div>
                                                        <div class="option" data-selectable="" data-value="77">Kiên Giang</div>
                                                        <div class="option" data-selectable="" data-value="60">Kon Tum</div>
                                                        <div class="option" data-selectable="" data-value="231">Lai Châu</div>
                                                        <div class="option" data-selectable="" data-value="20">Lào Cai</div>
                                                        <div class="option" data-selectable="" data-value="25">Lạng Sơn</div>
                                                        <div class="option" data-selectable="" data-value="63">Lâm Đồng</div>
                                                        <div class="option" data-selectable="" data-value="72">Long An</div>
                                                        <div class="option" data-selectable="" data-value="350">Nam Định</div>
                                                        <div class="option" data-selectable="" data-value="38">Nghệ An</div>
                                                        <div class="option" data-selectable="" data-value="30">Ninh Bình</div>
                                                        <div class="option" data-selectable="" data-value="68">Ninh Thuận</div>
                                                        <div class="option" data-selectable="" data-value="210">Phú Thọ</div>
                                                        <div class="option" data-selectable="" data-value="57">Phú Yên</div>
                                                        <div class="option" data-selectable="" data-value="52">Quảng Bình</div>
                                                        <div class="option" data-selectable="" data-value="510">Quảng Nam</div>
                                                        <div class="option" data-selectable="" data-value="55">Quảng Ngãi</div>
                                                        <div class="option" data-selectable="" data-value="33">Quảng Ninh</div>
                                                        <div class="option" data-selectable="" data-value="53">Quảng Trị</div>
                                                        <div class="option" data-selectable="" data-value="79">Sóc Trăng</div>
                                                        <div class="option" data-selectable="" data-value="22">Sơn La</div>
                                                        <div class="option" data-selectable="" data-value="66">Tây Ninh</div>
                                                        <div class="option" data-selectable="" data-value="37">Thanh Hóa</div>
                                                        <div class="option" data-selectable="" data-value="36">Thái Bình</div>
                                                        <div class="option" data-selectable="" data-value="280">Thái Nguyên</div>
                                                        <div class="option" data-selectable="" data-value="54">Thừa Thiên Huế</div>
                                                        <div class="option" data-selectable="" data-value="73">Tiền Giang</div>
                                                        <div class="option" data-selectable="" data-value="74">Trà Vinh</div>
                                                        <div class="option" data-selectable="" data-value="27">Tuyên Quang</div>
                                                        <div class="option" data-selectable="" data-value="70">Vĩnh Long</div>
                                                        <div class="option" data-selectable="" data-value="211">Vĩnh Phúc</div>
                                                        <div class="option" data-selectable="" data-value="29">Yên Bái</div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="selectize-control js-selectize single selectized" tabindex="-1" value="" style="display: none;">


                                        </div>
                                        <div class="selectize-control js-selectize single multi">
                                            <div class="selectize-input items not-full"><input type="text" autocomplete="off" tabindex="" style="width: 4px;"></div>
                                            <div
                                                class="selectize-dropdown multi selectize-control js-selectize single" style="display: none;">
                                                <div class="selectize-dropdown-content"></div>
                                        </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <select id="product--detail-district" class="js-selectize selectized" name="district" placeholder="Chọn Quận/ Huyện" tabindex="-1"
                                    style="display: none;"><option value="7" selected="selected">Quận Hai Bà Trưng</option></select>
                                <div
                                    class="selectize-control js-selectize selectized single">
                                    <div class="selectize-input items full has-options has-items">
                                        <div class="item" data-value="7">Quận Hai Bà Trưng</div><input type="text" autocomplete="off" tabindex="-1" id="product--detail-district-selectized"
                                            style="width: 4px; opacity: 0; position: absolute; left: -10000px;"></div>
                                    <div class="selectize-dropdown single js-selectize selectized"
                                        style="display: none; width: 100px; top: 150px; left: 0px;">
                                        <div class="selectize-dropdown-content">
                                            <div class="option selected active" data-selectable="" data-value="7">Quận Hai Bà Trưng</div>
                                            <div class="option" data-selectable="" data-value="5">Quận Cầu Giấy</div>
                                            <div class="option" data-selectable="" data-value="6">Quận Đống Đa</div>
                                            <div class="option" data-selectable="" data-value="9">Quận Thanh Xuân</div>
                                            <div class="option" data-selectable="" data-value="8">Quận Hoàng Mai</div>
                                            <div class="option" data-selectable="" data-value="1">Quận Ba Đình</div>
                                            <div class="option" data-selectable="" data-value="2">Quận Hoàn Kiếm</div>
                                            <div class="option" data-selectable="" data-value="268">Quận Hà Đông</div>
                                            <div class="option" data-selectable="" data-value="974">Quận Nam Từ Liêm</div>
                                            <div class="option" data-selectable="" data-value="4">Quận Long Biên</div>
                                            <div class="option" data-selectable="" data-value="3">Quận Tây Hồ</div>
                                            <div class="option" data-selectable="" data-value="19">Quận Bắc Từ Liêm</div>
                                            <div class="option" data-selectable="" data-value="271">Huyện Ba Vì</div>
                                            <div class="option" data-selectable="" data-value="277">Huyện Chương Mỹ</div>
                                            <div class="option" data-selectable="" data-value="273">Huyện Đan Phượng</div>
                                            <div class="option" data-selectable="" data-value="17">Huyện Đông Anh</div>
                                            <div class="option" data-selectable="" data-value="18">Huyện Gia Lâm</div>
                                            <div class="option" data-selectable="" data-value="274">Huyện Hoài Đức</div>
                                            <div class="option" data-selectable="" data-value="250">Huyện Mê Linh</div>
                                            <div class="option" data-selectable="" data-value="282">Huyện Mỹ Đức</div>
                                            <div class="option" data-selectable="" data-value="280">Huyện Phú Xuyên</div>
                                            <div class="option" data-selectable="" data-value="272">Huyện Phúc Thọ</div>
                                            <div class="option" data-selectable="" data-value="275">Huyện Quốc Oai</div>
                                            <div class="option" data-selectable="" data-value="16">Huyện Sóc Sơn</div>
                                            <div class="option" data-selectable="" data-value="278">Huyện Thanh Oai</div>
                                            <div class="option" data-selectable="" data-value="20">Huyện Thanh Trì</div>
                                            <div class="option" data-selectable="" data-value="276">Huyện Thạch Thất</div>
                                            <div class="option" data-selectable="" data-value="279">Huyện Thường Tín</div>
                                            <div class="option" data-selectable="" data-value="281">Huyện Ứng Hòa</div>
                                            <div class="option" data-selectable="" data-value="269">Thị Xã Sơn Tây</div>
                                        </div>
                                    </div>
                            </div>
                            <div class="selectize-control js-selectize single selectized" tabindex="-1" value="" style="display: none;">


                            </div>
                            <div class="selectize-control js-selectize single multi">
                                <div class="selectize-input items not-full"><input type="text" autocomplete="off" tabindex="" style="width: 4px;"></div>
                                <div class="selectize-dropdown multi selectize-control js-selectize single"
                                    style="display: none;">
                                    <div class="selectize-dropdown-content"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <select id="product--detail-ward" class="js-selectize selectized" name="ward" placeholder="Chọn Phường/Xã /Thị Trấn" tabindex="-1"
                                style="display: none;"><option value="295" selected="selected">Phường Minh Khai</option></select>
                            <div
                                class="selectize-control js-selectize selectized single">
                                <div class="selectize-input items full has-options has-items">
                                    <div class="item" data-value="295">Phường Minh Khai</div><input type="text" autocomplete="off" tabindex="-1" id="product--detail-ward-selectized"
                                        style="width: 4px; opacity: 0; position: absolute; left: -10000px;"></div>
                                <div class="selectize-dropdown single js-selectize selectized"
                                    style="display: none; width: 100px; top: 150px; left: 0px;">
                                    <div class="selectize-dropdown-content">
                                        <div class="option selected active" data-selectable="" data-value="295">Phường Minh Khai</div>
                                        <div class="option" data-selectable="" data-value="277">Phường Bách Khoa</div>
                                        <div class="option" data-selectable="" data-value="250">Phường Bùi Thị Xuân</div>
                                        <div class="option" data-selectable="" data-value="286">Phường Bạch Mai</div>
                                        <div class="option" data-selectable="" data-value="244">Phường Bạch Đằng</div>
                                        <div class="option" data-selectable="" data-value="274">Phường Cầu Dền</div>
                                        <div class="option" data-selectable="" data-value="256">Phường Lê Đại Hành</div>
                                        <div class="option" data-selectable="" data-value="241">Phường Nguyễn Du</div>
                                        <div class="option" data-selectable="" data-value="253">Phường Ngô Thì Nhậm</div>
                                        <div class="option" data-selectable="" data-value="247">Phường Phạm Đình Hổ</div>
                                        <div class="option" data-selectable="" data-value="262">Phường Phố Huế</div>
                                        <div class="option" data-selectable="" data-value="292">Phường Quỳnh Lôi</div>
                                        <div class="option" data-selectable="" data-value="289">Phường Quỳnh Mai</div>
                                        <div class="option" data-selectable="" data-value="268">Phường Thanh Lương</div>
                                        <div class="option" data-selectable="" data-value="271">Phường Thanh Nhàn</div>
                                        <div class="option" data-selectable="" data-value="298">Phường Trương Định</div>
                                        <div class="option" data-selectable="" data-value="283">Phường Vĩnh Tuy</div>
                                        <div class="option" data-selectable="" data-value="265">Phường Đống Mác</div>
                                        <div class="option" data-selectable="" data-value="259">Phường Đồng Nhân</div>
                                        <div class="option" data-selectable="" data-value="280">Phường Đồng Tâm</div>
                                    </div>
                                </div>
                        </div>
                        <div class="selectize-control js-selectize single selectized" tabindex="-1" value="" style="display: none;">


                        </div>
                        <div class="selectize-control js-selectize single multi">
                            <div class="selectize-input items not-full"><input type="text" autocomplete="off" tabindex="" style="width: 4px;"></div>
                            <div class="selectize-dropdown multi selectize-control js-selectize single"
                                style="display: none;">
                                <div class="selectize-dropdown-content"></div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="product-detail__sidebar__features">
                <h3 class="product-detail__sidebar__title">
                    <i class="icon-car"></i> Giao hàng bởi Adayroi
                    <!-- expected delivery time -->
                    <!--             expected delivery time -->
                    <span class="time-delivery-note text-green" title="">Giao hàng từ 2 - 5 ngày làm việc.</span>
                    <!-- end delivery time -->
                    <!-- end delivery time -->
                </h3>
                <h3 class="product-detail__sidebar__title">
                    <i class="icon-box"></i> Đổi trả trong 20 ngày.
                    <a href="#" data-toggle="popover" data-html="true" data-placement="bottom" data-trigger="hover" data-content="<h4>Thời gian đổi trả</h4><p>- Trong vòng 20 ngày kể từ ngày nhận sản phẩm</p><h4>Hình thức đổi trả</h4><p>- Mang trực tiếp hàng hoá cần đổi trả đến Trung tâm đổi trả của Adayroi.</p><p>- Gửi hàng đổi trả qua bưu điện</p><p>- Không áp dụng với một số ngành hàng. <a href='/chinh-sach-doi-tra'>Xem chi tiết</a></p>"
                        data-original-title="" title="">Xem thêm</a>
                    <span>Thủ tục đơn giản</span>
                </h3>
                <h3 class="product-detail__sidebar__title">

                    <i class="icon-bill"></i> Adayroi xuất hóa đơn cho sản phẩm này.
                </h3>
                <h3 class="product-detail__sidebar__title">
                </h3>
                <h3 class="product-detail__sidebar__title">

                </h3>
                <h3 class="product-detail__sidebar__title">
                    <i class="icon-card"></i> Sản phẩm áp dụng tiêu điểm VinID
                </h3>
            </div>
            <div class="product-detail__sidebar__merchant">
                <h3 class="product-detail__sidebar__title">
                    <i class="icon-store"></i>
                    <small>Sản phẩm được cung cấp bởi</small>
                    <a href="XANH CAY-mc195175">XANH CAY</a>
                </h3>
            </div>
            <div class="product-detail__sidebar__list-othersuppliers">
            </div>
        </div>
        <script type="text/javascript">
            /*<![CDATA[*/
                            var ACC = ACC || {};
                            ACC.deliverydata = ACC.deliverydata || {};
                            ACC.deliverydata.suggestionFrom = "3";
                            ACC.deliverydata.scrollFrom = "5";
                            ACC.deliverydata.countryWideDelivery = "false";
/*]]>*/
        </script>
        <div class="product-detail__sidebar-similar-product hidden-xs hidden-sm" id="product-detail__together-viewed">
            <h1 class="sidebar-similar-product__title">Sản phẩm tương tự</h1>
            <div class="sidebar-similar-product__content">
                <div class="product-list__container" id="count-product-together">
                    <a href="/tinh-dau-sa-chanh-milaganics-lemongrass-essential-oil-30ml-p-PRI796535?offer=PRI796535_MU7&amp;ref=tog" class="product-item">
                        <div class="product-item__container">
                            <div class="product-item__thumbnail">
                                <img id="together-viewed-product" class="img-responsive lazy " src="https://media.static-adayroi.com/sys_master/h37/hf6/11518733221918.jpg"
                                    alt="Tinh dầu sả chanh Milaganics Lemongrass Essential Oil 30ml" title="Tinh dầu sả chanh Milaganics Lemongrass Essential Oil 30ml">
                            </div>
                            <div class="product-item__info">
                                {{--  <h3 class="product-item__info-title">Tinh dầu sả chanh Milaganics Lemongrass Essential Oil 30ml</h3>  --}}
                                <div class="product-item__info-price">
                                    <span class="product-item__info-price-sale">193.500đ</span>
                                    <span class="product-item__info-price-original">215.000đ</span>
                                </div>
                                <div class="product-item__info-discount">

                                    -10%
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/tinh-dau-nhuc-dau-khau-milaganics-nutmeg-essential-oil-10ml-p-PRI797022?offer=PRI797022_MU7&amp;ref=tog" class="product-item">
                        <div class="product-item__container">
                            <div class="product-item__thumbnail">
                                <img id="together-viewed-product" class="img-responsive lazy " src="https://media.static-adayroi.com/sys_master/h38/hc3/11490222768158.jpg"
                                    alt="Tinh dầu nhục đậu khấu Milaganics Nutmeg Essential Oil 10ml" title="Tinh dầu nhục đậu khấu Milaganics Nutmeg Essential Oil 10ml">
                            </div>
                            <div class="product-item__info">
                                <h3 class="product-item__info-title">Tinh dầu nhục đậu khấu Milaganics Nutmeg Essential Oil 10ml</h3>
                                <div class="product-item__info-price">
                                    <span class="product-item__info-price-sale">193.500đ</span>
                                    <span class="product-item__info-price-original">215.000đ</span>
                                </div>
                                <div class="product-item__info-discount">

                                    -10%
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/tinh-dau-hoa-hong-treo-o-to-evarosa-rose-essential-oil-hinh-thap-8ml-p-1315063?offer=1315063_R4W&amp;ref=tog" class="product-item">
                        <div class="product-item__container">
                            <div class="product-item__thumbnail">
                                <img id="together-viewed-product" class="img-responsive lazy " src="https://media.static-adayroi.com/sys_master/images/he7/h04/13334702096414.jpg"
                                    alt="Tinh dầu hoa hồng treo ô tô Evarosa Rose Essential Oil hình tháp 8ml" title="Tinh dầu hoa hồng treo ô tô Evarosa Rose Essential Oil hình tháp 8ml">
                            </div>
                            <div class="product-item__info">
                                <h3 class="product-item__info-title">Tinh dầu hoa hồng treo ô tô Evarosa Rose Essential Oil hình tháp 8ml</h3>
                                <div class="product-item__info-price">
                                    <span class="product-item__info-price-sale">195.000đ</span>
                                    <span class="product-item__info-price-original">250.000đ</span>
                                </div>
                                <div class="product-item__info-discount">

                                    -22%
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/tinh-dau-tram-tra-milaganics-tea-tree-essential-oil-30ml-p-PRI795968?offer=PRI795968_MU7&amp;ref=tog" class="product-item">
                        <div class="product-item__container">
                            <div class="product-item__thumbnail">
                                <img id="together-viewed-product" class="img-responsive lazy " src="https://media.static-adayroi.com/sys_master/h59/hba/11493727961118.jpg"
                                    alt="Tinh dầu tràm trà Milaganics Tea Tree Essential Oil 30ml" title="Tinh dầu tràm trà Milaganics Tea Tree Essential Oil 30ml">
                            </div>
                            <div class="product-item__info">
                                <h3 class="product-item__info-title">Tinh dầu tràm trà Milaganics Tea Tree Essential Oil 30ml</h3>
                                <div class="product-item__info-price">
                                    <span class="product-item__info-price-sale">198.000đ</span>
                                    <span class="product-item__info-price-original">220.000đ</span>
                                </div>
                                <div class="product-item__info-discount">

                                    -10%
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/tinh-dau-loc-de-xanh-milaganics-winter-green-essential-oil-30ml-p-PRI797244?offer=PRI797244_MU7&amp;ref=tog" class="product-item">
                        <div class="product-item__container">
                            <div class="product-item__thumbnail">
                                <img id="together-viewed-product" class="img-responsive lazy " src="https://media.static-adayroi.com/sys_master/h6d/hf7/11528892907550.jpg"
                                    alt="Tinh dầu lộc đề xanh Milaganics Winter Green Essential Oil 30ml" title="Tinh dầu lộc đề xanh Milaganics Winter Green Essential Oil 30ml">
                            </div>
                            <div class="product-item__info">
                                <h3 class="product-item__info-title">Tinh dầu lộc đề xanh Milaganics Winter Green Essential Oil 30ml</h3>
                                <div class="product-item__info-price">
                                    <span class="product-item__info-price-sale">198.000đ</span>
                                    <span class="product-item__info-price-original">220.000đ</span>
                                </div>
                                <div class="product-item__info-discount">

                                    -10%
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/tinh-dau-oai-huong-cay-lavender-true-essential-oil-premium-5ml-p-1342010?offer=1342010_094175&amp;ref=tog" class="product-item">
                        <div class="product-item__container">
                            <div class="product-item__thumbnail">
                                <img id="together-viewed-product" class="img-responsive lazy " src="https://media.static-adayroi.com/sys_master/images/h1d/hc4/14565114183710.jpg"
                                    alt="Tinh dầu oải hương Cây Lavender True Essential Oil Premium 5ml" title="Tinh dầu oải hương Cây Lavender True Essential Oil Premium 5ml">
                            </div>
                            <div class="product-item__info">
                                <h3 class="product-item__info-title">Tinh dầu oải hương Cây Lavender True Essential Oil Premium 5ml</h3>
                                <div class="product-item__info-price">
                                    <span class="product-item__info-price-sale">198.000đ</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/tinh-dau-hoa-lai-treo-o-to-evarosa-hinh-thap-10ml-p-PRI1215173?offer=PRI1215173_R4W&amp;ref=tog" class="product-item">
                        <div class="product-item__container">
                            <div class="product-item__thumbnail">
                                <img id="together-viewed-product" class="img-responsive lazy " src="https://media.static-adayroi.com/sys_master/h39/h02/11540828618782.jpg"
                                    alt="Tinh dầu hoa lài treo ô tô Evarosa hình tháp 10ml" title="Tinh dầu hoa lài treo ô tô Evarosa hình tháp 10ml">
                            </div>
                            <div class="product-item__info">
                                <h3 class="product-item__info-title">Tinh dầu hoa lài treo ô tô Evarosa hình tháp 10ml</h3>
                                <div class="product-item__info-price">
                                    <span class="product-item__info-price-sale">199.000đ</span>
                                    <span class="product-item__info-price-original">250.000đ</span>
                                </div>
                                <div class="product-item__info-discount">

                                    -20%
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/tinh-dau-dot-dame-clemence-ky-uc-tuoi-tho-15ml-p-PRI773210?offer=PRI773210_PCN&amp;ref=tog" class="product-item">
                        <div class="product-item__container">
                            <div class="product-item__thumbnail">
                                <img id="together-viewed-product" class="img-responsive lazy " src="https://media.static-adayroi.com/sys_master/hbb/h43/11493690212382.jpg"
                                    alt="Tinh dầu đốt Dame Clemence Ký Ức Tuổi Thơ 15ml" title="Tinh dầu đốt Dame Clemence Ký Ức Tuổi Thơ 15ml">
                            </div>
                            <div class="product-item__info">
                                <h3 class="product-item__info-title">Tinh dầu đốt Dame Clemence Ký Ức Tuổi Thơ 15ml</h3>
                                <div class="product-item__info-price">
                                    <span class="product-item__info-price-sale">200.000đ</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="product-detail__sidebar-similar-product visible-xs visible-sm">
            <h1 class="sidebar-similar-product__title">Sản phẩm tương tự</h1>
            <div class="adr-swiper-wrapper">
                <div class="swiper-container product-detail__related js-swiper-carousel js-swiper-product-detail__related swiper-container-horizontal initialized">
                    <div class="swiper-wrapper" id="count-product-together-mobile" style="transition-duration: 0ms;">
                        <div class="swiper-slide swiper-slide-active">
                            <a href="/tinh-dau-sa-chanh-milaganics-lemongrass-essential-oil-30ml-p-PRI796535?offer=PRI796535_MU7&amp;ref=tog" class="product-item">
                                <div class="product-item__container">
                                    <div class="product-item__thumbnail">
                                        <img id="together-viewed-product" class="img-responsive lazy " src="https://media.static-adayroi.com/sys_master/h37/hf6/11518733221918.jpg"
                                            alt="Tinh dầu sả chanh Milaganics Lemongrass Essential Oil 30ml" title="Tinh dầu sả chanh Milaganics Lemongrass Essential Oil 30ml">
                                    </div>
                                    <div class="product-item__info">
                                        <h3 class="product-item__info-title">Tinh dầu sả chanh Milaganics Lemongrass Essential Oil 30ml</h3>
                                        <div class="product-item__info-price">
                                            <span class="product-item__info-price-sale">193.500đ</span>
                                            <span class="product-item__info-price-original">215.000đ</span>
                                        </div>
                                        <div class="product-item__info-discount">

                                            -10%
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide swiper-slide-next">
                            <a href="/tinh-dau-nhuc-dau-khau-milaganics-nutmeg-essential-oil-10ml-p-PRI797022?offer=PRI797022_MU7&amp;ref=tog" class="product-item">
                                <div class="product-item__container">
                                    <div class="product-item__thumbnail">
                                        <img id="together-viewed-product" class="img-responsive lazy " src="https://media.static-adayroi.com/sys_master/h38/hc3/11490222768158.jpg"
                                            alt="Tinh dầu nhục đậu khấu Milaganics Nutmeg Essential Oil 10ml" title="Tinh dầu nhục đậu khấu Milaganics Nutmeg Essential Oil 10ml">
                                    </div>
                                    <div class="product-item__info">
                                        <h3 class="product-item__info-title">Tinh dầu nhục đậu khấu Milaganics Nutmeg Essential Oil 10ml</h3>
                                        <div class="product-item__info-price">
                                            <span class="product-item__info-price-sale">193.500đ</span>
                                            <span class="product-item__info-price-original">215.000đ</span>
                                        </div>
                                        <div class="product-item__info-discount">

                                            -10%
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/tinh-dau-hoa-hong-treo-o-to-evarosa-rose-essential-oil-hinh-thap-8ml-p-1315063?offer=1315063_R4W&amp;ref=tog" class="product-item">
                                <div class="product-item__container">
                                    <div class="product-item__thumbnail">
                                        <img id="together-viewed-product" class="img-responsive lazy " src="https://media.static-adayroi.com/sys_master/images/he7/h04/13334702096414.jpg"
                                            alt="Tinh dầu hoa hồng treo ô tô Evarosa Rose Essential Oil hình tháp 8ml" title="Tinh dầu hoa hồng treo ô tô Evarosa Rose Essential Oil hình tháp 8ml">
                                    </div>
                                    <div class="product-item__info">
                                        <h3 class="product-item__info-title">Tinh dầu hoa hồng treo ô tô Evarosa Rose Essential Oil hình tháp 8ml
                                        </h3>
                                        <div class="product-item__info-price">
                                            <span class="product-item__info-price-sale">195.000đ</span>
                                            <span class="product-item__info-price-original">250.000đ</span>
                                        </div>
                                        <div class="product-item__info-discount">

                                            -22%
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/tinh-dau-tram-tra-milaganics-tea-tree-essential-oil-30ml-p-PRI795968?offer=PRI795968_MU7&amp;ref=tog" class="product-item">
                                <div class="product-item__container">
                                    <div class="product-item__thumbnail">
                                        <img id="together-viewed-product" class="img-responsive lazy " src="https://media.static-adayroi.com/sys_master/h59/hba/11493727961118.jpg"
                                            alt="Tinh dầu tràm trà Milaganics Tea Tree Essential Oil 30ml" title="Tinh dầu tràm trà Milaganics Tea Tree Essential Oil 30ml">
                                    </div>
                                    <div class="product-item__info">
                                        <h3 class="product-item__info-title">Tinh dầu tràm trà Milaganics Tea Tree Essential Oil 30ml</h3>
                                        <div class="product-item__info-price">
                                            <span class="product-item__info-price-sale">198.000đ</span>
                                            <span class="product-item__info-price-original">220.000đ</span>
                                        </div>
                                        <div class="product-item__info-discount">

                                            -10%
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/tinh-dau-loc-de-xanh-milaganics-winter-green-essential-oil-30ml-p-PRI797244?offer=PRI797244_MU7&amp;ref=tog" class="product-item">
                                <div class="product-item__container">
                                    <div class="product-item__thumbnail">
                                        <img id="together-viewed-product" class="img-responsive lazy " src="https://media.static-adayroi.com/sys_master/h6d/hf7/11528892907550.jpg"
                                            alt="Tinh dầu lộc đề xanh Milaganics Winter Green Essential Oil 30ml" title="Tinh dầu lộc đề xanh Milaganics Winter Green Essential Oil 30ml">
                                    </div>
                                    <div class="product-item__info">
                                        <h3 class="product-item__info-title">Tinh dầu lộc đề xanh Milaganics Winter Green Essential Oil 30ml</h3>
                                        <div class="product-item__info-price">
                                            <span class="product-item__info-price-sale">198.000đ</span>
                                            <span class="product-item__info-price-original">220.000đ</span>
                                        </div>
                                        <div class="product-item__info-discount">

                                            -10%
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/tinh-dau-oai-huong-cay-lavender-true-essential-oil-premium-5ml-p-1342010?offer=1342010_094175&amp;ref=tog" class="product-item">
                                <div class="product-item__container">
                                    <div class="product-item__thumbnail">
                                        <img id="together-viewed-product" class="img-responsive lazy " src="https://media.static-adayroi.com/sys_master/images/h1d/hc4/14565114183710.jpg"
                                            alt="Tinh dầu oải hương Cây Lavender True Essential Oil Premium 5ml" title="Tinh dầu oải hương Cây Lavender True Essential Oil Premium 5ml">
                                    </div>
                                    <div class="product-item__info">
                                        <h3 class="product-item__info-title">Tinh dầu oải hương Cây Lavender True Essential Oil Premium 5ml</h3>
                                        <div class="product-item__info-price">
                                            <span class="product-item__info-price-sale">198.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/tinh-dau-hoa-lai-treo-o-to-evarosa-hinh-thap-10ml-p-PRI1215173?offer=PRI1215173_R4W&amp;ref=tog" class="product-item">
                                <div class="product-item__container">
                                    <div class="product-item__thumbnail">
                                        <img id="together-viewed-product" class="img-responsive lazy " src="https://media.static-adayroi.com/sys_master/h39/h02/11540828618782.jpg"
                                            alt="Tinh dầu hoa lài treo ô tô Evarosa hình tháp 10ml" title="Tinh dầu hoa lài treo ô tô Evarosa hình tháp 10ml">
                                    </div>
                                    <div class="product-item__info">
                                        <h3 class="product-item__info-title">Tinh dầu hoa lài treo ô tô Evarosa hình tháp 10ml</h3>
                                        <div class="product-item__info-price">
                                            <span class="product-item__info-price-sale">199.000đ</span>
                                            <span class="product-item__info-price-original">250.000đ</span>
                                        </div>
                                        <div class="product-item__info-discount">

                                            -20%
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/tinh-dau-dot-dame-clemence-ky-uc-tuoi-tho-15ml-p-PRI773210?offer=PRI773210_PCN&amp;ref=tog" class="product-item">
                                <div class="product-item__container">
                                    <div class="product-item__thumbnail">
                                        <img id="together-viewed-product" class="img-responsive lazy " src="https://media.static-adayroi.com/sys_master/hbb/h43/11493690212382.jpg"
                                            alt="Tinh dầu đốt Dame Clemence Ký Ức Tuổi Thơ 15ml" title="Tinh dầu đốt Dame Clemence Ký Ức Tuổi Thơ 15ml">
                                    </div>
                                    <div class="product-item__info">
                                        <h3 class="product-item__info-title">Tinh dầu đốt Dame Clemence Ký Ức Tuổi Thơ 15ml</h3>
                                        <div class="product-item__info-price">
                                            <span class="product-item__info-price-sale">200.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a id="data" class="data" data-missing-image-product="/_ui/responsive/common/images/missing_product_240x240.png"></a>
        <!---->
        <div class="product-detail__banner hidden-xs hidden-sm">
        </div>

</div>
</div>
</div>
</div>
</section>

</div>
@endsection