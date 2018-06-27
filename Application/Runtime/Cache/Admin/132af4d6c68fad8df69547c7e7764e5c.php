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
			<script type="text/javascript">
				try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
			</script>
			<!-- 面包屑导航 -->
			<ul class="breadcrumb">
				<li>
					<i class="icon-home home-icon"></i>
					<a href="/food/index.php/admin">首页</a>
				</li>
				<li class="active">商品发布</li>
			</ul><!-- .breadcrumb -->
		</div>
		<div class="page-content">
			<!-- 页面导航 -->
			<div class="page-header">
				<h1>
					商品发布
					<a href="/food/index.php/admin/Goodsup" class="btn btn-info btn-sm pull-right">
						<i class="icon-reply icon-only"></i>
					</a>
				</h1>
			</div>
		</div>
	</div>
	<!-- =================================================== -->
	<div class="main-container">
		<div class="col-xs-9">
			<form class="form-horizontal" role="form" action="/food/index.php/Admin/Goodsissue/insertGd" method="post" enctype="multipart/form-data">
				<input type="hidden" name="gnum"/>
				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right">商品类别：</label>
					<div class="col-sm-10"  id="selparent">
						<div id="menu-0" class="col-xs-10 col-sm-2  no-padding">
							<select class="form-control">
								<option value="0">请选择</option>
								<?php if(is_array($classdata)): foreach($classdata as $key=>$vo): ?><option value="<?php echo ($vo['cid']); ?>"}><?php echo ($vo['cname']); ?></option><?php endforeach; endif; ?>
							</select>
						</div>
					</div>
					<input class="col-xs-10 col-sm-5" id="showid" name="gclassification" value="0" type="hidden">
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right">商品名称：</label>
					<div class="col-sm-10">
						<input type="text" class="col-xs-10 col-sm-5" placeholder="请输入商品的名称" name="gname">
					</div>
				</div>
				<!--<div class="form-group">-->
					<!--<label class="col-sm-2 control-label no-padding-right">商品属性：</label>-->
					<!--<div id="goodattr" class="col-sm-10"></div>-->
				<!--</div>-->
				<!--<div class="form-group">-->
					<!--<label class="col-sm-2 control-label no-padding-right">商品品牌：</label>-->
					<!--<div class="col-sm-10">-->
						<!--<select name="bid" id="goodbrand"></select>-->
					<!--</div>-->
				<!--</div>-->
				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right">商品原价格：</label>
					<div class="col-sm-10">
						<input type="text" class="col-xs-10 col-sm-5" placeholder="请输入商品原价格" name="goldprice">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right">商品价格：</label>
					<div class="col-sm-10">
						<input type="text" class="col-xs-10 col-sm-5" placeholder="请输入商品价格" name="gprice">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right">商品数量：</label>
					<div class="col-sm-10">
						<input type="text" class="col-xs-10 col-sm-5" value="1" name="goodnums">
					</div>
				</div>
				<div class="form-group" style="margin-bottom:0px;">
					<label class="col-sm-2 control-label no-padding-right">商品图片：</label>
					<div class="col-sm-10">
						<div class="ace-file-input no-padding col-xs-10 col-sm-5" style="height:220px;">
							<input type="file" class="class-input-file-2" name="gpic[]"  style="height:30px;"/>
							<input type="file" class="class-input-file-2" name="gpic[]"  style="height:30px;"/>
							<input type="file" class="class-input-file-2" name="gpic[]"  style="height:30px;"/>
							<input type="file" class="class-input-file-2" name="gpic[]"  style="height:30px;"/>
							<input type="file" class="class-input-file-2" name="gpic[]"  style="height:30px;"/>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right">商品介绍：</label>
					<div class="col-sm-10">
						<textarea rows="20" class="col-sm-10" placeholder="商品的介绍" name="gintroduce" style="resize:none;" id="content"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right">参数规格：</label>
					<div class="col-sm-10">
						<textarea rows="20" class="col-sm-10" placeholder="参数规格" name="gspecifications" style="resize:none;" id="content1"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right">是否上架：</label>
					<div class="col-sm-2" style="margin-top:3px;">
						<input type="radio" name="issale" value="1"> 是
						&nbsp;&nbsp;&nbsp;
						<input type="radio" name="issale" value="0" checked> 否
					</div>
				</div>
				<div class="clearfix form-actions">
					<div class="col-md-offset-3 col-md-9">
						<button type="submit" class="btn btn-info">
							<i class="icon-ok bigger-110"></i>
							发布
						</button>
						&nbsp; &nbsp; &nbsp;
						<button type="reset" class="btn">
							<i class="icon-undo bigger-110"></i>
							重置
						</button>
					</div>
				</div>
			</form>
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
			var nownav = "#sidebar a[href*=Goodsissue]";
			var parentattr = $(nownav).parent().parent().attr("class");
			$(nownav).parent().addClass('active');
			if (parentattr == 'submenu') {
				$(nownav).parent().parent().parent().addClass('active open');
			};
			//设置当前页面的菜单高亮显示 结束
			$('.class-input-file-2').ace_file_input({
				no_file:'选择图片 ...',
				btn_choose:'上传',
				btn_change:'修改',
				droppable:false,
				onchange:null,
				thumbnail:false 
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
								if(! (/\.(jpe?g|png|gif|bmp)$/i).test(file) ) return false;
							}
							else {
								var type = $.trim(file.type);
								if( ( type.length > 0 && ! (/^image\/(jpe?g|png|gif|bmp)$/i).test(type) )
										|| ( type.length == 0 && ! (/\.(jpe?g|png|gif|bmp)$/i).test(file.name) )
									) continue;
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
			// $('.date-picker').datepicker({autoclose:true}).prev().on(ace.click_event, function(){
			// 	$(this).next().focus();
			// });
			$('#menu-0').parent().parent().nextAll().css('display','none');
             		//联动菜单
			$('#selparent').on('change','select',function(){
				var parentid = 0;                       
				var number = $(this).parent().prop('id').split('-')[1];
				numbers = parseInt(number)+1;
				var prevval = $(this).parent().prev().children().eq(0).val();
				$(this).parent().nextAll().remove();
				parentid = $(this).val();

				if ($(this).val() == prevval) {
					$('#showid').val(parentid);
					$('#menu-0').parent().parent().nextAll().css('display','none');
					return;
				};

				if (parentid == 0) {
					$('#showid').val(parentid);
					$('#menu-0').parent().parent().nextAll().css('display','none');
					return;
				};
				var str = '<div id="menu-'+numbers+'" class="col-xs-10 col-sm-2  no-padding"><select class="form-control"></select></div>';
				$(this).parent().after(str);
				$.ajax({
					url:"/food/index.php/admin/goodsclass/viewclassid",
					type:'post',
					data:{parentid:parentid},
					success:function(data){
						var datas = JSON.parse(data);
						printstr = '<option value="'+parentid+'">--</option>';
						for (var i=0; i< datas.length; i++) {
							printstr += '<option value="'+datas[i].cid+'">'+datas[i].cname+'</option>';
						}
						$('#menu-'+numbers+' select').html(printstr);
						if (!datas.length) {
							$('#menu-'+numbers).prev().nextAll().remove();
							$('#menu-0').parent().parent().nextAll().css('display','block');
							var goodattrid = $('#showid').val();
							// ajax请求商品的属性
							$.ajax({
								url:"/food/index.php/admin/Goodsissue/goodsAttr",
								type:'post',
								data:{cid:goodattrid},
								dataType:'json',
								success:function(data){
									var str1 = '';
									var numbers = 0;
									$.each(data,function(key,vo){
										numbers++;
										str1 += '<div no-padding"><span>'+key.split(',')[1]+'：</span>';
										$.each(vo,function(k,v){
											str1 += '<input type="radio" name='+key.split(',')[0]+' value='+v.split(',')[0]+'>&nbsp;'+v.split(',')[1];
										})
										str1 += '</div>';
									})
									$('#goodattr').html(str1);
								}
							})
							// ajax请求商品的品牌
							$.ajax({
								url:'/food/index.php/admin/Goodsissue/goodsBrand',
								type:'post',
								data:{cid:goodattrid},
								dataType:'json',
								success:function(data){
									var str1 = '<option value="0">请选择</option>';
									$.each(data,function(k,v){
										str1 += '<option value="'+v.split(',')[0]+'">'+v.split(',')[1]+'</option>';
									})
									$('#goodbrand').html(str1);
								}
							})
						}else{
							$('#menu-0').parent().parent().nextAll().css('display','none');
						}
					}
				})
				$('#showid').val(parentid);	
			})
		});
		//1 设置ueditor目录
		window.UEDITOR_HOME_URL = "/food/Public/admin/js/ueditor/";
	</script>
	<!-- 加载配置文件 2-->
	<script type="text/javascript" src="/food/Public/admin/js/ueditor/ueditor.config.js"></script>
	<!-- 加载编辑器源码文件3 -->
	<script type="text/javascript" src="/food/Public/admin/js/ueditor/ueditor.all.js"></script>
	<script type="text/javascript">
	//初始化编辑器，设定显示的按钮
	UE.getEditor('content',{initialFrameHeight:330,initialFrameWidth:650,toolbars:[['bold', 'insertimage', 'emotion','date','undo','redo','paragraph','fontfamily','forecolor','justify','lineheight','cleardoc']]});
	UE.getEditor('content1',{initialFrameHeight:330,initialFrameWidth:650,toolbars:[['bold', 'insertimage', 'emotion','date','undo','redo','paragraph','fontfamily','forecolor','justify','lineheight','cleardoc']]});
	</script>

	</body>
</html>