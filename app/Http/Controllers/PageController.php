<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DanhMucSanPham;
use App\NhaCungCap;
use App\SanPham;
class PageController extends Controller
{
    public function __construct(){
        $danhmucsanpham=DanhMucSanPham::all();
        $nhacungcap=NhaCungCap::all();
        view()->share('danhmucsanpham', $danhmucsanpham);
        view()->share('nhacungcap', $nhacungcap);
        
    }
    //  trang chu
    public function getTrangChu(){
        $sanpham=SanPham::all();
        return view('page.trang-chu',['sanpham'=>$sanpham]);
    }
    // chi tiet san pham
    public function getChitiet($id){
        $chitietsanpham=SanPham::find($id);
        return view('page.chi-tiet-san-pham',['chitietsanpham'=>$chitietsanpham]);
    }
}
