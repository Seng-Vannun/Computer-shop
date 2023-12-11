<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homepage;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('index',[Homepage::class,'ShowIndex']);
Route::get('detail/{productid}',[Homepage::class,'ShowDetail'])->name('detail');
Route::get('admin', function (){return view('admin');});
Route::post('input',[Homepage::class,'input']);
