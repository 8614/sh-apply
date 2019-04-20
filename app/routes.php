<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


//测试
Route::any('test', [
    'as' => 'test',
    'uses' => 'TestsController@test'
]);
Route::any('test2', ['as' => 'test2', 'uses' => 'TestsController@test2']);

//登录
Route::any('login', ['as' => 'admin.login', 'uses' => 'AdminController@login']);
Route::any('doLogin', ['as' => 'admin.doLogin', 'uses' => 'AdminController@doLogin']);

//后台
Route::any('admin', ['as' => 'admin.index', 'uses' => 'AdminController@index']);
Route::any('home', ['as' => 'admin.home', 'uses' => 'AdminController@home']);
