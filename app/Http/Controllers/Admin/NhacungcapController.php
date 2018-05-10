<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\NhaCungCap;
class NhacungcapController extends Controller
{
    public function getList(){
        $nhacungcap=NhaCungCap::all();
        return view('admin.nhacungcap.list',['nhacungcap'=>$nhacungcap]);
    }

    // tao moi
    public function getAdd(){
        return view('admin.nhacungcap.add');
    }
    public function postAdd(Request $request){   
        $this->validate($request,
        [
            'TenNTD'=>'required|min:3|max:100',
            'DiaChi'=>'required|min:3|max:500',
            'DienThoai' => 'required|regex:/(0)[0-9]{9,11}/',
            'email' => ['required', 'unique:nhacungcap'],
            'DiaChiWeb' => ['required', 'unique:nhacungcap','regex:/(www.)[A-Za-z0-9]{1,55}[.](com|vn|edu|info|net)$/'],
            'GioiThieu'=>'required|min:3|max:2500',
        ],
        [
            'TenNTD.required'=>'Bạn không được để trống tên nhà cung cấp',
             'TenNTD.min'=>'Bạn nhập tên cung cấp ít nhất 3 ký tự',
             'TenNTD.max'=>'Bạn phải nhập tên nhà cung cấp ít hơn 100 ký tự',
            'DiaChi.required'=>'Bạn không được để trống địa chỉ',
            'DiaChi.min'=>'Bạn nhập địa chỉ ít nhất 3 ký tự',
            'DiaChi.max'=>'Bạn phải nhập địa chỉ ít hơn 200 ký tự',
            'DienThoai.required'=>'Bạn không được để trống điện thoại',
            'DienThoai.regex'=>'Bạn phải nhập điện thoại  từ 10-12 số và phải bắt đầu bằng số 0',

            'email.required'=>'Bạn không được để trống email',
            'email.unique'=>'Bạn nhập email trùng với email đã tồn tại',

            'DiaChiWeb.required'=>'Bạn không được để trống địa chỉ web',
            'DiaChiWeb.unique'=>'Bạn nhập địa chỉ web trùng với địa chỉ web đã tồn tại',
            'DiaChiWeb.regex'=>'Bạn phải nhập địa chỉ web có độ dài từ 3-63 ký tự bắng đầu bằng www và kết thúc bằng .com hoặc .vn hoặc . edu hoặc .info hoặc .net',
            
            'GioiThieu.required'=>'Bạn không được để trống giới thiệu',
            'GioiThieu.min'=>'Bạn nhập giới thiệu web ít nhất 3 ký tự',
            'GioiThieu.max'=>'Bạn nhập giới thiệu web nhiều nhất 2500 ký tự',
        ]);
        $nhacungcap=new NhaCungCap();
        $nhacungcap->TenNhaCC=$request->TenNTD;
        $nhacungcap->DiaChi=$request->DiaChi;
        $nhacungcap->DienThoai=$request->DienThoai;
        $nhacungcap->email=$request->email;
        $nhacungcap->DiaChiWeb=$request->DiaChiWeb;
        $nhacungcap->GioiThieu=$request->GioiThieu;
        if($request->hasFile('HinhAnh'))
        {
            $file=$request->file('HinhAnh');
            $name=$file->getClientOriginalName();
            $HinhAnh=str_random(6)."_".$name;
            $file->move('image_NhaCC',$HinhAnh);
            $nhacungcap->HinhAnh=$HinhAnh;
        }
        else{
            $nhacungcap->HinhAnh='';
        }
        $nhacungcap->save();
            return redirect('admin/nhacungcap/list');
        }
        // sua
        public function getEdit($id){
            $nhacungcap=NhaCungCap::find($id);
            return view('admin.nhacungcap.edit',['nhacungcap'=>$nhacungcap]);
        }
        public function postEdit(Request $request, $id){
            $this->validate($request,
        [
            'TenNTD'=>'required|min:3|max:100',
            'DiaChi'=>'required|min:3|max:500',
            'DienThoai' => 'required|regex:/(0)[0-9]{9,11}/',
            // 'DiaChiWeb' => ['required', 'unique:nhacungcap','regex:/(www.)[A-Za-z0-9]{1,55}[.](com|vn|edu|info|net)$/'],
            'GioiThieu'=>'required|min:3|max:2500',
        ],
        [
            'TenNTD.required'=>'Bạn không được để trống tên nhà cung cấp',
             'TenNTD.min'=>'Bạn nhập tên cung cấp ít nhất 3 ký tự',
             'TenNTD.max'=>'Bạn phải nhập tên nhà cung cấp ít hơn 100 ký tự',
            'DiaChi.required'=>'Bạn không được để trống địa chỉ',
            'DiaChi.min'=>'Bạn nhập địa chỉ ít nhất 3 ký tự',
            'DiaChi.max'=>'Bạn phải nhập địa chỉ ít hơn 200 ký tự',
            'DienThoai.required'=>'Bạn không được để trống điện thoại',
            'DienThoai.regex'=>'Bạn phải nhập điện thoại  từ 10-12 số và phải bắt đầu bằng số 0',
            // 'DiaChiWeb.required'=>'Bạn không được để trống địa chỉ web',
            // 'DiaChiWeb.unique'=>'Bạn nhập địa chỉ web trùng với địa chỉ web đã tồn tại',
            // 'DiaChiWeb.regex'=>'Bạn phải nhập địa chỉ web có độ dài từ 3-63 ký tự bắng đầu bằng www và kết thúc bằng .com hoặc .vn hoặc . edu hoặc .info hoặc .net',
            'GioiThieu.required'=>'Bạn không được để trống giới thiệu',
            'GioiThieu.min'=>'Bạn nhập giới thiệu web ít nhất 3 ký tự',
            'GioiThieu.max'=>'Bạn nhập giới thiệu web nhiều nhất 2500 ký tự',
        ]);
        $nhacungcap=NhaCungCap::find($id);
        $nhacungcap->TenNhaCC=$request->TenNTD;
        $nhacungcap->DiaChi=$request->DiaChi;
        $nhacungcap->DienThoai=$request->DienThoai;
        // $nhacungcap->DiaChiWeb=$request->DiaChiWeb;
        $nhacungcap->GioiThieu=$request->GioiThieu;
        if($request->hasFile('HinhAnh'))
        {
            $file=$request->file('HinhAnh');
            $name=$file->getClientOriginalName();
            $HinhAnh=str_random(6)."_".$name;
            $file->move('image_NhaCC',$HinhAnh);
            $nhacungcap->HinhAnh=$HinhAnh;
        }
        else{
            
        }
        $nhacungcap->save();
            return redirect('admin/nhacungcap/list');
        }
        // xoa
        public function getDelete($id){
            $nhacungcap=NhaCungCap::find($id);
            $nhacungcap->delete();
            return redirect('admin/nhacungcap/list');
        }
        // detail
        public function getDetail($id){
            $nhacungcap=NhaCungCap::find($id);
            return view('admin.nhacungcap.detail',['nhacungcap'=>$nhacungcap]);
        }
}