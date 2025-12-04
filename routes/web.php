<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth as FacadesAuth;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('register', [AuthController::class,'showRegister'])->name('register');
Route::post('register', [AuthController::class,'register']);
Route::get('login', [AuthController::class,'showLogin'])->name('login');
Route::post('login', [AuthController::class,'login']);
Route::post('logout', [AuthController::class,'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function() {
        $user = FacadesAuth::user();
        if ($user->role === 'admin') {
            return redirect()->route('admin.users.index');
        }
        return view('user.dashboard');
    })->name('dashboard');

    Route::get('profile/edit', [ProfileController::class,'edit'])->name('profile.edit');
    Route::post('profile/update', [ProfileController::class,'update'])->name('profile.update');
});

// Admin routes
Route::middleware(['auth','is_admin'])->prefix('admin')->name('admin.')->group(function() {
    Route::get('users', [AdminController::class,'index'])->name('users.index');
    Route::get('users/{user}/edit', [AdminController::class,'edit'])->name('users.edit');
    Route::post('users/{user}/update', [AdminController::class,'update'])->name('users.update');
    Route::post('users/{user}/delete', [AdminController::class,'destroy'])->name('users.delete');
});
