<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SanPham;
use App\DanhMucSanPham;
class SanphamController extends Controller
{
       // danh sach
       public function getList(){
        $sanpham=SanPham::all();
        return view('admin.sanpham.list',['sanpham'=>$sanpham]);
    }
    // tao moi
    public function getAdd(){
        $danhmucsanpham=DanhMucSanPham::all();
        return view('admin.sanpham.add',['danhmucsanpham'=>$danhmucsanpham]);
    }
    public function postAdd(Request $request){   
        $this->validate($request,
        [
            'TenSanPham'=>'required|min:3|max:100',
            'XuatXu'=>'required|min:3|max:100',
            'ThanhPhan'=>'required|min:3|max:200',
            'CongDung'=>'required|min:3|max:100',
            'HanSuDung'=>'required',
            'MieuTa'=>'required|min:3|max:2500',
            'Gia'=>'required',
            'GiaUuDai'=>'required',
            'PhanTramKhauTru'=>'required',
        ],
        [
            'TenSanPham.required'=>'Bạn không được để trống tên sản phẩm',
            'TenSanPham.min'=>'Bạn nhập tên sản phẩm ít nhất 3 ký tự',
            'TenSanPham.max'=>'Bạn nhập tên sản phẩm không quá 100 ký tự',
            'XuatXu.required'=>'Bạn không được để trống xuất xứ',
            'XuatXu.min'=>'Bạn nhập xuất xứ ít nhất 3 ký tự',
            'XuatXu.max'=>'Bạn nhập xuất xứ không quá 100 ký tự',
            'ThanhPhan.required'=>'Bạn không được để trống thành phần',
            'ThanhPhan.min'=>'Bạn nhập thành phần ít nhất 3 ký tự',
            'ThanhPhan.max'=>'Bạn nhập thành phần không quá 100 ký tự',
            'CongDung.required'=>'Bạn không được để trống công dụng',
            'CongDung.min'=>'Bạn nhập công dụng ít nhất 3 ký tự',
            'CongDung.max'=>'Bạn nhập công dụng không quá 100 ký tự',
            'HanSuDung.required'=>'Bạn không được để trống hạn sử dụng',
            'MieuTa.required'=>'Bạn không được để trống mô tả sản phẩm',
            'MieuTa.min'=>'Bạn nhập mô tả sản phẩm ít nhất 3 ký tự',
            'MieuTa.max'=>'Bạn nhập mô tả sản phẩm không quá 2500 ký tự',
            'Gia.required'=>'Bạn không được để trống giá của sản phẩm',
            'GiaUuDai.required'=>'Bạn không được để trống giá ưu đãi của sản phẩm',
            'GiaPhanTramKhauTruUuDai.required'=>'Bạn không được để trống phần trăm ưu đãi của sản phẩm',
        ]);
        $sanpham=new SanPham();
        $sanpham->MaDanhMuc=$request->MaDanhMuc;
        $sanpham->TenSanPham =$request->TenSanPham;
        $sanpham->XuatXu=$request->XuatXu;
        $sanpham->ThanhPhan=$request->ThanhPhan;
        $sanpham->CongDung=$request->CongDung;
        $sanpham->HanSuDung=$request->HanSuDung;
        $sanpham->MieuTa=$request->MieuTa;
        if($request->hasFile('HinhAnh'))
        {
            $file=$request->file('HinhAnh');
            $name=$file->getClientOriginalName();
            $HinhAnh=str_random(10)."_".$name;
            $file->move('image_SanPham',$HinhAnh);
            $sanpham->HinhAnh=$HinhAnh;
        }
        else{
            $sanpham->HinhAnh='';
        }
        $sanpham->SoLuong=$request->SoLuong;
        $sanpham->Gia=$request->Gia;
        $sanpham->GiaUuDai=$request->GiaUuDai;
        $sanpham->PhanTramKhauTru=$request->PhanTramKhauTru;
        $sanpham->DoUuTien=$request->DoUuTien;
        $sanpham->SoLuotXem=$request->SoLuotXem;
        $sanpham->SoLuotMua=$request->SoLuotMua;
        $sanpham->save();
        return redirect('admin/sanpham/list');
    }
    // sua
    public function getEdit($id){
        $danhmucsanpham=DanhMucSanPham::all();
        $sanpham=SanPham::find($id);
        return view('admin.sanpham.edit',['sanpham'=>$sanpham,'danhmucsanpham'=>$danhmucsanpham]);
    }
    public function postEdit(Request $request, $id){
        $this->validate($request,
        [
            'TenSanPham'=>'required|min:3|max:100',
            'XuatXu'=>'required|min:3|max:100',
            'ThanhPhan'=>'required|min:3|max:200',
            'CongDung'=>'required|min:3|max:100',
            'HanSuDung'=>'required',
            'MieuTa'=>'required|min:3|max:2500',
            'Gia'=>'required',
            'GiaUuDai'=>'required',
            'PhanTramKhauTru'=>'required',
        ],
        [
            'TenSanPham.required'=>'Bạn không được để trống tên sản phẩm',
            'TenSanPham.min'=>'Bạn nhập tên sản phẩm ít nhất 3 ký tự',
            'TenSanPham.max'=>'Bạn nhập tên sản phẩm không quá 100 ký tự',
            'XuatXu.required'=>'Bạn không được để trống xuất xứ',
            'XuatXu.min'=>'Bạn nhập xuất xứ ít nhất 3 ký tự',
            'XuatXu.max'=>'Bạn nhập xuất xứ không quá 100 ký tự',
            'ThanhPhan.required'=>'Bạn không được để trống thành phần',
            'ThanhPhan.min'=>'Bạn nhập thành phần ít nhất 3 ký tự',
            'ThanhPhan.max'=>'Bạn nhập thành phần không quá 100 ký tự',
            'CongDung.required'=>'Bạn không được để trống công dụng',
            'CongDung.min'=>'Bạn nhập công dụng ít nhất 3 ký tự',
            'CongDung.max'=>'Bạn nhập công dụng không quá 100 ký tự',
            'HanSuDung.required'=>'Bạn không được để trống hạn sử dụng',
            'MieuTa.required'=>'Bạn không được để trống mô tả sản phẩm',
            'MieuTa.min'=>'Bạn nhập mô tả sản phẩm ít nhất 3 ký tự',
            'MieuTa.max'=>'Bạn nhập mô tả sản phẩm không quá 2500 ký tự',
            'Gia.required'=>'Bạn không được để trống giá của sản phẩm',
            'GiaUuDai.required'=>'Bạn không được để trống giá ưu đãi của sản phẩm',
            'GiaPhanTramKhauTruUuDai.required'=>'Bạn không được để trống phần trăm ưu đãi của sản phẩm',
        ]);
        $sanpham=SanPham::find($id);
        $sanpham->MaDanhMuc=$request->MaDanhMuc;
        $sanpham->TenSanPham =$request->TenSanPham;
        $sanpham->XuatXu=$request->XuatXu;
        $sanpham->ThanhPhan=$request->ThanhPhan;
        $sanpham->CongDung=$request->CongDung;
        $sanpham->HanSuDung=$request->HanSuDung;
        $sanpham->MieuTa=$request->MieuTa;
        if($request->hasFile('HinhAnh'))
        {
            $file=$request->file('HinhAnh');
            $name=$file->getClientOriginalName();
            $HinhAnh=str_random(10)."_".$name;
            $file->move('image_SanPham',$HinhAnh);
            $sanpham->HinhAnh=$HinhAnh;
        }
        else{
          
        }
        $sanpham->SoLuong=$request->SoLuong;
        $sanpham->Gia=$request->Gia;
        $sanpham->GiaUuDai=$request->GiaUuDai;
        $sanpham->PhanTramKhauTru=$request->PhanTramKhauTru;
        $sanpham->DoUuTien=$request->DoUuTien;
        $sanpham->SoLuotXem=$request->SoLuotXem;
        $sanpham->SoLuotMua=$request->SoLuotMua;
        $sanpham->save();
        return redirect('admin/sanpham/list');
    }
    // xoa
    public function getDelete($id){
        $sanpham=SanPham::find($id);
        $sanpham->delete();
        return redirect('admin/sanpham/list');
    }
    // detail
    public function getDetail($id){
        $sanpham=SanPham::find($id);
        return view('admin.sanpham.detail',['sanpham'=>$sanpham]);
    }

    //GET   /admin/sanpham/api/all
    public function apiAll() {
        $list = SanPham::all();
        $arr = array();

        foreach($list as $item) {
            $arr[] = $item->id." - ".$item->TenSanPham;
        }
        
        return response()
        ->json($arr);
    }

    //GET   /admin/sanpham/api/find-one/{id}
    public function apiFindOne($id) {
        $sanpham = SanPham::find($id);
        return response()->json($sanpham);
    }
}
