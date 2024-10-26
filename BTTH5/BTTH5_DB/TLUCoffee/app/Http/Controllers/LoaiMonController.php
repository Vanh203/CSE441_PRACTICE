<?php

namespace App\Http\Controllers;

use App\Models\LoaiMon;
use Illuminate\Http\Request;

class LoaiMonController extends Controller
{
public function index()
{
    $loaiMons = LoaiMon::all();
    return response()->json($loaiMons);
}
}
