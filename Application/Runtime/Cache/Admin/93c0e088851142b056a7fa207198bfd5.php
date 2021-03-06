<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title><?php echo ($title); ?>——后台管理</title>
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
            <ul class="nav nav-list">
                <li>
                    <a id="indexpage" href="<?php echo U('Admin/Index/index');?>">
                        <i class="icon-dashboard"></i>
                        <span class="menu-text"> 控制台 </span>
                    </a>
                </li>
               <li>
                    <a href="" class="dropdown-toggle">
                        <i class="icon-cog"></i>
                        <span class="menu-text"> 网站配置 </span>
                        <b class="arrow icon-angle-down"></b>
                    </a>
                    <ul class="submenu">

                            <li>
                                <a href="<?php echo U('Admin/Websetting/index');?>">
                                    <i class="icon-double-angle-right"></i>
                                    基本配置
                                </a>
                            </li>

                            <!--<li>-->
                                <!--<a href="<?php echo U('Admin/Navsetting/index');?>">-->
                                    <!--<i class="icon-double-angle-right"></i>-->
                                    <!--导航设置-->
                                <!--</a>-->
                            <!--</li>-->

                            <li>
                                <a href="<?php echo U('Admin/Friendlink/index');?>">
                                    <i class="icon-double-angle-right"></i>
                                    友情链接
                                </a>
                            </li>
                        </if>
                    </ul>
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
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-group"></i>
                            <span class="menu-text"> 用户管理 </span>
                            <b class="arrow icon-angle-down"></b>
                        </a>
                        
                        <ul class="submenu">

                                <li>
                                    <a href="<?php echo U('Admin/Member/index');?>">
                                        <i class="icon-double-angle-right"></i>
                                        会员管理
                                    </a>
                                </li>

                                <li>
                                    <a href="<?php echo U('Admin/Memlevel/index');?>">
                                        <i class="icon-double-angle-right"></i>
                                        会员等级
                                    </a>
                                </li>

                        </ul>
                    </li>
                 <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-list"></i>
                            <span class="menu-text"> 分类管理 </span>

                            <b class="arrow icon-angle-down"></b>
                        </a>

                        <ul class="submenu">

                                <li>
                                    <a href="<?php echo U('Admin/Goodsclass/index');?>">
                                        <i class="icon-double-angle-right"></i>
                                        商品分类
                                    </a>
                                </li>


                                <!--<li>-->
                                    <!--<a href="<?php echo U('Admin/Goodsattr/index');?>">-->
                                        <!--<i class="icon-double-angle-right"></i>-->
                                        <!--商品属性-->
                                    <!--</a>-->
                                <!--</li>-->

                                <!--<li>-->
                                    <!--<a href="<?php echo U('Admin/Goodsbrand/index');?>">-->
                                        <!--<i class="icon-double-angle-right"></i>-->
                                        <!--商品品牌-->
                                    <!--</a>-->
                                <!--</li>-->

                        </ul>
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
                    <!--<li>-->
                        <!--<a href="#" class="dropdown-toggle">-->
                            <!--<i class="icon-book"></i>-->
                            <!--<span class="menu-text"> 文章管理 </span>-->

                            <!--<b class="arrow icon-angle-down"></b>-->
                        <!--</a>-->

                        <!--<ul class="submenu">-->

                                <!--<li>-->
                                    <!--<a href="<?php echo U('Admin/News/index');?>">-->
                                        <!--<i class="icon-double-angle-right"></i>-->
                                        <!--文章分类-->
                                    <!--</a>-->
                                <!--</li>-->

                                <!--<li>-->
                                    <!--<a href="<?php echo U('Admin/Articlemanage/index');?>">-->
                                        <!--<i class="icon-double-angle-right"></i>-->
                                        <!--文章管理-->
                                    <!--</a>-->
                                <!--</li>-->

                        <!--</ul>-->
                    <!--</li>-->

               
                <!--<li>-->
                        <!--<a href="#" class="dropdown-toggle">-->
                            <!--<i class="icon-cogs"></i>-->
                           <!--<span class="menu-text"> 权限管理 </span>-->

                            <!--<b class="arrow icon-angle-down"></b>-->
                        <!--</a>-->

                        <!--<ul class="submenu">-->
                                <!--<li>-->
                                    <!--<a href="<?php echo U('Admin/Grouplist/index');?>">-->
                                        <!--<i class="icon-double-angle-right"></i>-->
                                        <!--角色配置-->
                                    <!--</a>-->
                                <!--</li>-->
                               <!--<li>-->
                                    <!--<a href="<?php echo U('Admin/Accesslist/index');?>">-->
                                        <!--<i class="icon-double-angle-right"></i>-->
                                        <!--权限列表-->
                                    <!--</a>-->
                                <!--</li>-->
                        <!--</ul>-->
                    <!--</li>-->

                <li>
                    <a href="<?php echo U('Admin/Count/count');?>">
                        <i class="icon-cogs"></i>
                        <span class="menu-text"> 统计管理 </span>
                    </a>
                </li>
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
					<a href="/organic/admin.php/admin">首页</a>
				</li>
				<li class="active">统计管理</li>
			</ul><!-- .breadcrumb -->
		</div>
		<div class="page-content">
			<div class="row">
				<div class="col-xs-12">
					<!--搜索-->
					<div class="row" style="padding:0px;height:auto;overflow:hidden;margin-bottom:10px;">

						<div class="col-xs-12 col-sm-12">
							<form action="/organic/admin.php/Admin/Count/count" method="get">
								<div class="input-group pull-right">
									<select name="cid" id="cid">
										<option value="">-请选择商品类别-</option>
										<?php if(is_array($cateArr)): foreach($cateArr as $key=>$v): ?><option <?php if($cid == $v['cid']): ?>selected<?php endif; ?> value="<?php echo ($v['cid']); ?>"><?php echo ($v['cname']); ?></option><?php endforeach; endif; ?>
									</select>
									<input style="margin:10px;" type="text" name="time" onFocus="createTime()" placeholder="请选择开始日期" id="time" value="<?php echo ($time); ?>"/>
									<input type="text" name="times" onFocus="createTime1()" placeholder="请选择结束日期" id="times" value="<?php echo ($times); ?>"/>
									<!--<span class="input-group-btn">-->
										<button class="btn btn-info btn-sm" type="submit">
											搜索
											<i class="icon-search icon-on-right bigger-110"></i>
										</button>
										<button class="btn btn-info btn-sm" type="button" style="margin-left:50px;" onclick="dao()">
											导出
											<i class="icon-search icon-on-right bigger-110"></i>
										</button>
									<!--</span>-->
								</div>
							</form>
						</div>
					</div>
					<!--搜索结束-->
					<div class="table-responsive">
						<table id="sample-table-2" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th class="center" width="5%">编号</th>
									<th class="center" >商品名称</th>
									<th class="center" >所属类别</th>
									<th class="center" >价格</th>
									<th class="center" >顾客账号</th>
									<th class="center" >下单时间</th>
									<th class="center" >商品状态</th>
								</tr>
							</thead>
							<tbody>
							<tr>
								<td colspan="7" style="text-align: center">共销售商品<?php echo ($num); ?>件，销售额为<?php echo ($money); ?>元</td>
							</tr>
								<?php if(is_array($goodupdata)): foreach($goodupdata as $key=>$vo): ?><tr>
										<td class="center"><?php echo ($vo["onumber"]); ?></td>
										<td class="center"  width="100px"><?php echo ($vo["gname"]); ?></td>
										<td><?php echo ($vo["cname"]); ?></td>
										<td class="center" >￥<?php echo ($vo["gprice"]); ?></td>
										<td class="center" ><?php echo ($vo["uname"]); ?></td>
										<td class="center" ><?php echo ($vo["otime"]); ?></td>
										<td class="center" >
											<?php switch($vo["ostate"]): case "1": ?>未发货<?php break;?>
												<?php case "2": ?>已发货<?php break;?>
												<?php case "3": ?>换货<?php break;?>
												<?php case "4": ?>换货<?php break;?>
												<?php case "5": ?>完成<?php break;?>
												<?php case "6": ?>完成<?php break;?>
												<?php case "0": ?>取消<?php break; endswitch;?>
										</td>

									</tr><?php endforeach; endif; ?>
								<tr style="height:50px;text-align: center" >
									<td colspan="11"><?php echo ($all); ?></td>
								</tr>
								<tr style="height:50px;">
									<td colspan="11"><?php echo ($page); ?></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- 删除按钮弹出层 -->
	<!-- S删除数据提示 -->
	<div class="modal modal-small fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog" style="width:300px;">
			<div class="modal-content" style="top:160px;left:80%;">
				<div class="modal-header" style="height:40px;padding:5px 10px;line-height:30px;">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<p class="bigger-120" id="myModalLabel">删除数据</p>
				</div>
				<div class="modal-body" style="height:70px;padding:5px 10px;line-height:60px;">
					<p class="text-danger bigger-150">确定删除数据！</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-sm btn-danger" id="delete-data">删除</button>
					<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">取消</button>
				</div>
			</div>
		</div>
	</div>
	<!-- E删除数据提示 -->
	<!-- S商品下架提示 -->
	<div class="modal modal-small fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog" style="width:300px;">
			<div class="modal-content" style="top:160px;left:80%;">
				<div class="modal-header" style="height:40px;padding:5px 10px;line-height:30px;">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<p class="bigger-120" id="myModalLabel">商品下架</p>
				</div>
				<div class="modal-body" style="height:70px;padding:5px 10px;line-height:60px;">
					<p class="text-danger bigger-150">确定下架该商品！</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-sm btn-danger" id="down-goods">确定</button>
					<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">取消</button>
				</div>
			</div>
		</div>
	</div>
	<!-- E商品下架提示 -->
	<div id="success-info" class="alert alert-success fade in col-xs-4 hide" style="position:fixed;top:20px;left:35%;z-index:1000;">
	<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
	<strong></strong>
	</div>
	<div id="error-info" class="alert alert-danger fade in col-xs-4 hide" style="position:fixed;top:20px;left:35%;z-index:1000;">
	<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
	<strong></strong>
	</div>

			
			</div>
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
		
	<!-- //加载公共js -->
	<script language="javascript" src="/organic/Public/My97DatePicker/WdatePicker.js"></script>
	<script type="text/javascript">
		jQuery(function($) {
			//设置当前页面的菜单高亮显示 开始
			var nownav = "#sidebar a[href*=Count]";
			var parentattr = $(nownav).parent().parent().attr("class");
			$(nownav).parent().addClass('active');
			if (parentattr == 'submenu') {
				$(nownav).parent().parent().parent().addClass('active open');
			};
			//设置当前页面的菜单高亮显示 结束
			//全选js
			$('table th input:checkbox').on('click', function(){
				var that = this;
				$(this).closest('table').find('tr > td:first-child input:checkbox')
				.each(function(){
					this.checked = that.checked;
					$(this).closest('tr').toggleClass('selected');
				});
			});
			//删除弹窗和信息提示
			var delid;
			var delline;
			// 操作的是a标签，里面的name属性，匹配给定的属性是以某些值开始的元素（^）
			$('a[name^=del]').on('click',function(){
				// split函数，以'_'拆分name属性，为一个数组，将下标为1的数值保存至变量，即要操作的id值
				delid = ($(this).attr('name').split('_'))[1];
				// 找到当前点击删除位置的tr行，父元素的父元素的父元素就是tr
				delline = $(this).parent().parent().parent();
			});
			// 删除商品ajax操作
			$('#delete-data').on('click',function(){
				$.ajax({
					url:"/organic/admin.php/Admin/Count/delgoods",
					type:"get",
					data:{gid:delid},
					// 执行成功执行以下函数，返回值为data
					success:function(data){
						if (data == 1) {
							// 干掉相应的tr行
							delline.remove();
							warningInfo("#success-info","删除成功！");
						}else{
							warningInfo("#error-info","删除失败！");
						}
						$('#deleteModal').modal('hide');
					}
				});
			});
			var downid;
			var downline;
			// 操作的是a标签，里面的name属性，匹配给定的属性是以某些值开始的元素（^）
			$('a[name^=down]').on('click',function(){
				// split函数，以'_'拆分name属性，为一个数组，将下标为1的数值保存至变量，即要操作的id值
				downid = ($(this).attr('name').split('_'))[1];
				// 找到当前点击删除位置的tr行，父元素的父元素的父元素就是tr
				downline = $(this).parent().parent().parent();
			});
			// 商品下架ajax操作
			$('#down-goods').on('click',function(){
				$.ajax({
					url:"/organic/admin.php/Admin/Count/downgoods",
					type:"get",
					data:{gid:downid},
					// 执行成功执行以下函数，返回值为data
					success:function(data){
						if (data == 1) {
							// 干掉相应的tr行
							downline.remove();
							warningInfo("#success-info","商品下架成功！");
						}else{
							warningInfo("#error-info","商品下架失败！");
						}
						$('#myModal').modal('hide');
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
		function createTime(){
			WdatePicker({dateFmt:'yyyy-MM-dd',minDate:'',maxDate:''});
		}
		function createTime1(){
			WdatePicker({dateFmt:'yyyy-MM-dd',minDate:'',maxDate:''});
		}
		function  dao(){
			var cid=$("#cid").val();
			var time=$("#time").val();
			var times=$("#times").val();
			if(cid==''){
				if(time!='' && times!=''){
					location.href="/organic/admin.php/Admin/Count/dao/time/"+time+"/times/"+times;
				}else{
					location.href="/organic/admin.php/Admin/Count/dao";
				}
			}else if(cid!=''){
				if(time!='' && times!=''){
					location.href="/organic/admin.php/Admin/Count/dao/cid/"+cid+"/time/"+time+"/times/"+times;
				}else{
					location.href="/organic/admin.php/Admin/Count/dao/cid/"+cid;
				}

			}
		}
	</script>

	</body>
</html>