<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="utf-8">
<head>
	<meta charset="utf-8">
  <meta name="Keywords" content="<?php echo C('Keywords');?>">
  <meta name="Description" content="<?php echo C('Description');?>">
	<title><?php echo C('TITLE');?></title>
	<link rel="stylesheet" type="text/css" href="/Public/Home/css/reset.css">
	<link rel="stylesheet" type="text/css" href="/Public/Home/css/coman.css">
	<link rel="stylesheet" type="text/css" href="/Public/Home/css/style.css">
  <link href="/Public/Home/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
    <div class="top">
          <div class="logo"><a href="<?php echo U('/Home/Index/index');?>"><img src="/Public/Home/images/logo.png" alt="广州八军建筑安装有限公司" title="广州八军建筑安装有限公司"></a></div>
    </div>

    <div class="navBar">
        <ul class="fl">
            <li><a href="<?php echo U('/Home/Index/index');?>" class="home">首页</a></li>             
            <li><a href="<?php echo U('/Home/About/index');?>">关于我们</a></li>             
            <li><a href="<?php echo U('/Home/Article/index');?>">新闻动态</a></li>             
            <li><a href="<?php echo U('/Home/Article/index');?>">案例展示</a></li>             
            <li><a href="<?php echo U('/Home/Recruit/index');?>">人才招聘</a></li>             
            <li><a href="<?php echo U('/Home/Article/message');?>">客户留言</a></li>             
            <li><a href="<?php echo U('/Home/About/contact');?>">联系我们</a></li>
        </ul>
        <div class="fr searBox">
              <input type="text" placeholder="请输入搜索关键字" class="st">
              <input type="submit" class="sb" value="">
        </div>
    </div>

    <!--focus start-->
       <div class="focus2" id="focus">
        <div id="focus_m" class="focus_m2">
          <ul>
            <li class="li_5" style="background:url(/Public/Home/images/sb5.png) center 0 no-repeat #fff"><a href="#" hidefocus="true"></a></li>
            <li class="li_1" style="background:url(/Public/Home/images/sb1.png) center 0 no-repeat;"><a href="#" hidefocus="true"></a></li>
            <li class="li_2" style="background:url(/Public/Home/images/sb2.png) center 0 no-repeat #fff"><a href="#" hidefocus="true"></a></li>
            <li class="li_3" style="background:url(/Public/Home/images/sb3.png) center 0 no-repeat #fff"><a href="#" hidefocus="true"></a></li>
            <li class="li_4" style="background:url(/Public/Home/images/sb4.png) center 0 no-repeat #fff"><a href="#" hidefocus="true"></a></li>
            <li class="li_6" style="background:url(/Public/Home/images/sb6.png) center 0 no-repeat #fff"><a href="#" hidefocus="true"></a></li>
            
          </ul>
        </div>
        <a href="javascript:;" class="focus_l2" id="focus_l" hidefocus="true" title="上一张"><b></b><span></span></a>
        <a href="javascript:;" class="focus_r2" id="focus_r" hidefocus="true" title="下一张"><b></b><span></span></a>
      </div>
  <!--focus end-->

    <div class="content"> 
          <div class="nPLeft fl">
                  <div class="lList bor">
                        <h3 class="leH2"><img src="/Public/Home/images/ico01.png">关于我们/<span>NEW</span></h3>
                        <ul class="li1">
                            <li><a href="<?php echo U('/Home/Article/index');?>" class="onfucus">公司新闻</a></li>
                            <li><a href="#">行业新闻</a></li>
                        </ul>

                  </div>

                  <div class="lList bor">
                        <h3 class="leH2"><img src="/Public/Home/images/ico02.png"> 联系我们</h3>
                         <div class="linkLeft">
<p>广州庐美装饰工程有限公司</p>
<p>联系人：黄明勇</p>
<p>手  机：13602278279、13928744499</p>
<p>电  话：020-31126558</p>
<p>邮  箱：965066011@qq.com</p>
<p>网  址：www.gzlmzs.net</p>
<p>地  址：广州番禺区桥南街南城路金奥街77号</p>
                         </div>
                  </div>

          </div>

          <div class="nPRight fr">
                 <div class="bdsharebuttonbox fr" style=""><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"24"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
                <div class="nplace">
                      <span class="fontRed">您当前位置：</span> <a href="<?php echo U('/Home/Index/index');?>">首页</a> >> <a href="<?php echo U('/Home/Article/index');?>">新闻动态</a> >> 公司动态
                </div>
                <div class="newsLi">
                      <ul>
                        <?php if(is_array($new)): foreach($new as $key=>$val): ?><li><a href="<?php echo U('/Home/Article/detail?id='.$val['art_id']);?>"><span><?php echo (date("Y-m-d",$val["art_addtime"])); ?></span><?php echo ($val["art_title"]); ?></a></li><?php endforeach; endif; ?>
                      </ul>
                      <div id="pageLLoit">
                        <?php echo ($page); ?>

                      </div>
                </div>
          </div>
          <div class="clear"></div>
    </div>

    <div class="wraFooter">
            <p>联系电话：010-1234564    地址：广州市白云区同和街沙太北路    </p>
            <p>Copyright © 2014,广州庐美装饰工程有限公司,All rights reserved, 广州网站建设：骏域网站建设专家</p>
    </div>




   <script type="text/javascript" src="/Public/Home/js/jquery-1.11.1.min.js"></script>  
    <script type="text/javascript" src="/Public/Home/js/script.js"></script>
 


  <div id="kefu1">
  <div class="cs_close"><a href="javascript:;" onClick="$('#kefu1').fadeOut()"><span>关闭</span></a></div>
  <div class="cs_tel"></div>
  <div class="cs_tel_ct">
    <span class="cs_tel_num">020-62809388</span> 工作日：9:00-18:00<br />周　六：9:00-18:00<br />
  </div>
  <div class="cs_spr"></div>
  <div class="cs_online"></div>
  <div class="cs_online_ct">
    <div class="cs_online_qq"><a target="_blank" href="http://wp.qq.com/wpa/qunwpa?idkey=6fcb83777ae7745bd5093a1a5917f915f4e95cfc498633379ebfbb4"><img border="0" src="http://wpa.qq.com/pa?p=2:123456789:52" alt="点击这里给我发消息" title="点击这里给我发消息" align="absmiddle" /> 代理咨询</a></div>
    <div class="cs_online_qq"><a target="_blank" href="http://wp.qq.com/wpa/qunwpa?idkey=6fcb83630777ae7745bd5093a1a5917f915f4e95cfc498633379ebfbb4"><img border="0" src="http://wpa.qq.com/pa?p=2:123456789:52" alt="点击这里给我发消息" title="点击这里给我发消息" align="absmiddle" /> 销售客服01</a></div>
    <div class="cs_online_qq"><a target="_blank" href="http://wp.qq.com/wpa/qunwpa?idkey=6fcb8c3630777ae7745bd5093a1a5917f915f4e95cfc498633379ebfbb4"><img border="0" src="http://wpa.qq.com/pa?p=2:123456789:52" alt="点击这里给我发消息" title="点击这里给我发消息" align="absmiddle" /> 销售客服02</a></div>
  </div>
  <div class="cs_qcode"><img src="/Public/Home/images/weixin_code.jpg" width="120" height="120" title="用手机微信扫一扫" /></div>
  <div class="cs_spr"></div>
  <div class="cs_baidu"><a href="#" target="_blank"><span>百度商桥咨询</span></a></div>
  <div class="cs_space"></div>
  <div class="cs_free"><a href="#" target="_blank"><span>免费用户通道</span></a></div>
</div>


</body>
</html>