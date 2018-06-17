<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DanhMucSanPham;
class DanhmucsanphamController extends Controller
{
     // danh sach
     public function getList(){
        $danhmucsanpham=DanhMucSanPham::all();
        return view('admin.danhmucsanpham.list',['danhmucsanpham'=>$danhmucsanpham]);
    }
    // tao moi
    public function getAdd(){
        return view('admin.danhmucsanpham.add');
    }
    public function postAdd(Request $request){
        $this->validate($request,
        [
            'TenDanhMuc'=>'required|min:3|max:100',
    
        ],
        [
            'TenDanhMuc.required'=>'Bạn không được để trống tên danh mục sản phẩm',
            'TenDanhMuc.min'=>'Bạn nhập danh mục sản phẳm ít nhất 3 ký tự',
            'TenDanhMuc.max'=>'Bạn phải nhập danh mục sản phẩm ít hơn 100 ký tự',
           
        ]);
        $danhmucsanpham=new DanhMucSanPham();
        $danhmucsanpham->TenDanhMuc=$request->TenDanhMuc;
       
        $danhmucsanpham->save();
        return redirect('admin/danhmucsanpham/list');
    }
    // sua
    public function getEdit($id){
        $danhmucsanpham=DanhMucSanPham::find($id);
        return view('admin.danhmucsanpham.edit',['danhmucsanpham'=>$danhmucsanpham]);
    }
    public function postEdit(Request $request, $id){
        $this->validate($request,
        [
            'TenDanhMuc'=>'required|min:3|max:100',
    
        ],
        [
            'TenDanhMuc.required'=>'Bạn không được để trống tên danh mục sản phẩm',
            'TenDanhMuc.min'=>'Bạn nhập danh mục sản phẳm ít nhất 3 ký tự',
            'TenDanhMuc.max'=>'Bạn phải nhập danh mục sản phẩm ít hơn 100 ký tự',
           
        ]);
        $danhmucsanpham=DanhMucSanPham::find($id);
        $danhmucsanpham->TenDanhMuc=$request->TenDanhMuc;
       
        $danhmucsanpham->save();
        return redirect('admin/danhmucsanpham/list');
    }
    // xoa
    public function getDelete($id){
        $danhmucsanpham=DanhMucSanPham::find($id);
        $danhmucsanpham->delete();
        return redirect('admin/danhmucsanpham/list');
    }
    // detail
    public function getDetail($id){
        $danhmucsanpham=DanhMucSanPham::find($id);
        return view('admin.danhmucsanpham.detail',['danhmucsanpham'=>$danhmucsanpham]);
    }
}
