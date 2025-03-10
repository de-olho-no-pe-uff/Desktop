<?php

use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Middleware\UserAuth;
use App\Livewire\User\Dashboard;
use App\Livewire\User\Login;
use App\Livewire\User\Register;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([RedirectIfAuthenticated::class])->group(function(){
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');
});

Route::middleware([UserAuth::class])->group(function(){
    Route::get('/user/dashboard', Dashboard::class)->name('dashboard');
});
