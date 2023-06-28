<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\piutangController;

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


Route::get('/', [piutangController::class, 'index']);
Route::get('/piutang/create', [piutangController::class, 'create']);
Route::post('/piutang/store', [piutangController::class, 'store']);
Route::get('/piutang/edit/{id}', [piutangController::class,'edit']);
Route::put('/piutang/update/{id}', [piutangController::class,'update']);
Route::delete('/piutang/remove/{id}', [piutangController::class,'remove']);
