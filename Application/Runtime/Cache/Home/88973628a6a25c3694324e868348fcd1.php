<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="robots" content="index,follow"/>
		<meta name="renderer" content="webkit">
		<title></title>
		<link rel="stylesheet" href="/Public/Home/css/login.css" />
		<script type="text/javascript" src="/Public/Home/js/jquery-1.11.3.min.js"></script>
	</head>
	<body>
		<div class="wrapper">
			<div class="logo">
				<img src="/Public/Home/images//logo.png" alt="" />
			</div>
			<div class="mid"></div>
			<div class="login_box">
				<div class="box">
					<div class="title_row">
						<div class="title fl">网站管理员登录</div>
						<div class="warning fr">请务必正确填写信息</div>
						<div class="cl"></div>
					</div>
					<form action="" method="post">
						<input type="text" name="username" id="username" value="" placeholder="请输入您的用户名" />
						<input type="password" name="password" id="password" value="" placeholder="请输入您的密码" />
						<input type="text" name="validation" id="validation" value="" placeholder="请在此输入正确的答案" />
						<img src="img_code.php" id="change_img" alt="" class="validation" >
						<a href="javascript:;" class="validation" id="change" style="margin-left:245px;font-size:10px;color:#bfbaba;line-height:16px;">看不清，换一张</a>
						<input type="checkbox" id="checkbox" name="autologin" /><span>下次自动登录</span>
						<input type="submit" name="login" id="login" value="立即登录"/>
					</form>
				</div>
			</div>
			<div class="cl"></div>
		</div>
		<div class="copyright">声明：系统开发版权归重庆艾斯顿文化传媒有限公司所有，翻版必究</div>
	</body>
</html>
<script>
	$('#change_img').click(function(){
		$(this).attr('src','img_code.php?id='+Math.random());
	})
	$('#change').click(function(){
		$('#change_img').trigger('click');
	})
</script>