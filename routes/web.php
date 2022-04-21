<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;


Route::get('/', function () {
<<<<<<< HEAD
    return view('landing');
=======
    return view('home');
})->middleware('auth');



Route::get('/register', [RegisterController::class, 'create'])
->middleware('guest')
->name('register.index');


Route::post('/register', [RegisterController::class, 'data'])
->name('register.data');


Route::get('/login', [LoginController::class, 'create'])
->middleware('guest')
->name('login.index');

Route::post('/login', [LoginController::class, 'data'])
->name('login.data');

Route::get('/logout', [LoginController::class, 'destroy'])
->middleware('auth')
->name('login.destroy');

Route::get('/table', [AdminController::class, 'index'])
->middleware('auth.admin')
->name('table');



/* Route::get('/table', function () {
    return view('table');
}); */



Route::get('/createEvent', function () {
    return view('createEvent');
>>>>>>> dani/dev
});

