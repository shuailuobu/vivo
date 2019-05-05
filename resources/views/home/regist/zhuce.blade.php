@section('title','前台的注册页面')

<script type="text/javascript" src="/home/js/jquery-3.2.1.min.js"></script>

<style>
	.int {
		height: 30px;
		text-align: left;
		width: 600px;
	}

	label {
		width: 200px;
		margin-left: 20px;
	}

	.high {
		color: red;
		margin-left: 360px;
		line-height: 0px;
	}

	.msg {
		font-size: 13px;
	}

	.onError {
		color: red;
	}

	.onSuccess {
		color: green;
	}

	.cur {
		border: 1px solid red;

	}

	.curs {
		border: 1px solid green;
	}
</style>

<html lang="zh_CN">

<head>
	<meta charset="utf-8">
	<meta name="screen-orientation" content="portrait">
	<meta name="x5-orientation" content="portrait">
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta http-equiv="Cache-control" content="max-age=60">
	<meta name="keywords" content="vivo,VIVO,帐户,vivo帐户,帐号,登录,注册,会员特权,云服务">
	<meta name="description" content="vivo,VIVO,帐户,vivo帐户,登录vivo帐号立享查找手机、同步数据等vivo会员特权">
	<title>帐号注册</title>
	<script>
		! function(e, t) {
			if (!("ontouchstart" in e && !!e.navigator.userAgent.match(/(iPhone|iPad|Android|ios)/i) || !("ontouchstart" in e &&
					e.navigator.userAgent.match(/(iPhone|iPad|Android|ios)/i)) && (window.innerWidth <= 640 || document.documentElement
					.clientWidth <= 640))) return e.addEventListener("load", function() {
				document.body.style.fontSize = "12px"
			});
			e.addEventListener("load", function() {
				document.documentElement.className += " wap", document.body.className += " mobile-contanier"
			});
			var n = t.documentElement,
				i = 4 == devicePixelRatio ? 1 : devicePixelRatio;
			n.dataset.dpr = i;
			var a = t.createElement("meta");
			a.name = "viewport";
			var o, d = /(micromessenger|webbrowser|baidu|ucbrowser|vivobrowser|alipay|qq)/i.test(navigator.userAgent);
			d || (document.documentElement.className += " app"), a.content = "width=device-width,initial-scale=" + (o = 1) +
				",maximum-scale=" + o + ",minimum-scale=" + o + ",user-scalable=no,minimal-ui", n.firstElementChild.appendChild(a);
			var r = (n.dataset.width || 1080) / 100,
				m = document.getElementsByTagName("head")[0],
				s = document.createElement("div");
			s.style.width = "1rem", s.style.display = "none", m.appendChild(s);
			var c = parseFloat(getComputedStyle(s, null).getPropertyValue("width")),
				l = function() {
					var e = document.documentElement.clientWidth;
					n.style.fontSize = e / r / c * 100 + "%"
				};
			l(), window.orientationResize = function() {
				l()
			}, window.orientationPageshow = function(e) {
				l()
			}, e.addEventListener("resize", orientationResize, !1), e.addEventListener("pageshow", orientationPageshow, !1), e.addEventListener(
				"DOMContentLoaded",
				function(e) {
					var t = document.getElementsByTagName("body")[0];
					t.style.maxWidth = r + "rem", t.style.margin = "0 auto"
				}, !1)
		}(window, document);
	</script>
	<link rel="shortcut icon" href="https://accountstatic.vivo.com.cn/accountstatic.vivo.com.cn/favicon.ico">
	<link href="https://accountstatic.vivo.com.cn/accountstatic.vivo.com.cn/static/css/app.2800d89e8d817177e1ff72b1e083bf81.css"
	 rel="stylesheet">
	<!-- 	<script type="text/javascript" charset="utf-8" async="" src="https://accountstatic.vivo.com.cn/accountstatic.vivo.com.cn/static/js/0.39c1ccf80da63adc07e0.js"></script>
	<script type="text/javascript" charset="utf-8" async="" src="https://accountstatic.vivo.com.cn/accountstatic.vivo.com.cn/static/js/46.7c2dd8d9b25916e10555.js"></script>
	<script type="text/javascript" charset="utf-8" async="" src="https://accountstatic.vivo.com.cn/accountstatic.vivo.com.cn/static/js/64.96cc275974581c4cee22.js"></script>
	<script type="text/javascript" charset="utf-8" async="" src="https://accountstatic.vivo.com.cn/accountstatic.vivo.com.cn/static/js/62.11cde10b9f7ab1a1e82e.js"></script> -->
