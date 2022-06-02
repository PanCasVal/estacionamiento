<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\LugareController;

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

route::resource('areas','App\Http\Controllers\AreaController');
route::resource('estados','App\Http\Controllers\EstadoController');
route::resource('lugares','App\Http\Controllers\LugareController');
Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Route::resource('areas', [AreaController::class]);
