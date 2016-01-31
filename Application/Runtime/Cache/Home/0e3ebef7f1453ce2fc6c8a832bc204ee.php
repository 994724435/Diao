<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="renderer" content="webkit">
	<meta http-equiv=”X-UA-Compatible” content=”IE=8,chrome=1″ >
	<title>详情页</title>
	<link rel="stylesheet" type="text/css" href="/Public/Home/css/public.css" />
	<link rel="stylesheet" type="text/css" href="/Public/Home/css/style.css" />
	<script src="/Public/Home/js/jquery-1.11.3.min.js"></script>
	<script src="/Public/Home/js/jquery.SuperSlide.2.1.1.js"></script>
	<script src="/Public/Home/js/flash.js"></script>

</head>
<body>
 		<div class="hearder w1090">
          <div class="logo fl">
              <a href="index.html"><img src="/Public/Home/images/logo.png"></a>
          </div>
          <div class="navBar fr">
              <ul>
                  <li>
                    <a href="/index.php/Home/Index" class="curr">首页<span>Home</span></a>
                  </li>       
                    <li>
                    <a href="/index.php/Home/Start/start">合作明星<span>About Us</span></a>
                  </li>      
                    <li>
                    <a href="/index.php/Home/Course/course">课程设置<span>Course</span></a>
                  </li>  
                  <li>
                    <a href="/index.php/Home/Team/team">名师团队<span>Course</span></a>
                  </li>   
                    <li>
                    <a href="/index.php/Home/News/news">动态咨询<span>News</span></a>
                  </li>       
                    <li>
                    <a href="/index.php/Home/Product/product">作品欣赏<span>Teachers</span></a>
                  </li>      
                    <li>
                    <a href="/index.php/Home/Join/join">创业加盟<span>Join us</span></a>
                  </li>       
                    <li>                                                       
                    <a href="/index.php/Home/Contact/contact">联系我们<span>Contact Us</span></a>
                  </li>
              </ul>
          </div>
      </div>

<div id="content">
	<div class="content">
		<div class="content-left-nav">
			<div class="left-nav">
				<div class="left-title">处室信息</div>
				<div class="left-content">
					<ul>
						<!--<li><a href="">秘书处</a></li>
						<li><a href="">组织处</a></li>
						<li class="active"><a href="">干部人事处</a>
							<dl>
								<dd><a href="">政工研究</a></dd>
								<dd><a href="" class="on">政工简讯</a></dd>
								<dd><a href="">群众工作</a></dd>
								<dd class="last"><a href="">司法信访</a></dd>
							</dl>
						</li>
						<li><a href="">宣传处</a></li>
						<li><a href="">保卫处</a></li>
						<li class="last"><a href="">纪检处</a></li>-->
						<li><a href="/index.php/Home/Article/Dadui">大队要闻</a></li>
						<li><a href="/index.php/Home/Article/Jiguan">机关信息</a></li>
						<li><a href="/index.php/Home/Article/Jicen">基层动态</a></li>
						<li><a href="/index.php/Home/Article/Tieqi">铁骑之声</a></li>
						<li><a href="/index.php/Home/Article/zhengce">政策法规</a></li>
						<li class="last"><a href="/index.php/Home/Article/Download">下载中心</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="content-right">
			<div class="title">
				<a href="">首页</a> ><a href="" class="on"><?php echo ($re_name['cate_name']); ?></a>
			</div>
			<div class="right-content">
				<h4><?php echo ($data["art_title"]); ?></h4>
				<div class="ctt01"> | 作者：<?php echo ($data["art_author"]); ?>| 发表于： <?php echo ($data["art_addtime"]); ?> | 点击数：【<span><?php echo ($data["art_num"]); ?></span>】|</div>
				<dl>
			     <img src="<?php echo ($data["art_thumb"]); ?>" style="width:650px;margin: 0 auto;"/>	<br />	
				</dl>				
				<dl>
<?php echo ($data["art_content"]); ?>
				</dl>
			</div>
			<div class="ctt02">
				<div>上一篇：<span><a href="/index.php/Home/Article/Details/artid/<?php echo $data['art_id']-1; ?>" style="color: red;"><?php echo ($data2['art_title']); ?></a> </span></div>
				<div>下一篇：<span><a href="/index.php/Home/Article/Details/artid/<?php echo $data['art_id']+1; ?>" style="color: red;"><?php echo ($data1['art_title']); ?></a></span></div>			
			</div>
		</div>
	</div>
</div>


</body>
</html>