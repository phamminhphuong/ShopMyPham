@extends('layout.index') @section('content')
<div class="container" style="padding-left:310px">
    <div class="modal-body step step-1" data-step="1" style="">
        <div class="modal-dialog" role="document">
            <div class="modal-content ui-ajax-block">
                <div class="modal-body popup-signup">
                    <div class="auth-wrapper">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active tab-1">
                                <span>
                                    Đăng ký tài khoản
                                </span>
                                @if(count($errors) >0)
                                <div style="margin:0px auto" class="alert alert-danger">
                                    @foreach($errors->all() as $er) {{$er}}
                                    <br> @endforeach
                                </div>
                                @endif @if(session('thongbao'))
                                <div class="alert alert-danger">
                                    {{session('thongbao')}}
                                    <br>
                                </div>
                                @endif
                            </li>
                        </ul>
                        <div class="auth-content">
                            <h3>
                                Đăng nhập</h3>
                            <div class="errorContainer"></div>
                            <form action="dangnhap" method="post" id="sign-up__popup_normal_register_form" role="form" autocomplete="off">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control clearText" placeholder="Vui lòng nhập Email">
                                    <p class="error-message"></p>
                                </div>
                                <div class="form-group">
                                    <label for="password">Mật khẩu</label>
                                    <input type="password" name="password" autocomplete="off" class="form-control js-normal-signup-password clearText" placeholder="Vui lòng nhập mật khẩu "
                                        aria-autocomplete="list">
                                    <p class="error-message"></p>
                                </div>
                                <div class="form-group">
                                    <p id="js-signup-normal-register-captcha-error" class="error-message"></p>
                                    <div id="js-signup-normal-register-captcha" class="form_field-elements control-group"></div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block js_button_normal_signup_continue">Đăng nhập </button>
                            </form>
                        </div>
                        <div style="text-align: right; padding: 10px 0;"><a href="dangky">Đăng ký tài khoản mới</a></div>
                    </div>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>

@endsection