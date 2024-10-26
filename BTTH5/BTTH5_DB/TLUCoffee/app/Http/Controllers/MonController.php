<?php

namespace App\Http\Controllers;

use App\Models\Mon;
use Illuminate\Http\Request;

class MonController extends Controller
{
    // public function index()
    // {
    //     $mon = Mon::all();
    //     return response()->json($mon);
    // }

    public function getMonByLoaiMon(Request $request)
    {
        $MaLoai = $request->input('MaLoai');
        $mon = Mon::where('MaLoai', $MaLoai)->get();
        return response()->json($mon);
    }
}
