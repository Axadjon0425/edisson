<?php

namespace App\Http\Controllers;
use App\Models\shop;
use Illuminate\Http\Request;

class ShopController extends Controller
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
        $shop = shop::all();

        return view('shopAdmin.index  ', compact('shop'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $shop = shop::all();
        return view('shopAdmin.add', compact('shop'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $shop = shop::all();

        $data = $request->validate([
            'name' => 'required',
            'text' => 'required',
            'price' => 'required|numeric',
            'photo' => 'required|image|mimes:jpeg,png,jpg'
        ]);
        
        $image = $request->file('photo');
        $image_name = rand().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('upload/shop/'), $image_name);

        try{
            shop::create([
                'name' => $request->name,
                'text' => $request->text,
                'price' => $request->price,
                'photo' => $image_name
            ]);

            return redirect()->route('shopAdmin.index');

        }catch(\Exception $exception){
            return $exception;
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
        $shop = shop::findOrFail($id);
        return view('shopAdmin.edit', compact('shop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $shopAdmin)
    {
        $image_name = $request->photo_hidden;
        $img = $request->file('photo');

        if ($img) {
            $data = $request->validate([
                'name' => 'required',
                'text' => 'required',
                'price' => 'numeric|min:4',
                'photo' => 'required|image|mimes:jpeg,png,jpg'
            ]);
            unlink('upload/shop/'.$image_name);
            $image_name = rand().'.'.$img->getClientOriginalExtension();
            $img->move(public_path('upload/shop/'), $image_name);

        }else{
            $data = $request->validate([
                'name'  => 'required',
                'text' => 'required',
                'price' => 'numeric|min:4'
            ]);
        }

        if ($data) {
            $form_data = array(
                'name'  => $request->name,
                'text' => $request->text,
                'price' => $request->price,
                'photo' => $image_name
            );

            shop::whereId($shopAdmin)->update($form_data);
            return redirect()->route('shopAdmin.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($shopAdmin)
    {
        $shop = shop::findOrFail($shopAdmin);

        $image_path = public_path()."upload/shop/".$shop->photo;
        if (file_exists($image_path)) {
            unlink($image_path);
        }

        $shop->delete();
        return redirect()->route('shopAdmin.index');
    }
}
