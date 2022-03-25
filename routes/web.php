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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/blogk20', function () {

    return 'Blogk20';
 });
 
 Route::get('/', [App\Http\Controllers\TestController::class,'index']);
 
 //[App\Http\Controllers\TestController::class,'index'
 
 Route::get('/name', [App\Http\Controllers\TestController::class,'name']);
 
 
 Route::get('/gioithieu', [App\Http\Controllers\TestController::class,'gioithieu']);
 

 Route::get('/dangnhap', [App\Http\Controllers\TestController::class,'dangnhap']);
 
 Route::post('dangnhap', [App\Http\Controllers\TestController::class,'dangnhap']);
 Route::get('/dangki', [App\Http\Controllers\TestController::class,'dangki']);

 Route::get('/index2', [App\Http\Controllers\TestController::class,'index2'])->middleware('admin');
 Route::get('/admin.logout', [App\Http\Controllers\TestController::class,'logout']);