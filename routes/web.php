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

Route::get('/', function () {
    //exit('nothing here');
});
Route::get('/updateorders','Admin\UpdateOrdersController@updateOrders');//更新每个版本的order记录
//Route::get('/updateorders_two','Admin\UpdateOrdersController@updateOrders_two');//更新每个版本的order记录

Route::any('/Ad/user/login','Admin\UserController@login')->name('userlogin');//后台登录
Route::any('/login','Admin\UserController@login')->name('userlogin');//后台登录

Route::any('/Ad','Admin\UserController@index')->name('index');


Route::group(['prefix'=>'','namespace'=>'English'],function (){
    require __DIR__.('/English.php');
});
Route::group(['prefix'=>'Japan','namespace'=>'Japan'],function (){
    require __DIR__.('/japan.php');
});


        
        