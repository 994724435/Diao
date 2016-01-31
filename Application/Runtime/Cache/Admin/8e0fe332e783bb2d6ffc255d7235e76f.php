<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<script type="text/javascript" src="/Public/Admin/js/jquery-1.11.3.min.js"></script>
<link rel="stylesheet" href="/Public/Admin/css/css.css" type="text/css">
<link rel="stylesheet" href="/Public/Admin/css/default.css" />
  <link rel="stylesheet" href="/Public/Admin/css/prettify.css" />
  <link rel="stylesheet" href="/Public/Admin/css/page.css" />
  <script charset="utf-8" src="/Public/Admin/js/kindeditor.js"></script>
  <script charset="utf-8" src="/Public/Admin/js/zh_CN.js"></script>
  <script charset="utf-8" src="/Public/Admin/js/prettify.js"></script>
  <script>
    KindEditor.ready(function(K) {
      var editor1 = K.create('textarea[name="content1"]', {
        cssPath : '/Public/Admin/css/prettify.css',
        uploadJson : '/Public/Admin/php/upload_json.php',
        fileManagerJson : '/Public/Admin/php/file_manager_json.php',
        allowFileManager : true,
        afterCreate : function() {
          var self = this;
          K.ctrl(document, 13, function() {
            self.sync();
            K('form[name=example]')[0].submit();
          });
          K.ctrl(self.edit.doc, 13, function() {
            self.sync();
            K('form[name=example]')[0].submit();
          });
        }
      });
      prettyPrint();
    });
  </script>
<script type="text/javascript">
$(function(){
  $("#tip1").mouseover(
    function(){
    $(".set").finish();
    $(".set").slideDown(500);
    }
  );
});

$(function(){
  $(".set").mouseleave(
    function(){
    $(".set").finish();
    $(".set").show().delay(1000).slideUp(500);
    }
  );
});

$(document).ready(function(){
  var l = $(window).width()-218;
    $(".rightfix").css("width",l);
  $(window).resize(function(){
    $(".rightfix").css("width",$(window).width()-218);
  });
  var h = $(window).height()-105;
    $(".rightfix").css("height",h);
  $(window).resize(function(){
    $(".rightfix").css("height",$(window).height()-105);
  });
});

$(function(){
  $(".step").click(
    function(){
    $(this).next('div').finish();
    $(this).toggleClass("stepclick");
    $(this).parent().siblings('div').children('ul').slideUp(500);
    $(this).parent().siblings('div').children('p').removeClass("stepclick");
    $(this).next('ul').slideToggle(500);

    }
  );
});
</script>

<title>首页</title>
</head>
<body>
<div class="set">
  <?php if($current_admin['admin_level'] == 1): ?><a id="ch_pa1" class="circle1  show_block changePassword_block">修改密码</a><a id="addadmin1" class="circle2 show_block addAdmin_block">添加管理员</a><a id="setpower1" class="circle3 show_block changePermissions_block">设置权限</a><a id="logout1" class="circle4 show_block friendShip2_notice_block">退出系统</a>
  <?php else: ?><a id="ch_pa1" class="circle1  show_block changePassword_block">修改密码</a><a id="logout1" class="circle4 show_block friendShip2_notice_block">退出系统</a><?php endif; ?>
</div>

<div class="top">
  <div class="logo">网站后台管理系统</div>
  <div class="admin">
    <p><?php echo ($current_admin["admin_relname"]); ?></p>
    <a id="tip1">
      <?php if($current_admin['admin_level'] == 1): ?>（超级管理员）
      <?php else: ?>（普通管理员）<?php endif; ?>
    </a>
  </div>
  <a class="gotoindex" onclick="javascript:window.location.href='http://www.aiston.com'" >浏览网站</a>
  <div class="welc">您好，欢迎您登录网站后台管理平台</div>
</div>
<div class="clear"></div>
<div class="leftfix">
<?php if(is_array($n_nav)): foreach($n_nav as $key=>$val): ?><div>
    <p class="<?php echo 'step'.$val['nav_id']; ?> step" name="<?php echo ($val["nav_url"]); ?>"><?php echo ($val["nav_name"]); ?><span class="arrowL"></span><span class="arrowR"></span></p>
    <ul class="slidedown">
      <?php if(is_array($val["sid"])): foreach($val["sid"] as $key=>$value): ?><li><a href="<?php echo ($value["nav_url"]); ?>"><?php echo ($value["nav_name"]); ?></a></li><?php endforeach; endif; ?>
    </ul>
  </div><?php endforeach; endif; ?>
  
</div>

