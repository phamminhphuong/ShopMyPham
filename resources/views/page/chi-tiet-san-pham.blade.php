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
                                
                                <div id="productJsonMedias"></div>
                                <div class="product-detail__gallery js-product-detail__gallery">
                                    <div class="product-gallery__stage">
                                        <div class="product-gallery__stopper">
                                        </div>
                                        <img class="stage" src="image_SanPham/{!!$chitietsanpham->HinhAnh!!}">
                                    </div>
                                </div>
                                <!--VIN WARNING MESSAGE-->
                                <div class="product-detail__notice">
                                </div>
                            </div>
                            
                            <!-- end section galery -->
                            <div class="col-sm-7 product-detail__info product-detail__info-block">
                                <div class="hidden-xs">
                                    <div class="product-detail__title">
                                        <h1>{!!$chitietsanpham->TenSanPham!!}</h1>
                                        <div class="product-detail__title-brand">
                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="product-detail__short-des js-height-toggle-description" style="max-height: none;">
                                    <div class="short-des__content" data-role="content" data-total="6" data-item-height="27" style="height: 100px;">
                                        <ul>
                                            <li class="nobullet">
                                                <ul>
                                                    {{-- <li>Tinh dầu tràm trà &nbsp;của Cây có nguồn gốc từ&nbsp;Koree Herb Australia.</li>
                                                    <li>&nbsp;Tràm trà khá nổi tiếng với công dụng kháng viêm, điều trị các vấn
                                                        đề về da và tóc do vi khuẩn gây nên.</li>
                                                    <li>Nếu bị mụn, hãy để tinh dầu tràm chăm sóc!</li>
                                                    <li>Đối với các nốt mụn viêm đầu trắng:&nbsp;&nbsp;dùng tăm bông thấm 1-2
                                                        giọt tràm trà Cây&nbsp;và chấm lên các nốt mụn 2 lần/ngày vào buổi
                                                        sáng và tối</li>
                                                    <li>Tinh chất α-Terpineol có trong dầu tràm trà sẽ khiến cho các nốt mụn
                                                        này nhanh chóng khô đầu, giảm tình trạng sưng viêm.</li>
                                                    <li>Tinh dầu tràm trà rất tốt cho trẻ nhỏ, nhỏ vào nước tắm giúp giữ ấm cơ
                                                        thể và làm sạch nhẹ nhàng.</li> --}}
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
                                        Giá bán:
                                        <span class="price-info__sale">275.000đ</span>
                                    </div>
                                 
                                    <div class="product-detail__price-vinid">
                                        <i class="adr-icon icon-vinid"></i>
                                        <div class="price-vinid__description">
                                           Giá ưu đãi
                                            <span class="price-vinid__value">269.000đ</span>
                                            <span class="price-vinid__discount-info">
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
                                                        
                                                        </div>
                                                      
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
                    <i class="icon-car"></i> Giao hàng bởi Shop Mỹ Huyền
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

                    <i class="icon-bill"></i> Shop Mỹ Huyền xuất hóa đơn cho sản phẩm này.
                </h3>
                <h3 class="product-detail__sidebar__title">
                </h3>
                <h3 class="product-detail__sidebar__title">

                </h3>
               
            </div>
            <div class="product-detail__sidebar__merchant">
                <h3 class="product-detail__sidebar__title">
                    <i class="icon-store"></i>
                    <small>Sản phẩm được cung cấp bởi</small>
                    <a href="XANH CAY-mc195175">Công ty mỹ phẩm Hoàng Hà</a>
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
                    @foreach($sanphamgiong as $sp)
                    <a href="/tinh-dau-sa-chanh-milaganics-lemongrass-essential-oil-30ml-p-PRI796535?offer=PRI796535_MU7&amp;ref=tog" class="product-item">
                        <div class="product-item__container">
                            <div class="product-item__thumbnail">
                                <img id="together-viewed-product" class="img-responsive lazy " src="image_SanPham/{!!$sp->HinhAnh!!}"
                                    alt="SanPham" title="">
                            </div>
                            <div class="product-item__info">
                                {{--  <h3 class="product-item__info-title">Tinh dầu sả chanh Milaganics Lemongrass Essential Oil 30ml</h3>  --}}
                                <div class="product-item__info-price">
                                    <span class="product-item__info-price-sale">{{ number_format($sp->GiaUuDai, 0, '.', '.') }}đ</span>
                                    <span class="product-item__info-price-original">{{ number_format($sp->Gia, 0, '.', '.') }}đ</span>
                                </div>
                                <div class="product-item__info-discount">

                                    -10%
                                </div>
                            </div>
                        </div>
                    </a>
              @endforeach
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