<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
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

/*Route::get('/', function () {
    //return view('welcome');
    return view('anasayfa');

});*/

Route::get('/', [MenuController::class, 'index'])->name('anasayfa');

Route::get('/hakkimizda', [MenuController::class, 'hakkimizda'])->name('hakkimizda');