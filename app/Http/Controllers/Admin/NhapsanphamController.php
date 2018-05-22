<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\NhapSanPham;
use App\ChiTietNhap;
use App\SanPham;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class NhapsanphamController extends Controller
{
    public function getList(){
        $nhapsanpham=NhapSanPham::all();
        return view('admin.nhapsanpham.list',['nhapsanpham'=>$nhapsanpham]);
    }

    //GET   /admin/nhapsanpham/add
    public function getAdd() {
        return view('admin.nhapsanpham.add');
    }

    //POST /admin/nhapsanpham/add
    public function postAdd(Request $request) {
        DB::beginTransaction();
        $nhapSanPham = new NhapSanPham();
        $nhapSanPham->MaNhaCC = $request->MaNhaCC;
        $nhapSanPham->NgayNhap = $request->NgayNhap;
        $nhapSanPham->ChuThich = $request->ChuThich;
        $nhapSanPham->TrangThai = 0;
        $nhapSanPham->MaTaiKhoan = 1;

        $nhapSanPham->HoTen = '';
        $nhapSanPham->DiaChi = '';
        $nhapSanPham->DienThoai = '';
        $nhapSanPham->save();

        for($i = 0; $i < count($request->MaSanPham); $i++) {
            $maSanPham  = $request->MaSanPham[$i];
            $soLuong    = $request->SoLuong[$i];
            $sanPham    = SanPham::find($maSanPham);
            $sanPham->SoLuong += $soLuong;
            $sanPham->save();

            $chiTietNhap = new ChiTietNhap();
            $chiTietNhap->MaNhapSP  = $nhapSanPham->id;
            $chiTietNhap->MaSanPham = $maSanPham;
            $chiTietNhap->SoLuong   = $soLuong;
            $chiTietNhap->Gia       = $sanPham->GiaUuDai;

            $chiTietNhap->save();
        }

        DB::commit();
        return redirect('admin/nhapsanpham/list');
    }

    //GET /admin/nhapsanpham/detail/{id}
    public function getDetail($id) {
        $nhapSanPham = NhapSanPham::find($id);
        return view('admin.nhapsanpham.detail', ['nhapSanPham' => $nhapSanPham]);
    }
}
