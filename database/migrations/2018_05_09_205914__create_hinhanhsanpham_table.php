<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHinhanhsanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hinhanhsanpham', function (Blueprint $table) {
            $table->increments('id');
            $table->string('HinhAnh');
            $table->integer('MaSanPham')->unsigned();
            $table->foreign('MaSanPham')->references('id')->on('sanpham')->onDelete('cascade');
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
        Schema::dropIfExists('hinhanhsanpham');
    }
}
