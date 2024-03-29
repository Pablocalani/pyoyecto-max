<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
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

Route::get('/',[ClienteController::class,"index"]);
Route::get('cliente/create',[ClienteController::class,"create"]);
Route::post('cliente/guardar',[ClienteController::class,"guardar"] )->name('cliente.guardar');
