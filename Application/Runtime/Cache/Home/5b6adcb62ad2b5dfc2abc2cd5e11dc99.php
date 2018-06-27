<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo ((isset($title) && ($title !== ""))?($title): "登录-我的商城"); ?></title>
	<link rel="stylesheet" href="/dashboard/Public/home/css/style.css">
	<link rel="stylesheet" href="/dashboard/Public/home/css/login_style.css">
</head>
<body>
 <!--[if IE]>
    <style>
		.enter_sub{
			margin-left:48px;
		}
    </style>
<![endif]-->
	<!--<div class="sx_head_logo">-->
		<!--<img src="/dashboard/Public/home/images/logo_2013_v1.png" alt="商城网">-->
	<!--</div>-->
	<!--main主体-->
	<div class="enter_main1">
	<div class="enter_main">
		<!--<div class="enter_picture"><img src="/dashboard/Public/home/images/enter2.jpg"></div>-->
		<!--form表单块-->
		<div class="enter_enter">
			<div class="enter_number"><h2>账号登录</h2>		
			</div>
			<div class="enter_form">
			<div id="login_form">
				<div class="enter_inp2">
				<input type="text" name="uname"  class="enter_inp" placeholder="手机号/QQ号" ><br />
				</div>
				<div class="enter_inp2">
				<input type="password" name="pwd" class="enter_inp" placeholder="密码" ><br />
				</div>
				<input type="submit" value="登录" class="enter_sub">
			</div>
			</div>
			<!--<ul class="enter_forget">-->
				<!--<li><a href="/dashboard/index.php/home/findpwd">忘记密码</a>？</li>-->
			<!--</ul>-->
			<div class="enter_empty"></div>
		</div>	
		<div class="enter_enters">
			<div class="enter_check">
					<input type="checkbox" name="check" checked id="login_negotiate"><span>我已阅读<a href="/dashboard/index.php/Home/Login/loginservice">《商城用户服务协议》</a></span>
			</div>
		</div>
	</div>
	</div>
	<div class="login_foot">
		美食官网
	</div>
</body>
    <script src="/dashboard/Public/home/js/jquery.js" type="text/javascript"></script>
    <script src="/dashboard/Public/home/js/common.js" type="text/javascript"></script>
</html>