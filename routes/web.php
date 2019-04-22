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
    return view('welcome');
});


	//显示后台页面
	Route::get('/admins','Admin\Indexcontroller@index');
	// 后台用户管理
	Route::resource('admin/user','Admin\UserController');
	//后台登录
	Route::get('/admin/login', 'Admin\LoginController@login');

