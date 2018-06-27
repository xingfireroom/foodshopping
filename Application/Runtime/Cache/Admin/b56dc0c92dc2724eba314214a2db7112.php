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
					<a href="/food/index.php/admin">首页</a>
				</li>
				<li class="active">订单管理</li>
			</ul><!-- .breadcrumb -->
		</div>
		<div class="page-content">
			<!-- 页面导航 -->
			<div class="page-header">
				<h1>
					订单管理
					<small>
						<i class="icon-double-angle-right"></i>
						查看
					</small>
				</h1>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="tabbable">
						<ul class="nav nav-tabs" id="myTab">
							<li id="li_1" class="<?php echo ($active==1?'active':''); ?>">
								<a data-toggle="tab" href="#home">
									<i class="green icon-home bigger-110"></i>
									全部订单
								</a>
							</li>
							<li id="li_2" class="<?php echo ($active==2?'active':''); ?>">
								<a data-toggle="tab" href="#profile">
									<i class="gray  icon-cloud  bigger-110"></i>
									未发货
								</a>
							</li>
							<li id="li_3" class="<?php echo ($active==3?'active':''); ?>">
								<a data-toggle="tab" href="#profile1">
									<i class="green  icon-cloud-upload   bigger-110"></i>
									已发货
								</a>
							</li>
							<li id="li_4" class="<?php echo ($active==4?'active':''); ?>">
								<a data-toggle="tab" href="#profile2">
									<i class="pink   icon-cogs  bigger-110"></i>
									退换货
								</a>
							</li>
							<li id="li_5" class="<?php echo ($active==5?'active':''); ?>">
								<a data-toggle="tab" href="#profile3">
									<i class="blue  icon-check  bigger-110"></i>
									交易完成
								</a>
							</li>
							<li id="li_6" class="<?php echo ($active==6?'active':''); ?>">
								<a data-toggle="tab" href="#profile4">
									<i class="black  icon-cog bigger-110"></i>	
									交易取消
								</a>
							</li>
						</ul>
						<!-- S展示内容 -->
						<div class="tab-content">
							<!-- 全部订单 -->
							<div id="home" class="tab-pane <?php echo ($active==1?'in active':''); ?>">
								<!--搜索-->

								<!--搜索结束-->
								<div class="table-responsive">
									<table class="table table-striped table-bordered table-hover" id="sample-table-2">
										<thead>
											<tr>
												<th class="center" width="80px">商品图片</th>
												<th class="center" width="350px">商品名称</th>
												<th class="center" width="130px">价格</th>
												<th class="center">数量</th>
												<th class="center">交易状态</th>
                                                <th class="center">支付方式</th>
												<th class="center" width="130px">小计</th>
											</tr>
										</thead>
										<tbody>
											<?php if(is_array($details)): $i = 0; $__LIST__ = $details;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr style="height:30px;">
													<td colspan="6">
														<i class="green icon-group  bigger-110"></i>
														订单号：<?php echo ($orders[$key]["onumber"]); ?>
														&nbsp;&nbsp;&nbsp;&nbsp;
														成交时间：<?php echo ($orders[$key]["otime"]); ?>
														&nbsp;&nbsp;&nbsp;&nbsp;
														总价：￥<?php echo ($orders[$key]["total"]); ?>
														&nbsp;&nbsp;&nbsp;&nbsp;
														买家：<?php echo ($orders[$key]["uname"]); ?>
														<br />
														&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
														收货地址：<?php echo (implode('',explode('consignee',$orders[$key]["deliveryaddress"]))); ?>
													</td>
												</tr>
												<?php if(is_array($vo)): $i = 0; $__LIST__ = $vo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
														<td class="center" >
															<img width="40px" src="/food/Public/Goodsuploads/<?php echo (implode('/30_',explode('/',$v["gpic"]))); ?>" >
														</td>
														<td class="center" ><?php echo ($v["gname"]); ?></td>
														<td class="center" >￥<?php echo ($v["gprice"]); ?></td>
														<td class="center" ><?php echo ($v["gnums"]); ?></td>
														<td class="center" >
															<?php switch($v["ostate"]): case "0": ?>交易取消<?php break;?>
																<?php case "1": ?>正在出库…<?php break;?>
																<?php case "2": ?>已出库<?php break;?>
																<?php case "3": ?>换货中…<?php break;?>
																<?php case "4": ?>退货中…<?php break;?>
																<?php case "5": ?>交易完成<?php break;?>
                                                                <?php case "6": ?>已评价<?php break; endswitch;?>
														</td>
                                                        <td class="center" >已支付</td>
														<td class="center" >￥<?php echo ($v['gprice']*$v['gnums']); ?></td>
													</tr><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
											<tr style="height:50px;">
												<td colspan="7"><?php echo ($page); ?></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- 未发货 -->
							<div id="profile" class="tab-pane <?php echo ($active==2?'in active':''); ?>">
								<!--搜索-->

								<div class="ta1ble-responsive">
									<table class="table table-striped table-bordered table-hover" id="sample-table-2">
										<thead>
											<tr>
												<th class="center" width="80px">商品图片</th>
												<th class="center" width="180px">订单号</th>
												<th class="center" width="300px">商品名称</th>
												<th class="center" width="130px">价格</th>
												<th class="center">数量</th>
												<th class="center">交易状态</th>
                                                <th class="center">支付方式</th>
												<th class="center" width="100px">操作</th>
											</tr>
										</thead>
										<tbody>
											<?php if(is_array($deliver)): $i = 0; $__LIST__ = $deliver;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
													<td class="center" >
														<img width="40px" src="/food/Public/Goodsuploads/<?php echo (implode('/30_',explode('/',$v["gpic"]))); ?>" >
													</td>
													<td class="center" ><?php echo ($v["onumber"]); ?></td>
													<td class="center" ><?php echo ($v["gname"]); ?></td>
													<td class="center" >￥<?php echo ($v["gprice"]); ?></td>
													<td class="center" ><?php echo ($v["gnums"]); ?></td>
													<td class="center" >
														<?php switch($v["ostate"]): case "0": ?>交易取消<?php break;?>
															<?php case "1": ?>正在出库…<?php break;?>
															<?php case "2": ?>已出库<?php break;?>
															<?php case "3": ?>退货中…<?php break;?>
															<?php case "4": ?>交易完成<?php break; endswitch;?>
													</td>
                                                    <td class="center" >已支付</td>
													<td class="center" >
														<a href="/food/index.php/Admin/Ordermanage/orderState/id/<?php echo ($v["id"]); ?>/ostate/2/jump/1">
															<i class="green  icon-cloud-upload   bigger-120"></i>
															发货
														</a>
													</td>
												</tr><?php endforeach; endif; else: echo "" ;endif; ?>
											<tr style="height:50px;">
												<td colspan="8"><?php echo ($page); ?></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- 已发货 -->
							<div id="profile1" class="tab-pane <?php echo ($active==3?'in active':''); ?>">
								<!--搜索-->

								<div class="ta1ble-responsive">
									<table class="table table-striped table-bordered table-hover" id="sample-table-2">
										<thead>
											<tr>
												<th class="center" width="80px">商品图片</th>
												<th class="center" width="180px">订单号</th>
												<th class="center" width="300px">商品名称</th>
												<th class="center" width="130px">价格</th>
												<th class="center">数量</th>
												<th class="center">交易状态</th>
                                                <th class="center">支付方式</th>
												<th class="center" width="100px">配送</th>
											</tr>
										</thead>
										<tbody>
											<?php if(is_array($deliver)): $i = 0; $__LIST__ = $deliver;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
													<td class="center" >
														<img width="40px" src="/food/Public/Goodsuploads/<?php echo (implode('/30_',explode('/',$v["gpic"]))); ?>" >
													</td>
													<td class="center" ><?php echo ($v["onumber"]); ?></td>
													<td class="center" ><?php echo ($v["gname"]); ?></td>
													<td class="center" >￥<?php echo ($v["gprice"]); ?></td>
													<td class="center" ><?php echo ($v["gnums"]); ?></td>
													<td class="center" >
														<?php switch($v["ostate"]): case "0": ?>交易取消<?php break;?>
															<?php case "1": ?>正在出库…<?php break;?>
															<?php case "2": ?>已出库<?php break;?>
															<?php case "3": ?>退货中…<?php break;?>
															<?php case "4": ?>交易完成<?php break; endswitch;?>
													</td>
                                                    <td class="center" >已支付</td>
													<td class="center" >
														<i class="green icon-fighter-jet bigger-200"></i>
													</td>
												</tr><?php endforeach; endif; else: echo "" ;endif; ?>
											<tr style="height:50px;">
												<td colspan="8"><?php echo ($page); ?></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- 退换货 -->
							<div id="profile2" class="tab-pane <?php echo ($active==4?'in active':''); ?>">
								<!--搜索-->

								<div class="ta1ble-responsive">
									<table class="table table-striped table-bordered table-hover" id="sample-table-2">
										<thead>
											<tr>
												<th class="center" width="80px">商品图片</th>
												<th class="center" width="180px">订单号</th>
												<th class="center" width="300px">商品名称</th>
												<th class="center" width="130px">价格</th>
												<th class="center">数量</th>
												<th class="center">交易状态</th>
                                                 <th class="center">支付方式</th>
												<th class="center">操作</th>
											</tr>
										</thead>
										<tbody>
											<?php if(is_array($deliver)): $i = 0; $__LIST__ = $deliver;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
													<td class="center" >
														<img width="40px" src="/food/Public/Goodsuploads/<?php echo (implode('/30_',explode('/',$v["gpic"]))); ?>" >
													</td>
													<td class="center" ><?php echo ($v["onumber"]); ?></td>
													<td class="center" ><?php echo ($v["gname"]); ?></td>
													<td class="center" >￥<?php echo ($v["gprice"]); ?></td>
													<td class="center" ><?php echo ($v["gnums"]); ?></td>
													<td class="center" >
														<?php switch($v["ostate"]): case "0": ?>交易取消<?php break;?>
															<?php case "1": ?>正在出库…<?php break;?>
															<?php case "2": ?>已出库<?php break;?>
															<?php case "3": ?>换货中…<?php break;?>
															<?php case "4": ?>退货中…<?php break;?>
															<?php case "5": ?>交易完成<?php break; endswitch;?>
													</td>
                                                    <td class="center" >已支付</td>
													<td class="center" >
														<?php switch($v["ostate"]): case "3": ?><a href="/food/index.php/Admin/Ordermanage/orderState/id/<?php echo ($v["id"]); ?>/ostate/2/jump/0">
																	<i class="green  icon-cloud-upload   bigger-120"></i>
																	重新发货
																</a><?php break;?>
															<?php case "4": ?><a href="/food/index.php/Admin/Ordermanage/orderState/id/<?php echo ($v["id"]); ?>/ostate/0/jump/0">
																	<i class="green   icon-check   bigger-120"></i>
																	同意退货
																</a>
																|
																<a href="/food/index.php/Admin/Ordermanage/orderState/id/<?php echo ($v["id"]); ?>/ostate/2/jump/0">
																	<i class="red   icon-fire   bigger-120"></i>
																	拒绝退货
																</a><?php break; endswitch;?>
													</td>
												</tr><?php endforeach; endif; else: echo "" ;endif; ?>
											<tr style="height:50px;">
												<td colspan="8"><?php echo ($page); ?></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- 交易完成 -->
							<div id="profile3" class="tab-pane <?php echo ($active==5?'in active':''); ?>">
								<!--搜索-->

								<div class="ta1ble-responsive">
									<table class="table table-striped table-bordered table-hover" id="sample-table-2">
										<thead>
											<tr>
												<th class="center" width="80px">商品图片</th>
												<th class="center" width="180px">订单号</th>
												<th class="center" width="300px">商品名称</th>
												<th class="center" width="130px">价格</th>
												<th class="center">数量</th>
												<th class="center">交易状态</th>
                                                 <th class="center">支付方式</th>
												<th class="center" width="130px">小计</th>
											</tr>
										</thead>
										<tbody>
											<?php if(is_array($deliver)): $i = 0; $__LIST__ = $deliver;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
													<td class="center" >
														<img width="40px" src="/food/Public/Goodsuploads/<?php echo (implode('/30_',explode('/',$v["gpic"]))); ?>" >
													</td>
													<td class="center" ><?php echo ($v["onumber"]); ?></td>
													<td class="center" ><?php echo ($v["gname"]); ?></td>
													<td class="center" >￥<?php echo ($v["gprice"]); ?></td>
													<td class="center" ><?php echo ($v["gnums"]); ?></td>
													<td class="center" >
														<?php switch($v["ostate"]): case "0": ?>交易取消<?php break;?>
															<?php case "1": ?>正在出库…<?php break;?>
															<?php case "2": ?>已出库<?php break;?>
															<?php case "3": ?>换货中…<?php break;?>
															<?php case "4": ?>退货中…<?php break;?>
															<?php case "5": ?>交易完成<?php break;?>
															<?php case "6": ?>已评价<?php break; endswitch;?>
													</td>
                                                    <td class="center" >已支付</td>
													<td class="center" >￥<?php echo ($v['gprice']*$v['gnums']); ?></td>
												</tr><?php endforeach; endif; else: echo "" ;endif; ?>
											<tr style="height:50px;">
												<td colspan="8"><?php echo ($page); ?></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- 交易取消 -->
							<div id="profile4" class="tab-pane <?php echo ($active==6?'in active':''); ?>">
								<!--搜索-->

								<div class="ta1ble-responsive">
									<table class="table table-striped table-bordered table-hover" id="sample-table-2">
										<thead>
											<tr>
												<th class="center" width="80px">商品图片</th>
												<th class="center" width="180px">订单号</th>
												<th class="center" width="300px">商品名称</th>
												<th class="center" width="130px">价格</th>
												<th class="center">数量</th>
												<th class="center">交易状态</th>
                                                <th class="center">支付方式</th>
												<th class="center" width="100px">图示</th>
											</tr>
										</thead>
										<tbody>
											<?php if(is_array($deliver)): $i = 0; $__LIST__ = $deliver;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
													<td class="center" >
														<img width="40px" src="/food/Public/Goodsuploads/<?php echo (implode('/30_',explode('/',$v["gpic"]))); ?>" >
													</td>
													<td class="center" ><?php echo ($v["onumber"]); ?></td>
													<td class="center" ><?php echo ($v["gname"]); ?></td>
													<td class="center" >￥<?php echo ($v["gprice"]); ?></td>
													<td class="center" ><?php echo ($v["gnums"]); ?></td>
													<td class="center" >
														<?php switch($v["ostate"]): case "0": ?>交易取消<?php break;?>
															<?php case "1": ?>正在出库…<?php break;?>
															<?php case "2": ?>已出库<?php break;?>
															<?php case "3": ?>换货中…<?php break;?>
															<?php case "4": ?>退货中…<?php break;?>
															<?php case "5": ?>交易完成<?php break; endswitch;?>
													</td>
                                                    <td class="center" >已支付</td>
													<td class="center" >
														<i class="black icon-cog bigger-200"></i>
													</td>
												</tr><?php endforeach; endif; else: echo "" ;endif; ?>
											<tr style="height:50px;">
												<td colspan="8"><?php echo ($page); ?></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!-- E展示内容 -->
					</div>
				</div>
			</div>
		</div>
	</div>

			
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
		
	<!-- //加载公共js -->
	<script type="text/javascript">
		jQuery(function($) {
			//设置当前页面的菜单高亮显示 开始
			var nownav = "#sidebar a[href*=Ordermanage]";
			var parentattr = $(nownav).parent().parent().attr("class");
			$(nownav).parent().addClass('active');
			if (parentattr == 'submenu') {
				$(nownav).parent().parent().parent().addClass('active open');
			};
			//设置当前页面的菜单高亮显示 结束
		});
		$("#li_1").click(function(){
			window.location="/food/index.php/Admin/Ordermanage/index";
		});
		$("#li_2").click(function(){
			window.location="/food/index.php/Admin/Ordermanage/nonDelivery";
		});
		$("#li_3").click(function(){
			window.location="/food/index.php/Admin/Ordermanage/deliverGoods";
		});
		$("#li_4").click(function(){
			window.location="/food/index.php/Admin/Ordermanage/returnGoods";
		});
		$("#li_5").click(function(){
			window.location="/food/index.php/Admin/Ordermanage/completeDeal";
		});
		$("#li_6").click(function(){
			window.location="/food/index.php/Admin/Ordermanage/cancleDeal";
		});
	</script>

	</body>
</html>