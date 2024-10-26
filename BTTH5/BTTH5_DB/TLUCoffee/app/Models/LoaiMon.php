<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiMon extends Model
{
    use HasFactory;
    protected $table = 'loaimon';

    protected $fillable = [
        'TenLoai',
        'MoTa'
    ];

    public function mon()
    {
        return $this->hasMany(Mon::class, 'MaLoai', 'MaLoai');
    }

    
}