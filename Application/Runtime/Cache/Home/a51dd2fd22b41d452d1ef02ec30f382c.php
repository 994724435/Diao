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
				<a href="/index.php/Home/Index/index">首页</a>
				<span>&gt;</span>
				<!--<a href="">合作明星</a>
				<span>&gt;</span>-->
				<a href="" class="cur">合作明星</a>
			</div>
			<div class="tab cl">
				<!--<a href="" class="fl on">最新资讯</a>
				<a href="" class="fl">彩妆资讯</a>
				<a href="" class="fl">实习活动</a>
				<a href="" class="fl">学员就业工作</a>-->
				<!--<?php if(is_array($catedata)): foreach($catedata as $key=>$vo): ?><a href="/index.php/Home/News/news/id/<?php echo ($vo['cate_id']); ?>" <?php if($_GET['id']==$vo['cate_id']){echo 'class="fl on"';} ?> class="fl"><?php echo ($val['cate_name']); ?> <?php echo ($vo['cate_name']); ?></a><?php endforeach; endif; ?>--> 
			</div>
			<div class="list4">
				<?php if(is_array($data)): foreach($data as $key=>$val): ?><a href="/index.php/Home/News/detail/id/<?php echo ($val['art_id']); ?>" class="cl">
						<span class="list-style fl"></span>
						<span class="title fl"><?php echo ($val['art_title']); ?></span>
						<span class="date fr"><?php echo ($val['art_addtime']); ?></span>
					</a><?php endforeach; endif; ?>
			</div>
			<div class="cl">
				<div class="page_turn fr cl">
					<a href="" class="fl change">首页</a>
					<a href="" class="fl change">上一页</a>
					<a href="" class="fl num on">1</a>
					<a href="" class="fl num">2</a>
					<a href="" class="fl num">3</a>
					<a href="" class="fl num">4</a>
					<span class="fl">...</span>
					<a href="" class="fl num">12</a>
					<a href="" class="fl change">下一页</a>
					<a href="" class="fl change">末页</a>
					<span class="fl">跳转至</span>
					<input class="fl" type="text" />
					<input class="fl" type="submit" value="确定" />
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