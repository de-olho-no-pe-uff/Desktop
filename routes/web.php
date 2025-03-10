<?php

use App\Livewire\User\Dashboard;
use App\Livewire\User\Login;
use App\Livewire\User\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Kreait\Firebase\Auth as FirebaseAuth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');
Route::get('/user/dashboard', Dashboard::class)->name('dashboard');
