<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhapSanPham extends Model
{
    protected $table='nhapsanpham';

    public function ChiTietNhaps(){
        return $this->hasMany('App\ChiTietNhap', 'MaNhapSP', 'id');
    }

    public function NhaCungCap(){
        return $this->belongsTo('App\NhaCungCap', 'MaNhaCC', 'id');
    }
}
