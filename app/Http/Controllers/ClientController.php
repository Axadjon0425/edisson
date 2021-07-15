<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = Client::all();

        return view('client.index', compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = Client::all();

        $data = $request->validate([
            'name'    => 'required',
            'phone'  =>'required', 
            'company' => 'required'

        ]);
        try {
            Client::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'company' => $request->company,
                'service_id' => 1,
            ]);

            return redirect()->route('client.index');

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
        $client = Client::findOrFail($id);
        return view('client.edit', compact('client'));
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
        $data = $request->validate([
            'name'    => 'required',
            'phone'  =>'required', 
            'company' => 'required'

        ]);
        if($data){
            $form_data = array(
                'name' => $request->name,
                'phone' => $request->phone,
                'company' => $request->company,
                'service_id' => 1,
            );
            Client::whereId($request->id)->update($form_data);
            return redirect()->route('client.index');
        };
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::findOrFail($id);

        return redirect()->route('client.index');
    }
}
