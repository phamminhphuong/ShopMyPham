<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\NhapSanPham;
class NhapsanphamController extends Controller
{
    public function getList(){
        $nhapsanpham=NhapSanPham::all();
        return view('admin.nhapsanpham.list',['nhapsanpham'=>$nhapsanpham]);
    }
}
