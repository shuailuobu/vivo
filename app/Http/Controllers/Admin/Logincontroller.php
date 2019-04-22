<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Logincontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        //访问登录页面
        return view('admin.login',['title'=>'登录页面']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dologin(Request $request)
    {
        //获取数据
        $name = $request->name;
        $res = User::where('name',$name)->first();

        //根据用户名进行判断
        if(!$res){

            return redirect('/admin/login')->with('error','用户名或者密码错误');
        }

        //密码的检测
        if (!Hash::check($request->password, $res->password)) {
            return redirect('/admin/login')->with('error','用户名或者密码错误');
        }

        //验证码检测
        if($request->code != Session::get('captcha')){

            return redirect('/admin/login')->with('error','验证码错误');
        }

        //往session里面存储信息
        // Session::put()
        session(['uname'=>$res->name]);

        //跳转
        return redirect('/admins');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
