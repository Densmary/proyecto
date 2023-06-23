<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SheetController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PlantlineController;
use App\Http\Controllers\DepartureController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\MoldController;



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

Route::get("/", function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home',[\App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::resource('cars', CarController::class);
Route::resource('clients', ClientController::class);
Route::resource('sheets', SheetController::class);
Route::resource('products', ProductController::class);
Route::resource('plantlines', PlantlineController::class);
Route::resource('departures', DepartureController::class);
Route::resource('orders', OrderController::class);
Route::resource('operators', OperatorController::class);
Route::resource('records', RecordController::class);
Route::resource('molds', MoldController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
