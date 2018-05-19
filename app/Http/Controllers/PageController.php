<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DanhMucSanPham;
use App\NhaCungCap;
use App\SanPham;
use Gloudemans\Shoppingcart\Facades\Cart;
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

    // GET /gio-hang
    public function getGioHang() {
        return view('page.gio-hang');
    }

    //POST /gio-hang
    public function postGioHang(Request $request) {
        $quantity = $request->quantity;
        $id       = $request->productId;
        
        $product = SanPham::find($id);

        //id, name, quantity, price
        Cart::add($id, $product, $quantity, $product->GiaUuDai);
        return view('page.gio-hang');
    }
}
