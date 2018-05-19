<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\XuatSanPham;
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
        $xuatSanPham->save();
        return redirect('admin/xuatsanpham/list');
    }

    // GET admin/xuatsanpham/detail/{$id}
    public function getDetail($id) {
        //FIXME Hiển thị danh sách chi tiết xuất
        $xuatSanPham = XuatSanPham::find($id);
        return view('admin.xuatsanpham.detail', ['xuatSanPham' => $xuatSanPham]);
    }
}
