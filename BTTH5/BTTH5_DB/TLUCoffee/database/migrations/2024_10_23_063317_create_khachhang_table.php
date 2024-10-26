<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('khachhang', function (Blueprint $table) {
            $table->id('MaKH');
            $table->string('TenDN', 20);
            $table->string('MatKhau', 32);
            $table->string('HoTen', 50);
            $table->string('DiaChi', 50)->nullable();
            $table->string('DienThoai', 11)->nullable();
            $table->string('Email', 30)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('khachhang');
    }
};