<style>
	table tr td{
		border-left: 1px solid #eaeaea;	
		line-height: 35px;
		background: #F6F6F6;
		color: #767676;
	}
	.table_title td{
		border: none;
		background: #EAEAEA;
	}
	table{
		margin-left: 20px;
		margin-top: 20px;
	}
	.tab1{
		width: 75px;
		padding-left: 5px;
		text-align: left;
	}
	.tab2{
		width: 98px;
		padding-left: 12px;
	}
	.tab3{
		width: 348px;
		padding-left: 24px;
		text-align: left;
	}
	.tab4{
		width: 126px;
		padding-left: 12px;
	}
	.tab5{
		width: 198px;
		padding-left: 20px;
	}
	.user{
		color: #BD3734;
		float: right;
	}
	.msg{
		float: right;
		margin-right: 10px;
		color: #767676;
	}
	.off{
		display:none;
	}
	.on{
		display:block;
		background: #DBDBDB;
		border: 2px solid #D1D1D1;
		padding-left: 14px;
	}
	.delete{
		color: #CB853A;
	}
	.look{
		color: #767676;
		display: inline-block;
	}
	.shut{
		color: #767676;
		display: none;
	}
	.see{
		display: inline-block;
		color: #C423BC;
	}
	.close{
		display: none;
		color: #C423BC;
	}
	.time{
		float: right;
		padding-right: 10px;
		color: #767676;
	}
	.cont{
		color: #767676;
	}
	b{
		font-size: 14px;
		color: #4e4e4e;
	}
	hr{
		color: #C1C1C0;
		height: 2px;
	}
</style>
<div class="rightfix">
	<a href="<?php echo U('/Admin/Index/index');?>" class="home1"></a><a class="home_pass">产品管理</a><a href="/Admin/Product/index" class="home_pass">产品列表</a><a class="home_now">产品评论</a>
	<div class="clear"></div>
	<table CellSpacing=0>
        <tr class="table_title">
          <td class="tab1"><input id="allbox1" type="checkbox" />全选</td>
          <td class="tab2">会员名</td>
          <td class="tab3">详情</td>
          <td class="tab4">评论时间</td>
          <td class="tab5">操作</td>
        </tr>
        <form action="" method="post">
        <?php if(is_array($cmt)): foreach($cmt as $key=>$val): ?><tr>
        		<td class="tab1"><input type="checkbox" name="idarr[]" value="<?php echo ($val['cmt_id']); ?>"></td>
        		<td class="tab2"><?php echo ($val["cmt_user"]); ?></td>
        		<td class="tab3"><a class="look"><?php echo ($val["cmt_ctitle"]); ?></a><a class="shut"><?php echo ($val["cmt_ctitle"]); ?></a></td>
        		<td class="tab4"><?php echo (date("Y-m-d H:m",$val["cmt_addtime"])); ?></td>
        		<td class="tab5"><a href="" class="delete">删除</a> / <a class="see">查看</a><a class="close">关闭</a></td>
        	</tr>
	        <tr>
	        	<td colspan="5">
	        		<div class="off">
	        			<b style="padding-left:15px;">会员名：</b><span></span><?php echo ($val["cmt_user"]); ?></span><br />
	        			<b>评论详情：</b><span class="cont"><?php echo ($val["cmt_content"]); ?></span><br /><span class="time"><?php echo (date("Y-m-d H:m",$val["cmt_addtime"])); ?></span><br /><?php if($val['cmt_reply'] != ''): ?><hr /><?php if(is_array($val["cmt_reply"])): foreach($val["cmt_reply"] as $key=>$value): ?><b>回复详情：</b><span><?php echo ($value["reply_content"]); ?></span><br /><span class="msg"><b>回复于</b><?php echo (date("Y-m-d H:m",$value["reply_addtime"])); ?></span><span class="user"><?php echo ($value["reply_user"]); ?></span><br /><?php endforeach; endif; endif; ?>
	        		</div>
	        	</td>
	        </tr><?php endforeach; endif; ?>
    </table>
    <div class="pagelist">
    	<button type="submit" class="save">删除所选</button>
    	<?php echo ($show); ?>
    </div>
    </form>
    <script>
    	var allbox = $('#allbox1').val();
    	$('#allbox1').change(function(){
    		if($('input[name="idarr[]"]').attr('checked')==false){
    			$('input[name="idarr[]"]').attr('checked',true);
    		}
    	})
    	$('.see').click(function(){
    		$(this).parents().next().find('.off').removeClass('off').addClass('on');
    		$(this).css('display','none').next().css('display','inline-block');
    	})
    	$('.close').click(function(){
    		$(this).parents().next().find('.on').removeClass('on').addClass('off');
    		$(this).css('display','none').prev().css('display','inline-block');
    	})
    </script>
</body>
</html>