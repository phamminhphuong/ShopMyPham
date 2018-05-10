<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    protected $table='khachhang';
    public function User(){
        return $this->belongsTo('App\User','MaTaiKhoan','id');
    }
}
