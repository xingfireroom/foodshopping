<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title><?php echo ($title); ?>——商城网后台管理</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- basic styles -->
		<link rel="stylesheet" href="/organic/Public/admin/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/organic/Public/admin/css/font-awesome.min.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="/organic/Public/admin/css/ace.min.css" />
		<link rel="stylesheet" href="/organic/Public/admin/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="/organic/Public/admin/css/ace-skins.min.css" />
		
	</head>

	<body>
		<div class="navbar navbar-default" id="navbar">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<!--<div class="navbar-header pull-left">-->
					<!--<a href="index">-->
						<!--<img src="/organic/Public/admin/images/admin_logo.png" class="img-responsive" />-->
					<!--</a>&lt;!&ndash; /.brand &ndash;&gt;-->
				<!--</div>-->

				<div class="navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="/organic/Public/admin/avatars/user.jpg" alt="Jason's Photo" />
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
				

				<!-- 中间部分开始 -->
				<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<!-- 面包屑导航 -->
						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">友情链接管理</a>
							</li>
							<li class="active">修改友情链接</li>
						</ul><!-- .breadcrumb -->

					</div>

					<div class="page-content">

						<!-- 页面导航 -->
						<div class="page-header">
							<h1>
								修改友情链接
								<a class="btn btn-info btn-sm pull-right" href="/organic/admin.php/Admin/Friendlink/index">
									<i class="icon-reply icon-only"></i>
								</a>
							</h1>
						</div>

						<div class="row" style="margin-top:35px;">
							<div class="col-xs-12">
								<form class="form-horizontal" role="form" action="/organic/admin.php/Admin/Friendlink/update" method="post" enctype="multipart/form-data">
								<input type="hidden" value="<?php echo ($friendlink["fid"]); ?>" name="fid">
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right"> 友情链接名 </label>
										<div class="col-sm-10">
											<input class="col-xs-10 col-sm-5" type="text" placeholder="请填写友情链接" name="fname" value="<?php echo ($friendlink["fname"]); ?>">
										</div>
									</div>
									
									
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right"> 友情链接网址 </label>
										<div class="col-sm-10">
											<input class="col-xs-10 col-sm-5" type="text" placeholder="请填写友情链接网址" name="furl" value="<?php echo ($friendlink["furl"]); ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right"> 排序编号 </label>
										<div class="col-sm-10">
											<input class="col-xs-10 col-sm-5" type="text" placeholder="请填写排序编号" name="fsort" value="<?php echo ($friendlink["fsort"]); ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right"> 联系方式 </label>
										<div class="col-sm-10">
											<input class="col-xs-10 col-sm-5" type="text" placeholder="请填写联系方式" name="fcontact" value="<?php echo ($friendlink["fcontact"]); ?>">
										</div>
									</div>
									<!--文件上传-->
									<div class="form-group" style="margin-bottom:0px;">
										<label class="col-sm-2 control-label no-padding-right"> logo </label>
										<div class="col-sm-10">
											<div class="ace-file-input no-padding col-xs-10 col-sm-5">
												<input style="height:30px;" type="file" id="id-input-file-2" name="flogo" />

											</div>
											<img src="/organic/Public/FriendUploads/<?php echo (implode('/f_',explode('/',$friendlink["flogo"]))); ?>">
										</div>
									</div>
								
								

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
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->
				<!-- 中间部分结束 -->

								
		
			
			</div>
			<!-- 返回顶部 -->
			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- //加载公共js -->
		<script type="text/javascript">
		window.jQuery || document.write("<script src='/organic/Public/admin/js/jquery-2.0.3.min.js'>"+"<"+"script>");
		</script>
		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='/organic/Public/admin/js/jquery.mobile.custom.min.js'>"+"<"+"script>");
		</script>
		<script src="/organic/Public/admin/js/bootstrap.min.js"></script>
		<script src="/organic/Public/admin/js/ace-elements.min.js"></script>
		<script src="/organic/Public/admin/js/ace.min.js"></script>
		<script src="/organic/Public/admin/js/ace-extra.min.js"></script>
		

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			jQuery(function($) {

				//设置当前页面的菜单高亮显示 开始
				var nownav = "#sidebar a[href*=Friendlink]";
				var parentattr = $(nownav).parent().parent().attr("class");
				$(nownav).parent().addClass('active');
				if (parentattr == 'submenu') {
					$(nownav).parent().parent().parent().addClass('active open');
				};
				//设置当前页面的菜单高亮显示 结束
				$('#id-input-file-2').ace_file_input({
					no_file:'选择广告图片 ...',
					btn_choose:'上传',
					btn_change:'修改',
					droppable:false,
					onchange:null,
					thumbnail:false //| true | large
					//whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
				});				
			
				//文件上传
				$('#id-file-format').removeAttr('checked').on('change', function() {
					var before_change
					var btn_choose
					var no_icon
					if(this.checked) {
						btn_choose = "Drop images here or click to choose";
						no_icon = "icon-picture";
						before_change = function(files, dropped) {
							var allowed_files = [];
							for(var i = 0 ; i < files.length; i++) {
								var file = files[i];
								if(typeof file === "string") {
									//IE8 and browsers that don't support File Object
									if(! (/\.(jpe?g|png|gif|bmp)$/i).test(file) ) return false;
								}
								else {
									var type = $.trim(file.type);
									if( ( type.length > 0 && ! (/^image\/(jpe?g|png|gif|bmp)$/i).test(type) )
											|| ( type.length == 0 && ! (/\.(jpe?g|png|gif|bmp)$/i).test(file.name) )//for android's default browser which gives an empty string for file.type
										) continue;//not an image so don't keep this file
								}
								
								allowed_files.push(file);
							}
							if(allowed_files.length == 0) return false;
			
							return allowed_files;
						}
					}
					else {
						btn_choose = "Drop files here or click to choose";
						no_icon = "icon-cloud-upload";
						before_change = function(files, dropped) {
							return files;
						}
					}
					var file_input = $('#id-input-file-3');
					file_input.ace_file_input('update_settings', {'before_change':before_change, 'btn_choose': btn_choose, 'no_icon':no_icon})
					file_input.ace_file_input('reset_input');
				});

			});
		</script>

	</body>
</html>