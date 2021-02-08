<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\popularp;
class PopularController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $popular = popularp::all();
        return view('admin.popular.show',compact('popular'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.popular.popular');
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
        $historical = new popularp;
        $historical->title = $request->title;
        $historical->price = $request->price;
        $historical->body = $request->body;
        $historical->image = $request->image;
        $historical->save();

        return redirect(route('popular.index'));
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
        $popularp=popularp::where('id',$id)->first();
        return view('admin.popularp.edit ',compact('popularp'));
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
        $historical = popularp::find($id);
        $historical->title = $request->title;
        $historical->price = $request->price;
        $historical->body = $request->body;
        $historical->image = $request->image;
        $historical->save();

        return redirect(route('popular.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        popularp::where('id',$id)->delete();
        return redirect()->back();
    }
}