</head>

<body style="font-size: 12px;">
	<div style="width: 100%; height: 100%;">
		<input type="text" name="fakeusernameremembered" style="display: none;">
		<input type="password" name="fakepasswordremembered" style="display: none;">
		<input type="password" autocomplete="off" disableautocomplete="" id="onlyid" style="display: none;">
		<!---->
		<div class="loading" style="display: none;">
			<div class="pacman">
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
			</div>
		</div>
		<!---->
		<!---->
		<div class="mask" style="display: none;"></div>
		<!---->
		<div data-v-496a6b4b="" class="registerSetPwd">
			<div data-v-496a6b4b="" class="section">
				<div data-v-496a6b4b="" class="logo-area">
					<div data-v-b30b945c="" data-v-496a6b4b="" class="vivo-logo-box">
						<img data-v-b30b945c="" src="https://accountstatic.vivo.com.cn/accountstatic.vivo.com.cn/static/img/logo.1f42884.png.webp"
						 alt="">
					</div>
				</div>
				<div data-v-496a6b4b="" class="title-item">



					<div data-v-496a6b4b="" class="title">
						帐号注册
					</div>
				</div>
				<form id="form" name="" class="" onsubmit="return true" method="post" action="/home/doregist" >
					<div data-v-496a6b4b="" class="outer-box">
						<div data-v-496a6b4b="" class="inner-box">


							<div data-v-496a6b4b="" class="pwd-box clearfix">

								<input data-v-496a6b4b="" type="text" name="username" password="false" placeholder="请输入用户名" placeholder-class="phone-pld"
								 maxlength="15" id="name" class="input required" autocomplete="off">
								<span></span>
								<span class="mb25" id="nameexist" style="color: red;display: block;line-height: 18px"></span>
							</div>
							<br/>

							<div data-v-496a6b4b="" class="pwd-box clearfix">
								<!-- <input data-v-496a6b4b="" type="password" name="phone" style="display: none;"> -->
								<input data-v-496a6b4b="" id="phone" type="text" name="phone" password="false" placeholder="请输入手机号" value="" placeholder-class="phone-pld"
								 maxlength="12" class="input" autocomplete="on">
								<span class="mb25" id="phoneexist" style="color: red;display: block;line-height: 18px"></span>
								<span></span>
							</div>
							<br/>


							<div data-v-496a6b4b="" class="code-box clearfix" style="position: relative;">
								<input id="code" name="code" data-v-496a6b4b="" type="text" password="false" placeholder="请输入短信验证码" placeholder-class="phone-pld"
								 class="input">
								<span style="position: absolute;top:33px;left:10px"></span>
								<input data-v-496a6b4b="" type="text" name="" style="display: none;">
								<div data-v-496a6b4b="" class="get-code-pc ellipsis">
									<!-- <button id="ss" class="btn btn-info" onclick="yzm(this)">
										获取验证码
									</button> -->
									<button  type="button" id="getCode" class="btn-info" style="border:1px solid #ccc;width: 130px;height: 35px;font-size: 13px;top:10px;" disabled="true">获取验证码</button>

									<span class="separator"></span>
								</div>
								<span class="mb25" id="checkCode" style="color: red;display: block;line-height: 18px"></span>
							</div>
							<br/>

							<!-- <br> -->
							<div data-v-496a6b4b="" class="pwd-box clearfix" style={margin:50px}>
								<input data-v-496a6b4b="" type="password" name="password" style="display: none;">
								<input data-v-496a6b4b="" type="password" name="password" autocomplete="new-password" password="false" placeholder="请输入密码"
								 placeholder-class="phone-pld" maxlength="16" class="input required" id="password">
								 <span class="mb25" id="checkPassword" style="color: red;display: block;line-height: 18px"></span>
								<span></span>
								<div data-v-496a6b4b="" class="eye-box">
									<img data-v-496a6b4b="" src="https://accountstatic.vivo.com.cn/accountstatic.vivo.com.cn/static/img/eyes-off.7c50935.png.webp"
									 alt="">
									<!---->
								</div>
							</div>
							<br/>

							<div data-v-496a6b4b="" class="hint2">

							</div>
							<!-- <br> -->
							<div data-v-496a6b4b="" class="pwd-box clearfix">

								<input data-v-496a6b4b="" type="text" name="email" password="false" placeholder="请输入邮箱！" placeholder-class="phone-pld"
								  id="name" class="input required" autocomplete="off">
								<span></span>
								
							</div>

							<br>
							<div data-v-e8bc1554="" data-v-496a6b4b="" class="errTip-Box" style="display: none;">
								<div data-v-e8bc1554="" class="errTip"></div>
							</div>
							{{csrf_field()}}
							<button data-v-496a6b4b="" class="button" id="sub">注册</button>
					
				</form>
				<div data-v-496a6b4b="" class="hint2">
					短信可能会有延时，请耐心等待，如果长时间未收到短信，请60秒后重新获取。
				</div>
				</div>
				</div>
			</div>
			<div data-v-99b54c16="" data-v-496a6b4b="" class="foot">
				<div data-v-99b54c16="" class="service">
					<a data-v-99b54c16="" href="https://kefu.vivo.com.cn/robot-vivo/pcChat.html" target="_blank" class="to-service">
						<img data-v-99b54c16="" src="https://accountstatic.vivo.com.cn/accountstatic.vivo.com.cn/static/img/online-service.0c3db86.png.webp"
						 alt="">
						<!---->
						<span data-v-99b54c16="" class="online-person"> 在线客服</span>
					</a>
					<a data-v-99b54c16="" class="to-service">
						<img data-v-99b54c16="" src="https://accountstatic.vivo.com.cn/accountstatic.vivo.com.cn/static/img/tel.8e75c45.png.webp"
						 alt="" class="phone">
						<span data-v-99b54c16="" class="hot-line"> 400-678-9688(24小时全国服务热线)</span>
					</a>
				</div>
				<div data-v-99b54c16="" class="copyright">
					COPYRIGHT ©2011-2018 广东步步高电子工业有限公司 版权所有 保留一切权利 | 隐私政策 | 法律声明 | 粤B2-20080267 | 粤ICP备05100288号
				</div>
			</div>
		</div>
	</div>
	<!-- <script type="text/javascript" src="https://accountstatic.vivo.com.cn/accountstatic.vivo.com.cn/static/js/manifest.95e97dcc08edd64430a3.js"></script> -->
	<!-- <script type="text/javascript" src="https://accountstatic.vivo.com.cn/accountstatic.vivo.com.cn/static/js/vendor.ef76d8d7cc8d360a1cca.js"></script> -->
	<!-- <script type="text/javascript" src="https://accountstatic.vivo.com.cn/accountstatic.vivo.com.cn/static/js/app.f21eee542abbb1101cfc4.js"></script> -->
	<div class="vux-toast">
		<div class="weui-mask_transparent" style="display: none;"></div>

		<div class="weui-toast weui-toast_success" style="width: 7.6em; display: none;">
			<i class="weui-icon-success-no-circle weui-icon_toast"></i>
			<p class="weui-toast__content"></p>
		</div>
	</div>
