<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shoe;

class MenshoesController extends Controller
{
    public function showMenShoes()
    { 
        return view('pages.subpages.men_shoes');
    }

    public function getMenShoes()
    {
        $shoes = Shoe::all(); // ดึงข้อมูลทั้งหมดจากตาราง menshoes
    return response()->json($shoes);
    }
}
