<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\LoaiTaiKhoan;
use App\ChiTietNhap;
use App\ChiTietXuat;
class ThongKeController extends Controller
{
    //get /admin/thong-ke/index
    public function getThongKe() {
        $startDate = date('Y-m-01'); // hard-coded '01' for first day
        $endDate  = date('Y-m-t');

        $soLuongNhap = ChiTietNhap::whereDate('created_at', '>=', $startDate)->whereDate('created_at', '<=', $endDate)->sum('SoLuong');
        $soLuongXuat = ChiTietXuat::whereDate('created_at', '>=', $startDate)->whereDate('created_at', '<=', $endDate)->sum('SoLuong');
        $doanhThu = 0;


        return view('admin.thongke.index', ['startDate'=>$startDate, 'endDate'=>$endDate, 'soLuongNhap'=>$soLuongNhap, 'soLuongXuat'=>$soLuongXuat, 'doanhThu'=>$doanhThu]);
    }

    //post /admin/thong-ke/index
    public function postThongKe(Request $request) {
        $startDate = $request->startDate;
        $endDate  = $request->endDate;

        $soLuongNhap = ChiTietNhap::whereDate('created_at', '>=', $startDate)->whereDate('created_at', '<=', $endDate)->sum('SoLuong');
        $soLuongXuat = ChiTietXuat::whereDate('created_at', '>=', $startDate)->whereDate('created_at', '<=', $endDate)->sum('SoLuong');
        $doanhThu = 0;
        $query = ChiTietXuat::whereDate('created_at', '>=', $startDate)->whereDate('created_at', '<=', $endDate)->get();
        foreach($query as $item) {
            $doanhThu += $item->SoLuong * $item->Gia;
        }

        //DateTime::createFromFormat('m-d-Y', $startDate);
        //var_dump($startDate);
        //exit;
        return view('admin.thongke.index', ['startDate'=>$startDate, 'endDate'=>$endDate, 'soLuongNhap'=>$soLuongNhap, 'soLuongXuat'=>$soLuongXuat, 'doanhThu'=>$doanhThu]);
    }

}