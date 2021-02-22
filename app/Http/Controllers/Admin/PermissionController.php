<?php

namespace App\Http\Controllers\Admin;

use App\Models\model\admin\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = permission::all();
        return view ('admin.permission.show',compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.permission.permission');
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
            'name' =>'required|max:50|unique:permissions',
             'for' =>'required'
           ]);
           $permission = new permission;
           $permission->name = $request->name;
           $permission->for = $request->for;

           $permission->save();

           return redirect(route('permission.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\model\admin\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\model\admin\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission $permission)
    {
        $permission=permission::find($permission->id);
        return view('admin.permission.edit ',compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\model\admin\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permission)
    {
        $this->validate($request,[
            'name' =>'required',
            'for' =>'required'

           ]);
           $permission = permission::find($permission->id);;
           $permission->name = $request->name;
           $permission->for = $request->for;

           $permission->save();

           return redirect(route('permission.index'))->with('massage','Permission updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\model\admin\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        permission::where('id',$permission->id)->delete();
        return redirect()->back()->with('massage','Permission delited');
    }
}
