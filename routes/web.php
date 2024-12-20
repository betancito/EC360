<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth', Auth::class)->name('auth');
