<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\KhachHang;
use App\User;
class KhachhangCotroller extends Controller
{
    public function getList(){
        $khachhang=KhachHang::all();
        return view('admin.khachhang.list',['khachhang'=>$khachhang]);
    }
    public function getAdd(){
        $taikhoan=User::all();
        return view('admin.khachhang.add',['taikhoan'=>$taikhoan]);
    }
    public function postAdd(Request $request){   
        $this->validate($request,
        [
            'HoTen'=>'required|min:3|max:100',
            'DiaChi'=>'required|min:3|max:200',
            'DienThoai' => 'required|regex:/(0)[0-9]{9,11}/',
            'NgaySinh'=>'required',
        ],
        [
            
            'HoTen.required'=>'Bạn không được để trống họ tên',
            'HoTen.min'=>'Bạn nhập họ tên ít nhất 3 ký tự',
            'HoTen.max'=>'Bạn nhập họ tên không quá 100 ký tự',
            'DiaChi.required'=>'Bạn không được để trống địa chỉ',
            'DiaChi.min'=>'Bạn nhập địa chỉ ít nhất 3 ký tự',
            'DiaChi.max'=>'Bạn nhập địa chỉ không quá 200 ký tự',
            'DienThoai.required'=>'Bạn không được để trống điện thoại',
            'DienThoai.regex'=>'Bạn phải nhập điện thoại  từ 10-12 số và phải bắt đầu bằng số 0',
            'NgaySinh.required'=>'Bạn không được để trống ngày sinh',
        
        ]);
        $khachhang=new KhachHang();
        $khachhang->MaTaiKhoan=$request->MaTaiKhoan;;
        $khachhang->HoTen=$request->HoTen;
        $khachhang->NgaySinh=$request->NgaySinh;
        $khachhang->GioiTinh=$request->GioiTinh;
        $khachhang->DiaChi=$request->DiaChi;
        $khachhang->DienThoai=$request->DienThoai;
        if($request->hasFile('HinhAnh')){
            $file=$request->file('HinhAnh');
            $name=$file->getClientOriginalName();
            $HinhAnh=str_random(10)."_".$name;
            $file->move('image_KhachHang',$HinhAnh);
            $khachhang->HinhAnh=$HinhAnh;
        }
        else{
            $khachhang->HinhAnh="";
        }

        $khachhang->save();
        return redirect('admin/khachhang/list');
    }
    // sua
    public function getEdit($id){
        $taikhoan=User::all();
        $khachhang=KhachHang::find($id);
        return view('admin.khachhang.edit',['taikhoan'=>$taikhoan,'khachhang'=>$khachhang]);
    }
    public function postEdit(Request $request, $id){
        $this->validate($request,
        [
            'HoTen'=>'required|min:3|max:100',
            'DiaChi'=>'required|min:3|max:200',
            'DienThoai' => 'required|regex:/(0)[0-9]{9,11}/',
            'NgaySinh'=>'required',
        ],
        [
            
            'HoTen.required'=>'Bạn không được để trống họ tên',
            'HoTen.min'=>'Bạn nhập họ tên ít nhất 3 ký tự',
            'HoTen.max'=>'Bạn nhập họ tên không quá 100 ký tự',
            'DiaChi.required'=>'Bạn không được để trống địa chỉ',
            'DiaChi.min'=>'Bạn nhập địa chỉ ít nhất 3 ký tự',
            'DiaChi.max'=>'Bạn nhập địa chỉ không quá 200 ký tự',
            'DienThoai.required'=>'Bạn không được để trống điện thoại',
            'DienThoai.regex'=>'Bạn phải nhập điện thoại  từ 10-12 số và phải bắt đầu bằng số 0',
            'NgaySinh.required'=>'Bạn không được để trống ngày sinh',
        
        ]);
        $khachhang=KhachHang::find($id);
        $khachhang->MaTaiKhoan=$request->MaTaiKhoan;;
        $khachhang->HoTen=$request->HoTen;
        $khachhang->NgaySinh=$request->NgaySinh;
        $khachhang->GioiTinh=$request->GioiTinh;
        $khachhang->DiaChi=$request->DiaChi;
        $khachhang->DienThoai=$request->DienThoai;
        if($request->hasFile('HinhAnh')){
            $file=$request->file('HinhAnh');
            $name=$file->getClientOriginalName();
            $HinhAnh=str_random(10)."_".$name;
            $file->move('image_KhachHang',$HinhAnh);
            $khachhang->HinhAnh=$HinhAnh;
        }
        else{
            
        }

        $khachhang->save();
        return redirect('admin/khachhang/list');
    }
    // xoa
    public function getDelete($id){
        $khachhang=KhachHang::find($id);
        $khachhang->delete();
        return redirect('admin/khachhang/list');
    }
    // detail
    public function getDetail($id){
        $khachhang=KhachHang::find($id);
        return view('admin.khachhang.detail',['khachhang'=>$khachhang]);
    }
}
