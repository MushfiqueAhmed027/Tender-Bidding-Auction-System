<?php

namespace App\Http\Controllers;
use App\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use Auth;
use Session;
// use Barryvdh\DomPDF\Facade as PDF;
use PDF;

class UserController extends Controller
{



    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    // function __construct()
    // {
    //      $this->middleware('permission:User_Show|User_Create|User_Edit|User_delete', ['only' => ['index','show']]);
    //      $this->middleware('permission:User_Create', ['only' => ['create','store']]);
    //      $this->middleware('permission:User_Edit', ['only' => ['edit','update']]);
    //      $this->middleware('permission:User_delete', ['only' => ['destroy']]);
    // }
    
    public function index(Request $request)
    {
        $users = User::all();
        $users= User::orderBy('id','DESC')->paginate(5);
        // Role::create(['name'=>'admin']);
    //   $permission= Permission::create(['name'=>'User_Show']);
    //   $role= Role::findById(11);
    //   $role->givePermissionTo($permission);
    //   return  auth()->user()->givePermissionTO('User_Create');
        // auth()->user()->assignRole('admin');
        // return auth()->user()->getPermissionsViaRoles();
        // return auth()->user()->getAllPermissions();
        // return User::role('admin');
        return  view('admin.user.index',compact('users')) ->with('i', ($request->input('page', 1) - 1) * 5);;
    }
    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return  view('admin.user.create',compact('roles'));
    }

    
        public function store(Request $request)
        {
            $this->validate($request,[
                'name'=>'required',
                'email'=>'required|email|unique:users',
                'password'=>'required',
                'password_confirmation'=>'required|same:password',
                'roles' => 'required'
                // 'type'=>'required'
            ]);
           
            $request['password'] = Hash::make($request->password);
            unset($request['password_confirmation']);
           $user = User::create($request->all());
           $user->assignRole($request->input('roles'));
           return redirect()->route('user.index') ->with('success','User created successfully');
    }

    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
       return  view('admin.user.edit',compact('user','roles','userRole'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users,email,'.$id,

            // 'password'=>'required',
            // 'password_confirmation'=>'required|same:password',
            'roles' => 'required'
            // 'type'=>'required'
        ]);
        $input = $request->all();
        // if ($request->password===null){
        //     $request['password'] = $user->password;
        // }else{
        //     $request['password'] = Hash::make($request->password);
        // }
        // unset($request['password_confirmation']);
        // $user->update($request->all());
        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();


        $user->assignRole($request->input('roles'));
// dd($user);
        return redirect()->route('user.index');
    }
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.user.show',compact('user'));
    }

    public function destroy($id)
    {
        // $user->delete();
        User::find($id)->delete();
        return redirect()->route('user.index') ->with('success','Contacts deleted successfully');

    }
    public function downloadPDF($id) {
        $user = User::find($id);
        $pdf = PDF::loadView('admin.user.pdf', compact('user'));
        
        return $pdf->download('user.pdf');
}

}
