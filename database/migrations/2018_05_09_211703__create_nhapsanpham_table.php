<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhapsanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhapsanpham', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('MaNhaCC')->unsigned();
            $table->foreign('MaNhaCC')->references('id')->on('nhacungcap')->onDelete('cascade');
            $table->date('NgayNhap');
            $table->text('ChuThich');
            $table->boolean('TrangThai');
            $table->integer('MaTaiKhoan')->unsigned();
            $table->foreign('MaTaiKhoan')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('nhapsanpham');
    }
}
