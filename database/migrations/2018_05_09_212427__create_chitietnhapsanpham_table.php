<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChitietnhapsanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietnhap', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('MaNhapSP')->unsigned();
            $table->foreign('MaNhapSP')->references('id')->on('nhapsanpham')->onDelete('cascade');
            $table->integer('MaSanPham')->unsigned();
            $table->foreign('MaSanPham')->references('id')->on('SanPham')->onDelete('cascade');
            $table->integer('SoLuong');
            $table->float('Gia', 12, 2);
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
        Schema::dropIfExists('chitietnhap');
    }
}
