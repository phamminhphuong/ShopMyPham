<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChitietxuatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietxuat', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('MaXuatSP')->unsigned();
            $table->foreign('MaXuatSP')->references('id')->on('xuatsanpham')->onDelete('cascade');
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
        Schema::dropIfExists('chitietxuat');
    }
}
