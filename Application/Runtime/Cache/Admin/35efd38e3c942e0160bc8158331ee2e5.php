<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title><?php echo ($title); ?>——商城网后台管理</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- basic styles -->
		<link rel="stylesheet" href="/yixun/Public/admin/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/yixun/Public/admin/css/font-awesome.min.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="/yixun/Public/admin/css/ace.min.css" />
		<link rel="stylesheet" href="/yixun/Public/admin/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="/yixun/Public/admin/css/ace-skins.min.css" />
		
    <style>
        .sel{
            height:auto;
            overflow: hidden;
            border:1px solid #CCC;
            padding:0px;
            margin-bottom: 5px;
        }
        .sel-heading{
            background: #EEE;
            height:35px;
            margin: 0px;
            color: #2c79a6;
        }
        .sel label{
            height: 30px;
            line-height: 35px;
            padding-left: 10px;
            float: left;
            margin-right: 10px;
        }
        .sel-input input{
            border:1px solid bule;
        }
        .sel-title{
            display: block;
            height:35px;
            line-height: 35px;
            margin: 0px;
            font-size: 16px;
        }
        .sel-body{
            padding:20px;
            height:auto;
            overflow: hidden;
        }
        .childsel{
            float: left;
            margin: 5px;
        }
    </style>

	</head>

	<body>
		<div class="navbar navbar-default" id="navbar">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="index">
						<img src="/yixun/Public/admin/images/admin_logo.png" class="img-responsive" />
					</a><!-- /.brand -->
				</div><!-- /.navbar-header -->

				<div class="navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="/yixun/Public/admin/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>欢迎光临,</small>
									<?php echo (session('uname')); ?>
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
            <div class="sidebar-shortcuts" id="sidebar-shortcuts" style="height:42px;">
            </div><!-- #sidebar-shortcuts -->

            <ul class="nav nav-list">
                <?php if(authCheck('Admin/Index/index',session('uid'))): ?><li>
                        <a id="indexpage" href="<?php echo U('Admin/Index/index');?>">
                            <i class="icon-dashboard"></i>
                            <span class="menu-text"> 控制台 </span>
                        </a>
                    </li><?php endif; ?>
                <?php if(authCheck('Admin/Websetting/index',session('uid')) or authCheck('Admin/Navsetting/index',session('uid')) or authCheck('Admin/Friendlink/index',session('uid'))): ?><li>
                        <a href="" class="dropdown-toggle">
                            <i class="icon-cog"></i>
                            <span class="menu-text"> 网站配置 </span>
                            <b class="arrow icon-angle-down"></b>
                        </a>
                        <ul class="submenu">
                            <?php if(authCheck('Admin/Websetting/index',session('uid'))): ?><li>
                                    <a href="<?php echo U('Admin/Websetting/index');?>">
                                        <i class="icon-double-angle-right"></i>
                                        基本配置
                                    </a>
                                </li><?php endif; ?>
                            <?php if(authCheck('Admin/Navsetting/index',session('uid'))): ?><li>
                                    <a href="<?php echo U('Admin/Navsetting/index');?>">
                                        <i class="icon-double-angle-right"></i>
                                        导航设置
                                    </a>
                                </li><?php endif; ?>
                            <?php if(authCheck('Admin/Friendlink/index',session('uid'))): ?><li>
                                    <a href="<?php echo U('Admin/Friendlink/index');?>">
                                        <i class="icon-double-angle-right"></i>
                                        友情链接
                                    </a>
                                </li><?php endif; ?>
                        </ul>
                    </li><?php endif; ?>
                <?php if(authCheck('Admin/Indexset/index',session('uid'))): ?><li>
                        <a href="<?php echo U('Admin/Indexset/index');?>">
                            <i class="icon-desktop"></i>
                            <span class="menu-text"> 首页设置 </span>
                        </a>
                    </li><?php endif; ?>
                <?php if(authCheck('Admin/Adset/index',session('uid'))): ?><li>
                        <a href="<?php echo U('Admin/Adset/index');?>">
                            <i class="icon-eye-open"></i>
                            <span class="menu-text"> 广告管理 </span>
                        </a>
                    </li><?php endif; ?>
                <?php if(authCheck('Admin/Member/index',session('uid')) or authCheck('Admin/Memlevel/index',session('uid')) ): ?><li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-group"></i>
                            <span class="menu-text"> 用户管理 </span>
                            <b class="arrow icon-angle-down"></b>
                        </a>
                        
                        <ul class="submenu">
                            <?php if(authCheck('Admin/Member/index',session('uid'))): ?><li>
                                    <a href="<?php echo U('Admin/Member/index');?>">
                                        <i class="icon-double-angle-right"></i>
                                        会员管理
                                    </a>
                                </li><?php endif; ?>
                            <?php if(authCheck('Admin/Memlevel/index',session('uid'))): ?><li>
                                    <a href="<?php echo U('Admin/Memlevel/index');?>">
                                        <i class="icon-double-angle-right"></i>
                                        会员等级
                                    </a>
                                </li><?php endif; ?>
                        </ul>
                    </li><?php endif; ?>
                <?php if(authCheck('Admin/Goodsclass/index',session('uid')) or authCheck('Admin/Goodsattr/index',session('uid')) or authCheck('Admin/Goodsbrand/index',session('uid'))): ?><li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-list"></i>
                            <span class="menu-text"> 分类管理 </span>

                            <b class="arrow icon-angle-down"></b>
                        </a>

                        <ul class="submenu">
                            <?php if(authCheck('Admin/Goodsclass/index',session('uid'))): ?><li>
                                    <a href="<?php echo U('Admin/Goodsclass/index');?>">
                                        <i class="icon-double-angle-right"></i>
                                        商品分类
                                    </a>
                                </li><?php endif; ?>
                            <?php if(authCheck('Admin/Goodsattr/index',session('uid'))): ?><li>
                                    <a href="<?php echo U('Admin/Goodsattr/index');?>">
                                        <i class="icon-double-angle-right"></i>
                                        商品属性
                                    </a>
                                </li><?php endif; ?>
                            <?php if(authCheck('Admin/Goodsbrand/index',session('uid'))): ?><li>
                                    <a href="<?php echo U('Admin/Goodsbrand/index');?>">
                                        <i class="icon-double-angle-right"></i>
                                        商品品牌
                                    </a>
                                </li><?php endif; ?>
                        </ul>
                    </li><?php endif; ?>
                <?php if(authCheck('Admin/Goodsissue/index',session('uid')) or authCheck('Admin/Goodsup/index',session('uid')) or authCheck('Admin/Goodsdown/index',session('uid'))): ?><li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-asterisk"></i>
                            <span class="menu-text"> 商品管理 </span>

                            <b class="arrow icon-angle-down"></b>
                        </a>

                        <ul class="submenu">
                            <?php if(authCheck('Admin/Goodsissue/index',session('uid'))): ?><li>
                                    <a href="<?php echo U('Admin/Goodsissue/index');?>">
                                        <i class="icon-double-angle-right"></i>
                                        商品发布
                                    </a>
                                </li><?php endif; ?>
                            <?php if(authCheck('Admin/Goodsup/index',session('uid'))): ?><li>
                                    <a href="<?php echo U('Admin/Goodsup/index');?>">
                                        <i class="icon-double-angle-right"></i>
                                        上架商品
                                    </a>
                                </li><?php endif; ?>
                            <?php if(authCheck('Admin/Goodsdown/index',session('uid'))): ?><li>
                                    <a href="<?php echo U('Admin/Goodsdown/index');?>">
                                        <i class="icon-double-angle-right"></i>
                                        仓库商品
                                    </a>
                                </li><?php endif; ?>
                        </ul>
                    </li><?php endif; ?>
                <?php if(authCheck('Admin/Ordermanage/index',session('uid'))): ?><li>
                        <a href="<?php echo U('Admin/Ordermanage/index');?>">
                            <i class="icon-bar-chart"></i>
                            <span class="menu-text">  订单管理 </span>
                        </a>
                    </li><?php endif; ?>
            
              <?php if(authCheck('Admin/Reviewmanage/index',session('uid'))): ?><li>
                        <a href="<?php echo U('Admin/Reviewmanage/index');?>">
                            <i class="icon-comment"></i>
                            <span class="menu-text"> 评价管理 </span>
                        </a>
                    </li><?php endif; ?>
            
                <?php if(authCheck('Admin/Articleclass/index',session('uid')) or authCheck('Admin/Articlemanage/index',session('uid'))): ?><li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-book"></i>
                            <span class="menu-text"> 文章管理 </span>

                            <b class="arrow icon-angle-down"></b>
                        </a>
                    
                        <ul class="submenu">
                            <?php if(authCheck('Admin/News/index',session('uid'))): ?><li>
                                    <a href="<?php echo U('Admin/News/index');?>">
                                        <i class="icon-double-angle-right"></i>
                                        文章分类
                                    </a>
                                </li><?php endif; ?>
                            <?php if(authCheck('Admin/Articlemanage/index',session('uid'))): ?><li>
                                    <a href="<?php echo U('Admin/Articlemanage/index');?>">
                                        <i class="icon-double-angle-right"></i>
                                        文章管理
                                    </a>
                                </li><?php endif; ?>
                        </ul>
                    </li><?php endif; ?>
               
                <?php if(authCheck('Admin/Groulist/index',session('uid')) or authCheck('Admin/Accesslist/index',session('uid'))): ?><li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-cogs"></i>
                           <span class="menu-text"> 权限管理 </span>

                            <b class="arrow icon-angle-down"></b>
                        </a>

                        <ul class="submenu">
                            <?php if(authCheck('Admin/Grouplist/index',session('uid'))): ?><li>
                                    <a href="<?php echo U('Admin/Grouplist/index');?>">
                                        <i class="icon-double-angle-right"></i>
                                        角色配置
                                    </a>
                                </li><?php endif; ?>
                            <?php if(authCheck('Admin/Accesslist/index',session('uid'))): ?><li>
                                    <a href="<?php echo U('Admin/Accesslist/index');?>">
                                        <i class="icon-double-angle-right"></i>
                                        权限列表
                                    </a>
                                </li><?php endif; ?>
                        </ul>
                    </li><?php endif; ?>
                <?php if(authCheck('Admin/Profile/index',session('uid'))): ?><li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-tag"></i>
                            <span class="menu-text"> 其他设置 </span>

                            <b class="arrow icon-angle-down"></b>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="<?php echo U('Admin/Profile/index');?>">
                                    <i class="icon-double-angle-right"></i>
                                    用户信息
                                </a>
                            </li>
                        </ul>
                    </li><?php endif; ?>
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
                <li>
                    <a href="<?php echo U('Admin/Grouplist/index');?>"><?php echo ($page['title']['prev']); ?></a>
                </li>
                <li class="active">
                    <?php echo ($page['title']['current']); ?>
                </li>
            </ul>
        </div>

        <div class="page-content">
            <!-- 页面导航 -->
            <div class="page-header">
                <h1>
                    <?php echo ($page['title']['current']); ?>
                    <a class="btn btn-info btn-sm pull-right" href="<?php echo U('Admin/Grouplist/index');?>">
                        <i class="icon-reply icon-only"></i>
                    </a>
                </h1>
            </div>

            <div class="row" style="margin-top:35px;">
                <div class="col-xs-12">
                    <form class="form-horizontal" role="form" action="<?php echo U('Admin/Grouplist/insertGroup');?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right"> 角色名称 </label>
                            <div class="col-sm-10">
                                <input class="col-xs-10 col-sm-5" type="text" placeholder="请填写角色名称" name="title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right"> 角色描述 </label>
                            <div class="col-sm-10">
                                <input class="col-xs-10 col-sm-5" type="text" placeholder="请填写角色描述" name="description">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right"> 是否启用 </label>
                            <div class="col-sm-10">
                                <label>
                                    <input id="group-tap" class="ace ace-switch ace-switch-6" type="checkbox" checked>
                                    <span class="lbl"></span>
                                </label>
                            </div>
                            <input id="group-status" type="hidden" name="status" value="1">
                        </div>
                        
                        <!-- 选择权限开始 -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right"> 设置权限 </label>
                            <div class="col-sm-10" id="selparent">
                                <div id="accordion" class="col-xs-10 col-sm-12 no-padding">
                                    <div class="sel-group" id="selclass">
                                        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><div class="sel">
                                                <label>
                                                    <input type="checkbox" id="checkAll-<?php echo ($i); ?>" class="ace ace-checkbox-2"/>
                                                    <span class="lbl">全选</span>
                                                </label>
                                                <div class="sel-heading" data-toggle="collapse" data-parent="#selclass" data-target="#sel-<?php echo ($i); ?>">
                                                    <span class="sel-title">
                                                        <?php echo ($val['moduleName']); ?>
                                                    </span>
                                                </div>
                                                <div id="sel-<?php echo ($i); ?>" class="sel-collapse collapse">
                                                    <div class="sel-body" id="check-<?php echo ($i); ?>">
                                                        <?php if(is_array($rule[$val['id']])): foreach($rule[$val['id']] as $key=>$vo): ?><div class="childsel">
                                                                <input type="checkbox" class="ace ace-checkbox-2" name="rule[]" value="<?php echo ($vo['id']); ?>" />
                                                                <span class="lbl"><?php echo ($vo['title']); ?></span>
                                                            </div><?php endforeach; endif; ?>
                                                    </div>
                                                </div>
                                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 选择权限结束 -->

                        <div class="clearfix form-actions">
                            <div class="col-md-offset-2 col-md-10">
                                <button class="btn btn-info" type="submit">
                                    <i class="icon-ok bigger-110"></i>
                                    提交
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

			
			</div>
			<!-- 返回顶部 -->
			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- //加载公共js -->
		<script type="text/javascript">
		window.jQuery || document.write("<script src='/yixun/Public/admin/js/jquery-2.0.3.min.js'>"+"<"+"script>");
		</script>
		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='/yixun/Public/admin/js/jquery.mobile.custom.min.js'>"+"<"+"script>");
		</script>
		<script src="/yixun/Public/admin/js/bootstrap.min.js"></script>
		<script src="/yixun/Public/admin/js/ace-elements.min.js"></script>
		<script src="/yixun/Public/admin/js/ace.min.js"></script>
		<script src="/yixun/Public/admin/js/ace-extra.min.js"></script>
		
    <script type="text/javascript">
        $(function(){
            //设置当前页面的菜单高亮显示 开始
            var nownav = '#sidebar a[href*=Grouplist]';
            var parentattr = $(nownav).parent().parent().attr("class");
            $(nownav).parent().addClass('active');
            if (parentattr == 'submenu') {
                $(nownav).parent().parent().parent().addClass('active open');
            };
            //设置当前页面的菜单高亮显示 结束
            $('#group-tap').click(function(){
                if ($('#group-status').val()==1) {
                    $('#group-status').val(0)
                }else{
                    $('#group-status').val(1)
                }
            });

            //默认打开选项
            $('#selclass').children().eq(0).children().eq(2).addClass('in');

            //全选 
            $("[id^=checkAll-]:checkbox").on('click',function(){
                var num = $(this).prop('id').split('-')[1];
                var divs = "#check-"+num;
                $(divs+" :checkbox").prop("checked",this.checked);
            });
           
            $('[name^=rule]:checkbox').click(function(){
                var num = $(this).parent().parent().prop('id').split('-')[1];
                var $tmp = $('#check-'+num+' :checkbox');
                $("#checkAll-"+num).prop('checked',$tmp.length==$tmp.filter(':checked').length);
            });
        });
    </script>

	</body>
</html>