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

Route::prefix('customer')->group( function () {
    Route::get('index',function (){
       return view('index');
    });
    Route::get('create',function (){
       //hien thi form tao khach hang
    });
    Route::post('store',function (){
       //xu ly du lieu tao khach hang thong qua phuong thuc post tu form

    });
    Route::get('{id}/show',function (){
        // Hien thi chi tiet khach hang
    })  ;
    Route::get('{is}/edit',function (){
       // Hien Thi form Chinh sua thong tin khach hang
    });
    Route::patch('{id}/update',function (){
       // Xu ly luu tru du lieu  khack hang duoc chinh sua
    });
    Route::delete('{id}',function (){
       // Xoa du lieu thong tin khach hang
    });
});
Route::resource('customers','CustomerController');
