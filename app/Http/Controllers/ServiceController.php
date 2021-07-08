<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = Service::all();

        return view('service.index', compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = Service::all();

        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'type' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg'
        ]);
        
        $image = $request->file('photo');
        $image_name = rand().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('upload/services/'), $image_name);
         
        try {
            Service::create([
                'name' => $request->name,
                'description'=> $request->description,
                'photo' => $image_name,
                'type' => $request->type,
            ]);

            return redirect()->route('service.index');

        } catch (\Exception $exception) {
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
        $service = Service::findOrFail($id);
        return view('service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $img_name = $request->photo_hidden;
      $img = $request->file('photo');

      if($img) {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'type' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg'
        ]);
        
        $image = $request->file('photo');
        $image_name = rand().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('upload/services/'), $image_name);
        
      }else{
        $data = $request->validate([
            'name'        => 'required',
            'description' => 'required',
            'type' => 'required',
        ]);
      }

      if($data) {
        $form_data = array(
            'name'          => $request->name,
            'description'   => $request->description,
            'type'          => $request->type ,
            'photo'         => $img_name
        );

        Service::whereId($request->id)->update($form_data);

        return redirect()->route('service.index');
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
        $service = Service::findOrFail($id);
        $service->delete();

        return redirect()->route('service.index');
    }
}
