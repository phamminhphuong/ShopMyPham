@extends('layout.index') @section('content')
<div class="container">
    <div class="row">
        <div class="content">
            <div class="page-help">
                <div class="col-sm-12 col-md-3 col-lg-2">
            
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-9 col-lg-10">
            <section class="section__content-help section__content-help-search">
                <div class="help-title-block">
                    <button class="help-menu-toggle visible-xs visible-sm" id="js-toggle-help-menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
                <div class="content" style="font-size:17px">
                    <div class="contact-content">
                        <div class="header">
                            <h2>THÔNG TIN HỖ TRỢ KHÁCH HÀNG</h2>
                        </div>
                        <div class="info">
                            <div class="item">
                            </div>
                            <div class="item">
                                <span class="item-icon">
                                        <i class="fas fa-map-marker"></i>
                                </span>
                                <div class="item-label">Địa chỉ hỗ trợ</div>
                                <div class="item-content">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <p>
                                                <b>Tại </b>
                                            </p>
                                            <p>Số 41 ngõ 66B Triều Khúc- Thanh Xuân - Hà Nội</p>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-content">
                                    <span>
                                        <b>Hỗ trợ Khách hàng</b>
                                    </span>
                                </div>
                                <div class="item-content">
                                    <div class="col-xs-12 col-sm-6">
                                        <ul class="item-contact list-unstyled">
                                            <li>
                                                <span class="item-icon">
                                                        <i class="fas fa-phone-volume"></i>
                                                </span>Hotline:
                                                <a href="#">
                                                    <b>0967442796</b>
                                                </a>
                                            </li>
                                        
                                            <li>
                                                <span class="item-icon">
                                                        <i class="fas fa-envelope-open"></i>
                                                </span> Email:
                                                <a href="#">huyenbaby596@gmail.com</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="address-item">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
               
            </section>
            <div id="map" style="width:500px;height:500px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2634.112457117356!2d105.79584266546966!3d20.98471636059353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acc6bdc7f95f%3A0x58ffc66343a45247!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgR2lhbyB0aMO0bmcgVuG6rW4gdOG6o2k!5e0!3m2!1svi!2s!4v1527750858336" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
        </div>
    </div>
</div>
<br>
<br>
@endsection