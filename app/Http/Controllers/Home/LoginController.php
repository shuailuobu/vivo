<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Home\Users;
use Session;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use DB;
class LoginController extends Controller
{
    //
    public function yzm(Request $request){
       
       
        $phone = $request->input('phone');
        
        sendphone($phone);
        
    	//return view('home.regist.yanzhen');
    }

    /**
     * 前台的登录页面
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {  
        return view('home.login.login',['title'=>'vivo']);
    }

    /**
     * 处理登录页面信息
     *
     * @return \Illuminate\Http\Response
     */
    public function dologin(Request $request)
    {
        
            //常规账号登录
            $name = $request->name;
            $password = $request->password;    
            $res =  DB::table('users')->where('username',$name)->first();
            if(!$res){
            
                return back()->with('error','用户名或者密码错误');
            }
            if (!Hash::check($password, $res->password)) {
                return back()->with('error','用户名或者密码错误');
            }
            return redirect('/')->with('success','登录成功!');
    }

    /**
	 * qq登录方式
	 */
	public function qqlogin()
	{
		require_once app_path().'\Tools\connect\API\qqConnectAPI.php';
		//访问QQ的登录页面  
		$oauth = new \QC();  
		$oauth->qq_login();die; 
	} 
   
    /**
    *@description 处理手机号登录
    *@params $type 登录账号类型
    *        $phone 密码
    *        $code 手机验证码
    */
    private function handlePhone($phone, $code)
    {
        //前台页面鼠标失去焦点的时候需要先发起一次请求检查手机号账号是否存在
        $res = Users::where('phone', $phone)->first();
       
        //根据用户名进行判断
        if(!$res){
            
            return redirect('/admin/login')->with('error','用户名或者密码错误');
        }

        //验证码检测
        if(Cookie::get('fcode') != $code )
        {   
            return redirect('/admin/login')->with('error','验证码错误');
        }

        //验证码检测
        // if($code !== Session::get('captcha')){
        //     return redirect('/admin/login')->with('error','验证码错误');
        // }
        //dump($res);
        return $res ? $res : [];
    }

    /**
    *@description 处理常规账号登录
    *@params $type 登录账号类型
    *        $password 密码
    *        $code 图形验证码
    */
    private function handleNomal($name, $password)
    {
        $redis = new \Redis();
        $redis->connect('127.0.0.1', 6379);
        $redis->select(1);
        $res = Users::where('username',$name)->first();
      // dump($res);
        //根据用户名进行判断
        if(!$res){
            return redirect('/home/login')->with('error','用户名或者密码错误');
        }

        // //验证码检测
        // if($code !== Session::get('captcha')){
        //     return redirect('/admin/login')->with('error','验证码错误');
        // }

        //获取错误次数
        $errCount = $redis->get('errorCount:'.$name);
        //dd($errCount);
		if($errCount == 3){

			return redirect('/home/login')->with('error','登录错误次数超过三次，请30s后再试');
		}

        //密码的检测
        if (!Hash::check($password, $res->password)) {
           // dd(1111);
        	//密码错误记录错误次数
            $count = $redis->incr('errorCount:'.$name);	
            $redis->expire('errorCount'.$name, 30);
			//剩余错误次数
			$surplusCount = 3 - $count;
			if($surplusCount >0){
				return redirect('/home/login')->with('error','用户名或密码错误，您还有'.$surplusCount.'次机会');
			}
        }
        $redis->rm('errorCount:'.$name);
        //dd($res ? $res : []);
        return $res ? $res : [];
    }

    /**
    *@description 已是原来老用户 进行资料更新 ,否则就插入
    *@params $open_id qq用户的open_id
    *		 $arr 用户信息  type array
    */
    private function handleOauth($type, $openid, $arr)
    {
    	$data = [
    		'username' => $arr['nickname'],
    		'figureurl' => $arr['figureurl'],
    	];
    	if($type == 1){
	    	Users::where('open_id',$openid)->update($data);
	    	
    	}else{
    		$data['open_id'] = $openid;
    		Users::create($data);
    	}
    	$res = User::where('open_id',$openid)->first();
	    return $res ? $res : [];
    }

    //获取access_token和openid
	/**
	 * [get_code_state description] qq登录回调地址
	 * @param  [type] $code  [description]
	 * @param  [type] $state [description]
	 * @return [type]        [description]
	 */
	public function get_code_state($code, $state)
	{
		$app_path = app_path();
		//引入QQAPI
		require_once $app_path.'\Tools\connect\API\qqConnectAPI.php';
		$qc = new \QC();
		//获取access_token
		$acce = $qc->qq_callback();
		// 获取openid
		$openid = $qc->get_openid();
		$qq = new \QC($acce, $openid);
		//调用获取用户信息接口
		$arr = $qq->get_user_info();
		
		$res = Users::where('open_id', $openid)->first();
		//如果存在此用户，则用账号去登录，并存基本信息到session
		if(!empty($res)){
			$res = $this->handleOauth(1, $openid, $arr);
		}else{
			//如果数据库不存在此用户，用昵称和openid到站点注册，完了存session并直接登录
			$res = $this->handleOauth(2, $openid, $arr);	
		}
		if($res){
			Session::set('uid:'.$res['id'],$res['id']);
			Session::set('user_name:'.$res['id'], $res['username']);
			Session::set('figureurl:'.$res['id'], $res['figureurl']);
			//登录成功重定向到首页
			return redirect(url('Login/index'));
		}
	}

    // 检查验证码
    private function checkCode($phone, $code)
    {
    	//实例化链接redis实例
    	$redis = new ConnectRedis();
     	$redis = $redis->getClient(2);
    	//获取session中存储的验证码
    	$CacheCode = $redis->get('code|'.$phone);
    	// $SessCode = 23453;
    	if($CacheCode != $code){
    		return json(['data' => '', 'code' => -1, 'msg' => '验证码错误']);
    	}else if(empty($CacheCode)){
    		return json(['data' => '', 'code' => -1, 'msg' => '验证码已过期，请重新获取']);
    	}
    	return true;
    }

    //切换为验证码登录
    public function tochange1()
    {
        return view('home.login.login2',['title'=>'vivo']);
    }


    // 判断手机号是否一致
    public function loginphone(Request $request)
    {
 
        $phone = $request->phone;
         $data = DB::table('users')->where('phone','=',$phone)->first();
         if($data) {
            echo json_encode(['status'=>1, 'msg'=>'手机号可用！']);
            exit;
         }else {
            echo json_encode(['status'=>-1, 'msg'=>'手机号不可用！']);
            exit;
         }
    }
    

        // 获取输入的校验码
         public function logincode(Request $request){
        $code=$request->input('code');
        if(isset($_COOKIE['fcode']) && !empty($code)){
            // 获取手机号接收到验证码
            $fcode=$request->cookie('fcode');
            if($fcode==$code){
                echo 1;//校验码一致
            }else{
                echo 2;//校验码不一致
            }
        }elseif (empty($code)){
            echo 3;//输入的校验码为空
        }else{
            echo 4;//校验码过期
        }
    }






}
