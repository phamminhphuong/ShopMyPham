<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DanhMucSanPham;
use App\NhaCungCap;
use App\SanPham;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\XuatSanPham;
use App\ChiTietXuat;
use Illuminate\Support\Facades\DB;

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

    // GET /gio-hang/bo-san-pham/{id}
    public function getBoSanPham($id) {
        Cart::remove($id);
        return redirect('gio-hang');
    }
    // GET /gio-hang/change-quantity/{id}
    public function getChangeQuantity($id, Request $request) {
        Cart::update($id, $request->quantity);
        return redirect('gio-hang');
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

    //GET /thanh-toan
    public function getThanhToan() {
        return view('page.thanh-toan');
    }

    //POST /thanh-toan
    public function postThanhToan(Request $request) {

        $fullName    = $request->fullName;
        $address     = $request->address;
        $phonenumber = $request->phone;

        $xuat = new XuatSanPham();

        $xuat->HoTen       = $fullName;
        $xuat->DiaChi      = $address;
        $xuat->DienThoai   = $phonenumber;

        //FIXME - check when login save MaKhachHang
        $xuat->TenVanChuyen = "";
        $xuat->ChuThich     = "";

        DB::beginTransaction();
        
        $xuat->save();

        foreach (Cart::content() as $item) {
            $chiTietXuat = new ChiTietXuat();
            $chiTietXuat->MaXuatSP = $xuat->id;
            //name of item is product
            $chiTietXuat->MaSanPham = $item->name->id;
            $chiTietXuat->SoLuong   = $item->qty;
            $chiTietXuat->Gia       = $item->name->GiaUuDai;
            $chiTietXuat->save();
        }

        DB::commit();

        Cart::destroy();

        //FIXME - Thêm hiển thị thành công khi thanh toán
        return view('page.thanh-toan', ['messageSuccess' => 'Đơn đặt hàng của bạn đã sẵn sàng. Đơn vị vận chuyển sẽ chuyển hàng cho bạn sớm nhất có thể. Chúc bạn hạnh phúc!!!']);
    }
}
