<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table->increments('id');
            $table->string('TenSanPham');
            $table->string('XuatXu');
            $table->text('ThanhPhan');
            $table->string('CongDung');
            $table->date('HanSuDung');
            $table->text('MieuTa');
            $table->integer('SoLuong');
            $table->float('Gia', 12, 2);
            $table->float('GiaUuDai', 12, 2);
            $table->float('PhanTramKhauTru', 12, 2);
            $table->integer('DoUuTien');
            $table->integer('SoLuotXem');
            $table->integer('SoLuotMua');
            $table->integer('MaDanhMuc')->unsigned();
            $table->foreign('MaDanhMuc')->references('id')->on('danhmucsanpham')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sanpham');
    }
}
