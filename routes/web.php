<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('trangchu','PageController@getTrangChu');
Route::get('trangchu1','PageController@getTrangChu1');
Route::get('chitiet','PageController@chitietsanpham');

Route::get('dangky','PageController@dangky');
Route::get('giohang','PageController@giohang');
Route::get('xacnhan','PageController@xacnhan1');
// dang nhap
Route::get('dangnhap','Admin\TaikhoanController@getDangnhap');
Route::post('dangnhap','Admin\TaikhoanController@postDangnhap');
Route::get('dangxuat','Admin\TaikhoanController@getDangXuat');

//  trang admin'middleware'=>'admin_login'

Route::group(['prefix' => 'admin','middleware'=>'admin_login'], function() {
    // bang dieu khien
    Route::group(['prefix' => 'bangdieukhien'], function() {
        Route::get('index','Admin\BangdieukhienController@getBangdieukhien');
    });
    // Loai tai khoan
    Route::group(['prefix' => 'loaitaikhoan'], function() {
        Route::get('list','Admin\LoaitaikhoanController@getList');
        Route::get('add','Admin\LoaitaikhoanController@getAdd');
        Route::post('add','Admin\LoaitaikhoanController@postAdd');
        Route::get('edit/{id}','Admin\LoaitaikhoanController@getEdit');
        Route::post('edit/{id}','Admin\LoaitaikhoanController@postEdit');
        Route::get('delete/{id}','Admin\LoaitaikhoanController@getDelete');
        Route::get('detail/{id}','Admin\LoaitaikhoanController@getDetail');
    });
        // tai khoan
     Route::group(['prefix' => 'taikhoan'], function() {
        Route::get('list','Admin\TaikhoanController@getList');
         Route::get('add','Admin\TaikhoanController@getAdd');
         Route::post('add','Admin\TaikhoanController@postAdd');
         Route::get('edit/{id}','Admin\TaikhoanController@getEdit');
        Route::post('edit/{id}','Admin\TaikhoanController@postEdit');
        Route::get('delete/{id}','Admin\TaikhoanController@getDelete');
        Route::get('detail/{id}','Admin\TaikhoanController@getDetail');
    });
        // khach hang
     Route::group(['prefix' => 'khachhang'], function() {
        Route::get('list','Admin\KhachhangCotroller@getList');
         Route::get('add','Admin\KhachhangCotroller@getAdd');
         Route::post('add','Admin\KhachhangCotroller@postAdd');
         Route::get('edit/{id}','Admin\KhachhangCotroller@getEdit');
        Route::post('edit/{id}','Admin\KhachhangCotroller@postEdit');
        Route::get('delete/{id}','Admin\KhachhangCotroller@getDelete');
        Route::get('detail/{id}','Admin\KhachhangCotroller@getDetail');
    });
        // nha cung cap
     Route::group(['prefix' => 'nhacungcap'], function() {
        Route::get('list','Admin\NhacungcapController@getList');
         Route::get('add','Admin\NhacungcapController@getAdd');
         Route::post('add','Admin\NhacungcapController@postAdd');
         Route::get('edit/{id}','Admin\NhacungcapController@getEdit');
         Route::post('edit/{id}','Admin\NhacungcapController@postEdit');
        Route::get('delete/{id}','Admin\NhacungcapController@getDelete');
        Route::get('detail/{id}','Admin\NhacungcapController@getDetail');
    });
        // danh muc san pham
     Route::group(['prefix' => 'danhmucsanpham'], function() {
        Route::get('list','Admin\DanhmucsanphamController@getList');
         Route::get('add','Admin\DanhmucsanphamController@getAdd');
         Route::post('add','Admin\DanhmucsanphamController@postAdd');
         Route::get('edit/{id}','Admin\DanhmucsanphamController@getEdit');
         Route::post('edit/{id}','Admin\DanhmucsanphamController@postEdit');
        Route::get('delete/{id}','Admin\DanhmucsanphamController@getDelete');
        Route::get('detail/{id}','Admin\DanhmucsanphamController@getDetail');
    });
        //  san pham
     Route::group(['prefix' => 'sanpham'], function() {
        Route::get('list','Admin\SanphamController@getList');
         Route::get('add','Admin\SanphamController@getAdd');
         Route::post('add','Admin\SanphamController@postAdd');
         Route::get('edit/{id}','Admin\SanphamController@getEdit');
         Route::post('edit/{id}','Admin\SanphamController@postEdit');
        Route::get('delete/{id}','Admin\SanphamController@getDelete');
        Route::get('detail/{id}','Admin\SanphamController@getDetail');
    });
        //  slide
     Route::group(['prefix' => 'slide'], function() {
        Route::get('list','Admin\SlideController@getList');
         Route::get('add','Admin\SlideController@getAdd');
         Route::post('add','Admin\SlideController@postAdd');
         Route::get('edit/{id}','Admin\SlideController@getEdit');
         Route::post('edit/{id}','Admin\SlideController@postEdit');
        Route::get('delete/{id}','Admin\SlideController@getDelete');
        Route::get('detail/{id}','Admin\SlideController@getDetail');
    });
        //  nhap san pham
     Route::group(['prefix' => 'nhapsanpham'], function() {
        Route::get('list','Admin\NhapsanphamController@getList');
         Route::get('add','Admin\NhapsanphamController@getAdd');
         Route::post('add','Admin\NhapsanphamController@postAdd');
         Route::get('edit/{id}','Admin\NhapsanphamController@getEdit');
         Route::post('edit/{id}','Admin\NhapsanphamController@postEdit');
        Route::get('delete/{id}','Admin\NhapsanphamController@getDelete');
        Route::get('detail/{id}','Admin\NhapsanphamController@getDetail');
    });
        //  xuat san pham
     Route::group(['prefix' => 'xuatsanpham'], function() {
        Route::get('list','Admin\XuatsanphamController@getList');
         Route::get('add','Admin\XuatsanphamController@getAdd');
         Route::post('add','Admin\XuatsanphamController@postAdd');
         Route::get('edit/{id}','Admin\XuatsanphamController@getEdit');
         Route::post('edit/{id}','Admin\XuatsanphamController@postEdit');
        Route::get('delete/{id}','Admin\XuatsanphamController@getDelete');
        Route::get('detail/{id}','Admin\XuatsanphamController@getDetail');
    });
    
});
