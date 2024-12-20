<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\Auth;
use App\Livewire\User\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth', Auth::class)->name('auth');
Route::get('/dashboard', Dashboard::class)->name('dashboard');
