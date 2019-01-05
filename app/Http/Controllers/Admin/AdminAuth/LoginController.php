<?php

namespace App\Http\Controllers\Admin\AdminAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
     protected $redirectTo = '/';

     public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        $credential = [
            'email' => $request->email,
            'password' => $request->password
        ];

        // Attempt to log the user in
        if (Auth::guard('admin')->attempt($credential, $request->member)){
            // If login succesful, then redirect to their intended location
            return redirect()->intended(route('admin.dashboard'));
        }
        // If Unsuccessful, then redirect back to the login with the form data
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

}
