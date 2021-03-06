<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\LoaiTaiKhoan;
use App\KhachHang;
class TaikhoanController extends Controller
{
     // danh sach
     public function getList(){
        $taikhoan=User::all();
        return view('admin.taikhoan.list',['taikhoan'=>$taikhoan]);
    }
    // tao moi
    public function getAdd(){
        $loaitaikhoan=LoaiTaiKhoan::all();
        return view('admin.taikhoan.add',['loaitaikhoan'=>$loaitaikhoan]);
    }
    public function postAdd(Request $request){
        $this->validate($request,
        [
            'email'=>'required|unique:users|min:3|max:100',
            'password'=>'required|min:6|max:8',
            'Resetpassword'=>'required|same:password'
        ],
        [
            'email.required'=>'Bạn không được để trống tên đăng nhập',
            'email.unique'=>'Bạn không được nhập trùng với email đã tồn tại ',
            'email.min'=>'Bạn nhập ít nhất 3 ký tự',
            'email.max'=>'Bạn phải nhập ít hơn 100 ký tự',
            'password.required'=>'Bạn không được để trống mật khẩu',
            'password.min'=>'Bạn nhập mật khẩu trong khoảng 6-8 ký tự',
            'password.max'=>'Bạn nhập mật khẩu trong khoảng 6-8 ký tự',
            'Resetpassword.required'=>'Bạn không được để trống nhập lại mật khẩu',
            'Resetpassword.same'=>'Bạn phải nhập giống mật khẩu'
        ]);
        $taikhoan=new User();
        $taikhoan->email=$request->email;
        $taikhoan->password=bcrypt($request->password);
        $taikhoan->MaLoaiTaiKhoan=$request->MaLoaiTaiKhoan;
        $taikhoan->save();

        $khachHang = new KhachHang();
        $khachHang->DiaChi = '';
        $khachHang->HoTen = '';
        $khachHang->DienThoai = '';
        
        $khachHang->NgaySinh = date('Y-m-d');
        $khachHang->GioiTinh = false;
        $khachHang->MaTaiKhoan = $taikhoan->id;
        $khachHang->HinhAnh = '';

        $khachHang->save();

        return redirect('admin/taikhoan/list');
    }
    // sua
    public function getEdit($id){
        $taikhoan=User::find($id);
        $loaitaikhoan=LoaiTaiKhoan::all();
        return view('admin.taikhoan.edit',['taikhoan'=>$taikhoan,'loaitaikhoan'=>$loaitaikhoan]);
    }
    public function postEdit(Request $request, $id){
        $this->validate($request,
        [
            'password'=>'required|min:6|max:8',
            'Resetpassword'=>'required|same:password'
        ],
        [
            'password.required'=>'Bạn không được để trống mật khẩu',
            'password.min'=>'Bạn nhập mật khẩu trong khoảng 6-8 ký tự',
            'password.max'=>'Bạn nhập mật khẩu trong khoảng 6-8 ký tự',
            'Resetpassword.required'=>'Bạn không được để trống nhập lại mật khẩu',
            'Resetpassword.same'=>'Bạn phải nhập giống mật khẩu'
        ]);
        $taikhoan=User::find($id);
        $taikhoan->password=bcrypt($request->password);
        $taikhoan->MaLoaiTaiKhoan=$request->MaLoaiTaiKhoan;
        $taikhoan->save();
        return redirect('admin/taikhoan/list');
    }
    // xoa
    public function getDelete($id){
        $taikhoan=User::find($id);
        $taikhoan->delete();
        return redirect('admin/taikhoan/list');
    }
    // detail
    public function getDetail($id){
        $taikhoan=User::find($id);

        return view('admin.taikhoan.detail', ['taikhoan'=>$taikhoan]);
    }
    //  dang nhap
    public function getDangnhap(){
        return view('page.dang-nhap');
    }

    public function postDangnhap(Request $request){
        $this->validate($request,
                [
                    'email'=>'required',
                    'password'=>'required',
                ],
                [
                    'email.required'=>'Bạn không được để trống tên đăng nhập',
                    'password.required'=>'Bạn không được để trống mật khẩu'
                ]);
                $email=$request->email;
                $password=$request->password;
                if(Auth::attempt(['email' => $email, 'password' => $password])){
                    
                    return redirect('admin/bangdieukhien/index');
                }
                else{
                    return redirect('dangnhap')->with('thongbao','Đăng nhập không thành công');
                }
    }
    //  dang xuat
    public function getDangXuat(){
        
        Auth::logout();
        return redirect('/');
        
    }
}
