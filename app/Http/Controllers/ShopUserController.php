<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\shopUser;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;

class ShopUserController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shopuser = shopUser::orderBy('status', 'DESC')->get();

        return view('shopuser.index', compact('shopuser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'name' => 'required',
            'firstname' => 'required|min:4',
            'lastname' => 'required|min:4',
            'phone' => 'required|min:9',
            'price' => 'required'
        );
        $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {
            return response()->json(['error' => $error->errors()->all()]);
        }
      
        $data = $request->validate([
            'name' => 'required',
            'firstname' => 'required|min:4',
            'lastname' => 'required|min:4',
            'phone' => 'required|min:9',
            'price' => 'required'
        ]);

        try {
            shopUser::create([
                'name' => $request->name,
                'firstname'=> $request->firstname,
                'lastname' => $request->lastname,
                'phone' => $request->phone,
                'phone' => $request->phone,
                'status' => 1,
                'price' => $request->price
            ]);

            return response()->json([
                'msg' => 'success'
            ]);

        } catch (\Exception $exception) {
            return response()->json($exception);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function orderStatusUpdate($id)
    {
       
        try {
            shopUser::whereId($id)->update(['status' => 0]);

            return response()->json([
                'message' => 'success',
            ]);
        }
        catch (\Exception $exception) {
            return response()->json(['message' => $exception]);
        }
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
