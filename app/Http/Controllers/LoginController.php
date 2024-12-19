<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{

    
    // this method will show the login page
    public function index()
    {

        return view('login');
    }


    // this method will authenticate user
    public function authenticate(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [

            'email' => 'required',
            'password' => 'required|password',
            


        ]);


        if ($validator->passes()) {

            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect()->route('account.dashboard');

            } else {
                return redirect()->route('account.login')->with('error','Either email or password is incorrect');
            }
        } else {

            return redirect()->route('account.login')
                ->withInput()
                ->withErrors($validator);
        }
    }
    //this method will show register page
    public function register()
    {

        return view('register');
    }


    public function processRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:25',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required'

            ]);

        if ($validator->passes()) {

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password =Hash::make($request->password);
            $user->role = 'user';
            $user->save();

            return redirect()->route('account.login')->with('success', 'you have successfully registered ');
        } else {

            return redirect()->route('account.register')
                ->withInput()
                ->withErrors($validator);
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('account.login');

    }
}
