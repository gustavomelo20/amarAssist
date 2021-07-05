<?php

use App\Http\Controllers\{
    Desafio, 
   };
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

Route::get('/',   [Desafio::class, 'Index'])->name('index');
Route::post('/',  [Desafio::class, 'Author'])->name('form-index');
Route::post('/phone',  [Desafio::class, 'FindPhone'])->name('phone-index');