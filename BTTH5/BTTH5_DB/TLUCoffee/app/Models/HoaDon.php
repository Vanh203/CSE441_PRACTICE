<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    use HasFactory;
    protected $table = 'hoadon';

    protected $fillable = [
        'NgayDat',
        'ThoiGianGiaoDukien',
        'DiaChiGiaoHang',
        'MaKH',
        'TinhTrang'
    ];

    public function khachhang()
    {
        return $this->belongsTo(KhachHang::class, 'MaKH', 'MaKH');
    }

    public function chitiethd()
    {
        return $this->hasMany(ChiTietHD::class, 'MaHD', 'MaHD');
    }
}