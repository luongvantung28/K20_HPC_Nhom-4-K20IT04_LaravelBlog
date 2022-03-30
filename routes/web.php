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
 
 //Route::get('/', [App\Http\Controllers\TestController::class,'index2'])->middleware('admin');;
 
 //[App\Http\Controllers\TestController::class,'index'
 
 Route::get('/name', [App\Http\Controllers\TestController::class,'name']);
 
 
 Route::get('/gioithieu', [App\Http\Controllers\TestController::class,'gioithieu']);
 

 Route::get('/dangnhap', [App\Http\Controllers\TestController::class,'dangnhap']);
 
 Route::post('dangnhap', [App\Http\Controllers\TestController::class,'dangnhap']);
 Route::get('/dangki', [App\Http\Controllers\TestController::class,'dangki']);


 Route::get('/adminlogout', [App\Http\Controllers\TestController::class,'logout']);


 Route::get('/', [App\Http\Controllers\TestController::class,'index2']);
 Route::post('/admin/logout',[App\Http\Controllers\AuthController::class,'checklogoutPost'])-> name('admin.logoutPost');



 route::group(['prefix'=>'/auth'], function(){
        route::get('/index', [App\Http\Controllers\TestController::class,'index2'])->middleware('checklogout');

        route::group(['prefix'=>'/table'], function(){
            route::get('/insert', [App\Http\Controllers\TestController::class,'insert'])->middleware('checklogout');
            ;
        });
         route::group(['prefix'=>'/table'], function(){
                route::get('/delete', [App\Http\Controllers\TestController::class,'delete']); 
        });   
 });