</body>
<iframe id="vivoJsBridge" style="display: none;"></iframe>

</html>

@if(session('error')) {{session('error')}} @endif


<script type="text/javascript">
	var NAME = false;
	var PHONE=false;
	var CODE = false;
	var PASSWORD = false;
	var EMAIL = false;


	//获取每个input 绑定获取焦点事件
	// input框name等于username绑定失去焦点
	$("input[name='username']").blur(function() {
		$('span#nameexist').html('');
		// 获取输入框name的值
		var name = $(this).val();
		// 获取输入框name的值的长度
		var len = document.getElementById("name").value.length;
		var ret = "^(?!_)(?!.*?_$)[a-zA-Z0-9_\u4e00-\u9fa5]+$";

		// 如果获取到的值时空
		if (name == '') {
			placeholder = $(this).attr('placeholder');
			$(this).next("span").css('color', 'red').html(placeholder);
			//添加类样式
			$(this).parent().css('border', '1px solid red');
		} else {
			placeholder = $(this).attr('placeholder');
			$(this).next("span").css('color', 'red').html('');
			//添加类样式
			$(this).parent().css('border', '1px solid #E0E0E0');

			//正则验证
			var re = new RegExp(ret);//正则对象
			// console.log(re);
			if (!re.test(name)) {  //正则匹配  成功返回true  不成功返回false
				console.log(re.test(name));
				$('span#nameexist').html('用户名只能含有汉字、数字、字母、下划线不能以特殊字符开头和结尾').css('color', 'red');
				return false;
			}
			//验证用户名长度
			if (len > 16 || len <= 3) {
				$('span#nameexist').html('用户名长度只能在4-15个字符长度').css('color', 'red');
				return false;
			}

			$.ajax({
				type: 'post',
				url: '{{url("/home/checkName")}}',
				data: {'name':name,'_token':"{{csrf_token()}}"},
				// 成功走下面
				success: function(data) {
					if (data.status == -1) {
						$('span#nameexist').html(data.msg).css('color', 'red');
						return false;
					} else {
						$('span#nameexist').html(data.msg).css('color', 'green');
						NAME = true;
						return true;
					}
				},
				error: function(err) {
					console.log(err);
				},
				dataType: 'json'
			});
		}
 
		//移除类样式
		// $(this).removeClass('curs');
	});

	//获取手机号 绑定失去焦点事件
	$("input[name='phone']").blur(function() {
		$("span#phoneexist").html("");
		//获取手机号
		var phone = $(this).val();
		var o = $(this);
		//正则匹配 match 匹配不到的话 返回null
		if (phone == '') {
			// 当前input框设置属性值
			placeholder = $(this).attr('placeholder');
			// 给他下一个span标签添加样式，并且文本内容是placeholder的值
			$(this).next("span").css('color', 'red').html(placeholder);
			//添加类样式
			$(this).parent().css('border', '1px solid red');
			$("button#getCode").attr('disabled', true);
			return false;
		} else {
			// 给span标签置空
			$(this).next("span").css('color', 'red').html('');
			// // //添加类样式
			$(this).parent().css('border', '1px solid #E0E0E0');

			if (!(/^1[34578]\d{9}$/.test(phone))) {
				$('span#phoneexist').html('手机号不合法').css('color', 'red');
				return false;
			}
			$.ajax({
				type: 'post',
				url: '{{url("/home/checkphone")}}', 
				data: {'phone':phone,'_token':"{{csrf_token()}}"},


				// 成功走下面
				success: function(data) {
					console.log(data);
					if (data.status == -1) {
						//手机号码已经注册
						o.next("span").css("color", 'red').html(data.msg);
						//把获取校验码按钮 设置禁用
						$("button#getCode").attr("disabled", true);
						return false;
					} else {
						placeholder = o.attr('placeholder');
						o.next("span").css('color', 'red').html('');
						//添加类样式
						o.parent().css('border', '1px solid #E0E0E0');
						//手机号码可以使用
						o.next("span").css("color", 'green').html(data.msg);
						//把获取校验码按钮 设置激活
						$("button#getCode").attr("disabled", false);
						PHONE = true;
						return true;
					}
				},
				error: function(err) {
					console.log(err);
				},
				dataType: 'json'
			});
		}

		
	});





	//获取验证码
	$("button#getCode").click(function() {
		var that = $(this);
		$('span#phoneexist').attr('num', 0);
		that.attr('num', 0);
		var a = 0;
		var count = 60;
		var countdown = setInterval(CountDown, 1000);

		function CountDown() {
			that.attr("disabled", true);
			if (count == 0) {
				that.attr("disabled", false);
				clearInterval(countdown);
			}
			count--;

			if (count > 0) {
				that.html(count + "s后重新发送");
			} else {
				that.html('获取验证码');
			}
		}
		//获取手机号
		var phone = $('input[name="phone"]').val();

		$.ajax({
			type: 'post',
			url: '{{url("/home/yzm")}}',
			data: {'phone':phone,'_token':"{{csrf_token()}}"},
			// 成功走下面
			success: function(data) {
				if (data.status == -1) {
					$('span#checkCode').css('color', 'red').html('手机验证码不正确！');
					return false;
				} else {
					$('span#checkCode').css('color', 'green').html('发送成功');
					
					//把获取校验码按钮 设置激活
					// $("#ss").attr('disabled', false);
					return true;
				}
			},
			error: function(err) {
				console.log(err);
			},
			dataType: 'json'
		}); 


	});



 //获取输入验证码input
 $("input[name='code']").blur(function(){
  c=$(this);
  //获取输入的校验码
  code=$(this).val();
  console.log(code);
  //Ajax
  $.get("/home/checkcode",{code:code},function(data){
    if(data==1){
      //校验码一致
      c.next("span").css('color','green').html('校验码一致');
      c.addClass('curs');
      CODE=true;
    }else if(data==2){
      //校验码不一致
      c.next("span").css('color','red').html('校验码有误');
      c.addClass('cur');
      CODE=false;
    }else if(data==3){
      //输入校验码为空
      c.next("span").css('color','red').html('校验码为空');
      c.addClass('cur');
      CODE=false;
    }else if(data==4){
      //验证码过期
      c.next("span").css('color','red').html('校验码已经过期');
      c.addClass('cur');
      CODE=false;
    }
  });
 });
   

  
 	// 获取密码 绑定失去焦点事件
   $("input[name='password']").blur(function(){
   	$("span#checkPassword").html("");
   		// 获取密码
   		var password = $(this).val();
   		// 获取输入框密码的值的长度
		var len = document.getElementById("password").value.length;
		//验证密码长度

		// 如果获取到的值时空
		if (password == '') {
			placeholder = $(this).attr('placeholder');
			console.log(placeholder);
			$(this).next("span").css('color', 'red').html(placeholder);
			//添加类样式
			$(this).parent().css('border', '1px solid red');
			return false;
		} else {
			if (len > 16 || len < 6) {
				$('span#checkPassword').html('用户名长度只能在6-16位个字符长度').css('color', 'red');
				return false;
			}
			placeholder = $(this).attr('placeholder');
			$(this).next("span").css('color', 'red').html('');
			//添加类样式
			$(this).parent().css('border', '1px solid #E0E0E0');
			PASSWORD = true;
		}
        



   })


   // 获取邮箱 绑定失去焦点事件
     $("input[name='email']").blur(function(){
   	 $("span#email").html("");
    	// 获取邮箱
    	var email = $(this).val();

        var re = /^\w[-\w.+]*@([A-Za-z0-9][-A-Za-z0-9]+\.)+[A-Za-z]{2,14}$/;
    	// 如果获取到的值时空
    	if (email == '') {
			placeholder = $(this).attr('placeholder');
			console.log(placeholder);
			$(this).next("span").css('color', 'red').html(placeholder);
			//添加类样式
			$(this).parent().css('border', '1px solid red');
			return false;
		} else {
			placeholder = $(this).attr('placeholder');
			$(this).next("span").css('color', 'red').html('');
			//添加类样式
			$(this).parent().css('border', '1px solid #E0E0E0');
			//正则验证
			var ree = new RegExp(re);//正则对象
			// console.log(re);
			if (!ree.test(email)) {  //正则匹配  成功返回true  不成功返回false
				$(this).next('span').html('邮箱规格不正确!必须含有@符号').css('color', 'red');
				return false;
			}
		}
		EMAIL = true;
	})

     // 提交表单
    
	     $("#form").submit(function(){

	     	// trgger 某个元素出发事件
	     	$("input").trigger("blur");
	     	if(PHONE && CODE && EMAIL && NAME && PASSWORD){
	     		return true;
	     	}else{
	     		return false;
	     	}
	     });


</script>
