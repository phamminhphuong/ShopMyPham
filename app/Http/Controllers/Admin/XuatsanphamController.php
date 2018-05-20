<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\XuatSanPham;
use Illuminate\Support\Facades\DB;
class XuatsanphamController extends Controller
{
    public function getList(){
        $xuatsanpham=XuatSanPham::all();
        return view('admin.xuatsanpham.list',['xuatsanpham'=>$xuatsanpham]);
    }

    // GET admin/xuatsanpham/giao-hang/${id}
    public function getGiaoHang($id) {
        $xuatSanPham = XuatSanPham::find($id);
        $xuatSanPham->TrangThai = 1;
        $xuatSanPham->NgayXuat = date('Y-m-d H:i:s');
        DB::beginTransaction();
        foreach($xuatSanPham->ChiTietXuats as $item) {
            $sanPham = $item->SanPham;
            if($sanPham->SoLuong < $item->SoLuong) {
                return redirect('admin/xuatsanpham/list')->withErrors(['msg', 'Sản phẩm '.$sanPham->TenSanPham.' đã hết hàng']);
            }
            else {  
                $sanPham->SoLuong -= $item->SoLuong;
                $sanPham->save();
            }
        }
        $xuatSanPham->save();
        DB::commit();
        return redirect('admin/xuatsanpham/list');
    }

    // GET admin/xuatsanpham/detail/{$id}
    public function getDetail($id) {
        //FIXME Hiển thị danh sách chi tiết xuất
        $xuatSanPham = XuatSanPham::find($id);
        return view('admin.xuatsanpham.detail', ['xuatSanPham' => $xuatSanPham]);
    }
}
