<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DanhMucSanPham extends Model
{
    protected $table='danhmucsanpham';
    public function SanPham(){
        return $this->hasMany('App\SanPham','MaDanhMuc','id');
    }
}
