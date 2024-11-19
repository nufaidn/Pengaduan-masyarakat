<?php

use App\Http\Controllers\User\Usercontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [Usercontroller::class, 'index'])->name('ereporthub.index');
Route::get('/register', [Usercontroller::class, 'formRegister'])->name('ereporthub.formregister');

