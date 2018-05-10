<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiTaiKhoan extends Model
{
    protected $table='loaitaikhoan';
    public function User(){
       return $this->hasmany('App\User','MaLoaiTaiKhoan','id');
    }
}
