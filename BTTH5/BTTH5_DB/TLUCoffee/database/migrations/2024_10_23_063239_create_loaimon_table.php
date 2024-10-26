<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('loaimon', function (Blueprint $table) {
            $table->id('MaLoai'); // Primary Key
            $table->string('TenLoai', 50);
            $table->text('MoTa')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('loaimon');
    }
};
