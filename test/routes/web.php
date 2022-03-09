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

Route::get('/news', [\App\Http\Controllers\News::class, 'index']);
Route::get('/view/id={id}', [\App\Http\Controllers\News::class, 'view'])->name('view');
//Route::get('/page={number}', [\App\Http\Controllers\News::class, 'page']);
