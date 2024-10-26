<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('mon', function (Blueprint $table) {
            $table->id('MaMon'); // Primary Key
            $table->string('TenMon', 100);
            $table->unsignedBigInteger('MaLoai'); // Foreign Key for loaimon
            $table->text('MoTa')->nullable();
            $table->float('DonGia');
            $table->string('Hinh', 255)->nullable();
            
            $table->foreign('MaLoai')->references('MaLoai')->on('loaimon')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mon');
    }
};
