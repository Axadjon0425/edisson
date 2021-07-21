<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ServiceLearnMoreController extends Controller
{
    public function index($id)
    {
        $service = DB::table('services AS s')
        ->select('s.*')
        ->where('s.id', $id)
        ->get();
        return view('service_learnMore.index', compact('service'));
    }
}
