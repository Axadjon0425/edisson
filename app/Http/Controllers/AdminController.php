<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('admin.index');
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
        //
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
    public function edit()
    {
        $user = Auth::user();
        $username = $user->username;
        return view('admin.edit', compact('username'));
    }

    /**
     * Update admin password
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function password_update(Request $request)
    {
        $validator =  Validator::make($request->all(), [
            'username'  => ['required', 'string', 'min:5'],
            'password'  => ['required', 'min:5'],
            'password_confirm' => ['required_with:password', 'same:password', 'min:5']
        ]);

        if (!$validator->passes())
        {
            $user = Auth::user();
            $username = $user->username;
            $error = $validator->errors()->toArray();
            return response()->json(['error'=> $error]);
        } 
        else
        {
            $user = Auth::user();
            $id = $user->id;

            $s = User::findOrFail($id);

            $s->fill([
                'password' => Hash::make($request->password),
            ]);
            $s->save();

            // return redirect()->route('admin');
            return response()->json(['success'=> 1]);
            
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
