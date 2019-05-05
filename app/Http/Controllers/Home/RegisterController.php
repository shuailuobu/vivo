<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use Mail;
use Hash;
use Session;
use App\Model\Home\Users;

class RegisterController extends Controller
{
    public function regist()
    {
    	return view('home.regist.zhuce');
	}
	
	public function doregist(Request $request)
    {	
    	//dd($request->input());
		$code = $request->input('code');
    	//dd($_COOKIE['fcode']);
    	// dump($code);
   		// dump($request->cookie('fcode'));
    	if($request->cookie('fcode') == $code){
	    	$res = $request->except('_token','code');

	    	$res['token'] = str_random(32);

	    	// Hash加密
	    	$res['password']=Hash::make($res['password']);
	    	// dd($res);
	    	// 往表里面进行添加
	    	$uid = DB::table('users')->insertGetId($res);
			if($uid){
				$userInfo = Users::where('id', $uid)->first();
				//对用户的id进行存储
				// session(['uid'=>$uid]);
				Session::push('uid:'.$uid, $uid);
				Session::push('user_name:'.$userInfo['id'], $userInfo['username']); //昵称
				Session::push('figureurl:'.$userInfo['id'], $userInfo['figureurl']); //用户头像地址，可能为默认头像

			}
	    	//对id值进行加密 
	    	// 加密 base64_encode($txt); 解密base64_decode($tmp);

			// 添加完成之后
	    	// 发封邮件 激活账号使用
	    	Mail::send('home.emails.reminder', ['rs'=>$res,'uid'=>base64_encode($uid),'title'=>'内容页面','token'=>$res['token']], function ($m) use ($res) {

	            $m->from('m15521418515@163.com', '百度人力资源部');

	            $m->to($res['email'], $res['username'])->subject('主题内容');
	        });
    	}else{
    		return back()->with('error','验证码不正确，请重新输入');
    	}
    	
    	//dd(1111);
    	// 发送成功给用户一个提示
    	return view('home.emails.tixing');

	 }

	/**
	 * Undocumented function 执行注册逻辑
	 *
	 * @param Request $request
	 * @return void
	 */
    public function doregist1(Request $request)
    {	
    	dd($request->input());
		$code = $request->input('code');
    	//dd($_COOKIE['fcode']);
    	// dump($code);
   		// dump($request->cookie('fcode'));
    	if($request->cookie('fcode') == $code){
	    	$res = $request->except('_token','code');

	    	$res['token'] = str_random(32);

	    	// Hash加密
	    	$res['password']=Hash::make($res['password']);
	    	// dd($res);
	    	// 往表里面进行添加
	    	$uid = DB::table('users')->insertGetId($res);
			if($uid){
				$userInfo = Users::where('id', $uid)->first();
				//对用户的id进行存储
				// session(['uid'=>$uid]);

				Session::push('uid:'.$uid, $uid);
				Session::push('user_name:'.$userInfo['id'], $userInfo['username']); //昵称
				Session::push('figureurl:'.$userInfo['id'], $userInfo['figureurl']); //用户头像地址，可能为默认头像
			}
	    	//对id值进行加密 
	    	// 加密 base64_encode($txt); 解密base64_decode($tmp);

			// 添加完成之后
	    	// 发封邮件 激活账号使用
	    	Mail::send('home.emails.reminder', ['rs'=>$res,'uid'=>base64_encode($uid),'title'=>'内容页面','token'=>$res['token']], function ($m) use ($res) {

	            $m->from(env('MAIL_USERNAME'), '百度人力资源部');

	            $m->to($res['email'], $res['username'])->subject('主题内容');
	        });
    	}else{
    		return back()->with('error','验证码不正确，请重新输入');
    	}
    	
    	//dd(1111);
    	// 发送成功给用户一个提示
    	return view('home.emails.tixing');

	 }
    
   	 	// 修改账号的状态
	 public function remind(Request $request)
	 {
	 	// 接收id信息
	 	$uid = base64_decode($request->id);
	 	// 根据id获取token
	 	$tk = DB::table('users')->where('id',$uid)->first();
	 	// 获取token
	 	$token = $request->token;
	 	// 对比token
	 	if($tk->token != $token){
	 		return 'token验证失败';
	 	}
	 	// 根据id的信息 把状态由 0-->1
	 	$rs['status'] = '1';
	 	$data = DB::table('users')->where('id',$uid)->update($rs);
	 	if($data){
	 		// echo  '登录';
	 		return redirect('/home/login');
	 	}else{
	 		return back();
	 	}

	 }
     //检测手机号 
	 public function checkphone (Request $request)
	 {
         $phone = $request->phone;
         $data = DB::table('users')->where('phone','=',$phone)->first();
         if($data) {
			echo json_encode(['status'=>-1, 'msg'=>'手机号不可用！']);
			exit;
         }else {
			echo json_encode(['status'=>1, 'msg'=>'手机号可用！']);
			exit;
         }
	 }

	 /**
	  * Undocumented function 检查用户名是否存在
	  *
	  * @param Request $request
	  * @return void
	  */
	 public function checkName(Request $request)
	 {
		
		 //接收用户名
		$name = $request->input('name');
		// 查询当前用户是否存在
		$res = Users::where('username', $name)->first();

		if(!empty($res)){
			//返回提示信息
			echo json_encode(['status'=>-1, 'msg'=>'用户名已被注册！']);
			exit;
		}else{
			echo json_encode(['status'=>1, 'msg'=>'用户名可以使用！']);
			exit;
		}
	 }

	 public function yzm(Request $request){
       
       
        $phone = $request->input('phone');
        
        sendphone($phone);
        
    }

      public function checkcode(Request $request){
        //获取输入的校验码
        $code=$request->input('code');
        if(isset($_COOKIE['fcode']) && !empty($code)){
            //获取手机号接收到验证码
            $fcode=$request->cookie('fcode');
            if($fcode==$code){
                echo 1;//校验码一致
            }else{
                echo 2;//校验码不一致
            }
        }elseif(empty($code)){
            echo 3;//输入的校验码为空
        }else{
            echo 4;//校验码过期
        }

    }

    




}
