<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CreateEventController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MasterclassController;

Route::get('/', function () {
    return view('landing');
});



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

Route::get('/profile', [ProfileController::class, 'index'])
->middleware('auth')
->name('profile.index');

Route::get('/createEvent', [CreateEventController::class, 'index'])
->middleware('auth.admin')
->name('createEvent.index');



Route::get('master', [MasterclassController::class, 'index']);

Route::post('createEvent', [MasterclassController::class, 'create_master']);

Route::get('master/{masterClass}/edit', [MasterclassController::class, 'update_master']); 
Route::put('master/{masterClass}', [MasterclassController::class, 'update']);
