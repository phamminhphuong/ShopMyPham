<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    protected $table='sanpham';
    public function DanhMucSanPham(){
        return $this->belongsTo('App\DanhMucSanPham','MaDanhMuc','id');
    }
}
