<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',[HomeController::class, 'index']);
Route::get('/',[HomeController::class, 'show']);

Route::post('/',[HomeController::class, 'Add']);

Route::get('/{id}/edit',[HomeController::class, 'edit']);
Route::put('/{id}',[HomeController::class, 'update']);

Route::delete('/{id}',[HomeController::class, 'destroy']);
