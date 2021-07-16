<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Client;
use App\Models\OurBlog;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    
public function index()
{
    $service = Service::all();
    $ourBlog = OurBlog::all();
    return view('guest.index', compact('service'), compact('ourBlog') );
}

public function aboutUs()
{
    return view('guest.aboutUs');
}

public function ourTeam()
{
    return view('guest.ourTeam');
}

public function service()
{    
    // $service = Service::all();

    $service = DB::table('services AS s')
    ->select('s.*')
    ->where('s.type', 1)
    // ->leftJoin('room AS r', 'r.serice_id', '=', 's.id')
    ->orderBy('s.created_at', 'DESC')
    ->get();

    // dd($s);

    return view('guest.service', compact('service'));
}

public function project()
{
    return view('guest.project');
}

public function contactUs()
{
    return view('guest.contact');
}

public function client()
{    
    $client = Client::all();
    return view('guest.client', compact('client'));
}

public function OurBlog()
{    
    $ourBlog = OurBlog::all();
    return view('guest.ourBlog', compact('ourBlog'));
}

}


