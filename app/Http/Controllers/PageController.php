<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\DanhMucSanPham;
use App\NhaCungCap;
use App\SanPham;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\XuatSanPham;
use App\ChiTietXuat;
use App\User;
use App\KhachHang;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function __construct(){
        $danhmucsanpham=DanhMucSanPham::all();
        $nhacungcap=NhaCungCap::all();
        view()->share('danhmucsanpham', $danhmucsanpham);
        view()->share('nhacungcap', $nhacungcap);
        
    }
    //  trang chu
    public function getTrangChu(){
        $sanpham=SanPham::all();

        $bestSeller = SanPham::orderBy('SoLuotMua', 'desc')->take(3)->get();
        return view('page.trang-chu',['sanpham'=>$sanpham, 'bestSeller' => $bestSeller]);
    }
    // chi tiet san pham
    public function getChitiet($id){
        $chitietsanpham=SanPham::find($id);

        $chitietsanpham->SoLuotXem += 1;
        $chitietsanpham->save();

        $madanhmuc=$chitietsanpham->MaDanhMuc;
        $sanphamgiong=SanPham::where('MaDanhMuc',$madanhmuc)->Where('id','<>',$id)->get();
        return view('page.chi-tiet-san-pham',['chitietsanpham'=>$chitietsanpham,'sanphamgiong'=>$sanphamgiong]);
    }
    // san pham theo danh muc
    public function getSanPhamDanhMuc($id){
        $sanpham=SanPham::Where('MaDanhMuc',$id)->get();
        return view('page.san-pham-danh-muc',['sanpham'=>$sanpham]);
    }
    // tim kiem san pham
    public function postTimKiem(Request $request){
        $tukhoa=$request->timkiem;
        $timkiemsanpham=SanPham::Where('TenSanPham','like',"%$tukhoa%")->get();
        return view('page.tim-kiem',['tukhoa'=>$tukhoa,'timkiemsanpham'=>$timkiemsanpham]);
        
    }
    // tim kiem san pham theo gia
    public function getSanPhamGia($number){
        if($number==1){
            $sanpham=SanPham::Where('Gia','<=',500000)->get();
        }
        if($number==2){
            $sanpham=SanPham::Where([['Gia','>=',500000],['Gia','<=',2000000]])->get();
        }
        if($number==3){
            $sanpham=SanPham::Where([['Gia','>=',2000000],['Gia','<=',5000000]])->get();
        }
        if($number==4){
            $sanpham=SanPham::Where([['Gia','>=',5000000],['Gia','<=',10000000]])->get();
        }
        if($number==5){
            $sanpham=SanPham::Where('Gia','>=',10000000)->get();
        }
        return view('page.san-pham-theo-gia',['sanpham'=>$sanpham]);
    }
    // lien he
    public function getLienHe(){
        return view('page.lien-he');
    }

    // gioi thieu
    public function getGioiThieu(){
        return view('page.gioi-thieu');
    }
    //quan ly tai khoan
    public function getQuanLyTaiKhoan(){
        return view('page.quan-ly-tai-khoan');
    }
    // get sửa tai khoan
    public function getSuaTaiKhoanDangNhap(){
        return view('page.sua-tai-khoan-dang-nhap');
    }
    // post sửa tai khoan
    public function postSuaTaiKhoanDangNhap(Request $request){
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
        $taikhoan=User::find(Auth::user()->id);
        $taikhoan->password=bcrypt($request->password);
        $taikhoan->save();
        return redirect('quan-ly-tai-khoan');

    }
    //get sửa thông tin ca nhan
    public function getSuaThongTinCaNhan(){
        return view('page.sua-thong-tin-ca-nhan');
    }
    //post sửa thông tin ca nhan
    public function postSuaThongTinCaNhan(Request $request){
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
        $thongtincanhan=KhachHang::find(Auth::user()->KhachHang->first()->id);
        $thongtincanhan->HoTen=$request->HoTen;
        $thongtincanhan->NgaySinh=$request->NgaySinh;
        $thongtincanhan->GioiTinh=$request->GioiTinh;
        $thongtincanhan->DiaChi=$request->DiaChi;
        $thongtincanhan->DienThoai=$request->DienThoai;
        if($request->hasFile('HinhAnh')){
            $file=$request->file('HinhAnh');
            $name=$file->getClientOriginalName();
            $HinhAnh=str_random(10)."_".$name;
            $file->move('image_KhachHang',$HinhAnh);
            $thongtincanhan->HinhAnh=$HinhAnh;
        }
        else{
            
        }
        $thongtincanhan->save();
        return redirect('quan-ly-tai-khoan');
    }
    
    // câu hỏi thường gặp
    public function getCauHoiThuongGap(){
        return view('page.cau-hoi-thuong-gap');
    }
    // GET /gio-hang
    public function getGioHang() {
        return view('page.gio-hang');
    }

    // GET /gio-hang/bo-san-pham/{id}
    public function getBoSanPham($id) {
        Cart::remove($id);
        return redirect('gio-hang');
    }
    // GET /gio-hang/change-quantity/{id}
    public function getChangeQuantity($id, Request $request) {
        Cart::update($id, $request->quantity);
        return redirect('gio-hang');
    }

    //POST /gio-hang
    public function postGioHang(Request $request) {
        $quantity = $request->quantity;
        $id       = $request->productId;
        
        $product = SanPham::find($id);

        //id, name, quantity, price
        Cart::add($id, $product, $quantity, $product->GiaUuDai);
        return view('page.gio-hang');
    }

    //GET /thanh-toan
    public function getThanhToan() {

        return view('page.thanh-toan');
    }

    //POST /thanh-toan
    public function postThanhToan(Request $request) {

        $fullName    = $request->fullName;
        $address     = $request->address;
        $phonenumber = $request->phone;

        $xuat = new XuatSanPham();

        $xuat->HoTen       = $fullName;
        $xuat->DiaChi      = $address;
        $xuat->DienThoai   = $phonenumber;

        //FIXME - check when login save MaKhachHang
        $xuat->TenVanChuyen = "";
        $xuat->ChuThich     = "";
        
        if(Auth::user() && Auth::user()->KhachHang->first()) {
            $xuat->MaKhachHang = Auth::user()->KhachHang->first()->id;
        }
        DB::beginTransaction();
        
        $xuat->save();

        foreach (Cart::content() as $item) {
            $chiTietXuat = new ChiTietXuat();
            $chiTietXuat->MaXuatSP = $xuat->id;
            //name of item is product
            $chiTietXuat->MaSanPham = $item->name->id;
            $chiTietXuat->SoLuong   = $item->qty;
            $chiTietXuat->Gia       = $item->name->GiaUuDai;

            $sanPham = SanPham::find($chiTietXuat->MaSanPham);
            $sanPham->SoLuotMua += $chiTietXuat->SoLuong;
            $sanPham->save();
            $chiTietXuat->save();
        }

        DB::commit();

        Cart::destroy();
        return view('page.thanh-toan', ['messageSuccess' => 'Đơn đặt hàng của bạn đã sẵn sàng. Đơn vị vận chuyển sẽ chuyển hàng cho bạn sớm nhất có thể. Chúc bạn hạnh phúc!!!']);
    }

    //  dang ky
    public function getDangKy(){
        return view('page.dang-ky');
    }
    public function postDangKy(Request $request){
        $this->validate($request,
        [
            'email'=>'required|unique:users|min:3|max:100',
            'password'=>'required|min:6|max:8',
            'confirmPassword'=>'required|same:password'
        ],
        [
            'email.required'=>'Bạn không được để trống tên đăng nhập',
            'email.unique'=>'Bạn không được nhập trùng với email đã tồn tại ',
            'email.min'=>'Bạn nhập ít nhất 3 ký tự',
            'email.max'=>'Bạn phải nhập ít hơn 100 ký tự',
            'password.required'=>'Bạn không được để trống mật khẩu',
            'password.min'=>'Bạn phải nhập mật khẩu trong khoảng 6-8 ký tự',
            'password.max'=>'Bạn phải nhập mật khẩu trong khoảng 6-8 ký tự',
            'confirmPassword.required'=>'Bạn không được để trống nhập lại mật khẩu',
            'confirmPassword.same'=>'Bạn phải nhập giống mật khẩu'
        ]);

        DB::beginTransaction();
        $taikhoan=new User();
        $taikhoan->email=$request->email;
        $taikhoan->password=bcrypt($request->password);
        $taikhoan->MaLoaiTaiKhoan=2;
        $taikhoan->save();


        $khachHang = new KhachHang();
        $khachHang->DiaChi = $request->diachi;
        $khachHang->HoTen = $request->hoten;
        $khachHang->DienThoai = $request->sodienthoai;
        
        $khachHang->NgaySinh = date('Y-m-d');
        $khachHang->GioiTinh = false;
        $khachHang->MaTaiKhoan = $taikhoan->id;
        $khachHang->HinhAnh = '';

        $khachHang->save();
        DB::commit();
        return view('page.dang-ky', ['messageSuccess' => 'Đăng ký thành công']);
    }
}
