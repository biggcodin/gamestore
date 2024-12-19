<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;
use App\Mail\CodeMail;
use Illuminate\Support\Facades\Log;



class UserController extends Controller
{
    public function SendCodeToUserByEmail(Request $request)
    {
    // validation
    $validator = Validator::make($request->all(), [
    'name' => 'required|max:25',
    'email' => 'required|email|unique:users',
    'password' => 'required|min:6|confirmed',
    'password_confirmation' => 'required'
    ]);
    
    if ($validator->passes()) {
    try {
    // Get Variables from validator
    $validatedData = $validator->validated();
    $userEmail = $validatedData['email'];
    $name = $validatedData['name'];
    $password = $validatedData['password'];
    
    // create a 6 digits code
    $code = rand(100000, 999999);
    
    // send this code to user based on his/her email
    Mail::to($userEmail)->send(new CodeMail($code));
    
    // create a cache variable to save user data for 10 minutes
    Cache::put('user_data_' . $code, [
    'code' => $code,
    'name' => $name,
    'password' => $password
    ], now()->addMinutes(10));
    
    return back()->with([
    'MessageSuccess' => __('commenMessages.Send code successfully'),
    'codeToEmail' => $code,
    'Result' => false
    ], 200);
    } catch (\Exception $e) {
    Log::error('Error sending email: ' . $e->getMessage());
    return back()->withErrors(['error' => 'Failed to send email. Please try again.']);
    }
    } else {
    return back()->withErrors($validator);
    }
    }
            
    
}
