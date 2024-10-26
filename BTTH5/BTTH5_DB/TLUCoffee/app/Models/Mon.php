<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mon extends Model
{
    use HasFactory;
    protected $table = 'mon';
    protected $fillable = [
        'TenMon',
        'MaLoai',
        'MoTa',
        'DonGia',
        'Hinh'
    ];
    public function loaimon()
    {
        return $this->belongsTo(LoaiMon::class, 'MaLoai', 'MaLoai');
    }
    public function chitiethd()
    {
        return $this->hasMany(ChiTietHD::class, 'MaMon', 'MaMon');
    }
}