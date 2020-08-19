<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class MultiuserLoginController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
       {
           $this->middleware('guest:multiuser')->except('logout');
       }

       public function login()
       {
           return view('admin.multiuser.login');
       }

       public function loginAdmin(Request $request)
       {
         // Validate the form data
         $this->validate($request, [
           'email'   => 'required|email',
           'password' => 'required|min:6'
         ]);
         // Attempt to log the user in
         if (Auth::guard('multiuser')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
           // if successful, then redirect to their intended location
           return redirect()->intended(route('admin'));
         }
         // if unsuccessful, then redirect back to the login with the form data
         return redirect()->back()->withInput($request->only('email', 'remember'));
       }

       public function logout()
       {
           Auth::guard('multiuser')->logout();
           return redirect()->route('admin.multiuser.login');
       }
}
