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
// 
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

	//后台轮播图管理
	Route::resource('/admin/sowing','Admin\SowingController');

});



// 前台

	//前台显示
	Route::resource('/','Home\Indexcontroller');

	//前台购物车
	Route::get('/home/cart','Home\CartController@cart');
	
	
	//前台的注册页面
	Route::get('/home/regist','Home\RegisterController@regist');
	// 前台处理注册
	Route::post('/home/doregist','Home\RegisterController@doregist');

	Route::get('/home/remind','Home\RegisterController@remind');
	// 
	Route::post('/home/yzm','Home\RegisterController@yzm');
	//检测注册手机号
	Route::post('/home/checkphone','Home\RegisterController@checkphone');
	//检测用户名
	Route::post('/home/checkName','Home\RegisterController@checkName');
	// 检测校验码
	Route::get('/home/checkcode','Home\RegisterController@checkcode');
	



	// 前台登录页面
	Route::get('/home/login','Home\LoginController@login');
	//处理手机验证码和账号登录逻辑
	Route::post('/home/dologin','Home\LoginController@dologin');
	// 切换为验证码登录
	Route::get('/home/tochange1','Home\LoginController@tochange1');
	// 判断手机号是否一致
	Route::post('/home/loginphone','Home\LoginController@loginphone');
	// 登录验证码判断
	Route::post('/home/logincode','Home\LoginController@logincode');
	
	// //处理qq登录
	// Route::get('/home/qqlogin','Home\LoginController@qqlogin');
	// //qq回调地址
	// Route::get('/home/Login/get_code_state','Home\LoginController@get_code_state');

	// 个人中心
	Route::get('/home/personal','Home\PlazaController@plaza');

	Route::get('/home/dopersonal','Home\PlazaController@pla');

	
	