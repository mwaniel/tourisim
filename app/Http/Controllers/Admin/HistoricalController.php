<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\historicalp;

class HistoricalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function _construct(){
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $historical = historicalp::all();
        return view('admin.historical.show',compact('historical'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.historical.historical');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'price'=>'required',
            'body'=>'required',

        ]);
        $historical = new historicalp;
        $historical->title = $request->title;
        $historical->price = $request->price;
        $historical->body = $request->body;
        $historical->image = $request->image;
        $historical->save();

        return redirect(route('historical.index'));
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
        $historical=historicalp::where('id',$id)->first();
        return view('admin.historical.edit ',compact('historical'));
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
        $this->validate($request,[
            'title'=>'required',
            'price'=>'required',
            'body'=>'required',

        ]);
        $historical = historicalp::find($id);
        $historical->title = $request->title;
        $historical->price = $request->price;
        $historical->body = $request->body;
        $historical->image = $request->image;
        $historical->save();

        return redirect(route('historical.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        historicalp::where('id',$id)->delete();
        return redirect()->back();
    }
}
