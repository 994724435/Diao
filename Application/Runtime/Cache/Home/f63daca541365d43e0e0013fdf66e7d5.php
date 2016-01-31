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
				<!--<ul class="nav fr cl">
					<li><a href=""><span class="ch">首页</span><span class="en">Home</span></a></li>
					<li><a href=""><span class="ch">合作明星</span><span class="en">Stars</span></a></li>
					<li><a href=""><span class="ch">课程设置</span><span class="en">Course</span></a></li>
					<li><a href=""><span class="ch">名师团队</span><span class="en">Team</span></a></li>
					<li><a href=""><span class="ch">动态资讯</span><span class="en">News</span></a></li>
					<li><a href=""><span class="ch">作品欣赏</span><span class="en">Product</span></a></li>
					<li><a href=""><span class="ch">创业加盟</span><span class="en">Join Us</span></a></li>
					<li><a href=""><span class="ch">联系我们</span><span class="en">Contact Us</span></a></li>
				</ul>-->
								<ul class="nav fr cl">
					<li><a href="/index.php/Home/Index"><span class="ch">首页</span><span class="en">Home</span></a></li>
					<li><a href="/index.php/Home/Start/start"><span class="ch">合作明星</span><span class="en">Stars</span></a></li>
					<li><a href="/index.php/Home/Course/course"><span class="ch">课程设置</span><span class="en">Course</span></a></li>
					<li><a href=""><span class="ch">名师团队</span><span class="en">Team</span></a></li>
					<li><a href="/index.php/Home/News/news"><span class="ch">动态资讯</span><span class="en">News</span></a></li>
					<li><a href="/index.php/Home/Product/product"><span class="ch">作品欣赏</span><span class="en">Product</span></a></li>
					<li><a href=""><span class="ch">创业加盟</span><span class="en">Join Us</span></a></li>
					<li><a href="/index.php/Home/Contact/contact"><span class="ch">联系我们</span><span class="en">Contact Us</span></a></li>
				</ul>
			</div>
			<div class="banner"></div>
		</div>
		<div class="center-block">
			<div class="location">
				<span>您当前位置：</span>
				<a href="/index.php/Home/Index/index">首页</a>
				<span>&gt;</span>
				<a href="/index.php/Home/News/news/id/2">作品欣赏</a>
				<span>&gt;</span>
				<a href="" class="cur">最新资讯</a>
			</div>
			<!--<div class="tab cl">
				<a href="" class="fl on">最新资讯</a>
				<a href="" class="fl">彩妆资讯</a>
				<a href="" class="fl">在线报名</a>
				<a href="" class="fl">重庆电视台专栏</a>
				<a href="" class="fl">其他活动</a>
			</div>-->
			<div class="detail">
				<p class="title"><?php echo ($data['p_title']); ?></p>
				<p class="other">
					<span>来源: <?php echo ($data['p_source']); ?></span>
					<span>作者: <?php echo ($data['p_author']); ?></span>
					<span>发布时间: <?php echo ($data['p_addtime']); ?></span>
					<span><span><?php echo ($data['p_visit']); ?></span>次浏览</span>
				</p>
				<div class="line"></div>
				<div class="pic" style="margin-left: 330px;"><img class="adapt" src="<?php echo ($data['p_thumb']); ?>"/></div>
				<p class="content" style="margin-left: 300px;"><?php echo ($data['p_content']); ?></p>
				<div class="links">
					<a href=""><img src="/Public/Home/images/icon1.jpg"/></a>
					<a href=""><img src="/Public/Home/images/icon2.jpg"/></a>
					<a href=""><img src="/Public/Home/images/icon3.jpg"/></a>
					<a href=""><img src="/Public/Home/images/icon4.jpg"/></a>
					<a href=""><img src="/Public/Home/images/icon5.jpg"/></a>
					<a href=""><img src="/Public/Home/images/icon6.jpg"/></a>
				</div>
				<div class="line"></div>
				<div class="change_artical">
					<a href="/index.php/Home/Product/detail/id/<?php echo ($data1['p_id']); ?>"><span class="prev">上一篇：</span><span class="artical_name"><?php echo ($data1['p_title']); ?></span></a>
					<a href="/index.php/Home/Product/detail/id/<?php echo ($data2['p_id']); ?>"><span class="next">下一篇：</span><span class="artical_name"><?php echo ($data2['p_title']); ?></span></a>
				</div>
			</div>
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
	</body>
</html>
<script type="text/javascript" src="/Public/Home/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/Public/Home/js/js.js"></script>