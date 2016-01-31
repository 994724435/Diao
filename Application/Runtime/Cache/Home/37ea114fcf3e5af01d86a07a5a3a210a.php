<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="页面描述"/>
		<meta name="keywords" content="关键字,关键字"/>
		<meta name="robots" content="index,follow"/>
		<meta name="renderer" content="webkit">
		<title></title>
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/global.css"/>
	</head>
	<body>
		<div class="header">
			<div class="center-block head cl">
				<div class="logo fl">
					<a href=""><img src="/Public/Home/images/logo.png"/></a>
				</div>
      				<ul class="nav fr cl">
					<li><a href="/index.php/Home/Index"><span class="ch">首页</span><span class="en">Home</span></a></li>
					<li><a href="/index.php/Home/Start/start"><span class="ch">合作明星</span><span class="en">Stars</span></a></li>
					<li><a href="/index.php/Home/Course/course"><span class="ch">课程设置</span><span class="en">Course</span></a></li>
					<li><a href="/index.php/Home/Team/team"><span class="ch">名师团队</span><span class="en">Team</span></a></li>
					<li><a href="/index.php/Home/News/news"><span class="ch">动态资讯</span><span class="en">News</span></a></li>
					<li><a href="/index.php/Home/Product/product"><span class="ch">作品欣赏</span><span class="en">Product</span></a></li>
					<li><a href="/index.php/Home/Join/join"><span class="ch">创业加盟</span><span class="en">Join Us</span></a></li>
					<li><a href="/index.php/Home/Contact/contact"><span class="ch">联系我们</span><span class="en">Contact Us</span></a></li>
				</ul>
			</div>
			<div class="banner"></div>
		</div>
		<div class="center-block">
			<div class="location">
				<span>您当前位置：</span>
				<a href="">首页</a>
				<span>&gt;</span>
				<a href="">联系我们</a>
				<span>&gt;</span>
				<a href="" class="cur">在线报名</a>
			</div>
			<div class="tab cl">
				<a href="/index.php/Home/Contact/lianxi" class="fl">联系方式</a>
				<a href="/index.php/Home/Contact/contact" class="fl">在线留言</a>
				<a href="/index.php/Home/Contact/baoming" class="fl on">在线报名</a>
			</div>
			<form action="" method="post" id="form2">
				<div class="row cl">
					<span class="fl">姓名</span>
					<input type="text" class="fl" placeholder="请输入您的姓名" autocomplete="off" />
				</div>
				<div class="row cl">
					<span class="fl">性别</span>
					<div class="checkbox fl">
						<input type="radio" name="sex" id="man" checked="checked"/><label for="man">男</label>
						<input type="radio" name="sex" id="female" /><label for="female">女</label>
					</div>
				</div>
				<div class="row cl">
					<span class="fl">年龄</span>
					<input type="text" class="fl" placeholder="请输入您的年龄" autocomplete="off" />
				</div>
				<div class="row cl">
					<span class="fl">电话</span>
					<input type="text" class="fl" placeholder="请输入您的电话号码" autocomplete="off" />
				</div>
				<div class="row cl">
					<span class="fl">邮箱</span>
					<input type="text" class="fl" placeholder="请输入您的邮箱地址" autocomplete="off" />
				</div>
				<div class="row cl">
					<span class="fl">QQ</span>
					<input type="text" class="fl" placeholder="请输入您的QQ号码" autocomplete="off" />
				</div>
				<div class="row cl">
					<span class="fl">喜欢的课程</span>
					<div class="fl cl">
						<div class="dropdown fl">
							<input type="text" class="dropdown_val" placeholder="-请选择您喜欢的课程-" readonly="true" />
							<ul class="dropdown_list">
								<li>-个人形象提升班-</li>
								<li>-影楼时尚造型班-</li>
								<li>-风尚形象设计师班-</li>
								<li>-全科化妆深造班-</li>
								<li>-明星影视全能班-</li>
								<li>-美甲深造班-</li>
								<li>-化妆加盘发班-</li>
								<li>-风尚形象设计师明星影视全能班-</li>
								<li>-雕婵微信课程-</li>
							</ul>
						</div>
						<a href="" class="fl"><span>+</span>增加</a>
					</div>
				</div>
				<div class="line"></div>
				<input type="submit" value="提交"/>
			</form>
		</div>
		<div class="footer">
			<div class="center-block">
				<div class="p">Copy © 2015 雕婵化妆形象设计中心 版权所有    重庆艾斯顿文化传媒有限公司 技术支持</div>
				<div class="p">地址:永川区1号站(交巡警平台)　公交路线：乘坐101、102、105、109、115、501、502 到望北路一号站</div>
				<div class="p cl">
					<div class="fl">联系人:  (吴老师)15123314717    QQ：314506025　  联系人:(波波老师)18723338716    QQ：357648253</div>
					<div class="links fr cl">
						<a href="" class="fl"><img src="/Public/Home/images/icon4.png"/></a>
						<a href="" class="fl"><img src="/Public/Home/images/icon5.png"/></a>
						<a href="" class="fl"><img src="/Public/Home/images/icon6.png"/></a>
					</div>
				</div>
			</div>
		</div>
		<div class="fixed">
			<a href="" class="a1">咨询客服</a>
			<a href="" class="a2">我要报名</a>
			<a href="javascript:;" class="toTop">返回顶部</a>
		</div>
	</body>
</html>
<script type="text/javascript" src="/Public/Home/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/Public/Home/js/js.js"></script>