<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('hoadon', function (Blueprint $table) {
            $table->id('MaHD'); // Primary Key
            $table->dateTime('NgayDat');
            $table->dateTime('ThoiGianGiaoDuKien')->nullable();
            $table->string('DiaChiGiaoHang', 255);
            $table->unsignedBigInteger('MaKH'); // Foreign Key for khachhang
            $table->enum('TinhTrang', ['Pending', 'Shipped', 'Delivered']);
            
            $table->foreign('MaKH')->references('MaKH')->on('khachhang')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hoadon');
    }
};
