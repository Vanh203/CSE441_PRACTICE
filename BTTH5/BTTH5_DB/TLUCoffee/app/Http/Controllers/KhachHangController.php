<?php

namespace App\Http\Controllers;

use App\Models\KhachHang;
use Illuminate\Http\Request;

class KhachHangController extends Controller
{
public function index()
{
    $khachHangs = KhachHang::all();
    return response()->json($khachHangs);
}
}
