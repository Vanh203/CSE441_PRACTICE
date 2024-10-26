<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('chitiethd', function (Blueprint $table) {
            $table->id('SoDH'); // Primary Key
            $table->unsignedBigInteger('MaMon'); // Foreign Key for mon
            $table->unsignedBigInteger('MaHD');  // Foreign Key for hoadon
            $table->integer('SoLuong');
            
            $table->foreign('MaMon')->references('MaMon')->on('mon')->onDelete('cascade');
            $table->foreign('MaHD')->references('MaHD')->on('hoadon')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('chitiethd');
    }
};
