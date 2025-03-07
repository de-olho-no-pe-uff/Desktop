<?php

use App\Livewire\User\Login;
use App\Livewire\User\Register;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');

Route::get('/hora', function () {
    return response()->json([
        'php_time' => date('Y-m-d H:i:s'),
        'laravel_time' => now()->toDateTimeString(),
    ]);
});
