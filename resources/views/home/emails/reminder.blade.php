<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
<body>
	<p>尊敬的{{$rs['username']}}:</p>

    <p>您好，感谢您注册小网站。这是一封注册确认邮件。 
		请点击以下链接完成确认：<a href="http://web.xxoo.cn/home/remind?id={{$uid}}&token={{$token}}">http:/web.xxoo.cn/remind?id={{$uid}}&token={{$token}}</a> 
		如果链接不能点击，请复制地址到浏览器，然后直接打开。
	</p>
				
</body>
</html>