<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册</title>
	<link rel="stylesheet" href="/dashboard/Public/home/css/style.css">
    <link rel="stylesheet" href="/dashboard/Public/home/css/login_style.css">
</head>
<body>
    <!--[if IE]>
     <style>
        .inp_error_info{
            line-height:30px;
            height:30px;
            margin-bottom:12px;
        }
        .inp_error_info span{
            height:0px;
        }
        .inp_success_info span{
            margin-top:15px;
        }
        .reg_right{
            line-height:42px;
        }
         #checkboxs{
            width:16px;
            height:16px;
            border:0px;
         }
     </style>
     <![endif]-->

    <!--注册的logo-->
    <!--头部开始-->
    
    <div class="reg_center">
        <!-- <div class="login_penguin">
            <img src="/dashboard/Public/home/images/logo2.jpg">
        </div> -->        
        <!--登录表单-->
        <div class="reg_login">
            <div class="reg_title">
                <span>用户注册</span>
            </div>
            <div class="reg_forms">
                <div class="reg_left">
                    <p>用户名</p>
                    <p>密码</p>
                    <p>确认密码</p>
                    <p>邮箱</p>
                    <p>验证码</p>
                </div>
                <div class="reg_input">
                    <form action="/dashboard/index.php/Home/Register/insert" method="post" id="reg_form">
                        <p><input type="text" name="uname" /></p>
                        <p><input type="password" name="pwd" /></p>
                        <p><input type="password" name="repwd" /></p>
                        <p><input type="text" name="email" /></p>
                        <p><input type="text" name="vcode" /></p>
                        <p>
                            <img src="/dashboard/index.php/Home/Register/verify" id="imgcode" width="80" height="40" id="code" onclick="this.src=this.src+'?'+Math.random()">
                            <span style="color:rgb(51,51,51)">看不清?<a href="javascript:void(0)" class="code_a" id="changepic" style="color:rgb(0,85,170);"><br />换一张</a></span>
                        </p>
                        <p>
                            <input type="checkbox" checked id="checkboxs">
                         &nbsp;我同意<a href="/dashboard/index.php/Home/Register/regAgreement">《用户协议》</a>
                        </p>
                        <p>
                            <input type="submit" value="注册" id="reg_sub"/>
                            <input type="button" value="登录" onclick="jump();" id="reg_sub"/>
                        </p>
                    </form>
                </div>
                <div class="reg_right">
                    <p>请输入用户名！</p>
                    <p>请输入密码！</p>
                    <p>请输入确认密码！</p>
                    <p>请输入邮箱以便激活账户！</p>
                    <p>请输入验证码！</p>
                </div>
            </div>
        </div>
    </div>

</body>
<script type="text/javascript" src="/dashboard/Public/home/js/jquery.js"></script>
<script type="text/javascript" src="/dashboard/Public/home/js/common.js"></script>
<script type="text/javascript" src="/dashboard/Public/home/js/reg.js"></script>
<script>
      //验证码 ：换图（换一张）
  $(function(){
      $("#changepic"). click(function(){
        $("#imgcode").attr("src","/dashboard/index.php/Home/Register/verify"+'?'+Math.random());
      })
  })
function jump(){
    location.href="/dashboard/index.php/Home/Login/index";
}
</script>
</html>