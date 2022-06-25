<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Main;

class MainController extends Controller
{
    
     public function __construct()
    {
        $this->middleware('auth');
    }
     
    public function index()
    {   
         $main = Main::first();
        return view('pages.main',compact('main'));
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
    public function update(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'sub_title' => 'required',

        ]);
       $main = Main::first();
       $main->title = $request->title;
       $main->sub_title = $request->sub_title;
       

       if($request->file('image'))
       {
        $img_file = $request->file('image');
        $img_file->storeAs('public/img/','image.'.$img_file->getClientOriginalExtension());
        $main->image = 'storage/img/image.'.$img_file->getClientOriginalExtension();
       }
       $main->save();
       return redirect()->route('admin.main')->with('success',' Data has Been Updated SuccessFully !!');
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
