<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietNhap extends Model
{
    protected $table='chitietnhap';
    public function SanPham(){
        return $this->belongsTo('App\SanPham','MaSanPham','id');
    }
}
