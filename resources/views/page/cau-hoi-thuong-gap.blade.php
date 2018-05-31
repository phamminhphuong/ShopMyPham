@extends('layout.index') @section('content')
<div class="container" style="margin-top:30px">
    <div class="row">
            <h3>Top những câu hỏi được khách hàng hỏi nhiều nhất</h3>
            <div class="col-smd-9">
                <section class="section__content-help section__content-help-search">
                    <div class="help-title-block">
                        <button class="help-menu-toggle visible-xs visible-sm" id="js-toggle-help-menu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                    <div class="content">
                        <div class="help-content">
                            <div class="panel panel-help">
                                <div class="panel-body">
                                    <div class="panel-group" id="help-accordion" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-help-faq">
                                            <div class="panel-heading" role="tab" id="help-faq-heading-collapse-0">
                                                <h4 class="panel-title">
                                                    <a name="001" role="button" data-toggle="collapse" data-parent="#help-accordion"
                                                        href="#help-faq-collapse-0" aria-expanded="true" aria-controls="help-faq-collapse-0"
                                                        class=""> Làm thế nào để đăng ký tài khoản trên Shop Mỹ Huyền? </a>
                                                </h4>
                                            </div>
                                            <div id="help-faq-collapse-0" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="help-faq-heading-collapse-0"
                                                style="">
                                                <div class="panel-body">
                                                    <span style="color: rgb(51, 51, 51); font-family: Roboto, sans-serif; text-align: justify;">Quý khách bấm nút&nbsp;</span>
                                                    <span class="text-red" style="box-sizing: border-box; font-family: Roboto, sans-serif; text-align: justify; color: rgb(214, 12, 12) !important;">"Đăng ký"</span>
                                                    <span style="color: rgb(51, 51, 51); font-family: Roboto, sans-serif; text-align: justify;">&nbsp;ở góc phải trên cùng màn hình, điền đủ các thông tin theo yêu cầu.</span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="panel panel-help-faq">
                                            <div class="panel-heading" role="tab" id="help-faq-heading-collapse-1">
                                                <h4 class="panel-title">
                                                    <a name="003" role="button" data-toggle="collapse" data-parent="#help-accordion"
                                                        href="#help-faq-collapse-2" aria-expanded="true" aria-controls="help-faq-collapse-2"
                                                        class="collapsed"> Làm thế nào để thay đổi thông tin trong tài khoản mua hàng của tôi? </a>
                                                </h4>
                                            </div>
                                            <div id="help-faq-collapse-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="help-faq-heading-collapse-2"
                                                style="height: 0px;">
                                                <div class="panel-body">
                                                    <span style="color: rgb(51, 51, 51); font-family: Roboto, sans-serif; text-align: justify;">Để thay đổi thông tin trong tài khoản mua hàng tại ADAYROI, Quý khách vui lòng
                                                        đăng nhập vào tài khoản của mình. Click vào nút tam giác cạnh tên tài khoản
                                                        của bạn, chọn »&nbsp;</span>
                                                    <span class="text-red" style="box-sizing: border-box; font-family: Roboto, sans-serif; text-align: justify; color: rgb(214, 12, 12) !important;">Quản lý tài khoản</span>
                                                    <span style="color: rgb(51, 51, 51); font-family: Roboto, sans-serif; text-align: justify;">&nbsp;» Nhập thông tin cần thay đổi&nbsp;»</span>
                                                    <span class="text-red" style="box-sizing: border-box; font-family: Roboto, sans-serif; text-align: justify; color: rgb(214, 12, 12) !important;">Thông tin cơ bản</span>
                                                    <span style="color: rgb(51, 51, 51); font-family: Roboto, sans-serif; text-align: justify;">&nbsp;» click&nbsp;</span>
                                                    <span class="text-red" style="box-sizing: border-box; font-family: Roboto, sans-serif; text-align: justify; color: rgb(214, 12, 12) !important;">chỉnh sửa</span>
                                                    <span style="color: rgb(51, 51, 51); font-family: Roboto, sans-serif; text-align: justify;">&nbsp;để chỉnh sửa thông tin cần thiết</span>.</div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
    </div>
</div>
<br>
<br> @endsection