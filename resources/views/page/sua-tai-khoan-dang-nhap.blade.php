@extends('layout.index') @section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-3 col-lg-2">
           
        </div>
        <div class="col-sm-12 col-md-9 col-lg-10">
            <section class="section__content-profile">
                <div class="profile-title-block">
                    <h1 class="profile-title"> Thông tin tài khoản</h1>
                    <button class="profile-menu-toggle visible-xs visible-sm js-toggle-profile-menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
                @if(count($errors) >0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $er) {{$er}}
                    <br> @endforeach
                </div>
                @endif
                <div class="profile-content profile-detail">
                    <div class="panel panel-profile">
                        <div class="panel-body">
                            <form id="acc_profile_update_form" class="form-horizontal" action="sua-tai-khoan-dang-nhap" method="post">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <div class="form-group ">
                                            <label for="email-txt" class="col-sm-3 control-label">Email
                                                <span>*</span>
                                            </label>
                                            <div id="acc_profile_email_update" class="col-sm-6 col-lg-5">
                                                <input id="acc_profile_email_update_text" name="email" data-prev=""
                                                    class="form-control" readonly="readonly" type="text" value="{!!Auth::user()->email!!}">
                                                <span id="acc_email_error" class="help-block"></span>
                                            </div>
                                        </div>
                                <div class="form-group ">
                                    <label for="full-name-txt" class="col-sm-3 control-label"> PASSWORD
                                        <span>*</span>
                                    </label>
                                    <div class="col-sm-6 col-lg-5">
                                        <input id="full-name-txt" name="password" placeholder="Nhập password" class="form-control" type="password"
                                            value="">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="full-name-txt" class="col-sm-3 control-label"> NHẬP LẠI PASSWORD
                                        <span>*</span>
                                    </label>
                                    <div class="col-sm-6 col-lg-5">
                                        <input id="full-name-txt" name="Resetpassword" placeholder="Nhập password" class="form-control" type="password"
                                            value="">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-sm-push-3 col-sm-6">
                                        <button id="acc_profile_update_submit" type="submit" class="btn btn-positive"> Lưu thông tin</button>
                                    </div>
                                </div>
                               
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<br>
<br> @endsection