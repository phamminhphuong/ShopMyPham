@extends('layout.index') @section('content')
<div class="section__checkout">

    <div class="container">
        <div class="row">

            <div class="col-xs-12 col-sm-7 col-md-8 checkout-main">
                <span class="iconLoad"></span>

                <div id="checkoutAddressWrapper">
                    <form id="vinCheckoutAddressForm" action="/checkout/multi/delivery-address/add" method="post">
                        <input type="hidden" name="CSRFToken" value="b10ea2b0-bb8e-4f73-95dc-d3709868294d">
                        <h2 class="checkout-title">Địa chỉ nhận hàng</h2>
                        <div class="checkout-block clearfix">
                            <input type="hidden" name="isModifyPage" value="">
                            <ul class="checkout-receiver-address list-unstyled js-checkout-receiver-address">
                                <li class="active">
                                    <label class="adr-radio js-adr-shipping-noaddress">
                                        <input id="shippingAddressCode1" name="shippingAddressCode" class="adr-radio-input js-adr-shipping-noaddress" data-hasno-shipping-address="true"
                                            type="radio" value="" checked="checked">
                                        <div class="adr-radio-label">
                                            <span class="adr-radio-icon"></span>
                                            <div class="adr-radio-text">
                                                <p>Thêm địa chỉ khác</p>
                                            </div>
                                        </div>
                                    </label>

                                    <div class="checkout-receiver-address__form" style="display: block;">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-10 col-md-push-1">
                                                <div class="form-horizontal">
                                                    <div class="form-group ">
                                                        <div class="row">
                                                            <label for="" class="col-sm-3">Họ và tên*</label>
                                                            <div class="col-sm-9">
                                                                <input id="fullName" name="fullName" class="form-control js-script-check" placeholder="Vui lòng nhập Họ và tên" type="text"
                                                                    value="" maxlength="50">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <div class="row">
                                                            <label for="" class="col-sm-3">Điện thoại*</label>
                                                            <div class="col-sm-9">
                                                                <input id="phone" name="phone" class="form-control" placeholder="Vui lòng nhập Điện thoại" type="text" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <div class="row">
                                                            <label for="" class="col-sm-3">Email</label>
                                                            <div class="col-sm-9">
                                                                <input id="email" name="email" class="form-control" placeholder="Vui lòng nhập Email" type="text" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <div class="row">
                                                            <label for="" class="col-sm-3">Tỉnh/Thành phố*</label>
                                                            <div class="col-sm-9">
                                                                <select id="provinceIso" name="provinceIso" class="checkout-address-city js-selectize  selectized" placeholder="Chọn Tỉnh/Thành Phố"
                                                                    tabindex="-1" style="display: none;">
                                                                    <option value="4" selected="selected">Hà Nội</option>
                                                                </select>
                                                                <div class="selectize-control checkout-address-city js-selectize single">
                                                                    <div class="selectize-input items full has-options has-items">
                                                                        <div class="item" data-value="4">Hà Nội</div>
                                                                        <input type="text" autocomplete="off"
                                                                            tabindex="" id="provinceIso-selectized" style="width: 4px; opacity: 0; position: absolute; left: -10000px;">
                                                                    </div>
                                                                    <div class="selectize-dropdown single checkout-address-city js-selectize"
                                                                        style="display: none; width: 474px; top: 32px; left: 0px;">
                                                                        <div class="selectize-dropdown-content">
                                                                            <div class="option selected active" data-selectable=""
                                                                                data-value="4">Hà Nội</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="8">Hồ Chí Minh</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="76">An Giang</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="64">Bà Rịa – Vũng Tàu</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="781">Bạc Liêu</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="240">Bắc Giang</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="281">Bắc Kạn</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="241">Bắc Ninh</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="750">Bến Tre</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="650">Bình Dương</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="56">Bình Định</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="651">Bình Phước</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="62">Bình Thuận</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="26">Cao Bằng</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="780">Cà Mau</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="710">Cần Thơ</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="511">Đà Nẵng</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="500">Đắk Lắk</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="501">Đắk Nông</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="230">Điện Biên</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="61">Đồng Nai</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="67">Đồng Tháp</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="59">Gia Lai</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="219">Hà Giang</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="351">Hà Nam</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="39">Hà Tĩnh</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="320">Hải Dương</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="31">Hải Phòng</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="711">Hậu Giang</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="218">Hòa Bình</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="321">Hưng Yên</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="58">Khánh Hòa</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="77">Kiên Giang</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="60">Kon Tum</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="231">Lai Châu</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="20">Lào Cai</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="25">Lạng Sơn</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="63">Lâm Đồng</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="72">Long An</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="350">Nam Định</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="38">Nghệ An</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="30">Ninh Bình</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="68">Ninh Thuận</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="210">Phú Thọ</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="57">Phú Yên</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="52">Quảng Bình</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="510">Quảng Nam</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="55">Quảng Ngãi</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="33">Quảng Ninh</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="53">Quảng Trị</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="79">Sóc Trăng</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="22">Sơn La</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="66">Tây Ninh</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="37">Thanh Hóa</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="36">Thái Bình</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="280">Thái Nguyên</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="54">Thừa Thiên Huế</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="73">Tiền Giang</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="74">Trà Vinh</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="27">Tuyên Quang</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="70">Vĩnh Long</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="211">Vĩnh Phúc</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="29">Yên Bái</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <div class="row">
                                                            <label for="" class="col-sm-3" data-current="">Quận/ Huyện*</label>
                                                            <div class="col-sm-9">
                                                                <select id="districtIso" name="districtIso" class="checkout-address-district  js-selectize  selectized" placeholder="Chọn Quận/ Huyện"
                                                                    tabindex="-1" style="display: none;">
                                                                    <option value="7" selected="selected">Quận Hai Bà Trưng</option>
                                                                </select>
                                                                <div class="selectize-control checkout-address-district js-selectize single">
                                                                    <div class="selectize-input items full has-options has-items">
                                                                        <div class="item" data-value="7">Quận Hai Bà Trưng</div>
                                                                        <input type="text" autocomplete="off"
                                                                            tabindex="0" id="districtIso-selectized" style="width: 4px; opacity: 0; position: absolute; left: -10000px;">
                                                                    </div>
                                                                    <div class="selectize-dropdown single checkout-address-district js-selectize"
                                                                        style="display: none; width: 474px; top: 32px; left: 0px;">
                                                                        <div class="selectize-dropdown-content">
                                                                            <div class="option selected active" data-selectable=""
                                                                                data-value="7">Quận Hai Bà Trưng</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="5">Quận Cầu Giấy</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="6">Quận Đống Đa</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="9">Quận Thanh Xuân</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="8">Quận Hoàng Mai</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="1">Quận Ba Đình</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="2">Quận Hoàn Kiếm</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="268">Quận Hà Đông</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="974">Quận Nam Từ Liêm</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="4">Quận Long Biên</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="3">Quận Tây Hồ</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="19">Quận Bắc Từ Liêm</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="271">Huyện Ba Vì</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="277">Huyện Chương Mỹ</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="273">Huyện Đan Phượng</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="17">Huyện Đông Anh</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="18">Huyện Gia Lâm</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="274">Huyện Hoài Đức</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="250">Huyện Mê Linh</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="282">Huyện Mỹ Đức</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="280">Huyện Phú Xuyên</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="272">Huyện Phúc Thọ</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="275">Huyện Quốc Oai</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="16">Huyện Sóc Sơn</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="278">Huyện Thanh Oai</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="20">Huyện Thanh Trì</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="276">Huyện Thạch Thất</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="279">Huyện Thường Tín</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="281">Huyện Ứng Hòa</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="269">Thị Xã Sơn Tây</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <div class="row">
                                                            <label for="" class="col-sm-3">Phường/Xã*</label>
                                                            <div class="col-sm-9">
                                                                <select id="wardIso" name="wardIso" class="checkout-address-ward  js-selectize  selectized" placeholder="Chọn Phường/Xã /Thị Trấn"
                                                                    tabindex="-1" style="display: none;">
                                                                    <option value="295" selected="selected">Phường Minh Khai</option>
                                                                </select>
                                                                <div class="selectize-control checkout-address-ward js-selectize single">
                                                                    <div class="selectize-input items full has-options has-items">
                                                                        <div class="item" data-value="295">Phường Minh Khai</div>
                                                                        <input type="text" autocomplete="off"
                                                                            tabindex="0" id="wardIso-selectized" style="width: 4px; opacity: 0; position: absolute; left: -10000px;">
                                                                    </div>
                                                                    <div class="selectize-dropdown single checkout-address-ward js-selectize"
                                                                        style="display: none; width: 474px; top: 32px; left: 0px;">
                                                                        <div class="selectize-dropdown-content">
                                                                            <div class="option" data-selectable="" data-value="277">Phường Bách Khoa</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="250">Phường Bùi Thị Xuân</div>
                                                                            <div class="option"
                                                                                data-selectable="" data-value="286">Phường Bạch Mai</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="244">Phường Bạch Đằng</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="274">Phường Cầu Dền</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="256">Phường Lê Đại Hành</div>
                                                                            <div class="option selected active"
                                                                                data-selectable="" data-value="295">Phường Minh Khai</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="241">Phường Nguyễn Du</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="253">Phường Ngô Thì Nhậm</div>
                                                                            <div class="option"
                                                                                data-selectable="" data-value="247">Phường Phạm Đình Hổ</div>
                                                                            <div class="option"
                                                                                data-selectable="" data-value="262">Phường Phố Huế</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="292">Phường Quỳnh Lôi</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="289">Phường Quỳnh Mai</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="268">Phường Thanh Lương</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="271">Phường Thanh Nhàn</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="298">Phường Trương Định</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="283">Phường Vĩnh Tuy</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="265">Phường Đống Mác</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="259">Phường Đồng Nhân</div>
                                                                            <div class="option" data-selectable=""
                                                                                data-value="280">Phường Đồng Tâm</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <div class="row">
                                                            <label for="" class="col-sm-3">Địa chỉ chi tiết*</label>
                                                            <div class="col-sm-9">
                                                                <input id="detailedAddress" name="detailedAddress" class="form-control" placeholder="Vui lòng nhập Địa chỉ chi tiết" type="text"
                                                                    value="" maxlength="255">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <!-- <span class="help-block">* Lưu ý: Giá trị hoá đơn không bao
            gồm giá trị giảm giá và số điểm VinID đã sử dụng để thanh toán</span> -->
                                                    </div>


                                                    <div class="form-group">
                                                        <label class="adr-checkbox">
                                                            <input id="saveInAddressBook1" name="saveInAddressBook" class="adr-checkbox-input" type="checkbox" value="true">
                                                            <input type="hidden" name="_saveInAddressBook" value="on">
                                                            <!-- <input name="saveInAddressBook" class="adr-checkbox-input" type="checkbox"> -->
                                                            <div class="adr-checkbox-label">
                                                                <span class="adr-checkbox-icon"></span>
                                                                <div class="adr-checkbox-text">
                                                                    <p>Lưu thông tin địa chỉ</p>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="checkout-note">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-3">
                                            <label for="">Lời nhắn:
                                                <span>(Không bắt buộc)</span>
                                            </label>
                                        </div>
                                        <div class="col-xs-12 col-sm-9">
                                            <textarea id="shippingAddressNote" name="shippingAddressNote" class="form-control" maxlength="500" placeholder="Ví dụ: Chuyển hàng ngoài giờ hành chính"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2 class="checkout-title">
                            Thông tin người mua hàng
                            <a class="checkout-title-float-btn js-checkout-buyer-information-btn"
                                style="display: none;" title="Thay đổi">
                                <i class="adr-icon icon-edit-circle"></i>
                                <span class="hidden-xs hidden-sm">Thay đổi</span>
                            </a>
                        </h2>
                        <div class="checkout-block clearfix">
                            <div class="checkout-buyer-information-header js-checkout-buyer-information-header">
                                <label class="adr-checkbox">
                                    <input id="paymmentSameShipping1" name="paymmentSameShipping" class="adr-checkbox-input" type="checkbox" value="true" checked="checked">
                                    <input type="hidden" name="_paymmentSameShipping" value="on">
                                    <div class="adr-checkbox-label">
                                        <span class="adr-checkbox-icon"></span>
                                        <div class="adr-checkbox-text">
                                            <p>Thông tin người mua hàng giống như trên</p>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="checkout-buyer-information-content js-checkout-buyer-information-content" data-hasno-buyeraddress="true" data-error=""
                                style="display: none; height: 12px; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
                                <div class="checkout-buyer-detail" style="display: none;">
                                    <p class="checkout-buyer-name-phone-info"></p>
                                    <p class="checkout-buyer-address-info"></p>
                                </div>
                                <div class="checkout-buyer-information-form" style="display: block;">
                                    <div class="col-xs-12 col-sm-12 col-md-10 col-md-push-1">
                                        <div class="form-horizontal">
                                            <div class="form-group ">
                                                <div class="row">
                                                    <label for="" class="col-sm-3">Họ và tên*</label>
                                                    <div class="col-sm-9">
                                                        <input id="buyerAddress.fullName" name="buyerAddress.fullName" class="form-control js-script-check" placeholder="Vui lòng nhập Họ và tên"
                                                            type="text" value="" maxlength="50">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="row">
                                                    <label for="" class="col-sm-3">Điện thoại*</label>
                                                    <div class="col-sm-9">
                                                        <input id="buyerAddress.phone" name="buyerAddress.phone" class="form-control" placeholder="Vui lòng nhập Điện thoại" type="text"
                                                            value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="row">
                                                    <label for="" class="col-sm-3">Email</label>
                                                    <div class="col-sm-9">
                                                        <input id="buyerAddress.email" name="buyerAddress.email" class="form-control" placeholder="Vui lòng nhập Email" type="text"
                                                            value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="row">
                                                    <label for="" class="col-sm-3">Tỉnh/Thành phố*</label>
                                                    <div class="col-sm-9">
                                                        <select id="buyerAddress.provinceIso" name="buyerAddress.provinceIso" class="checkout-address-city js-selectize  selectized"
                                                            placeholder="Chọn Tỉnh/Thành Phố" tabindex="-1" style="display: none;">
                                                            <option value="" selected="selected"></option>
                                                        </select>
                                                        <div class="selectize-control checkout-address-city js-selectize single">
                                                            <div class="selectize-input items not-full">
                                                                <input type="text" autocomplete="off" tabindex="" id="buyerAddress.provinceIso-selectized"
                                                                    placeholder="Chọn Tỉnh/Thành Phố" style="width: 132px;">
                                                            </div>
                                                            <div class="selectize-dropdown single checkout-address-city js-selectize"
                                                                style="display: none;">
                                                                <div class="selectize-dropdown-content">
                                                                    <div class="option active" data-selectable="" data-value="4">Hà Nội</div>
                                                                    <div class="option" data-selectable="" data-value="8">Hồ Chí Minh</div>
                                                                    <div class="option" data-selectable=""
                                                                        data-value="76">An Giang</div>
                                                                    <div class="option" data-selectable=""
                                                                        data-value="64">Bà Rịa – Vũng Tàu</div>
                                                                    <div class="option" data-selectable=""
                                                                        data-value="781">Bạc Liêu</div>
                                                                    <div class="option" data-selectable=""
                                                                        data-value="240">Bắc Giang</div>
                                                                    <div class="option" data-selectable=""
                                                                        data-value="281">Bắc Kạn</div>
                                                                    <div class="option" data-selectable="" data-value="241">Bắc Ninh</div>
                                                                    <div class="option" data-selectable=""
                                                                        data-value="750">Bến Tre</div>
                                                                    <div class="option" data-selectable="" data-value="650">Bình Dương</div>
                                                                    <div class="option" data-selectable=""
                                                                        data-value="56">Bình Định</div>
                                                                    <div class="option" data-selectable=""
                                                                        data-value="651">Bình Phước</div>
                                                                    <div class="option" data-selectable=""
                                                                        data-value="62">Bình Thuận</div>
                                                                    <div class="option" data-selectable=""
                                                                        data-value="26">Cao Bằng</div>
                                                                    <div class="option" data-selectable=""
                                                                        data-value="780">Cà Mau</div>
                                                                    <div class="option" data-selectable="" data-value="710">Cần Thơ</div>
                                                                    <div class="option" data-selectable="" data-value="511">Đà Nẵng</div>
                                                                    <div class="option" data-selectable="" data-value="500">Đắk Lắk</div>
                                                                    <div class="option" data-selectable="" data-value="501">Đắk Nông</div>
                                                                    <div class="option" data-selectable=""
                                                                        data-value="230">Điện Biên</div>
                                                                    <div class="option" data-selectable=""
                                                                        data-value="61">Đồng Nai</div>
                                                                    <div class="option" data-selectable=""
                                                                        data-value="67">Đồng Tháp</div>
                                                                    <div class="option" data-selectable=""
                                                                        data-value="59">Gia Lai</div>
                                                                    <div class="option" data-selectable="" data-value="219">Hà Giang</div>
                                                                    <div class="option" data-selectable=""
                                                                        data-value="351">Hà Nam</div>
                                                                    <div class="option" data-selectable="" data-value="39">Hà Tĩnh</div>
                                                                    <div class="option" data-selectable="" data-value="320">Hải Dương</div>
                                                                    <div class="option" data-selectable=""
                                                                        data-value="31">Hải Phòng</div>
                                                                    <div class="option" data-selectable=""
                                                                        data-value="711">Hậu Giang</div>
                                                                    <div class="option" data-selectable=""
                                                                        data-value="218">Hòa Bình</div>
                                                                    <div class="option" data-selectable=""
                                                                        data-value="321">Hưng Yên</div>
                                                                    <div class="option" data-selectable=""
                                                                        data-value="58">Khánh Hòa</div>
                                                                    <div class="option" data-selectable=""
                                                                        data-value="77">Kiên Giang</div>
                                                                    <div class="option" data-selectable=""
                                                                        data-value="60">Kon Tum</div>
                                                                    <div class="option" data-selectable="" data-value="231">Lai Châu</div>
                                                                    <div class="option" data-selectable=""
                                                                        data-value="20">Lào Cai</div>
                                                                    <div class="option" data-selectable="" data-value="25">Lạng Sơn</div>
                                                                    <div class="option" data-selectable=""
                                                                        data-value="63">Lâm Đồng</div>
                                                                    <div class="option" data-selectable=""
                                                                        data-value="72">Long An</div>
                                                                    <div class="option" data-selectable="" data-value="350">Nam Định</div>
                                                                    <div class="option" data-selectable=""
                                                                        data-value="38">Nghệ An</div>
                                                                    <div class="option" data-selectable="" data-value="30">Ninh Bình</div>
                                                                    <div class="option" data-selectable=""
                                                                        data-value="68">Ninh Thuận</div>
                                                                    <div class="option" data-selectable=""
                                                                        data-value="210">Phú Thọ</div>
                                                                    <div class="option" data-selectable="" data-value="57">Phú Yên</div>
                                                                    <div class="option" data-selectable="" data-value="52">Quảng Bình</div>
                                                                    <div class="option" data-selectable=""
                                                                        data-value="510">Quảng Nam</div>
                                                                    <div class="option" data-selectable=""
                                                                        data-value="55">Quảng Ngãi</div>
                                                                    <div class="option" data-selectable=""
                                                                        data-value="33">Quảng Ninh</div>
                                                                    <div class="option" data-selectable=""
                                                                        data-value="53">Quảng Trị</div>
                                                                    <div class="option" data-selectable=""
                                                                        data-value="79">Sóc Trăng</div>
                                                                    <div class="option" data-selectable=""
                                                                        data-value="22">Sơn La</div>
                                                                    <div class="option" data-selectable="" data-value="66">Tây Ninh</div>
                                                                    <div class="option" data-selectable=""
                                                                        data-value="37">Thanh Hóa</div>
                                                                    <div class="option" data-selectable=""
                                                                        data-value="36">Thái Bình</div>
                                                                    <div class="option" data-selectable=""
                                                                        data-value="280">Thái Nguyên</div>
                                                                    <div class="option" data-selectable=""
                                                                        data-value="54">Thừa Thiên Huế</div>
                                                                    <div class="option" data-selectable=""
                                                                        data-value="73">Tiền Giang</div>
                                                                    <div class="option" data-selectable=""
                                                                        data-value="74">Trà Vinh</div>
                                                                    <div class="option" data-selectable=""
                                                                        data-value="27">Tuyên Quang</div>
                                                                    <div class="option" data-selectable=""
                                                                        data-value="70">Vĩnh Long</div>
                                                                    <div class="option" data-selectable=""
                                                                        data-value="211">Vĩnh Phúc</div>
                                                                    <div class="option" data-selectable=""
                                                                        data-value="29">Yên Bái</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="row">
                                                    <label for="" class="col-sm-3" data-current="">Quận/ Huyện*</label>
                                                    <div class="col-sm-9">
                                                        <select id="buyerAddress.districtIso" name="buyerAddress.districtIso" class="checkout-address-district  js-selectize  selectized"
                                                            placeholder="Chọn Quận/ Huyện" tabindex="-1" style="display: none;"
                                                            disabled="">
                                                            <option value="" selected="selected"></option>
                                                        </select>
                                                        <div class="selectize-control checkout-address-district js-selectize single">
                                                            <div class="selectize-input items not-full disabled locked">
                                                                <input type="text" autocomplete="off" tabindex="-1" id="buyerAddress.districtIso-selectized"
                                                                    placeholder="Chọn Quận/ Huyện" style="width: 114px;" disabled="">
                                                            </div>
                                                            <div class="selectize-dropdown single checkout-address-district js-selectize"
                                                                style="display: none;">
                                                                <div class="selectize-dropdown-content"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="row">
                                                    <label for="" class="col-sm-3">Phường/Xã*</label>
                                                    <div class="col-sm-9">
                                                        <select id="buyerAddress.wardIso" name="buyerAddress.wardIso" class="checkout-address-ward  js-selectize  selectized" placeholder="Chọn Phường/Xã /Thị Trấn"
                                                            tabindex="-1" style="display: none;" disabled="">
                                                            <option value="" selected="selected"></option>
                                                        </select>
                                                        <div class="selectize-control checkout-address-ward js-selectize single">
                                                            <div class="selectize-input items not-full disabled locked">
                                                                <input type="text" autocomplete="off" tabindex="-1" id="buyerAddress.wardIso-selectized"
                                                                    placeholder="Chọn Phường/Xã /Thị Trấn" style="width: 160px;"
                                                                    disabled="">
                                                            </div>
                                                            <div class="selectize-dropdown single checkout-address-ward js-selectize"
                                                                style="display: none;">
                                                                <div class="selectize-dropdown-content"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="row">
                                                    <label for="" class="col-sm-3">Địa chỉ chi tiết*</label>
                                                    <div class="col-sm-9">
                                                        <input id="buyerAddress.detailedAddress" name="buyerAddress.detailedAddress" class="form-control" placeholder="Vui lòng nhập Địa chỉ chi tiết"
                                                            type="text" value="" maxlength="255">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <!-- <span class="help-block">* Lưu ý: Giá trị hoá đơn không bao
            gồm giá trị giảm giá và số điểm VinID đã sử dụng để thanh toán</span> -->
                                            </div>


                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="deliveryInformation">
                            <h2 class="checkout-title">Thời gian giao hàng dự kiến</h2>
                            <div class="checkout-block">
                                <div class="checkout-delivery-time">
                                    <!--  Start Region Fee -->
                                    <div class="checkout-delivery__order">
                                        <h3 class="checkout-delivery__order-title">
                                            <i class="adr-icon icon-car-2"></i>
                                            Giao hàng cùng miền</h3>
                                        <div class="checkout-delivery__order-content">
                                            <ul class="checkout-delivery__tax list-unstyled">
                                            </ul>
                                            <div class="checkout-delivery__list">
                                                <div class="checkout-delivery__item" id="1-WH3315-4-8053222210">
                                                    <div class="checkout-delivery__item-title">
                                                        <span class="checkout-delivery__item-index">Giao lần 1:</span>
                                                        <span class="checkout-delivery__item-time hidden-xs hidden-sm">
                                                            Giao trước 12:00 ngày 12/05/2018</span>

                                                        <a href="#" id="delivery-calendar" class="checkout-delivery__shipping-item-btn js-delivery-calendar">
                                                            <span class="hidden-xs hidden-sm">
                                                                <i class="adr-icon icon-edit-circle"></i>
                                                                Chọn giờ giao hàng</span>
                                                            <span class="checkout-delivery__item-time visible-xs visible-sm">
                                                                Giao trước 12:00 ngày 12/05/2018
                                                                <span class="caret"></span>
                                                            </span>
                                                        </a>
                                                    </div>

                                                    <div class="checkout-delivery__item-content">

                                                        <ul class="list-unstyled">
                                                            <li>Nước hoa hồng Evoluderm Lotion Tonique 250ml</li>
                                                        </ul>

                                                        <!-- Check if PO has express delivery option -->
                                                        <!-- End Check if PO has express delivery option -->
                                                    </div>
                                                    <div class="cleafix"></div>
                                                    <!-- ------ -->
                                                    <div class="checkout-delivery__item-calendar clearfix" style="display: none;">
                                                        <div class="checkout-delivery__item-calendar__wrapper">
                                                            <div class="checkout-delivery__item-calendar__table">
                                                                <div class="checkout-delivery__item-calendar__table-header">
                                                                    <div class="checkout-delivery__item-calendar__table-row">
                                                                        <div class="checkout-delivery__item-calendar__table-cell time-label">Giờ giao hàng</div>
                                                                        <div class="checkout-delivery__item-calendar__table-cell js-header-date selected" id="12052018" data-delivery-day="Sat May 12 00:00:00 ICT 2018">
                                                                            <div class="hidden-xs">Thứ bảy</div>
                                                                            <div class="visible-xs">Th 7</div>
                                                                            <span class="date">12/05</span>
                                                                        </div>
                                                                        <div class="checkout-delivery__item-calendar__table-cell js-header-date " id="13052018" data-delivery-day="Sun May 13 00:00:00 ICT 2018">
                                                                            <div class="hidden-xs">Chủ nhật</div>
                                                                            <div class="visible-xs">CN</div>
                                                                            <span class="date">13/05</span>
                                                                        </div>
                                                                        <div class="checkout-delivery__item-calendar__table-cell js-header-date " id="14052018" data-delivery-day="Mon May 14 00:00:00 ICT 2018">
                                                                            <div class="hidden-xs">Thứ hai</div>
                                                                            <div class="visible-xs">Th 2</div>
                                                                            <span class="date">14/05</span>
                                                                        </div>
                                                                        <div class="checkout-delivery__item-calendar__table-cell js-header-date " id="15052018" data-delivery-day="Tue May 15 00:00:00 ICT 2018">
                                                                            <div class="hidden-xs">Thứ ba</div>
                                                                            <div class="visible-xs">Th 3</div>
                                                                            <span class="date">15/05</span>
                                                                        </div>
                                                                        <div class="checkout-delivery__item-calendar__table-cell js-header-date " id="16052018" data-delivery-day="Wed May 16 00:00:00 ICT 2018">
                                                                            <div class="hidden-xs">Thứ tư</div>
                                                                            <div class="visible-xs">Th 4</div>
                                                                            <span class="date">16/05</span>
                                                                        </div>
                                                                        <div class="checkout-delivery__item-calendar__table-cell js-header-date " id="17052018" data-delivery-day="Thu May 17 00:00:00 ICT 2018">
                                                                            <div class="hidden-xs">Thứ năm</div>
                                                                            <div class="visible-xs">Th 5</div>
                                                                            <span class="date">17/05</span>
                                                                        </div>
                                                                        <div class="checkout-delivery__item-calendar__table-cell js-header-date " id="18052018" data-delivery-day="Fri May 18 00:00:00 ICT 2018">
                                                                            <div class="hidden-xs">Thứ sáu</div>
                                                                            <div class="visible-xs">Th 6</div>
                                                                            <span class="date">18/05</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="checkout-delivery__item-calendar__table-body">
                                                                    <div class="checkout-delivery__item-calendar__table-row ">
                                                                        <div class="checkout-delivery__item-calendar__table-cell time">
                                                                            08:00 - 10:00</div>
                                                                        <div id="1-WH3315-4-8053222210-12052018-08001000" class="checkout-delivery__item-calendar__table-cell disabled" data-toggle="popover"
                                                                            data-html="true" data-placement="top" data-trigger="hover"
                                                                            data-content="Adayroi không giao hàng vào khung giờ này"
                                                                            data-delivery-day="12/05/2018" data-delivery-from-hour="08:00"
                                                                            data-delivery-to-hour="10:00" data-original-title=""
                                                                            title=""></div>
                                                                        <div id="1-WH3315-4-8053222210-13052018-08001000" class="checkout-delivery__item-calendar__table-cell disabled" data-toggle="popover"
                                                                            data-html="true" data-placement="top" data-trigger="hover"
                                                                            data-content="Adayroi không giao hàng vào khung giờ này"
                                                                            data-delivery-day="13/05/2018" data-delivery-from-hour="08:00"
                                                                            data-delivery-to-hour="10:00" data-original-title=""
                                                                            title=""></div>
                                                                        <div id="1-WH3315-4-8053222210-14052018-08001000" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 08:00&nbsp;-&amp;nbsp10:00 ngày 14/05/2018"
                                                                            data-shipment-id="1-WH3315-4-8053222210" data-delivery-day="14/05/2018"
                                                                            data-delivery-from-hour="08:00" data-delivery-to-hour="10:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH3315-4-8053222210-15052018-08001000" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 08:00&nbsp;-&amp;nbsp10:00 ngày 15/05/2018"
                                                                            data-shipment-id="1-WH3315-4-8053222210" data-delivery-day="15/05/2018"
                                                                            data-delivery-from-hour="08:00" data-delivery-to-hour="10:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH3315-4-8053222210-16052018-08001000" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 08:00&nbsp;-&amp;nbsp10:00 ngày 16/05/2018"
                                                                            data-shipment-id="1-WH3315-4-8053222210" data-delivery-day="16/05/2018"
                                                                            data-delivery-from-hour="08:00" data-delivery-to-hour="10:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH3315-4-8053222210-17052018-08001000" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 08:00&nbsp;-&amp;nbsp10:00 ngày 17/05/2018"
                                                                            data-shipment-id="1-WH3315-4-8053222210" data-delivery-day="17/05/2018"
                                                                            data-delivery-from-hour="08:00" data-delivery-to-hour="10:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH3315-4-8053222210-18052018-08001000" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 08:00&nbsp;-&amp;nbsp10:00 ngày 18/05/2018"
                                                                            data-shipment-id="1-WH3315-4-8053222210" data-delivery-day="18/05/2018"
                                                                            data-delivery-from-hour="08:00" data-delivery-to-hour="10:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="checkout-delivery__item-calendar__table-row ">
                                                                        <div class="checkout-delivery__item-calendar__table-cell time">
                                                                            10:00 - 12:00</div>
                                                                        <div id="1-WH3315-4-8053222210-12052018-10001200" class="checkout-delivery__item-calendar__table-cell disabled" data-toggle="popover"
                                                                            data-html="true" data-placement="top" data-trigger="hover"
                                                                            data-content="Adayroi không giao hàng vào khung giờ này"
                                                                            data-delivery-day="12/05/2018" data-delivery-from-hour="10:00"
                                                                            data-delivery-to-hour="12:00" data-original-title=""
                                                                            title=""></div>
                                                                        <div id="1-WH3315-4-8053222210-13052018-10001200" class="checkout-delivery__item-calendar__table-cell disabled" data-toggle="popover"
                                                                            data-html="true" data-placement="top" data-trigger="hover"
                                                                            data-content="Adayroi không giao hàng vào khung giờ này"
                                                                            data-delivery-day="13/05/2018" data-delivery-from-hour="10:00"
                                                                            data-delivery-to-hour="12:00" data-original-title=""
                                                                            title=""></div>
                                                                        <div id="1-WH3315-4-8053222210-14052018-10001200" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 10:00&nbsp;-&amp;nbsp12:00 ngày 14/05/2018"
                                                                            data-shipment-id="1-WH3315-4-8053222210" data-delivery-day="14/05/2018"
                                                                            data-delivery-from-hour="10:00" data-delivery-to-hour="12:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH3315-4-8053222210-15052018-10001200" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 10:00&nbsp;-&amp;nbsp12:00 ngày 15/05/2018"
                                                                            data-shipment-id="1-WH3315-4-8053222210" data-delivery-day="15/05/2018"
                                                                            data-delivery-from-hour="10:00" data-delivery-to-hour="12:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH3315-4-8053222210-16052018-10001200" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 10:00&nbsp;-&amp;nbsp12:00 ngày 16/05/2018"
                                                                            data-shipment-id="1-WH3315-4-8053222210" data-delivery-day="16/05/2018"
                                                                            data-delivery-from-hour="10:00" data-delivery-to-hour="12:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH3315-4-8053222210-17052018-10001200" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 10:00&nbsp;-&amp;nbsp12:00 ngày 17/05/2018"
                                                                            data-shipment-id="1-WH3315-4-8053222210" data-delivery-day="17/05/2018"
                                                                            data-delivery-from-hour="10:00" data-delivery-to-hour="12:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH3315-4-8053222210-18052018-10001200" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 10:00&nbsp;-&amp;nbsp12:00 ngày 18/05/2018"
                                                                            data-shipment-id="1-WH3315-4-8053222210" data-delivery-day="18/05/2018"
                                                                            data-delivery-from-hour="10:00" data-delivery-to-hour="12:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="checkout-delivery__item-calendar__table-row ">
                                                                        <div class="checkout-delivery__item-calendar__table-cell time">
                                                                            12:00 - 14:00</div>
                                                                        <div id="1-WH3315-4-8053222210-12052018-12001400" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 12:00&nbsp;-&amp;nbsp14:00 ngày 12/05/2018"
                                                                            data-shipment-id="1-WH3315-4-8053222210" data-delivery-day="12/05/2018"
                                                                            data-delivery-from-hour="12:00" data-delivery-to-hour="14:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH3315-4-8053222210-13052018-12001400" class="checkout-delivery__item-calendar__table-cell disabled" data-toggle="popover"
                                                                            data-html="true" data-placement="top" data-trigger="hover"
                                                                            data-content="Adayroi không giao hàng vào khung giờ này"
                                                                            data-delivery-day="13/05/2018" data-delivery-from-hour="12:00"
                                                                            data-delivery-to-hour="14:00" data-original-title=""
                                                                            title=""></div>
                                                                        <div id="1-WH3315-4-8053222210-14052018-12001400" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 12:00&nbsp;-&amp;nbsp14:00 ngày 14/05/2018"
                                                                            data-shipment-id="1-WH3315-4-8053222210" data-delivery-day="14/05/2018"
                                                                            data-delivery-from-hour="12:00" data-delivery-to-hour="14:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH3315-4-8053222210-15052018-12001400" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 12:00&nbsp;-&amp;nbsp14:00 ngày 15/05/2018"
                                                                            data-shipment-id="1-WH3315-4-8053222210" data-delivery-day="15/05/2018"
                                                                            data-delivery-from-hour="12:00" data-delivery-to-hour="14:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH3315-4-8053222210-16052018-12001400" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 12:00&nbsp;-&amp;nbsp14:00 ngày 16/05/2018"
                                                                            data-shipment-id="1-WH3315-4-8053222210" data-delivery-day="16/05/2018"
                                                                            data-delivery-from-hour="12:00" data-delivery-to-hour="14:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH3315-4-8053222210-17052018-12001400" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 12:00&nbsp;-&amp;nbsp14:00 ngày 17/05/2018"
                                                                            data-shipment-id="1-WH3315-4-8053222210" data-delivery-day="17/05/2018"
                                                                            data-delivery-from-hour="12:00" data-delivery-to-hour="14:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH3315-4-8053222210-18052018-12001400" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 12:00&nbsp;-&amp;nbsp14:00 ngày 18/05/2018"
                                                                            data-shipment-id="1-WH3315-4-8053222210" data-delivery-day="18/05/2018"
                                                                            data-delivery-from-hour="12:00" data-delivery-to-hour="14:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="checkout-delivery__item-calendar__table-row ">
                                                                        <div class="checkout-delivery__item-calendar__table-cell time">
                                                                            14:00 - 16:00</div>
                                                                        <div id="1-WH3315-4-8053222210-12052018-14001600" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 14:00&nbsp;-&amp;nbsp16:00 ngày 12/05/2018"
                                                                            data-shipment-id="1-WH3315-4-8053222210" data-delivery-day="12/05/2018"
                                                                            data-delivery-from-hour="14:00" data-delivery-to-hour="16:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH3315-4-8053222210-13052018-14001600" class="checkout-delivery__item-calendar__table-cell disabled" data-toggle="popover"
                                                                            data-html="true" data-placement="top" data-trigger="hover"
                                                                            data-content="Adayroi không giao hàng vào khung giờ này"
                                                                            data-delivery-day="13/05/2018" data-delivery-from-hour="14:00"
                                                                            data-delivery-to-hour="16:00" data-original-title=""
                                                                            title=""></div>
                                                                        <div id="1-WH3315-4-8053222210-14052018-14001600" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 14:00&nbsp;-&amp;nbsp16:00 ngày 14/05/2018"
                                                                            data-shipment-id="1-WH3315-4-8053222210" data-delivery-day="14/05/2018"
                                                                            data-delivery-from-hour="14:00" data-delivery-to-hour="16:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH3315-4-8053222210-15052018-14001600" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 14:00&nbsp;-&amp;nbsp16:00 ngày 15/05/2018"
                                                                            data-shipment-id="1-WH3315-4-8053222210" data-delivery-day="15/05/2018"
                                                                            data-delivery-from-hour="14:00" data-delivery-to-hour="16:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH3315-4-8053222210-16052018-14001600" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 14:00&nbsp;-&amp;nbsp16:00 ngày 16/05/2018"
                                                                            data-shipment-id="1-WH3315-4-8053222210" data-delivery-day="16/05/2018"
                                                                            data-delivery-from-hour="14:00" data-delivery-to-hour="16:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH3315-4-8053222210-17052018-14001600" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 14:00&nbsp;-&amp;nbsp16:00 ngày 17/05/2018"
                                                                            data-shipment-id="1-WH3315-4-8053222210" data-delivery-day="17/05/2018"
                                                                            data-delivery-from-hour="14:00" data-delivery-to-hour="16:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH3315-4-8053222210-18052018-14001600" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 14:00&nbsp;-&amp;nbsp16:00 ngày 18/05/2018"
                                                                            data-shipment-id="1-WH3315-4-8053222210" data-delivery-day="18/05/2018"
                                                                            data-delivery-from-hour="14:00" data-delivery-to-hour="16:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="checkout-delivery__item-calendar__table-row ">
                                                                        <div class="checkout-delivery__item-calendar__table-cell time">
                                                                            16:00 - 18:00</div>
                                                                        <div id="1-WH3315-4-8053222210-12052018-16001800" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 16:00&nbsp;-&amp;nbsp18:00 ngày 12/05/2018"
                                                                            data-shipment-id="1-WH3315-4-8053222210" data-delivery-day="12/05/2018"
                                                                            data-delivery-from-hour="16:00" data-delivery-to-hour="18:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH3315-4-8053222210-13052018-16001800" class="checkout-delivery__item-calendar__table-cell disabled" data-toggle="popover"
                                                                            data-html="true" data-placement="top" data-trigger="hover"
                                                                            data-content="Adayroi không giao hàng vào khung giờ này"
                                                                            data-delivery-day="13/05/2018" data-delivery-from-hour="16:00"
                                                                            data-delivery-to-hour="18:00" data-original-title=""
                                                                            title=""></div>
                                                                        <div id="1-WH3315-4-8053222210-14052018-16001800" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 16:00&nbsp;-&amp;nbsp18:00 ngày 14/05/2018"
                                                                            data-shipment-id="1-WH3315-4-8053222210" data-delivery-day="14/05/2018"
                                                                            data-delivery-from-hour="16:00" data-delivery-to-hour="18:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH3315-4-8053222210-15052018-16001800" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 16:00&nbsp;-&amp;nbsp18:00 ngày 15/05/2018"
                                                                            data-shipment-id="1-WH3315-4-8053222210" data-delivery-day="15/05/2018"
                                                                            data-delivery-from-hour="16:00" data-delivery-to-hour="18:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH3315-4-8053222210-16052018-16001800" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 16:00&nbsp;-&amp;nbsp18:00 ngày 16/05/2018"
                                                                            data-shipment-id="1-WH3315-4-8053222210" data-delivery-day="16/05/2018"
                                                                            data-delivery-from-hour="16:00" data-delivery-to-hour="18:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH3315-4-8053222210-17052018-16001800" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 16:00&nbsp;-&amp;nbsp18:00 ngày 17/05/2018"
                                                                            data-shipment-id="1-WH3315-4-8053222210" data-delivery-day="17/05/2018"
                                                                            data-delivery-from-hour="16:00" data-delivery-to-hour="18:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH3315-4-8053222210-18052018-16001800" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 16:00&nbsp;-&amp;nbsp18:00 ngày 18/05/2018"
                                                                            data-shipment-id="1-WH3315-4-8053222210" data-delivery-day="18/05/2018"
                                                                            data-delivery-from-hour="16:00" data-delivery-to-hour="18:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="checkout-delivery__item-calendar__table-row ">
                                                                        <div class="checkout-delivery__item-calendar__table-cell time">
                                                                            18:00 - 20:00</div>
                                                                        <div id="1-WH3315-4-8053222210-12052018-18002000" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 18:00&nbsp;-&amp;nbsp20:00 ngày 12/05/2018"
                                                                            data-shipment-id="1-WH3315-4-8053222210" data-delivery-day="12/05/2018"
                                                                            data-delivery-from-hour="18:00" data-delivery-to-hour="20:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH3315-4-8053222210-13052018-18002000" class="checkout-delivery__item-calendar__table-cell disabled" data-toggle="popover"
                                                                            data-html="true" data-placement="top" data-trigger="hover"
                                                                            data-content="Adayroi không giao hàng vào khung giờ này"
                                                                            data-delivery-day="13/05/2018" data-delivery-from-hour="18:00"
                                                                            data-delivery-to-hour="20:00" data-original-title=""
                                                                            title=""></div>
                                                                        <div id="1-WH3315-4-8053222210-14052018-18002000" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 18:00&nbsp;-&amp;nbsp20:00 ngày 14/05/2018"
                                                                            data-shipment-id="1-WH3315-4-8053222210" data-delivery-day="14/05/2018"
                                                                            data-delivery-from-hour="18:00" data-delivery-to-hour="20:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH3315-4-8053222210-15052018-18002000" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 18:00&nbsp;-&amp;nbsp20:00 ngày 15/05/2018"
                                                                            data-shipment-id="1-WH3315-4-8053222210" data-delivery-day="15/05/2018"
                                                                            data-delivery-from-hour="18:00" data-delivery-to-hour="20:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH3315-4-8053222210-16052018-18002000" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 18:00&nbsp;-&amp;nbsp20:00 ngày 16/05/2018"
                                                                            data-shipment-id="1-WH3315-4-8053222210" data-delivery-day="16/05/2018"
                                                                            data-delivery-from-hour="18:00" data-delivery-to-hour="20:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH3315-4-8053222210-17052018-18002000" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 18:00&nbsp;-&amp;nbsp20:00 ngày 17/05/2018"
                                                                            data-shipment-id="1-WH3315-4-8053222210" data-delivery-day="17/05/2018"
                                                                            data-delivery-from-hour="18:00" data-delivery-to-hour="20:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH3315-4-8053222210-18052018-18002000" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 18:00&nbsp;-&amp;nbsp20:00 ngày 18/05/2018"
                                                                            data-shipment-id="1-WH3315-4-8053222210" data-delivery-day="18/05/2018"
                                                                            data-delivery-from-hour="18:00" data-delivery-to-hour="20:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--  -->

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- End Region Fee -->
                                    <!--  Start Region Fee -->
                                    <div class="checkout-delivery__order">
                                        <h3 class="checkout-delivery__order-title">
                                            <i class="adr-icon icon-car-2"></i>
                                            Giao hàng trái miền</h3>
                                        <div class="checkout-delivery__order-content">
                                            <ul class="checkout-delivery__tax list-unstyled">
                                            </ul>
                                            <div class="checkout-delivery__list">
                                                <div class="checkout-delivery__item" id="1-WH59001-8-8053222210">
                                                    <div class="checkout-delivery__item-title">
                                                        <span class="checkout-delivery__item-index">Giao lần 2:</span>
                                                        <span class="checkout-delivery__item-time hidden-xs hidden-sm">
                                                            Giao trước 12:00 ngày 15/05/2018</span>

                                                        <a href="#" id="delivery-calendar" class="checkout-delivery__shipping-item-btn js-delivery-calendar">
                                                            <span class="hidden-xs hidden-sm">
                                                                <i class="adr-icon icon-edit-circle"></i>
                                                                Chọn giờ giao hàng</span>
                                                            <span class="checkout-delivery__item-time visible-xs visible-sm">
                                                                Giao trước 12:00 ngày 15/05/2018
                                                                <span class="caret"></span>
                                                            </span>
                                                        </a>
                                                    </div>

                                                    <div class="checkout-delivery__item-content">

                                                        <ul class="list-unstyled">
                                                            <li>Tinh dầu tràm trà Cây Tea Tree Essential Oil Premium 10ml</li>
                                                        </ul>

                                                        <!-- Check if PO has express delivery option -->
                                                        <!-- End Check if PO has express delivery option -->
                                                    </div>
                                                    <div class="cleafix"></div>
                                                    <!-- ------ -->
                                                    <div class="checkout-delivery__item-calendar clearfix" style="display: none;">
                                                        <div class="checkout-delivery__item-calendar__wrapper">
                                                            <div class="checkout-delivery__item-calendar__table">
                                                                <div class="checkout-delivery__item-calendar__table-header">
                                                                    <div class="checkout-delivery__item-calendar__table-row">
                                                                        <div class="checkout-delivery__item-calendar__table-cell time-label">Giờ giao hàng</div>
                                                                        <div class="checkout-delivery__item-calendar__table-cell js-header-date selected" id="15052018" data-delivery-day="Tue May 15 00:00:00 ICT 2018">
                                                                            <div class="hidden-xs">Thứ ba</div>
                                                                            <div class="visible-xs">Th 3</div>
                                                                            <span class="date">15/05</span>
                                                                        </div>
                                                                        <div class="checkout-delivery__item-calendar__table-cell js-header-date " id="16052018" data-delivery-day="Wed May 16 00:00:00 ICT 2018">
                                                                            <div class="hidden-xs">Thứ tư</div>
                                                                            <div class="visible-xs">Th 4</div>
                                                                            <span class="date">16/05</span>
                                                                        </div>
                                                                        <div class="checkout-delivery__item-calendar__table-cell js-header-date " id="17052018" data-delivery-day="Thu May 17 00:00:00 ICT 2018">
                                                                            <div class="hidden-xs">Thứ năm</div>
                                                                            <div class="visible-xs">Th 5</div>
                                                                            <span class="date">17/05</span>
                                                                        </div>
                                                                        <div class="checkout-delivery__item-calendar__table-cell js-header-date " id="18052018" data-delivery-day="Fri May 18 00:00:00 ICT 2018">
                                                                            <div class="hidden-xs">Thứ sáu</div>
                                                                            <div class="visible-xs">Th 6</div>
                                                                            <span class="date">18/05</span>
                                                                        </div>
                                                                        <div class="checkout-delivery__item-calendar__table-cell js-header-date " id="19052018" data-delivery-day="Sat May 19 00:00:00 ICT 2018">
                                                                            <div class="hidden-xs">Thứ bảy</div>
                                                                            <div class="visible-xs">Th 7</div>
                                                                            <span class="date">19/05</span>
                                                                        </div>
                                                                        <div class="checkout-delivery__item-calendar__table-cell js-header-date " id="20052018" data-delivery-day="Sun May 20 00:00:00 ICT 2018">
                                                                            <div class="hidden-xs">Chủ nhật</div>
                                                                            <div class="visible-xs">CN</div>
                                                                            <span class="date">20/05</span>
                                                                        </div>
                                                                        <div class="checkout-delivery__item-calendar__table-cell js-header-date " id="21052018" data-delivery-day="Mon May 21 00:00:00 ICT 2018">
                                                                            <div class="hidden-xs">Thứ hai</div>
                                                                            <div class="visible-xs">Th 2</div>
                                                                            <span class="date">21/05</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="checkout-delivery__item-calendar__table-body">
                                                                    <div class="checkout-delivery__item-calendar__table-row ">
                                                                        <div class="checkout-delivery__item-calendar__table-cell time">
                                                                            08:00 - 10:00</div>
                                                                        <div id="1-WH59001-8-8053222210-15052018-08001000" class="checkout-delivery__item-calendar__table-cell disabled" data-toggle="popover"
                                                                            data-html="true" data-placement="top" data-trigger="hover"
                                                                            data-content="Adayroi không giao hàng vào khung giờ này"
                                                                            data-delivery-day="15/05/2018" data-delivery-from-hour="08:00"
                                                                            data-delivery-to-hour="10:00" data-original-title=""
                                                                            title=""></div>
                                                                        <div id="1-WH59001-8-8053222210-16052018-08001000" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 08:00&nbsp;-&amp;nbsp10:00 ngày 16/05/2018"
                                                                            data-shipment-id="1-WH59001-8-8053222210" data-delivery-day="16/05/2018"
                                                                            data-delivery-from-hour="08:00" data-delivery-to-hour="10:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH59001-8-8053222210-17052018-08001000" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 08:00&nbsp;-&amp;nbsp10:00 ngày 17/05/2018"
                                                                            data-shipment-id="1-WH59001-8-8053222210" data-delivery-day="17/05/2018"
                                                                            data-delivery-from-hour="08:00" data-delivery-to-hour="10:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH59001-8-8053222210-18052018-08001000" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 08:00&nbsp;-&amp;nbsp10:00 ngày 18/05/2018"
                                                                            data-shipment-id="1-WH59001-8-8053222210" data-delivery-day="18/05/2018"
                                                                            data-delivery-from-hour="08:00" data-delivery-to-hour="10:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH59001-8-8053222210-19052018-08001000" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 08:00&nbsp;-&amp;nbsp10:00 ngày 19/05/2018"
                                                                            data-shipment-id="1-WH59001-8-8053222210" data-delivery-day="19/05/2018"
                                                                            data-delivery-from-hour="08:00" data-delivery-to-hour="10:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH59001-8-8053222210-20052018-08001000" class="checkout-delivery__item-calendar__table-cell disabled" data-toggle="popover"
                                                                            data-html="true" data-placement="top" data-trigger="hover"
                                                                            data-content="Adayroi không giao hàng vào khung giờ này"
                                                                            data-delivery-day="20/05/2018" data-delivery-from-hour="08:00"
                                                                            data-delivery-to-hour="10:00" data-original-title=""
                                                                            title=""></div>
                                                                        <div id="1-WH59001-8-8053222210-21052018-08001000" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 08:00&nbsp;-&amp;nbsp10:00 ngày 21/05/2018"
                                                                            data-shipment-id="1-WH59001-8-8053222210" data-delivery-day="21/05/2018"
                                                                            data-delivery-from-hour="08:00" data-delivery-to-hour="10:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="checkout-delivery__item-calendar__table-row ">
                                                                        <div class="checkout-delivery__item-calendar__table-cell time">
                                                                            10:00 - 12:00</div>
                                                                        <div id="1-WH59001-8-8053222210-15052018-10001200" class="checkout-delivery__item-calendar__table-cell disabled" data-toggle="popover"
                                                                            data-html="true" data-placement="top" data-trigger="hover"
                                                                            data-content="Adayroi không giao hàng vào khung giờ này"
                                                                            data-delivery-day="15/05/2018" data-delivery-from-hour="10:00"
                                                                            data-delivery-to-hour="12:00" data-original-title=""
                                                                            title=""></div>
                                                                        <div id="1-WH59001-8-8053222210-16052018-10001200" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 10:00&nbsp;-&amp;nbsp12:00 ngày 16/05/2018"
                                                                            data-shipment-id="1-WH59001-8-8053222210" data-delivery-day="16/05/2018"
                                                                            data-delivery-from-hour="10:00" data-delivery-to-hour="12:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH59001-8-8053222210-17052018-10001200" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 10:00&nbsp;-&amp;nbsp12:00 ngày 17/05/2018"
                                                                            data-shipment-id="1-WH59001-8-8053222210" data-delivery-day="17/05/2018"
                                                                            data-delivery-from-hour="10:00" data-delivery-to-hour="12:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH59001-8-8053222210-18052018-10001200" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 10:00&nbsp;-&amp;nbsp12:00 ngày 18/05/2018"
                                                                            data-shipment-id="1-WH59001-8-8053222210" data-delivery-day="18/05/2018"
                                                                            data-delivery-from-hour="10:00" data-delivery-to-hour="12:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH59001-8-8053222210-19052018-10001200" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 10:00&nbsp;-&amp;nbsp12:00 ngày 19/05/2018"
                                                                            data-shipment-id="1-WH59001-8-8053222210" data-delivery-day="19/05/2018"
                                                                            data-delivery-from-hour="10:00" data-delivery-to-hour="12:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH59001-8-8053222210-20052018-10001200" class="checkout-delivery__item-calendar__table-cell disabled" data-toggle="popover"
                                                                            data-html="true" data-placement="top" data-trigger="hover"
                                                                            data-content="Adayroi không giao hàng vào khung giờ này"
                                                                            data-delivery-day="20/05/2018" data-delivery-from-hour="10:00"
                                                                            data-delivery-to-hour="12:00" data-original-title=""
                                                                            title=""></div>
                                                                        <div id="1-WH59001-8-8053222210-21052018-10001200" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 10:00&nbsp;-&amp;nbsp12:00 ngày 21/05/2018"
                                                                            data-shipment-id="1-WH59001-8-8053222210" data-delivery-day="21/05/2018"
                                                                            data-delivery-from-hour="10:00" data-delivery-to-hour="12:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="checkout-delivery__item-calendar__table-row ">
                                                                        <div class="checkout-delivery__item-calendar__table-cell time">
                                                                            12:00 - 14:00</div>
                                                                        <div id="1-WH59001-8-8053222210-15052018-12001400" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 12:00&nbsp;-&amp;nbsp14:00 ngày 15/05/2018"
                                                                            data-shipment-id="1-WH59001-8-8053222210" data-delivery-day="15/05/2018"
                                                                            data-delivery-from-hour="12:00" data-delivery-to-hour="14:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH59001-8-8053222210-16052018-12001400" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 12:00&nbsp;-&amp;nbsp14:00 ngày 16/05/2018"
                                                                            data-shipment-id="1-WH59001-8-8053222210" data-delivery-day="16/05/2018"
                                                                            data-delivery-from-hour="12:00" data-delivery-to-hour="14:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH59001-8-8053222210-17052018-12001400" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 12:00&nbsp;-&amp;nbsp14:00 ngày 17/05/2018"
                                                                            data-shipment-id="1-WH59001-8-8053222210" data-delivery-day="17/05/2018"
                                                                            data-delivery-from-hour="12:00" data-delivery-to-hour="14:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH59001-8-8053222210-18052018-12001400" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 12:00&nbsp;-&amp;nbsp14:00 ngày 18/05/2018"
                                                                            data-shipment-id="1-WH59001-8-8053222210" data-delivery-day="18/05/2018"
                                                                            data-delivery-from-hour="12:00" data-delivery-to-hour="14:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH59001-8-8053222210-19052018-12001400" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 12:00&nbsp;-&amp;nbsp14:00 ngày 19/05/2018"
                                                                            data-shipment-id="1-WH59001-8-8053222210" data-delivery-day="19/05/2018"
                                                                            data-delivery-from-hour="12:00" data-delivery-to-hour="14:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH59001-8-8053222210-20052018-12001400" class="checkout-delivery__item-calendar__table-cell disabled" data-toggle="popover"
                                                                            data-html="true" data-placement="top" data-trigger="hover"
                                                                            data-content="Adayroi không giao hàng vào khung giờ này"
                                                                            data-delivery-day="20/05/2018" data-delivery-from-hour="12:00"
                                                                            data-delivery-to-hour="14:00" data-original-title=""
                                                                            title=""></div>
                                                                        <div id="1-WH59001-8-8053222210-21052018-12001400" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 12:00&nbsp;-&amp;nbsp14:00 ngày 21/05/2018"
                                                                            data-shipment-id="1-WH59001-8-8053222210" data-delivery-day="21/05/2018"
                                                                            data-delivery-from-hour="12:00" data-delivery-to-hour="14:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="checkout-delivery__item-calendar__table-row ">
                                                                        <div class="checkout-delivery__item-calendar__table-cell time">
                                                                            14:00 - 16:00</div>
                                                                        <div id="1-WH59001-8-8053222210-15052018-14001600" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 14:00&nbsp;-&amp;nbsp16:00 ngày 15/05/2018"
                                                                            data-shipment-id="1-WH59001-8-8053222210" data-delivery-day="15/05/2018"
                                                                            data-delivery-from-hour="14:00" data-delivery-to-hour="16:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH59001-8-8053222210-16052018-14001600" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 14:00&nbsp;-&amp;nbsp16:00 ngày 16/05/2018"
                                                                            data-shipment-id="1-WH59001-8-8053222210" data-delivery-day="16/05/2018"
                                                                            data-delivery-from-hour="14:00" data-delivery-to-hour="16:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH59001-8-8053222210-17052018-14001600" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 14:00&nbsp;-&amp;nbsp16:00 ngày 17/05/2018"
                                                                            data-shipment-id="1-WH59001-8-8053222210" data-delivery-day="17/05/2018"
                                                                            data-delivery-from-hour="14:00" data-delivery-to-hour="16:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH59001-8-8053222210-18052018-14001600" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 14:00&nbsp;-&amp;nbsp16:00 ngày 18/05/2018"
                                                                            data-shipment-id="1-WH59001-8-8053222210" data-delivery-day="18/05/2018"
                                                                            data-delivery-from-hour="14:00" data-delivery-to-hour="16:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH59001-8-8053222210-19052018-14001600" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 14:00&nbsp;-&amp;nbsp16:00 ngày 19/05/2018"
                                                                            data-shipment-id="1-WH59001-8-8053222210" data-delivery-day="19/05/2018"
                                                                            data-delivery-from-hour="14:00" data-delivery-to-hour="16:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH59001-8-8053222210-20052018-14001600" class="checkout-delivery__item-calendar__table-cell disabled" data-toggle="popover"
                                                                            data-html="true" data-placement="top" data-trigger="hover"
                                                                            data-content="Adayroi không giao hàng vào khung giờ này"
                                                                            data-delivery-day="20/05/2018" data-delivery-from-hour="14:00"
                                                                            data-delivery-to-hour="16:00" data-original-title=""
                                                                            title=""></div>
                                                                        <div id="1-WH59001-8-8053222210-21052018-14001600" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 14:00&nbsp;-&amp;nbsp16:00 ngày 21/05/2018"
                                                                            data-shipment-id="1-WH59001-8-8053222210" data-delivery-day="21/05/2018"
                                                                            data-delivery-from-hour="14:00" data-delivery-to-hour="16:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="checkout-delivery__item-calendar__table-row ">
                                                                        <div class="checkout-delivery__item-calendar__table-cell time">
                                                                            16:00 - 18:00</div>
                                                                        <div id="1-WH59001-8-8053222210-15052018-16001800" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 16:00&nbsp;-&amp;nbsp18:00 ngày 15/05/2018"
                                                                            data-shipment-id="1-WH59001-8-8053222210" data-delivery-day="15/05/2018"
                                                                            data-delivery-from-hour="16:00" data-delivery-to-hour="18:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH59001-8-8053222210-16052018-16001800" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 16:00&nbsp;-&amp;nbsp18:00 ngày 16/05/2018"
                                                                            data-shipment-id="1-WH59001-8-8053222210" data-delivery-day="16/05/2018"
                                                                            data-delivery-from-hour="16:00" data-delivery-to-hour="18:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH59001-8-8053222210-17052018-16001800" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 16:00&nbsp;-&amp;nbsp18:00 ngày 17/05/2018"
                                                                            data-shipment-id="1-WH59001-8-8053222210" data-delivery-day="17/05/2018"
                                                                            data-delivery-from-hour="16:00" data-delivery-to-hour="18:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH59001-8-8053222210-18052018-16001800" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 16:00&nbsp;-&amp;nbsp18:00 ngày 18/05/2018"
                                                                            data-shipment-id="1-WH59001-8-8053222210" data-delivery-day="18/05/2018"
                                                                            data-delivery-from-hour="16:00" data-delivery-to-hour="18:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH59001-8-8053222210-19052018-16001800" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 16:00&nbsp;-&amp;nbsp18:00 ngày 19/05/2018"
                                                                            data-shipment-id="1-WH59001-8-8053222210" data-delivery-day="19/05/2018"
                                                                            data-delivery-from-hour="16:00" data-delivery-to-hour="18:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH59001-8-8053222210-20052018-16001800" class="checkout-delivery__item-calendar__table-cell disabled" data-toggle="popover"
                                                                            data-html="true" data-placement="top" data-trigger="hover"
                                                                            data-content="Adayroi không giao hàng vào khung giờ này"
                                                                            data-delivery-day="20/05/2018" data-delivery-from-hour="16:00"
                                                                            data-delivery-to-hour="18:00" data-original-title=""
                                                                            title=""></div>
                                                                        <div id="1-WH59001-8-8053222210-21052018-16001800" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 16:00&nbsp;-&amp;nbsp18:00 ngày 21/05/2018"
                                                                            data-shipment-id="1-WH59001-8-8053222210" data-delivery-day="21/05/2018"
                                                                            data-delivery-from-hour="16:00" data-delivery-to-hour="18:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="checkout-delivery__item-calendar__table-row ">
                                                                        <div class="checkout-delivery__item-calendar__table-cell time">
                                                                            18:00 - 20:00</div>
                                                                        <div id="1-WH59001-8-8053222210-15052018-18002000" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 18:00&nbsp;-&amp;nbsp20:00 ngày 15/05/2018"
                                                                            data-shipment-id="1-WH59001-8-8053222210" data-delivery-day="15/05/2018"
                                                                            data-delivery-from-hour="18:00" data-delivery-to-hour="20:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH59001-8-8053222210-16052018-18002000" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 18:00&nbsp;-&amp;nbsp20:00 ngày 16/05/2018"
                                                                            data-shipment-id="1-WH59001-8-8053222210" data-delivery-day="16/05/2018"
                                                                            data-delivery-from-hour="18:00" data-delivery-to-hour="20:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH59001-8-8053222210-17052018-18002000" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 18:00&nbsp;-&amp;nbsp20:00 ngày 17/05/2018"
                                                                            data-shipment-id="1-WH59001-8-8053222210" data-delivery-day="17/05/2018"
                                                                            data-delivery-from-hour="18:00" data-delivery-to-hour="20:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH59001-8-8053222210-18052018-18002000" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 18:00&nbsp;-&amp;nbsp20:00 ngày 18/05/2018"
                                                                            data-shipment-id="1-WH59001-8-8053222210" data-delivery-day="18/05/2018"
                                                                            data-delivery-from-hour="18:00" data-delivery-to-hour="20:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH59001-8-8053222210-19052018-18002000" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 18:00&nbsp;-&amp;nbsp20:00 ngày 19/05/2018"
                                                                            data-shipment-id="1-WH59001-8-8053222210" data-delivery-day="19/05/2018"
                                                                            data-delivery-from-hour="18:00" data-delivery-to-hour="20:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                        <div id="1-WH59001-8-8053222210-20052018-18002000" class="checkout-delivery__item-calendar__table-cell disabled" data-toggle="popover"
                                                                            data-html="true" data-placement="top" data-trigger="hover"
                                                                            data-content="Adayroi không giao hàng vào khung giờ này"
                                                                            data-delivery-day="20/05/2018" data-delivery-from-hour="18:00"
                                                                            data-delivery-to-hour="20:00" data-original-title=""
                                                                            title=""></div>
                                                                        <div id="1-WH59001-8-8053222210-21052018-18002000" class="checkout-delivery__item-calendar__table-cell js-delivery-time "
                                                                            data-toggle="popover" data-html="true" data-placement="top"
                                                                            data-trigger="hover" data-content="Từ 18:00&nbsp;-&amp;nbsp20:00 ngày 21/05/2018"
                                                                            data-shipment-id="1-WH59001-8-8053222210" data-delivery-day="21/05/2018"
                                                                            data-delivery-from-hour="18:00" data-delivery-to-hour="20:00"
                                                                            data-delivery-rush-hour="false" data-original-title=""
                                                                            title="">
                                                                            <i class="adr-icon icon-select-time-delivery"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--  -->

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- End Region Fee -->
                                </div>
                            </div>
                        </div>
                        <div class="checkout-block clearfix">
                            <div class="checkout-block__header">
                                <label class="adr-checkbox js-checkout-block js-export-vat-checkbox">
                                    <input type="checkbox" class="adr-checkbox-input" id="vat-adr-checkbox-input" name="vatInfoApplied">
                                    <span class="adr-checkbox-label">
                                        <span class="adr-checkbox-icon"></span>
                                        <span class="adr-checkbox-text">
                                            Xuất hoá đơn GTGT cho đơn hàng </span>
                                    </span>
                                </label>
                                <input type="hidden" name="vatInfoMode" id="vatInfoMode" value="1">
                                <a href="#" class="checkout-vat-btn js-checkout-vat-btn" style="display: none">
                                    <i class="adr-icon icon-edit-circle" id="vat-adr-icon"></i>
                                    <span class="hidden-xs">Thay đổi</span>
                                </a>
                            </div>
                            <div class="checkout-block__body" id="vat_checkout-block__body">
                                <ul class="checkout-vat-info checkout-list-info list-unstyled">
                                    <li>
                                        <span class="checkout-list-info__label">Mã số thuế:</span>
                                        <span class="checkout-list-info__value"></span>
                                    </li>
                                    <li>
                                        <span class="checkout-list-info__label">Tên công ty:</span>
                                        <span class="checkout-list-info__value"></span>
                                    </li>
                                    <li>
                                        <span class="checkout-list-info__label">Địa chỉ công ty:</span>
                                        <span class="checkout-list-info__value"></span>
                                    </li>
                                </ul>
                                <div class="checkout-export-vat-form row">
                                    <div class="col-xs-12 col-sm-12 col-md-11">
                                        <!--<form action="" class="form-horizontal">-->
                                        <div class="form-group">
                                            <div class="row">
                                                <label for="" class="col-sm-3">Mã số thuế*</label>
                                                <div class="col-sm-9">
                                                    <input id="vatCompanyTaxCode" name="vatCompanyTaxCode" class="form-control" placeholder="Vui lòng nhập Mã số thuế" type="text"
                                                        value="" size="250" maxlength="250">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label for="" class="col-sm-3">Tên công ty*</label>
                                                <div class="col-sm-9">
                                                    <input id="vatCompanyName" name="vatCompanyName" class="form-control" placeholder="Vui lòng nhập Tên công ty" type="text"
                                                        value="" size="250" maxlength="250">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label for="" class="col-sm-3">Địa chỉ công ty*</label>
                                                <div class="col-sm-9">
                                                    <input id="vatAddress" name="vatAddress" class="form-control" placeholder="Vui lòng nhập Địa chỉ công ty" type="text" value=""
                                                        size="250" maxlength="250">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="adr-checkbox">
                                                <input type="checkbox" class="adr-checkbox-input" name="vatInfoSaved">
                                                <span class="adr-checkbox-label">
                                                    <span class="adr-checkbox-icon"></span>
                                                    <span class="adr-checkbox-text"> Lưu thông tin này cho lần đặt hàng sau</span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <span class="help-block">* Lưu ý: Giá trị hóa đơn không bao gồm giá trị giảm giá và số điểm VinID đã sử
                                                dụng để thanh toán.Thông tin Họ tên người mua hàng trên hóa đơn được lấy
                                                theo phần Thông tin người mua hàng.Mọi thông tin về việc xuất và gửi hóa
                                                đơn sẽ được Adayroi gửi tới địa chỉ email của người mua hàng</span>
                                        </div>
                                        <!--</form>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <input type="hidden" name="CSRFToken" value="b10ea2b0-bb8e-4f73-95dc-d3709868294d">
                        </div>
                    </form>
                    <div class="checkout-block checkout-submit hidden-xs">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col-md-7"></div>
                            <div class="col-xs-12 col-sm-8 col-md-5">
                                <button id="checkoutAddressSubmit" type="submit" class="btn btn-block btn-primary">Chọn hình thức thanh toán </button>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-7 col-md-offset-5 col-xs-12 text-right">
                                <div class="content">
                                    <p>Bằng việc ấn nút Thanh toán trên, Quý khách xác nhận đã kiểm tra kỹ đơn hàng với
                                        <a href="/dieu-kien-dieu-khoan-lptc1"
                                            target="_blank"> Điều khoản &amp; Điều kiện giao dịch</a> của Adayroi</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="col-xs-12 col-sm-5 col-md-4 checkout-sidebar">
                <script type="text/javascript">
                    function gtmOnCheckout(step, option) {
                        dataLayer.push({
                            "event": "checkout",
                            "ecommerce": {
                                "checkout": {
                                    "actionField": { "step": step, "option": option },
                                    "products": [{
                                        "id": "PRI669514_OH",
                                        "name": "Nước hoa hồng Evoluderm Lotion Tonique 250ml",
                                        "price": "135000",
                                        "brand": "Evoluderm",
                                        "category": "SỨC KHỎE & SẮC ĐẸP/Chăm sóc mặt/Chăm sóc da mặt/Nước hoa hồng",
                                        "variant": "",
                                        "quantity": "3"
                                    }
                                        ,
                                    {
                                        "id": "1342017_094175",
                                        "name": "Tinh dầu tràm trà Cây Tea Tree Essential Oil Premium 10ml",
                                        "price": "275000",
                                        "brand": "Cây",
                                        "category": "SỨC KHỎE & SẮC ĐẸP/Tinh dầu & Spa/Tinh dầu/Tinh dầu xông & thăng hương",
                                        "variant": "",
                                        "quantity": "1"
                                    }]
                                }
                            }
                        });
                    }
                </script>
                <div id="checkoutSummaryInformation1">
                    <h2 class="checkout-title">
                        <span class="visible-xs-inline">
                            <i class="adr-icon icon-black-cart"></i>
                        </span>
                        ĐƠN HÀNG
                        <span class="sidebar-checkout-title__quanity"> (4&nbsp;sản phẩm)</span>

                        <a href="#checkout-confirm-stop-flow" id="js-link-change-cart" data-toggle="modal" data-url="/cart" class="js-link-change-cart checkout-title-float-btn hidden-xs"
                            title="Thay đổi">
                            <i class="adr-icon icon-edit-circle"></i>
                            <span class="hidden-xs">Thay đổi</span>
                        </a>
                        <a href="#" class="checkout-title-menu-btn visible-xs js-toggle-panel" data-target="#right-sidebar-product__list">
                            <i class="adr-icon icon-view-menu-down"></i>
                        </a>
                    </h2>
                    <div class="checkout-block clearfix">
                        <ul class="sidebar-product__list" id="right-sidebar-product__list">
                            <div class="sidebar-product__item no-border visible-xs">
                                <a class="sidebar-product__item-change-btn js-link-change-cart" href="#checkout-confirm-stop-flow" data-toggle="modal" data-url="/cart">
                                    <i class="adr-icon icon-blue-back"></i> Thay đổi đơn hàng</a>
                            </div>
                            <div class="sidebar-product__item no-border">
                                <span class="sidebar-product__item-delivery-info">
                                    <span class="text-bold">Giao lần 1:</span>
                                    Giao trước 12:00 ngày 12/05/2018</span>
                            </div>
                            <div class="sidebar-product__item ">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="sidebar-product__item-thumb">
                                            <img class="img-responsive" data-product="PRI669514" src="https://media.static-adayroi.com/sys_master/h5e/h1f/11525469929502.jpg"
                                                alt="Nước hoa hồng Evoluderm Lotion Tonique 250ml">
                                            <!-- </a> -->
                                        </div>

                                    </div>
                                    <div class="col-xs-5">
                                        <div class="sidebar-product__item-info">
                                            <h1>Nước hoa hồng Evoluderm Lotion Tonique 250ml</h1>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="sidebar-product__item-order">
                                            <p class="sidebar-product__item-price">
                                                135.000đ</p>
                                            <p class="sidebar-product__item-quantity">x3</p>
                                            <p class="sidebar-product__item-total">
                                                405.000đ</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-product__item no-border">
                                <span class="sidebar-product__item-delivery-info">
                                    <span class="text-bold">Giao lần 2:</span>
                                    Giao trước 12:00 ngày 15/05/2018</span>
                            </div>
                            <div class="sidebar-product__item ">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="sidebar-product__item-thumb">
                                            <img class="img-responsive" data-product="1342017" src="https://media.static-adayroi.com/sys_master/images/h9d/h83/14565122572318.jpg"
                                                alt="Tinh dầu tràm trà Cây Tea Tree Essential Oil Premium 10ml">
                                            <!-- </a> -->
                                        </div>

                                    </div>
                                    <div class="col-xs-5">
                                        <div class="sidebar-product__item-info">
                                            <h1>Tinh dầu tràm trà Cây Tea Tree Essential Oil Premium 10ml</h1>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="sidebar-product__item-order">
                                            <p class="sidebar-product__item-price">
                                                275.000đ</p>
                                            <p class="sidebar-product__item-quantity">x1</p>
                                            <p class="sidebar-product__item-total">
                                                275.000đ</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </ul>












                        <div class="subtotals sidebar-product__order ">
                            <span class="iconLoad"></span>



                            <div class="sidebar-product-order__item">
                                <span class="sidebar-product-order__label">
                                    Tổng tiền sản phẩm
                                </span>
                                <span class="sidebar-product-order__value text-red">

                                    680.000đ

                                </span>
                            </div>



                            <div class="sidebar-product-order__item">
                                <span class="sidebar-product-order__label"> Tổng phí vận chuyển</span>
                                <span class="sidebar-product-order__value text-green">

                                    Miễn phí

                                </span>
                            </div>












                            <hr>






                            <div class="sidebar-product-order__item">
                                <span class="sidebar-product-order__label">
                                    Số tiền cần phải trả
                                </span>
                                <span id="js-checkout-cart-total-price" class="sidebar-product-order__value sidebar-product-order__total text-red">
                                    680.000đ
                                </span>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <div class="checkout-block checkout-submit visible-xs">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-7"></div>
                    <div class="col-xs-12 col-sm-8 col-md-5">
                        <button id="checkoutAddressSubmit" type="submit" class="btn btn-block btn-primary">Chọn hình thức thanh toán </button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 text-left">
                        <div class="content">
                            <p>Bằng việc ấn nút Thanh toán trên, Quý khách xác nhận đã kiểm tra kỹ đơn hàng với
                                <a href="/dieu-kien-dieu-khoan-lptc1"
                                    target="_blank"> Điều khoản &amp; Điều kiện giao dịch</a> của Adayroi</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection