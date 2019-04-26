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


	//后台登录
	Route::get('/admin/login', 'Admin\LoginController@login');
	//后台登录处理
	Route::post('/admin/dologin', 'Admin\LoginController@dologin');
	//显示验证码
	Route::get('/admin/captcha', 'Admin\LoginController@captcha');
	//后台提示没有权限的路由
	Route::get('/admin/roleper','Admin\LoginController@roleper');

	//后台的路由组
	// Route::group(['middleware'=>['login','checkrole']], function(){
	Route::group(['middleware'=>'login'], function(){

	//显示后台页面
	Route::get('/admins','Admin\IndexController@index');
	 
	// 后台用户管理
	Route::resource('admin/user','Admin\UserController');
	
	//后台退出登录
	Route::get('/admin/logout', 'Admin\loginController@logout');
	
	//后台头像的修改
	Route::get('/admin/profile/{id}','Admin\LoginController@profile');
	Route::post('/admin/doprofile/{id}','Admin\LoginController@doprofile');

	//后台密码修改
	Route::get('/admin/changepass/{id}','Admin\LoginController@changepass');
	Route::post('/admin/dopass/{id}','Admin\LoginController@dopass');

	//后台商品管理
	Route::resource('/admin/goods','Admin\GoodsController');

	//后台分类管理
	Route::resource('/admin/category','Admin\CategoryController');

	//后台权限管理
	Route::resource('/admin/permission','Admin\PermissionController');

	//后台角色管理
	Route::resource('/admin/role','Admin\RoleController');
	Route::get('/admin/roleper/{id}','Admin\RoleController@roleper');
	Route::post('/admin/doroleper','Admin\RoleController@doroleper');

	//后台添加角色的页面
	Route::get('/admin/userrole/{id}','Admin\UserController@userrole');
	Route::post('/admin/douserrole','Admin\UserController@douserrole');

	

});



// 前台

	//前台显示
	Route::resource('/','Home\IndexController');

	
