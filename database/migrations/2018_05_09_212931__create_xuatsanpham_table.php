<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateXuatsanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xuatsanpham', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('MaKhachHang')->nullable();
            $table->foreign('MaKhachHang')->references('id')->on('khachhang')->onDelete('cascade');
            $table->string('TenVanChuyen');
            $table->text('ChuThich');
            $table->boolean('TrangThai');
            $table->date('NgayXuat');
            $table->string('HoTen');
            $table->text('DiaChi');
            $table->string('DienThoai');
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
        Schema::dropIfExists('xuatsanpham');
    }
}
