<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class shopBuyController extends Controller
{
    public function index($id)
    {
        $shop = DB::table('shop AS s')
        ->select('s.*')
        ->where('s.id', $id)
        ->first();
        // dd($shop);
        return view('shopBuy.index', compact('shop'));
    }
}
