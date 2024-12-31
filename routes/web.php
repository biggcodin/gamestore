<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\LoginController as AdminLoginController;
use App\Http\Controllers\admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\frontController;

// User account routes
Route::group(['prefix' => 'account'], function () {
    // Guest middleware
    Route::group(['middleware' => 'guest'], function () {
        Route::get('login', [LoginController::class, 'index'])->name('account.login');
        Route::get('register', [LoginController::class, 'register'])->name('account.register');
        Route::post('process-register', [UserController::class, 'RegisterByEmail'])->name('account.RegisterByEmail');
        Route::post('authenticate', [LoginController::class, 'authenticate'])->name('account.authenticate');
    });

    // Authenticated middleware
    Route::group(['middleware' => 'auth'], function () {
        Route::get('logout', [LoginController::class, 'logout'])->name('account.logout');
        Route::get('dashboard', [DashboardController::class, 'index'])->name('account.dashboard');
    });
});

// User-related actions
Route::controller(UserController::class)->group(function () {
    Route::post('send-code-to-user', 'SendCodeToUserByEmail')->name('SendCodeToUserByEmail');
    Route::post('send-code-to-register', 'SendCodeToRegisterUser')->name('SendCodeToRegisterUser');
});

// Frontend routes
Route::controller(frontController::class)->group(function () {
    Route::get('index', 'index')->name('index');
});

// Admin routes
Route::group(['prefix' => 'admin'], function () {
    // Guest middleware for admin
    Route::group(['middleware' => 'admin.guest'], function () {
        Route::get('login', [AdminLoginController::class, 'index'])->name('admin.login');
        Route::post('authenticate', [AdminLoginController::class, 'authenticate'])->name('admin.authenticate');
    });

    // Authenticated middleware for admin
    Route::group(['middleware' => 'admin.auth'], function () {
        Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
    });
});



//user panel


    Route::get('panel', [PanelController::class, 'show'])->name('user.panel');

    Route::get('setting', [PanelController::class, 'update'])->name('user.setting');
    



Route::middleware('auth')->group(function () {
    Route::get('/profile', [PanelController::class, 'show'])->name('profile.show');
    Route::post('/profile', [PanelController::class, 'update'])->name('profile.update');
});