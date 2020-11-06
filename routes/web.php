<?php

use Illuminate\Support\Facades\Route;

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



Auth::routes();

Route::get('/', [App\Http\Controllers\MainController::class, 'index']);
Route::get('/list/{id}', [App\Http\Controllers\MainController::class, 'lists']);
Route::get('/add', [App\Http\Controllers\MainController::class, 'showAdd']);
Route::post('/add_post', [App\Http\Controllers\MainController::class, 'add'])->name('add');

Route::get('/logout', [App\Http\Controllers\MainController::class, 'logout'])->name('log');


