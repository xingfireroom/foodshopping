<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title><?php echo ($title); ?>——后台管理</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- basic styles -->
		<link rel="stylesheet" href="/food/Public/admin/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/food/Public/admin/css/font-awesome.min.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="/food/Public/admin/css/ace.min.css" />
		<link rel="stylesheet" href="/food/Public/admin/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="/food/Public/admin/css/ace-skins.min.css" />
		
	</head>

	<body>
		<div class="navbar navbar-default" id="navbar">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<!--<div class="navbar-header pull-left">-->
					<!--<a href="index">-->
						<!--<img src="/food/Public/admin/images/admin_logo.png" class="img-responsive" />-->
					<!--</a>&lt;!&ndash; /.brand &ndash;&gt;-->
				<!--</div>-->

				<div class="navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="/food/Public/admin/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>欢迎光临,</small>
									<?php echo (session('auname')); ?>
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="<?php echo U('Admin/Profile/index');?>">
										<i class="icon-cog"></i>
										修改密码
									</a>
								</li>
								<li class="divider"></li>

								<li>
									<a href="<?php echo U('Admin/Login/loginOut');?>">
										<i class="icon-off"></i>
										退出
									</a>
								</li>
							</ul>
						</li>
					</ul><!-- /.ace-nav -->
				</div><!-- /.navbar-header -->
			</div><!-- /.container -->
		</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>
			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>
				
				<!-- 加载左部分 -->
				        <!-- 侧边菜单开始 -->
        <div class="sidebar" id="sidebar">
            <script type="text/javascript">
                try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
            </script>
            <ul class="nav nav-list">
                <li>
                    <a id="indexpage" href="<?php echo U('Admin/Index/index');?>">
                        <i class="icon-dashboard"></i>
                        <span class="menu-text"> 控制台 </span>
                    </a>
                </li>
                <li>
                    <a  href="<?php echo U('Admin/Websetting/index');?>">
                        <i class="icon-cog"></i>
                        <span class="menu-text"> 网站配置 </span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo U('Admin/Indexset/index');?>">
                        <i class="icon-desktop"></i>
                        <span class="menu-text"> 首页设置 </span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo U('Admin/Adset/index');?>">
                        <i class="icon-eye-open"></i>
                        <span class="menu-text"> 广告管理 </span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo U('Admin/Member/index');?>">
                        <i class="icon-dashboard"></i>
                        <span class="menu-text"> 会员管理 </span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo U('Admin/Goodsclass/index');?>">
                        <i class="icon-list"></i>
                        <span class="menu-text"> 分类管理 </span>
                    </a>
                </li>

                   <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-asterisk"></i>
                            <span class="menu-text"> 商品管理 </span>

                            <b class="arrow icon-angle-down"></b>
                        </a>

                        <ul class="submenu">

                                <li>
                                    <a href="<?php echo U('Admin/Goodsissue/index');?>">
                                        <i class="icon-double-angle-right"></i>
                                        商品发布
                                    </a>
                                </li>

                                <li>
                                    <a href="<?php echo U('Admin/Goodsup/index');?>">
                                        <i class="icon-double-angle-right"></i>
                                        上架商品
                                    </a>
                                </li>

                                <li>
                                    <a href="<?php echo U('Admin/Goodsdown/index');?>">
                                        <i class="icon-double-angle-right"></i>
                                        仓库商品
                                    </a>
                                </li>

                        </ul>
                    </li>

                    <li>
                        <a href="<?php echo U('Admin/Ordermanage/index');?>">
                            <i class="icon-bar-chart"></i>
                            <span class="menu-text">  订单管理 </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo U('Admin/Reviewmanage/index');?>">
                            <i class="icon-comment"></i>
                            <span class="menu-text"> 评价管理 </span>
                        </a>
                    </li>
                <li>
                    <a href="<?php echo U('Admin/Message/index');?>">
                        <i class="icon-book"></i>
                        <span class="menu-text"> 留言管理 </span>
                    </a>
                </li>

            </ul>

            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
            </div>
        </div>

				<!-- 中间部分开始 -->
				
    <div class="main-content">
        <div class="breadcrumbs" id="breadcrumbs">
            <!-- 面包屑导航 -->
            <ul class="breadcrumb">
                <li>
                    <i class="icon-home home-icon"></i>
                    <a href="<?php echo U('Admin/Index/index');?>">首页</a>
                </li>
                <li class="active"><?php echo ($title); ?></li>
            </ul>
        </div>

        <div class="page-content">
            <!-- 页面导航 -->
            <div class="page-header">
                <h1>
                    <?php echo ($title); ?>
                    <small>
                        <i class="icon-double-angle-right"></i>
                         查看
                    </small>
                </h1>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right"> 原密码 </label>
                            <div class="col-sm-10">
                                <input class="col-xs-10 col-sm-5" type="password" placeholder="请填写原密码" name="oldpwd">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right"> 新密码 </label>
                            <div class="col-sm-10">
                                <input class="col-xs-10 col-sm-5" type="password" placeholder="请填写新密码" name="newpwd">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right"> 确认密码 </label>
                            <div class="col-sm-10">
                                <input class="col-xs-10 col-sm-5" type="password" placeholder="请填写确认密码" name="repwd">
                            </div>
                        </div>
                        <div class="clearfix form-actions">
                            <div class="col-md-offset-2 col-md-10">
                                <button id="sub-pwd" class="btn btn-info" type="button">
                                    <i class="icon-ok bigger-110"></i>
                                    修改密码
                                </button>

                                &nbsp; &nbsp; &nbsp;
                                <button class="btn" type="reset">
                                    <i class="icon-undo bigger-110"></i>
                                    重置
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- 中间部分结束 -->

    <div id="success-info" class="alert alert-success fade in col-xs-4 hide" style="position:fixed;top:20px;left:35%;z-index:1000;">
        <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
        <strong></strong>
    </div>
    <div id="error-info" class="alert alert-danger fade in col-xs-4 hide" style="position:fixed;top:20px;left:35%;z-index:1000;">
        <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
        <strong></strong>
    </div>
    <!-- 删除按钮弹出层结束 -->

			
			</div>
		</div><!-- /.main-container -->

		<!-- //加载公共js -->
		<script type="text/javascript">
		window.jQuery || document.write("<script src='/food/Public/admin/js/jquery-2.0.3.min.js'>"+"<"+"script>");
		</script>
		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='/food/Public/admin/js/jquery.mobile.custom.min.js'>"+"<"+"script>");
		</script>
		<script src="/food/Public/admin/js/bootstrap.min.js"></script>
		<script src="/food/Public/admin/js/ace-elements.min.js"></script>
		<script src="/food/Public/admin/js/ace.min.js"></script>
		<script src="/food/Public/admin/js/ace-extra.min.js"></script>
		
    <script type="text/javascript">
        jQuery(function($) {
            //设置当前页面的菜单高亮显示 开始
            var nownav = "#sidebar a[href*=Profile]";
            var parentattr = $(nownav).parent().parent().attr("class");
            $(nownav).parent().addClass('active');
            if (parentattr == 'submenu') {
                $(nownav).parent().parent().parent().addClass('active open');
            };
            //设置当前页面的菜单高亮显示 结束

            $('#sub-pwd').on('click',function(){
                var oldpwd = $('input[name=oldpwd]').val();
                var newpwd = $('input[name=newpwd]').val();
                var repwd = $('input[name=repwd]').val();
                if (newpwd != repwd) {
                    warningInfo("#error-info","两次密码输入不匹配！");
                    return;
                };

                $.ajax({
                    url:"/food/index.php/Admin/Profile/updataPwd",
                    type:'post',
                    data:{oldpwd:oldpwd,newpwd:newpwd},
                    success:function(data){
                        if (data == 1) {
                            warningInfo("#success-info","密码修改成功！");
                            setInterval(function(){
                                location.href="/food/index.php/Admin/Login/loginOut";
                            },2000)

                        }else{
                            warningInfo("#error-info","密码修改失败！");
                        }
                    }
                });
            });

            //信息提示函数
            function warningInfo(id,info){
                $(id).removeClass('hide');
                $(id).fadeOut(0);
                $(id).children().eq(1).html(info);
                $(id).fadeToggle(0).delay(1000).fadeToggle(1000);
            }
        });
    </script>

	</body>
</html>