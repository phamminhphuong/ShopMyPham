<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietXuat extends Model
{
    protected $table='chitietxuat';
    public function SanPham(){
        return $this->belongsTo('App\SanPham','MaSanPham','id');
    }
}
