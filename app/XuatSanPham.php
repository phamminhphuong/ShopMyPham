<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class XuatSanPham extends Model
{
    protected $table='xuatsanpham';
    public function ChiTietXuats(){
        return $this->hasMany('App\ChiTietXuat', 'MaXuatSP', 'id');
    }
}
