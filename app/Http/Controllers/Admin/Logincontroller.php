<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;
use Session;
use Hash;

use App\Model\Admin\User;

class LoginController extends Controller
{
    /**
     * 后台的登录页面
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('admin.login',['title'=>'登录页面']);
    }

    /**
     * 处理登录页面信息
     *
     * @return \Illuminate\Http\Response
     */
    public function dologin(Request $request)
    {
        //获取数据
        $username = $request->name;

        
        $res = User::where('name',$username)->first();
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
        session(['uid'=>$res->id]);
        //跳转
        return redirect('/admins');
    }

    /**
     * 显示验证码
     *
     * @return Response
     */
    public function captcha()
    {
        //生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build($width = 100, $height = 36, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();
        //把内容存入session
        Session::put('captcha', $phrase);
        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $builder->output();
    }

     /**
     * 管理员退出
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        //清空session
        session(['uname'=>'']);

        //跳转
        return redirect('/admin/login');
    }


     /**
     * 头像修改
     *
     * @return \Illuminate\Http\Response
     */
    public function profile($id)
    {
        //从session获取信息

        //通过id获取信息
        $res = User::find($id);

        return view('admin.profile',[
            'title'=>'设置头像信息',
            'profile'=>$res->profile,
            'id'=>$id

        ]);
    }




    /**
     * 处理头像信息
     *
     * @return \Illuminate\Http\Response
     */
    public function doprofile(Request $request, $id)
    {
        //获取上传的文件对象
        $file = $request->file('profile');
        //判断文件是否有效
        if($file->isValid()){
            //上传文件的后缀名
            $entension = $file->getClientOriginalExtension();
            //设置名字
            $name = date('YmdHis').mt_rand(1000,9999);
            //组成新的名字  jfkdsjfdsfjd.jpg
     
            $newName = $name.'.'.$entension;

            $path = $file->move('./upload/admin',$newName);

            $filepath = '/upload/admin/'.$newName;
            //返回文件的路径
            echo  $filepath;
        }

        $res['profile'] = $filepath;

        //把id=5的头像的地址改变
        User::where('id',$id)->update($res);
    }

    /**
     * 修改密码的页面
     *
     * @return \Illuminate\Http\Response
     */
    public function changepass($id)
    {

        return view('admin.changepass',[
            'title'=>'修改密码的页面',
            'id'=>$id

        ]);
    }

    /**
     * 处理密码的信息
     *
     * @return \Illuminate\Http\Response
     */
    public function dopass(Request $request, $id)
    {
        //表单验证

        //获取用户的信息
        $res = User::where('id', $id)->first();
        //把用户的密码查出来
        $pass = $res->password;
        //旧密码 的比对
        if (!Hash::check($request->oldpass, $pass)) {
            return redirect('/admin/changepass/'.$id)->with('error','原密码不正确');
        }

        //获取新密码
        $newpass = $request->password;

        //密码和确认密码的比对
        $renewpass = $request->repass;

        if($newpass != $renewpass){

            return redirect('/admin/changepass/'.$id)->with('error','两次密码不一致');
        }

        $rs['password'] = Hash::make($newpass);

        $data = User::where('id',$id)->update($rs);

        if($data){

            return redirect('/admin/login');
        }

    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function roleper()
    {
        //显示页面
        return view('admin.roleper');
    }

}