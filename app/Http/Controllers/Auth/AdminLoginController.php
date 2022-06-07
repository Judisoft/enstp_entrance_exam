<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminLoginController extends Controller
{
    // show login page
    public function showAdminLogin() {
        return view('admin.login');
    }

    //login admin user

    public function postAdminLogin(Request $request) {

        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],
        [
            'email.required' => 'Email is required',
            'password.required' => 'Password is required'
        ]);

        //$user = Auth::getProvider()->retrieveByCredentials($credentials);

        $user = User::where('email', $credentials['email'])->first();

        if(Hash::check($credentials['password'], $user->password)) {
            $welcome_message = "Welcome".' '.$user->first_name;
            session()->flash('success', $welcome_message);
            return redirect('/admin/dashboard'); //->route('admin.dashboard');
        } else {

            return back()->with('error', 'Invalid Credentials');
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect()->route('admin.logout');
    }

    // /**
    //  * Handle response after user authenticated
    //  * 
    //  * @param Request $request
    //  * @param Auth $user
    //  * 
    //  * @return \Illuminate\Http\Response
    //  */
    // protected function authenticated(Request $request, $user) 
    // {
    //     return redirect()->intended();
    // }
}
