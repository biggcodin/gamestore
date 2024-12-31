<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class PanelController extends Controller
{
        public function show()
        {
            $user = Auth::user(); // گرفتن اطلاعات کاربر جاری
            return view('profile.show', compact('user'));
        }
    
        public function update(Request $request)
        {
            $user = Auth::user();
    
            // اعتبارسنجی ورودیها
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255|unique:users,email,' . $user->id,
                'phone_number' => 'nullable|string|max:15',
            ]);
    
            // بروزرسانی اطلاعات کاربر
            $user->update($request->only('name', 'email', 'phone_number'));
    
            return redirect()->route('profile.show')->with('success', 'اطلاعات با موفقیت بروزرسانی شد.');
        }
    }




