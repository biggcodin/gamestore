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
    Mail::to($userEmail)->send(new CodeMail($code, $name));
    
    // create a cache variable to save user data for 10 minutes
    Cache::put('user_data_' . $code, [
    'code' => $code,
    'name' => $name,
    'email'=>$userEmail,
    'password' => $password
    ], now()->addMinutes(10));
    
    return back()->with([
    'MessageTransaction' => __('commenMessages.Send code successfully'),
    'codeToEmail' => $code,
    'Result' => true
    ], 200);
    } catch (\Exception $e) {
    Log::error('Error sending email: ' . $e->getMessage());
    // return back()->withErrors(['error' => 'Failed to send email. Please try again.']);
    return back()->with([
        'MessageTransaction' => __('commenMessages.Sending code has issue'),
        'Result' => false
        ], 200);
    }
    } else {
    // return back()->withErrors($validator);
    return back()->with([
        'MessageTransaction' =>$validator,
        'Result' => false
        ], 200);
    }
    }

    public function SendCodeToRegisterUser(Request $request)
    {
        $code = $request->input('emialCode');
    
        if (Cache::has('user_data_' . $code)) {
            // داده‌ها در کش وجود دارند
            $userData = Cache::get('user_data_' . $code);
    
            // دسترسی به داده‌های ذخیره شده
            $code = $userData['code'];
            $name = $userData['name'];
            $password = $userData['password'];
            $email = $userData['email'];
    
            // ایجاد کاربر جدید
            $newUser = new User();
            $newUser->name = $name;
            $newUser->email = $email;
            $newUser->password = $password;
    
            if ($newUser->save()) {
                session()->flush(); // حذف تمام داده‌های سشن بعد از ذخیره موفقیت‌آمیز
                return back()->with([
                    'MessageTransaction' => __('commenMessages.Register is successful'),
                    'sendCodeSuccess' => true,
                    'ResultSendCode' => true
                ]);
            } else {
                return back()->with([
                    'MessageTransactionSendCode' => __('commenMessages.Register has problem'),
                    'ResultSendCode' => false
                ]);
            }
    
        } else {
            // داده‌ها در کش وجود ندارند
            return back()->with([
                'MessageTransactionSendCode' => __('commenMessages.Sent code is incorrect or expired'),
                'ResultSendCode' => false
            ]);
        }
    }
    
            
    
}
