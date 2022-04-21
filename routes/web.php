<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterclassController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('master', [MasterclassController::class, 'index']);

Route::post('master', [MasterclassController::class, 'create_master']);

Route::get('master/{id}/edit', [MasterclassController::class, 'update_master']);