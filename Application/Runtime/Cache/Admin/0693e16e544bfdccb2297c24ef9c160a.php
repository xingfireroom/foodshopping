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

			<!-- 添加按钮 -->
			<div class="row" style="padding:0px;height:auto;overflow:hidden;margin-bottom:10px;">
                <div class="col-xs-12 col-sm-8">
                    <a class="btn btn-primary pull-left" style="padding:1px 10px;" href="<?php echo U('Admin/Adset/createAd');?>">
                        <i class="icon-plus-sign bigger-125"></i>
                        添加广告
                    </a>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <form action="" method="get">
                        <div class="input-group pull-right">
                            <input class="form-control search-query" type="text" value="<?php echo ($_GET['searchval']); ?>" name="searchval" placeholder="输入搜索内容...">
                            <span class="input-group-btn">
                                <button class="btn btn-info btn-sm" type="submit">
                                    Search
                                    <i class="icon-search icon-on-right bigger-110"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="table-responsive">
						<table id="sample-table-2" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th>id</th>
									<th class="width-20">广告标题</th>
									<th class="width-20">广告url</th>												
									<th class="width-20">有效期</th>
									<th>广告缩略图</th>
                                    <th>
                                        <div class="dropdown" id="select-search">
                                            <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                                                <span>广告位置</span>
                                                <i class="icon-caret-down bigger-110 width-auto"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-info">
                                                <li>
                                                    <a href="#dropdown_0" >所有广告</a>
                                                </li>
                                                <li>
                                                    <a href="#dropdown_1" >顶部横幅</a>
                                                </li>
                                                <li>
                                                    <a href="#dropdown_2" >首页幻灯片</a>
                                                </li>
                                                <li>
                                                    <a href="#dropdown_3" >抢购商品</a>
                                                </li>
                                                <li>
                                                    <a href="#dropdown_4" >搜索页</a>
                                                </li>
                                                <li>
                                                    <a href="#dropdown_5" >商品页</a>
                                                </li>
                                                <li>
                                                    <a href="#dropdown_6" >全站</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </th>
									<th>操作</th>
								</tr>
							</thead>
							<!--一行的开始-->
							<!--遍历查询到的数据-->
							<tbody>
                                <?php if(is_array($ads)): foreach($ads as $key=>$ad): ?><tr>
									<td><?php echo ($ad['adid']); ?></td>
									<td class="width-20"><?php echo ($ad['adtitle']); ?></td>
									<td class="width-20"><?php echo ($ad['adurl']); ?></td>
									<td class="width-20">
                                        <span class="label label-sm label-warning">
                                            <?php if($ad['adstarttime']): echo (date("Y-m-d",$ad['adstarttime'])); endif; ?>
                                            --
                                            <?php if($ad['adendtime']): echo (date("Y-m-d",$ad['adendtime'])); endif; ?>
                                        </span>
                                    </td>
									<td><img src="/food/Public/Uploads/<?php echo (implode('/th_',explode('/',$ad['adpic']))); ?>" alt="<?php echo ($ad['adpic']); ?>" width="80"></td>
									
                                    <td class="width-10">
                                        <?php if($ad['adplace'] == 1): ?>顶部横幅
                                        <?php elseif($ad['adplace'] == 2): ?> 首页幻灯片
                                        <?php elseif($ad['adplace'] == 3): ?> 抢购商品
                                        <?php elseif($ad['adplace'] == 4): ?> 搜索页
                                        <?php elseif($ad['adplace'] == 5): ?> 商品页
                                        <?php elseif($ad['adplace'] == 6): ?> 全站
                                        <?php else: ?> 未分类<?php endif; ?>
                                    </td>
                                    
                                    <td>
										<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
											<a name="table-view" class="blue" data-toggle="modal" href="#viewModal">
												<i class="icon-zoom-in bigger-130"></i>
											</a>

											<a name="table-edit" class="green" href="<?php echo U('Admin/Adset/editAd',array('id'=>$ad['adid']));?>">
												<i class="icon-pencil bigger-130"></i>
											</a>

											<a name="del_<?php echo ($ad['adid']); ?>" class="red" data-toggle="modal" href="#deleteModal">
												<i class="icon-trash bigger-130"></i>
											</a>
										</div>
									</td>
								</tr>
								<!--遍历结束--><?php endforeach; endif; ?>

								<tr style="padding:0px;">
									<td colspan=8><?php echo ($page); ?></td>
								</tr>
								<!--一行的结束-->											
							</tbody>
						</table>
					</div>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.page-content -->
	</div><!-- /.main-content -->
	<!-- 中间部分结束 -->
    
    <!-- 删除按钮弹出层 -->
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
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <div id="success-info" class="alert alert-success fade in col-xs-4 hide" style="position:fixed;top:20px;left:35%;z-index:1000;">
        <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
        <strong></strong>
    </div>
    <div id="error-info" class="alert alert-danger fade in col-xs-4 hide" style="position:fixed;top:20px;left:35%;z-index:1000;">
        <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
        <strong></strong>
    </div>
    <!-- 删除按钮弹出层结束 -->
    
    <!-- 查看弹出层开始 -->
    <div class="modal modal-small fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="padding:10px;">
            <div class="modal-content" >
                <div class="modal-header" style="height:50px;padding:5px 10px;line-height:40px;">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <p class="bigger-120" id="viewModalLabel"></p>
                </div>
                <div class="modal-body" style="padding:25px;">
                    <img src="">
                </div>
                <div class="modal-footer" style="margin:0px;padding:10px;">
                    <p class="text-primary align-left bigger-40 orange pull-left">连接：<span></span><br />有效期：<span></span></p>
                    <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">确定</button>
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
		
	<script type="text/javascript">
		jQuery(function($) {
            //设置当前页面的菜单高亮显示 开始
            var nownav = "#sidebar a[href*=Adset]";
            var parentattr = $(nownav).parent().parent().attr("class");
            $(nownav).parent().addClass('active');
            if (parentattr == 'submenu') {
                $(nownav).parent().parent().parent().addClass('active open');
            };
            //设置当前页面的菜单高亮显示 结束

            //全选js
            $('table th input:checkbox').on('click' , function(){
                var that = this;
                $(this).closest('table').find('tr > td:first-child input:checkbox')
                .each(function(){
                    this.checked = that.checked;
                    $(this).closest('tr').toggleClass('selected');
                });
                    
            });
            
            //删除弹窗和信息提示
            $('#success-info').fadeOut(0);
            $('#error-info').fadeOut(0);
            
            var delid;
            var delline;
            $('a[name^=del]').on('click',function(){
                delid = ($(this).attr('name').split('_'))[1];
                delline = $(this).parent().parent().parent();
            });
           
            $('#delete-data').on('click',function(){
                $.ajax({
                       url:"/food/index.php/Admin/Adset/deleteAd",
                       type:"post",
                       data:{adid:delid},
                       success:function(data){
                            if (data == 1) {
                                warningInfo("#success-info","删除成功！");
                                location.href='';
                            }else if(data == 2){
                                warningInfo("#error-info","没有删除权限！");
                            }else{
                                warningInfo("#error-info","删除失败！");
                            }
                            $('#deleteModal').modal('hide');
                       }
                });
            });
           
            //查询信息弹出框
            var view = new Array();
            $('a[name=table-view]').on('click',function(){
                var viewline = $(this).parent().parent().parent();
                $('#viewModal .modal-header p').html(viewline.children().eq(1).html());
                $('#viewModal .modal-body').html("<img class='img-responsive' src='/food/Public/Uploads/"+viewline.children().eq(4).children().attr("alt")+"' width='600'>");
                $('#viewModal .modal-footer p span').eq(0).html(viewline.children().eq(2).html());
                $('#viewModal .modal-footer p span').eq(1).html(viewline.children().eq(3).children().html());
            });

            //信息提示函数
            function warningInfo(id,info){
                $(id).removeClass('hide');
                $(id).fadeOut(0);
                $(id).children().eq(1).html(info);
                $(id).fadeToggle(0).delay(1000).fadeToggle(1000);
            }

            //选择搜索
            $('#select-search ul li a').on('click',function(){
                $('#select-search>a>span').html($(this).html());
                $searchid = $(this).attr('href').split('_')[1];
                location.href = "/food/index.php/Admin/Adset/index/placeid/"+$searchid;
            });
	   });
	</script>

	</body>
</html>