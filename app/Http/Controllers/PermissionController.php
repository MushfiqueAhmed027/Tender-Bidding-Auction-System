<?php

namespace App\Http\Controllers;

// use App\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;
use Auth;
use Session;
class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    function __construct()
    {
         $this->middleware('permission:permission_show|permission_create|permission_edit|permission_delete', ['only' => ['index','show']]);
         $this->middleware('permission:permission_create', ['only' => ['create','store']]);
         $this->middleware('permission:permission_edit', ['only' => ['edit','update']]);
         $this->middleware('permission:permission_delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $data = Permission::with('roles')->get();
       return view('admin.permission.index',compact('data'));
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $roles=Role::all();
        return view('admin.permission.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [ 
            'name'=>'required',
          ],[
            'name.required'=>"Name Field is Required",
        //     'name.alpha_num'=>"Name field accpets alpha numeric charaters"
           ]); 
         
           $permission = new Permission();
           $permission->name = $request->name;
           $permission->save();
        //  $permission = Permission::create(['name'=>$request->permission]);
        //  $permission->save();
        // 
        // foreach($request->roles as $value){
        // $role=Role::find($value);
        // $permission->assignRole($role);
        // }
         return redirect()->action('PermissionController@index')->with('success',"Permission Created Successfully");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permission = Permission::find($id);
        return view('admin.permission.edit',compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [ 
            'name'=>'required|alpha_num'
          ],[
            'name.required'=>"Name Field is Required",
            'name.alpha_num'=>"Name field accpets alpha numeric charaters"
           ]); 
         
        //  $permission = Permission::find($id);
        //  $permission->name = $request->name;
         $permission->name = $request->name;
         $permission=syncRoles($request->roles);
        //  $permission->save();
         return redirect()->action('PermissionController@index')->with('success',"Permission Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $permission = Permission::find($id);
        $permission->delete();
        return redirect()->action('PermissionController@index')->with('success',"Permission Deleted Successfully");
    }
}
