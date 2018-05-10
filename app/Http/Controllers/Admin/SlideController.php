<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slide;
class SlideController extends Controller
{
    public function getList(){
        $slide=Slide::all();
        return view('admin.slide.list',['slide'=>$slide]);
    }


    public function getAdd(){
        return view('admin.slide.add');
    }
    public function postAdd(Request $request){
        $this->validate($request,
        [
            'TieuDe'=>'required|min:3|max:100',
            'MoTa'=>'required|min:3|max:2500',
            'Link'=>'required|min:3|max:200',
        ],
        [
            'TieuDe.required'=>'Bạn không được để trống tiêu đề',
            'TieuDe.min'=>'Bạn nhập tiêu đề ít nhất 3 ký tự',
            'TieuDe.max'=>'Bạn phải nhập tiêu đề ít hơn 100 ký tự',
            'MoTa.required'=>'Bạn không được để trống mô tả',
            'MoTa.min'=>'Bạn nhập mô tả ít nhất 3 ký tự',
            'MoTa.max'=>'Bạn nhập mô tả nhiều nhất 2500 ký tự',
            'Link.required'=>'Bạn không được để trống link',
            'Link.min'=>'Bạn nhập link ít nhất 3 ký tự',
            'Link.max'=>'Bạn nhập link nhiều nhất 200 ký tự',
        ]);
        $slide=new Slide();
        $slide->TieuDe=$request->TieuDe;
        $slide->MoTa=$request->MoTa;
        $slide->Link=$request->Link;
        if($request->hasFile('HinhAnh'))
        {
            $file=$request->file('HinhAnh');
            $name=$file->getClientOriginalName();
            $HinhAnh=str_random(10)."_".$name;
            $file->move('image_Slide',$HinhAnh);
            $slide->HinhAnh=$HinhAnh;
        }
        else{
            $slide->HinhAnh='';
        }
        $slide->save();
        return redirect('admin/slide/list');
    }
    // sua
    public function getEdit($id){
        $slide=Slide::find($id);
        return view('admin.slide.edit',['slide'=>$slide]);
    }
    public function postEdit(Request $request, $id){
        $this->validate($request,
        [
            'TieuDe'=>'required|min:3|max:100',
            'MoTa'=>'required|min:3|max:2500',
            'Link'=>'required|min:3|max:200',
        ],
        [
            'TieuDe.required'=>'Bạn không được để trống tiêu đề',
            'TieuDe.min'=>'Bạn nhập tiêu đề ít nhất 3 ký tự',
            'TieuDe.max'=>'Bạn phải nhập tiêu đề ít hơn 100 ký tự',
            'MoTa.required'=>'Bạn không được để trống mô tả',
            'MoTa.min'=>'Bạn nhập mô tả ít nhất 3 ký tự',
            'MoTa.max'=>'Bạn nhập mô tả nhiều nhất 2500 ký tự',
            'Link.required'=>'Bạn không được để trống link',
            'Link.min'=>'Bạn nhập link ít nhất 3 ký tự',
            'Link.max'=>'Bạn nhập link nhiều nhất 200 ký tự',
        ]);
        $slide=Slide::find($id);
        $slide->TieuDe=$request->TieuDe;
        $slide->MoTa=$request->MoTa;
        $slide->Link=$request->Link;
        if($request->hasFile('HinhAnh'))
        {
            $file=$request->file('HinhAnh');
            $name=$file->getClientOriginalName();
            $HinhAnh=str_random(10)."_".$name;
            $file->move('image_Slide',$HinhAnh);
            $slide->HinhAnh=$HinhAnh;
        }
        else{
          
        }
        $slide->save();
        return redirect('admin/slide/list');
    }
    // xoa
    public function getDelete($id){
        $slide=Slide::find($id);
        $slide->delete();
        return redirect('admin/slide/list');
    }
    // detail
    public function getDetail($id){
        $slide=Slide::find($id);
        return view('admin.slide.detail',['slide'=>$slide]);
    }
}
