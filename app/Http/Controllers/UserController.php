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
    // اعتبارسنجی ورودی ها
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:25',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6|confirmed',
        'password_confirmation' => 'required'
    ]);

    // پروسه اعتبارسنجی
    if ($validator->fails()) {
        return back()->withErrors($validator)->withInput();
    }

    try {
    // استخراج داده ها : یعنی داده های معتبر از اعتبار سنجی استخراج میشوند

        $validatedData = $validator->validated();
        $userEmail = $validatedData['email'];
        $name = $validatedData['name'];
        $password = bcrypt($validatedData['password']); // هش کردن پسورد

        // ایجاد کد شش رقمی تصادفی
        $code = rand(100000, 999999);

        // ارسال کد از طریق ایمیل
        Mail::to($userEmail)->send(new CodeMail($code, $name));

        // ساختن یک کش برای نگه داشتن اطلاعات کاربر به مدت ده دقیقه
        Cache::put('user_data_' . $code, [
            'code' => $code,
            'name' => $name,
            'email' => $userEmail,
            'password' => $password
        ], now()->addMinutes(10));

        // پاسخ به کاربر
        return back()->with([
            'MessageTransaction' => __('commenMessages.Send code successfully'),
            'codeToEmail' => $code,
            'Result' => true
        ]);

    }
    // مدیریت خطا ها
    catch (\Exception $e) {
        Log::error('Error sending email: ' . $e->getMessage());
        return back()->with([
            'MessageTransaction' => __('commenMessages.Sending code has issue'),
            'Result' => false
        ]);
    }
}

public function SendCodeToRegisterUser(Request $request)
{
    $code = $request->input('emailCode'); 

    if (Cache::has('user_data_' . $code)) { //بررسی وجود کد در کش
        // اگر داده در کش وجود داشت
        $userData = Cache::get('user_data_' . $code);

        // دسترسی به داده های ذخیره شده
        $name = $userData['name'];
        $email = $userData['email'];
        $password = $userData['password'];

        // ایجاد کاربر جدید
        $newUser = new User();
        $newUser->name = $name;
        $newUser->email = $email;
        $newUser->password = $password; // پسورد هش شده است
        $newUser->email_verified_at = now(); // اضافه کردن زمان تایید ایمیل

        if ($newUser->save()) {
            session()->flush(); // پس از ذخیره کاربر جدید کل سشن ها حذف خواهند شد
            return back()->with([
                'MessageTransaction' => __('commenMessages.Register was successful'), //پیام :ثبت نام با موفقیت انجام شد
                'sendCodeSuccess' => true,
                'ResultSendCode' => true
            ]);
        } 
        // اگر کاربر جدید ذخیره نشد
        else {
            return back()->with([
                'MessageTransactionSendCode' => __('commenMessages.Register has problem'), // پیام : ثبت نام مشکل دارد
                'ResultSendCode' => false
            ]);
        }
    } else {
        // اگر داده در کش وجود نداشت
        return back()->with([
            'MessageTransactionSendCode' => __('commenMessages.Sent code is incorrect or expired'), // پیام : کد ارسال شده نادرست است یا زمان آن منقضی شده است
            'ResultSendCode' => false
        ]);
    }
}



}
