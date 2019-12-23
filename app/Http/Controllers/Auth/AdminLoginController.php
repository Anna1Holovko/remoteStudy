<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
    //    $this->middleware('guest:admin', ['except'=>['logout']]);
    }
    public function showLoginForm()
    {
        return view('auth.admin-login');
    }

    public function login(Request $request)
    {
        //validate the form data
         $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        //attempt the log the user in
      if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {

        //if successful, then redirect to their intended location
            // return redirect()->intended(route('admin.dashboard'));
        return redirect('/machart');
       }

        // if unsuccessful, then redirect to the login with the form 
        return redirect()->back()->withInput($request->only('email', 'remember'));


        //return true;
    }


           public function logout()
    {

        Auth::guard('admin')->logout();
        return redirect('/');
    }


}



//if u used middleware('guest') it will not let u access the Admin Login form while logged in as a user 

//with middleware('guest:admin') it allows us to access this form, even thought we r logged in as a user, because we r still a guest in the admin guard