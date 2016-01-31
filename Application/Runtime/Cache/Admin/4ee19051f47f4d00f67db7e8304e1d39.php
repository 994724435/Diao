<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		body{
			background: black;
		}
		.viplook{
			width: 347px;
			height: 476px;
			background: white;
			position: relative;
			left:710px ;
			top: 170px;

		}
		.viptop{
			width: 344px;
			margin-left: 3px;
			height: 68px;
			border-bottom: 1px dotted #ddd;
		}
		.viptitle{
			padding-left: 32px;
			font-size: 22px;
			color: #767676;
		}
		.vipbot{
			width: 317px;
			height: 305px;
			border: 1px dotted #ddd;
			margin-top: 17px;
			margin-left: 14px;
			background: #f6f6f6;
			overflow-y: scroll;
			overflow-x: visible;
		}
		.viptable{
			width: 300px;
			height: 307px;
			margin-top: 10px;
			border: 1px dotted #e9e9e9;
			float: left;
			overflow: scroll;
		}
		.viptab1{
			font-size: 12px;
			width: 60px;
			text-align: right;
		}
		.viptab2 .text{
			width: 209px;
			height: 30px;
			font-size: 12px;
		}
		.vipradio{
			font-size: 12px;
		}
		.vipimg{
			padding-left: 129px;
			padding-top: 12px;
		}
		.vipsubmit{
			margin-left: 37px;
			margin-top: 24px;
			width:119px;
			height:34px;
			background:url("/Public/Admin/images/vipkeep.gif") no-repeat ;
		}
	</style>
</head>
<body>
<div class="viplook">
	<div class="viptop">
		<span class="viptitle">查看会员资料</span>
		<img src="/Public/Admin/images/xx.jpg" alt="" class="vipimg">
	</div>
	<form action="" method="post">
		<div class="vipbot">
			<table class="viptable">
				<tr>
					<td class="viptab1">会员名：</td>
					<td class="viptab2"><input type="text" class="text"></td>
				</tr>
				<tr>
					<td class="viptab1">姓名：</td>
					<td class="viptab2"><input type="text"  class="text"></td>
				</tr>
				<tr>
					<td class="viptab1">登录密码：</td>
					<td class="viptab2"><input type="password" name="" id=""  class="text"></td>
				</tr>
				<tr>
					<td class="viptab1">联系电话：</td>
					<td class="viptab2"><input type="text"  class="text"></td>
				</tr>
				<tr>
					<td class="viptab1">邮箱地址：</td>
					<td class="viptab2"><input type="text"  class="text"></td>
				</tr>
				<tr>
					<td class="viptab1">性别：</td>
					<td class="vipradio"><input type="radio" name="sex" id="">男<input type="radio" name="sex" id="">女</td>
				</tr>
				<tr>
					<td class="viptab1">出生日期：</td>
					<td class="viptab2"><input type="text"  class="text"></td>
				</tr>
				<tr>
					<td class="viptab1">出生日期：</td>
					<td class="viptab2"><input type="text"  class="text"></td>
				</tr>
				<tr>
					<td class="viptab1">出生日期：</td>
					<td class="viptab2"><input type="text"  class="text"></td>
				</tr>
				<tr>
					<td class="viptab1">出生日期：</td>
					<td class="viptab2"><input type="text"  class="text"></td>
				</tr>
				<tr>
					<td class="viptab1">出生日期：</td>
					<td class="viptab2"><input type="text"  class="text"></td>
				</tr>
			</table>
		</div>
		<input type="submit" value="" class="vipsubmit">
	</form>
</div>
</body>
</html>