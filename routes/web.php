<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CreateEventController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MasterclassController;
/*
Route::get('/', function () {
    return view('home');
})->middleware('auth')
->name('home.index');
*/
Route::get('/', [MasterclassController::class, 'home'])
->middleware('auth')
->name('home.index');

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

Route::get('/table', [MasterclassController::class, 'events'])
->middleware('auth.admin')
->name('table');

Route::get('/profile', [ProfileController::class, 'index'])
->middleware('auth')
->name('profile.index');

Route::get('/createEvent', [CreateEventController::class, 'index'])
->middleware('auth.admin')
->name('createEvent.index');



Route::get('master', [MasterclassController::class, 'index']);

Route::post('event', [MasterclassController::class, 'createEvent'])->name('event.createEvent');

Route::get('event/{masterClass}/edit', [MasterclassController::class, 'edit'])->name('event.edit'); 
Route::put('event/{masterClass}', [MasterclassController::class, 'update'])->name('event.update');
Route::delete('event/{masterClass}', [MasterclassController::class, 'destroy'])->name('event.destroy');
