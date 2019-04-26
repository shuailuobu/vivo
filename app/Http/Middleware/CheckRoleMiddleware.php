<?php

namespace App\Http\Middleware;

use Closure;

use App\Model\Admin\User;
use App\Model\Admin\Role;

class CheckRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //获取权限的路径  根据管理员的信息  n:n的查询
        //
        $user = User::find(session('uid'));

        //根据用户的信息 获取角色
        $roles= $user->roles;

        //查看每一个角色对应哪些权限
        $arr = [];
        foreach($roles as $k => $v){

            //$v 代表的是每一个角色信息 
            // pers 是Role模型里面的关联信息
            $per = $v->pers;

            foreach($per as $k => $v){
                
                $arr[] = $v->perurl;
            }
        }

        $ars = array_unique($arr);

        // dump($ars);

        //

        //获取一下你点击可以跳转的路径
         //获取当前 Laravel 项目的控制器或者方法名
        $rs = \Route::current()->getActionName();

        // dump($rs);exit;

        // 判断   你点击的路径有没有在表里面的权限路径
        if(in_array($rs, $ars)){

            return $next($request);

        } else {
            //跳转
            return redirect('/admin/roleper');
        }
    }
}
