<?php

namespace App\Http\Controllers;

use App\Models\OurBlog;
use Illuminate\Http\Request;

class OurBlogController extends Controller
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
        $ourBlog = OurBlog::all();

        return view('our_blog.index', compact('ourBlog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('our_blog.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ourBlog = OurBlog::all();

        $data = $request->validate([
            'name' => 'required',
            'text' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg'
        ]);
        $img = $request->file('photo');
        $img_name = rand().'.'.$img->getClientOriginalExtension();
        $img->move(public_path('upload/our_blog/'), $img_name);

        try {
            OurBlog::create([
                'name' => $request->name,
                'text'=> $request->text,
                'photo' => $img_name
            ]);

            return redirect()->route('ourBlog.index');

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
        $ourBlog = OurBlog::findOrFail($id);
        return view('our_blog.edit', compact('ourBlog'));
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
        $image_name = $request->photo_hidden;
        $image = $request->file('photo');
        if ($image) {
            $data = $request->validate([
            'name' => 'required',
            'text' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg'
            ]);
        
        $img = $request->file('photo');
        $img_name = rand().'.'.$img->getClientOriginalExtension();
        $img->move(public_path('upload/our_blog/'), $img_name);
        }else{
            $data = $request->validate([
                'name' => 'required',
                'text' => 'required'
                ]);
        }

        if($data) {
            $form_data = array(
                'name'  => $request->name,
                'text'  => $request->text,
                'photo' =>  $image_name
            );
    
            OurBlog::whereId($request->id)->update($form_data);
    
            return redirect()->route('ourBlog.index');
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
        $ourBlog = OurBlog::findOrFail($id);
        $ourBlog->delete();
        return redirect()->route('ourBlog.index');
    }
}
