<?php

namespace App\Http\Controllers;
// use App\Permission;
// use App\Role;
// use DB;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Response;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;
use Auth;
use Session;
// use Gate;
// use Symfony\Component\HttpFoundation\Response;
class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:role_show');
         $this->middleware('permission:role_create', ['only' => ['create','store']]);
         $this->middleware('permission:role_edit', ['only' => ['edit','update']]);
         $this->middleware('permission:role_delete', ['only' => ['destroy']]);
    }
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index(Request $request)
    {
       // $page_name = 'Roles';
      
        $data = Role::all();
        $data = Role::orderBy('id','DESC')->paginate(5);
        return view('admin.role.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // $page_name = 'Role Create';
        // $permission = Permission::pluck('name','id');
        // abort_if(Gate::denies('role_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $permission = Permission::get();
        return view('admin.role.create',compact('permission'));
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
            'name' => 'required |unique:roles,name',
            'permission' => 'required',
            // 'permission' => 'required|array',
          //  'permission.*' => 'required|string'   
   
           ],[
              'name.required' => "Name field is required",
              'permission.required' => "You must select Permissions",
          //    'permission.*.required' => "You must Select a permission"
   
           ]);
        
        //    $role = new Role();
        //    $role->name = $request->name;
        //    $role->role_name = $request->role_name;
        //    $role->save();
        //    foreach ($request->permission as $value) {
        //        $role->attachPermission($value);
        //    }
      // $role=Role::create(['name'=>$request->role]);
      $role = Role::create(['name' => $request->input('name')]);
      $role->syncPermissions($request->input('permission'));
      return redirect()->action('RoleController@index')->with('success','Roles Created Successfully');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // abort_if(Gate::denies('role_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
      $data = Role::find($id);
      $rolePermissions = Permission::join("role_has_permissions","role_has_permissions.permission_id","=","permissions.id")
          ->where("role_has_permissions.role_id",$id)
          ->get();


      return view('admin.role.show',compact('data','rolePermissions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      //  $page_name = 'Role Edit';
    //   abort_if(Gate::denies('role_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $role = Role::find($id);
        $permission = Permission::get();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$id)
            ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
            ->all();
        // $permission = Permission::pluck('name','id');
        // $selectedPermission = DB::table('permission_role')->where('permission_role.role_id',$id)->pluck('permission_id')->toArray();
        return view('admin.role.edit',compact('role','permission','rolePermissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'permission' => 'required',
            // 'permission' => 'required|array',
            // 'permission.*' => 'required'   
   
           ],[
              'name.required' => "Name field is required",
              'permission.required' => "You must select Permissions",
            //   'permission.*.required' => "You must Select a permission"
   
           ]);
        
           $role = Role::find($id);
           $role->name = $request->input('name');
        //    $role->role_name = $request->role_name;
           $role->save();
           $role->syncPermissions($request->input('permission'));
        //    DB::table('permission_role')->where('role_id',$id)->delete();
        //    foreach ($request->permission as $value) {
        //        $role->attachPermission($value);
        //    }
   
     return redirect()->action('RoleController@index')->with('success','Roles Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // abort_if(Gate::denies('role_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        // Role::where('id',$id)->delete();
        DB::table("roles")->where('id',$id)->delete();
         return redirect()->action('RoleController@index')->with('success','Roles Delete Successfully');
    }
}
