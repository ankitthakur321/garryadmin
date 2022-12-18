<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    public function index()
    {
        if (Auth::user()) {
            return redirect('admin/dashboard');
        } else {
            return redirect('admin/login');
        }
    }
    public function login()
    {
        if (Auth::user())
            return back();
        else
            return view('admin.index');
    }

    public function dashboard()
    {
        if (Auth::user())
            return view('admin.dashboard');
        else
            return redirect('admin/login');
    }

    public function doLogin(Request $request)
    {
        // Creating Rules for Email and Password
        $rules = array(
            'email' => 'required|email',  // make sure the email is an actual email
            'password' => 'required|alphaNum|min:8'  // password has to be greater than 3 characters and can only be alphanumeric and);
        );

        // checking all field
        $validator = Validator::make($request->all(), $rules);
        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            return redirect('login')->withErrors($validator) // send back all errors to the login form
                ->withInput($request->except('password')); // send back the input (not the password) so that we can repopulate the form
        } else {
            // create our user data for the authentication
            $userdata = array(
                'email' => $request->input('email'),
                'password' => $request->input('password')
            );
            // attempt to do the login
            if (Auth::attempt($userdata)) {
                // validation successful
                $request->session()->regenerate();
                return redirect()->intended('admin/dashboard');
            } else {
                // validation not successful, send back to form
                return back()->with('status', 'Invalid Credentials');
            }
        }
    }

    public function doLogout()
    {
        Auth::logout(); // logging out user
        return redirect('admin/login'); // redirection to login screen
    }
}
