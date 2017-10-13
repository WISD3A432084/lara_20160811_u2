<?php

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

//Route::get('/', function () {
   // return view('welcome');
//});

//1.1回傳welcome
//Route::get("/",function (){
  //  return 'welcome';
//});

//1.2回傳view
//Route::get('/',function (){
   // return view('welcome');

    //1.3設定 Route 跳轉頁面
    //return 'welcome';
//});

//練習2：設定Route接收參數
    //1.修改 Route 接受參數
    Route::get('hello/{name}', function($name) {
        return 'Hello, '.$name;
    });
