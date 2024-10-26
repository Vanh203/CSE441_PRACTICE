<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChiTietHD extends Model
{
    // Tên bảng trong cơ sở dữ liệu
    protected $table = 'chitiethd';
    public $incrementing = false;

    // Cấu hình các cột có thể được điền
    protected $fillable = [
        'MaMon',
        'MaHD',
        'SoLuong'
    ];

    // Khóa chính là một cặp gồm MaMon và MaHD
    protected $primaryKey = ['MaMon', 'MaHD'];

    // Quan hệ với bảng `mon`
    public function mon()
    {
        return $this->belongsTo(Mon::class, 'MaMon', 'MaMon');
    }

    // Quan hệ với bảng `hoadon`
    public function hoadon()
    {
        return $this->belongsTo(HoaDon::class, 'MaHD', 'MaHD');
    }
}