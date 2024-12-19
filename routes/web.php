<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;


use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\admin\LoginController as AdminLoginController;
use App\Http\Controllers\admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\UserController;

Route::group(["prefix"=> "account"], function () {

// guest middlware
    Route::group(['middleware' =>'guest'],function(){
        Route::get('login', [LoginController::class, 'index'])->name('account.login');
        Route::get('register', [LoginController::class, 'register'])->name('account.register');
        Route::post('process-register', [UserController::class, 'RegisterByEmail'])->name('account.RegisterByEmail');
        Route::post('authenticate', [LoginController::class, 'authenticate'])->name('account.authenticate');
    });


    //authenticated middleware
    Route::group(['middleware' =>'auth'],function(){

        Route::get('logout', [LoginController::class, 'logout'])->name('account.logout');
        Route::get('dashboard', [DashboardController::class, 'index'])->name('account.dashboard');
    });

});

Route::controller(UserController::class)->group(function () {
Route::post('SendCodeToUserByEmail','SendCodeToUserByEmail')->name('SendCodeToUserByEmail');
    });



//--------------------admin --------------------------


Route::group(["prefix"=> "admin"], function () {

    // guest middlware for admin
        Route::group(['middleware' =>'admin.guest'],function(){
            
                Route::get('loginn', [AdminLoginController::class, 'index'])->name('admin.login');
                Route::post('authenticate', [AdminLoginController::class, 'authenticate'])->name('admin.authenticate');


        });
    
    
        //authenticated middleware for admin
        Route::group(['middleware' =>'admin.auth'],function(){
    
                Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
                Route::get('logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
        
    
            
        });
    
    });


    








//change loginn to login-----------------------------------------------------------------------------------------ERROR






