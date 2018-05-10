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
}
