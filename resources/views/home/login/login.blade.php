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
	
</head>

<body style="font-size: 12px;">
	<div style="width: 100%; height: 100%;">
		<a class="hiddenanchor" id="tochange"></a>
		<a class="hiddenanchor" id="tochange1"></a>
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
		<div class="mask" style="display: none;"></div>
		<div data-v-496a6b4b="" class="registerSetPwd">
			<div data-v-496a6b4b="" class="section">
				<div data-v-496a6b4b="" class="logo-area">
					<div data-v-b30b945c="" data-v-496a6b4b="" class="vivo-logo-box">
						<img data-v-b30b945c="" src="https://accountstatic.vivo.com.cn/accountstatic.vivo.com.cn/static/img/logo.1f42884.png.webp"
						 alt="">
					</div>
				</div>
				<form id="data1" name="" class="" action="/home/dologin" method="post">
				<div data-v-496a6b4b="" class="title-item">
					<div data-v-496a6b4b="" id="to_change1" class="title">帐号登录</div>
				</div>
					@if(!empty(session('error')))
					<!-- <div></div> -->
					{{session('error')}}
					@endif
				
					<div data-v-496a6b4b="" class="outer-box">
						<div data-v-496a6b4b="" class="inner-box">

							<div data-v-496a6b4b="" class="pwd-box clearfix">
								<input data-v-496a6b4b="" type="password" name="name" style="display: none;">
								<input data-v-496a6b4b="" type="text" name="name" autocomplete="new-name" password="false" placeholder="请输入用户名" placeholder-class="phone-pld"
								 maxlength="16" id="name" class="input required">
							</div>


							<div data-v-496a6b4b="" class="pwd-box clearfix" style={margin:50px}>
								<input data-v-496a6b4b="" type="password" name="password" style="display: none;">
								<input data-v-496a6b4b="" type="password" name="password" autocomplete="new-password" password="false" placeholder="请输入密码"
								 placeholder-class="phone-pld" maxlength="16" class="input required" id="password">
								<div data-v-496a6b4b="" class="eye-box">
									<img data-v-496a6b4b="" src="https://accountstatic.vivo.com.cn/accountstatic.vivo.com.cn/static/img/eyes-off.7c50935.png.webp"
									 alt="">
								</div>
							</div>
							<div data-v-496a6b4b="" class="hint2">
								<br>

								<div>
									尝试其他方式登录：
									<a href="{{'/home/qqlogin'}}" class="">
										<img width="20px" height="20px" src="{{asset('home/images/qq.png')}}" alt="">
									</a>&nbsp;&nbsp;&nbsp;&nbsp;
									<a href="{{'/home/tochange1'}}" class="to_change">手机验证码登录</a>
								</div>
								<br>
								<div data-v-e8bc1554="" data-v-496a6b4b="" class="errTip-Box" style="display: none;">
									<div data-v-e8bc1554="" class="errTip"></div>
								</div>
								{{csrf_field()}}
								<button data-v-496a6b4b="" class="button">登录</button>
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
	// var NAME = false;
	// var PASSWORD = false;
	

	$("input[name='name']").blur(function() {
		$('span#name').html('');
		// 获取输入框name的值
		var name = $(this).val();	
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

	}

});



	$("input[password='password']").blur(function() {
		$('span#password').html('');
		// 获取输入框name的值
		var name = $(this).val();	
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

	}

});

</script>
