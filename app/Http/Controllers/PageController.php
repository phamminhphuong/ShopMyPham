<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getTrangChu(){
        return view('layout.index');
    }
    public function getTrangChu1(){
        return view('page.trangchu');
    }
    public function chitietsanpham(){
        return view('page.chi-tiet-san-pham');
    }
    public function dangnhap(){
        return view('page.dang-nhap');
    }
    public function dangky(){
        return view('page.dang-ky');
    }
    public function giohang(){
        return view('page.gio-hang');
    }
    public function xacnhan1(){
        return view('page.xac-nhan-dia-chi');
    }
}
