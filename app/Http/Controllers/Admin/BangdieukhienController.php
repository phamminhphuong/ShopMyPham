<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\LoaiTaiKhoan;
use App\User;
use App\KhachHang;
use App\NhaCungCap;
use App\DanhMucSanPham;
use App\SanPham;
use App\Slide;
class BangdieukhienController extends Controller
{
    public function getBangdieukhien(){
        $loaitaikhoan=count(LoaiTaiKhoan::all());
        $taikhoan=count(User::all());
        $khachhang=count(KhachHang::all());
        $nhacungcap=count(NhaCungCap::all());
        $danhmucsanpham=count(DanhMucSanPham::all());
        $sanpham=count(SanPham::all());
        $slide=count(Slide::all());
        return view('admin.bangdieukhien.index',
        [
        'loaitaikhoan'=>$loaitaikhoan,
        'taikhoan'=>$taikhoan,
        'khachhang'=>$khachhang,
        'nhacungcap'=>$nhacungcap,
        'danhmucsanpham'=>$danhmucsanpham,
        'sanpham'=>$sanpham,
        'slide'=>$slide
        ]);
    }
}
