<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0021)http://www.yixun.com/ -->
<html lang="zh-cn" class="csstransitions cssanimations ic_webkit ic_chrome ic_latest">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title><?php echo ($title?$title:$web["wname"]); ?></title>
        <meta name="keywords" content="<?php echo ($web["wrecords"]); ?>">
        <meta name="description" content="<?php echo ($description?$description:$web["describe"]); ?>">
        <link rel="stylesheet" href="/food/Public/home/css/style.css" type="text/css" media="screen">
        <!--<link rel="stylesheet" href="/food/Public/home/css/bootstrap.min.css" />-->
        <!--[if !IE]>|xGv00|8d8871c57bdd50638a9c8dbef4b4e250<![endi<>f]-->
        
	<link rel="stylesheet" href="/food/Public/home/css/center_style.css">
	<link rel="stylesheet" href="/food/Public/home/css/gb.css" type="text/css" media="screen">
	<link rel="stylesheet" href="/food/Public/home/css/cart_v2.css" type="text/css" media="screen">
	<link rel="stylesheet" href="/food/Public/home/css/order_confirm.css" type="text/css" media="screen">

        <!--[if !IE]>|xGv00|862996b1d71bcbc1ca1b249e59fcf6e2<![endif]-->
        <!--[if IE]>
        <link rel="stylesheet" href="/food/Public/home/css/ie.css" type="text/css" media="screen">
        <![endif]-->
    </head>
    <style>
        #addLianxi {
            width: 150px;
            height: 230px;
            position: fixed;
            right: 2%;
            top: 30%;
            z-index: 999;
            background: #fff;
            border:2px solid blue;
            border-radius: 3px;
        }
        #addLianxi {
            padding-left: 5px;
            padding-right: 5px;
        }
        #addLianxi>h5 {font-weight: 800;}
        #addLianxi p {
            padding-left: 8px;
            padding-bottom:3px;
            border-bottom:1px solid #ddd;
            font-size: 16px;
        }
        #addLianxi span {
            padding-left: 4px;
        }
        #addLianxip {line-height: 30px; font-size: 16px;}
        .lianxiPhone {color: red;}
        #addLianxi img{
            vertical-align:middle;
            align:middle;
            display: inline-block;
        }
        #addLianxi h4{
            font-size: 18px;
            margin-top:3px;
        }
        #addLianxi h5{
            font-size: 14px;
            margin-top:10px;
        }
    </style>
    <body class="ic_rwd">
        <!--[if IE]>
         <style>
         .mod_dropmenu_hd {
         border-width: 0 0 0;
         }
         .mod_dropmenu_on .mod_dropmenu_hd {
         border-width: 1px 1px 0;
         }
         #second_list{
         left:190px;
         overflow:hidden;
         }
         .mod_subcate_main dl {
         margin-left:80px;
         overflow: hidden;
         padding: 10px 0 30px 65px;
         }
         </style>
         <![endif]-->
        <!-- top 条 -->
        <div class="ic_toolbar">
            <div class="grid_c1">
                <div class="mod_entry">
                    <!-- <a target="_blank" class="mod_entry_mix" href=""><b>手机</b></a> -->
                </div>
                <div class="mod_sitemap" role="navigation">
                    <ul class="mod_sitemap_ul" id="j_sitemap">
                        <li class="mod_sitemap_li">
                            <a href="/food/index.php/home/Index">首页&nbsp;</a>
                        </li>
                        <li class="mod_sitemap_gap">|</li>
                        <?php if(empty($_SESSION[uname])): ?><li class="mod_sitemap_li">
                                <a href="/food/index.php/home/login">登录&nbsp;</a>
                            </li>
                            <li class="mod_sitemap_gap">|</li>
                            <li class="mod_sitemap_li">
                                <a href="/food/index.php/home/register">注册&nbsp;</a>
                            </li>
                            <?php else: ?>
                            <li class="mod_sitemap_li">
                                欢迎您，<a target="_blank" ><a href="/food/index.php/home/center"><?php echo (session('uname')); ?></a>&nbsp;</a>
                            </li>
                            <li class="mod_sitemap_gap">|</li>
                            <li class="mod_sitemap_li">
                                <a target="_blank" href="/food/index.php/home/center">个人中心&nbsp;</a>
                            </li>
                            <li class="mod_sitemap_gap">|</li>
                            <li class="mod_sitemap_li">
                                <a target="_blank" href="/food/index.php/Home/Center/indent">我的订单&nbsp;</a>
                            </li><?php endif; ?>
                        <?php if(!empty($_SESSION[uname])): ?><li class="mod_sitemap_gap">|</li>
                        <li class="mod_sitemap_li">
                            <a  href="/food/index.php/home/index/exitlogin">退出&nbsp;</a>
                        </li><?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
        <!-- top 条结束 -->

        <!-- 头部 -->
        <div class="ic_header">
                <div class="grid_c1">
                    <div class="mod_logo">
                        <h1>
                            <a href="/food/index.php/Home/Index/index"><img src="/food/Public/uploads/<?php echo ($web['wlogo']); ?>" alt="网"></a>
                        </h1>
                    </div>
                    <!-- 搜索 -->
                    <div class="search_cart_wrap" id="j_search">
                        <div class="mod_search">
                            <form action="/food/index.php/Home/Search/index" target="_top">
                                <!--<label for="" class="hide">全站搜索</label>-->
                                <input class="mod_search_con mod_search_txt no_cur" type="text" id="q_show" name="searchval" accesskey="s" tabindex="8" autocomplete="off" x-webkit-speech="" x-webkit-grammar="builtin:search" value="请输入商品进行搜索">
                                <input class="mod_search_btn" tabindex="9" type="submit">
                            </form>
                        </div>

                        <!-- 购物车 -->
                        <div class="mod_minicart" id="j_minicart">
                            <div class="mod_minicart_con">
                                <a href="/food/index.php/Home/Showcart/index" class="mod_minicart_lk">
                                    <i class="mod_minicart_ico">&nbsp;</i>
                                    <span class="mod_minicart_tit">购物车</span>
                                </a>
                                <i class="mod_minicart_gap">|</i>
                                <span class="mod_minicart_num" id="j_minicart_num"><?php echo session('num');?></span>
                                <b class="mod_minicart_arrow"><i></i></b>
                            </div>
                            
                            <div class="mod_minicart_pop" id="j_minicart_pop">
                                <i class="mod_minicart_pop_bod"></i>
                                <div class="mod_minicart_pop_inner" id="j_minicart_layer">
                                    
                                </div>
                            </div>
                        </div>
                        <!-- 购物车结束 -->
                     <!--    
                        <div class="mod_skey" id="page_sKey">
                            <a href="">热门搜索</a> <a href="">热门搜索</a> <a href="">热门搜索</a>
                        </div>
                        <div class="mod_skey hide" id="j_skey">
                            <a href="">热门搜索</a> <a href="">热门搜索</a> <a href="">热门搜索</a>
                        </div>
                        <textarea class="hide" id="j_skey_area"></textarea> -->
                    </div>
                </div>
            </div>
        <!-- 头部结束 -->
        
            <div class="ic_nav" id="j_nav">
                <div class="grid_c1">

                    <!-- 分类菜单 -->
                    <div class="mod_cate" id="category_container">
                    <div class="mod_cate_hd">
                        <div class="mod_cate_hd_con"><a target="_blank" >全部商品分类</a></div>
                        <i class="mod_cate_hd_arrow"></i>
                    </div>
                    <ul class="mod_cate_bd" id="frist_list">

                    </ul>
                    <div class="mod_subcate" id="second_list" style="display: none; top: 40px;">

                    </div>
                </div>
                <!-- 分类菜单结束 -->
                
                <!-- 导航 -->
                <div class="mod_nav">
                    <ul class="mod_nav_ul" id="j_hornav">
                        <!-- <li class="mod_nav_li" id="nav2"><a target="_blank" href="">家电城</a><i class="mod_nav_ico mod_nav_hot"></i></li> -->
                    </ul>
                </div>
            </div>
        </div>
    <!-- 头部结束 -->

    
<div class="center_main">
		<div class="breadnav">		
			<span><a href="/food/index.php/home/index" style="color:rgb(8,92,155)"><?php echo ($bread["0"]); ?></a></span>&nbsp;>&nbsp;<span><a href="/food/index.php/Home/Center/index" style="color:rgb(8,92,155)"><?php echo ($bread["1"]); ?></a>&nbsp;></span><span>&nbsp;<?php echo ($bread["2"]); ?></span>
		</div>
		<div class="center_left">
		<div class="center_classify">
			<h1>交易管理<h1>
		</div>
			<ul class="center_ul">
				<li><a href="/food/index.php/Home/Center/indent">我的订单</a></li>
				<li><a href="/food/index.php/Home/Center/collect">我的收藏</a></li>
				<li><a href="/food/index.php/Home/Center/scores">我的留言</a></li>
				<li><a href="/food/index.php/Home/Center/balance">留言</a></li>

		<div class="center_classify">
			<h1>资料管理<h1>
		</div>
				<li><a href="/food/index.php/Home/Center/data">个人资料</a></li>
				<li style="background:rgb(49,101,176);"><a href="/food/index.php/Home/Center/delivery" style="color:#ffffff;">收货信息</a></li>

			</ul>	
		</div>
		<div class="center_right">
			<span class="center_indent"><h1>收货信息管理</h1></span>
				<div class="delivery_location">
					<ul>
					<li>地址类型</li>
					<li>地址</li>
					<li style="text-align:right;">操作</li>
					</ul>
				</div>
				<!--需要遍历的-->
				<div class="dd_mod_order_bd">
					<ul id="address_box" class="order_address_list">
						<?php if(is_array($adddata)): foreach($adddata as $key=>$vo): ?><li class="<?php echo ($vo['state']==1?'selected':''); ?>">
								<!--S 地址信息 -->
								<div  id="li_<?php echo ($vo["addid"]); ?>" class="order_address_info">
									<!-- 请开发将label的for属性关联到对应input控件的ID值 -->
									<span class="c1 radio_wrap">
										<input type="radio" class="in_sel" name="sel_addr" id="i_aid<?php echo ($vo["addid"]); ?>" <?php echo ($vo['state']?'checked':''); ?>>
									</span>
									<label class="radio_desp" for="i_aid46">
										<span class="c2"><?php echo ($vo["tagging"]); ?></span>
										<span class="c3"><?php echo (implode('',explode('-',$vo["address"]))); ?> <?php echo ($vo["zipcode"]); ?>，<?php echo ($vo["consignee"]); ?> <?php echo ($vo["mphone"]); ?> <?php echo ($vo["phone"]); ?></span>
									</label>
								</div>
								<!--E 地址信息 -->
								<!--S 地址编辑 -->
								<!-- 点击删除时，此div的className修改为：class="order_address_editor order_address_editor_active" -->
								<div style="display:<?php echo ($vo['state']==1?'block':'none'); ?>;" id="editor_<?php echo ($vo["addid"]); ?>" class="order_address_editor">
									<span class="order_address_editor_cont">
										<a id="editadd_<?php echo ($vo["addid"]); ?>" ytag="20003" t="edit" href="javascript:void(0);">修改</a><a name="delid_<?php echo ($vo["addid"]); ?>" ytag="20004" t="del" href="/food/index.php/Home/Center/delAddress/addid/<?php echo ($vo["addid"]); ?>">删除</a>
									</span>
								</div>
								<!--E 地址编辑 -->
							</li><?php endforeach; endif; ?>
						<div class="collect_striping"></div>
						<!-- S新增收货地址 -->
							<li class="order_address_list_edit" style="display:none;">
								<!--S 地址信息 -->
								<div class="order_address_info">
									<!--S 新地址表单 -->
									<div class="order_address_form">
										<input type="hidden" id="state_change" name="state_change" value="0">
										<div class="order_address_form_item item_area">
											<span class="form_hd">
												<span class="require">*</span>选择地区：
											</span>
											<div class="form_bd">
												<div class="select_area">
													<div id="select_area_act" class="mod_act">
														<div id="area_show_result" class="hd_act">
															<div class="area_item" style="height:21px;">
																<span id="area_name" class="area" v="130503" style="margin-right:0px;">
																	<select id="s_province" name="s_province"></select>&nbsp;&nbsp;
																	<select id="s_city" name="s_city" ></select>&nbsp;&nbsp;
																	<select id="s_county" name="s_county"></select>
																</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="order_address_form_item item_address">
											<span class="form_hd">
												<span class="require">*</span>详细地址：
											</span>
											<div id="j_add_input_bd" class="form_bd">
												<input type="text" maxlength="54" value="最多输入26个汉字" id="j_add_input" class="dd_mod_input_txt " name="address">
											</div>
										</div>
										<div class="order_address_form_item item_post">
											<span class="form_hd">
												<span class="require"></span>邮政编码：
											</span>
											<div class="form_bd">
												<input id="zipcode" type="text" value="如518000" name="zipcode" class="dd_mod_input_txt ">
											</div>
										</div>
										<div class="order_address_form_item item_user">
											<span class="form_hd">
												<span class="require">*</span>收&nbsp;&nbsp;货&nbsp;人：
											</span>
											<div class="form_bd">
												<input id="consignee" type="text" maxlength="22" value="最多10个汉字" name="name" class="dd_mod_input_txt ">
											</div>
										</div>
										<div class="order_address_form_item item_phone">
											<span class="form_hd">
												<span class="require">*</span>手&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;机：
											</span>
											<div class="form_bd">
												<input id="mphone" type="text" value="如13452525625" name="mobile" class="dd_mod_input_txt txt_1 ">
											</div>
											<span class="form_hd">固定电话：</span>
											<div class="form_bd">
												<input type="text" value="" name="phone" class="dd_mod_input_txt txt_2" style="display: none;">
												<input id="areacode" type="text" class="input_mini exsample_mini" value="区号"> - 
												<input id="fixednumber" type="text" name="phone_position" class="input_short exsample_short" value="固话号"> - 
												<input id="extensionnumber" type="text" class="input_short exsample_short" value="分机号">
											</div>
										</div>
										<div class="order_address_form_item item_signal">
											<span class="form_hd">地址标注：</span>
											<div class="form_bd">
												<input id="tagging" type="text" maxlength="10" value="新地址" class="dd_mod_input_txt " name="workplace">
												<span class="hint">例如：家里、公司，最多四字</span>
											</div>
										</div>
										<div class="order_address_form_item item_signal">
											<span class="form_hd">默认地址：</span>
											<input id="stateaddress" type="hidden" value="1" >
											<span>
												<input id="state_yes" type="radio" name="state" checked="checked">是
											</span>
											<span>
												<input id="state_no"  type="radio" name="state" >否
											</span>
										</div>
										<div class="order_address_tips">
											<span class="hint">商城网已在北京部分高校开设自提服务，选择自提点收货免运费，</span>
											<a title="查看自提点服务详情" target="_blank" href="http://st.yixun.com/help/yixun-uni-promote.htm" class="link_1">查看自提点服务详情</a>
										</div>
									</div>
									<div class="order_address_form_action">
										<a id="saveaddress" class="mod_btn" href="javascript:void(0);">确认收货地址</a>
										<a id="canceladdress" class="mod_btn mod_btn_bg1" href="javascript:void(0);">取消</a>
									</div>
									<!--E 新地址表单 -->
								</div>
								<!--E 地址信息 -->
							</li>
							<!-- E新增收货地址 -->
					</ul>
					<div class="order_address_other">
						<a style="display: block;" href="javascript:void(0)" id="new_address">+ 新增收货地址</a>
					</div>
				</div>
		</div>
</div>
<div class="mod_backtop hide" id="j_backtop">
            <a href="javascript:" title="回顶部" ytag="72300">回顶部</a>
        </div>


    <div class="ic_footer hide">
        <div class="ic_footer_inner">
            <!--友情链接-->
           <div class="mod_link">
            <ul>
            <?php if(is_array($friend)): foreach($friend as $key=>$f): ?><li><a href="http://<?php echo ($f["furl"]); ?>" target="_blank"><?php echo ($f["fname"]); ?></a></li><?php endforeach; endif; ?>
            </ul>
            </div>
             <!--友情链接结束-->
             <div style="height:20px;"></div>
        </div>
    </div>

    <div class="ic_subfooter">
        <div class="grid_c1">
            <p class="sf_p2">Copyright © 2018 - 2028 某某某版权所有 &nbsp;  </p>
        </div>
    </div>

    </body>
	<script> 
		var ROOT = '/food';
		var PUBLIC = ROOT+'/Public/Home';
		var APP = ROOT+'/index.php';
	</script>
    <script src="/food/Public/home/js/jquery.js" type="text/javascript"></script>
    <script src="/food/Public/home/js/common.js" type="text/javascript"></script>
    <!--<script type="text/javascript" src="/food/Public/home/js/addphone.js"></script>-->
    
	<script type="text/javascript" src="/food/Public/home/js/area.js" ></script>
	<script type="text/javascript">_init_area();</script>
	<script type="text/javascript">
		var Gid  = document.getElementById ;
		var showArea = function(){
			Gid('show').innerHTML = "<h3>省" + Gid('s_province').value + " - 市" + Gid('s_city').value + " - 县/区" + Gid('s_county').value + "</h3>"
		}
	</script>
	<script>
		// 定义函数，用来提示信息
		function promptInfo(str){
			return '<span class="dd_mod_tip_simple dd_mod_tip_info"><i class="ico_dd_info">&nbsp;</i>'+str+'</span>';
		}
		$("#category_container").hover(function(){
			$(this).toggleClass("mod_cate_on");
		});
		$(".center_ul li a").hover(function(){
			$(this).css("color","rgb(214,20,93)");	
		},function(){
			$(".center_ul li a").css("color","rgb(85,85,85)");
		});
		//增加地址js
		$(".delivery_button").click(function(){
			$(".delivery_details").css("display","block");
		})
		//隐藏js
		$("#abolish").click(function(){
			$(".delivery_details").css("display","none");
		})
		// 收货地址的选择点击事件
		$('#address_box div[id^=li_]').on('click',function(){
			$('#address_box div[id^=li_]').parent().removeClass('selected');
			$(this).parent().addClass('selected');
			$(this).children().eq(0).children().eq(0).attr('checked','checked');
			$('.order_address_editor').css('display','none');
			$(this).next().children().eq(1).css('display','none');
			$(this).next().css('display','block');
		});
		// 点击新增地址按钮
		$("#new_address").click(function(){
			$(this).css('display','none');
			$(".order_address_list_edit").css('display','block');
		});
		// 点击取消按钮
		$("#canceladdress").click(function(){
			$(".order_address_list_edit").css('display','none');
			$("#new_address").css('display','block');
		});
		// 地址填写时，input获取鼠标焦点事件，如果其后又提示，则清除提示
		$(".order_address_info input").on('focus',function(){
			// 定义次数变量第一次点击是后清空数据，然后就不清楚了
			if ($(this).attr('id') == 'areacode' || $(this).attr('id') == 'extensionnumber' || $(this).attr('id') == 'fixednumber' || $(this).attr('id') == 'tagging') {
				if ($(this).attr('nums') != 1) {
					$(this).val('');
				}
			}else{
				if ($(this).attr('nums') != 1) {
					$(this).val('');
				}
				$(this).next().remove();
			}	
			$(this).attr('nums','1');
		})
		// 联动菜单的选择改变事件，满足条件删除后面的提示
		$("#s_province,#s_city,#s_county").change(function(){
			if ($("#s_province").val() != "省份" && $("#s_city").val() != "地级市" && $("#s_county").val() != "市、县级市") {
				$("#s_province").parent().parent().next().remove();
			}
		});
		// 改变是否默认地址的值
		$("#state_yes").click(function(){
			$("#stateaddress").val(1);
		});
		$("#state_no").click(function(){
			$("#stateaddress").val(0);
		});
		// 点击保存收货地址，的按钮被点击事件，判断必填项是否都填写了,新增收货地址
		$("#saveaddress").click(function(){
			// 判断地址联动菜单是否被选择了
			if ($("#s_province").val() == "省份" || $("#s_city").val() == "地级市" || $("#s_county").val() == "市、县级市") {
				$("#s_province").parent().parent().next().remove();
				$("#s_province").parent().parent().after(promptInfo('请选择收货地区！'));
				return;
			}else{
				$("#s_province").parent().parent().next().remove();
			}
			// 判断详细地址是否填写了
			if ($("#j_add_input").val() == "" || $("#j_add_input").val() == "最多输入26个汉字") {
				$("#j_add_input").next().remove();
				$("#j_add_input").after(promptInfo('详细地址不能为空，请填写！'));
				return;
			}
			// 判断收货人是否填写了
			if ($("#consignee").val() == "" || $("#consignee").val() == "最多10个汉字") {
				$("#consignee").next().remove();
				$("#consignee").after(promptInfo('收货人不能为空，请填写!'));
				return;
			}
			// 判断手机号是否填写了
			if ($("#mphone").val() == "" || $("#mphone").val() == "如13452525625") {
				$("#mphone").next().remove();
				$("#mphone").after(promptInfo('手机号码不能为空，请填写!'));
				return;
			}
			// 利用ajax操作数据库，保存收货地址，并且更新到本页面
			// 构造变量
			// 新增地址还是修改地址状态
			var addid = $("#state_change").val();
			//详细地址
			var detailedaddress =  $("#s_province").val()+'-'+$("#s_city").val()+'-'+$("#s_county").val()+'- '+$("#j_add_input").val();
			var detailedaddress_1 =  $("#s_province").val()+$("#s_city").val()+$("#s_county").val()+' '+$("#j_add_input").val();
			// 邮政编码
			var zipcode = $("#zipcode").val()=='如518000'?'':$("#zipcode").val();
			// 收货人
			var consignee = $("#consignee").val();
			// 手机号
			var mphone = $("#mphone").val();
			// 固定电话
			var phone = ($("#areacode").val()+'-'+$("#fixednumber").val()+'-'+$("#extensionnumber").val())=='区号-固话号-分机号'?'':($("#areacode").val()+'-'+$("#fixednumber").val()+'-'+$("#extensionnumber").val());
			// 地址标注
			var tagging = $("#tagging").val()=='新地址'?consignee:$("#tagging").val();
			// 是否为默认地址
			var state = $("#stateaddress").val();
			var addaddress = '';
			$.ajax({
				url:'/food/index.php/Home/Center/addAddress',
				type:'post',
				data:{addid:addid,address:detailedaddress,zipcode:zipcode,consignee:consignee,mphone:mphone,phone:phone,tagging:tagging,state:state},
				success:function(){
					window.location="/food/index.php/Home/Center/delivery";
				}
			});
		});
		// 修改地址
		$("a[id^=editadd_]").on('click',function(){
			$('#new_address').css('display','none');
			$(".order_address_list_edit").css('display','block');
			var addid = $(this).attr('id').split('_')[1];
			$.ajax({
				url:'/food/index.php/Home/Center/updateAddress',
				type:'post',
				data:{addid:addid},
				dataType:'json',
				success:function(data){
					// 要修改的数据保存其id号
					$("#state_change").val(addid);
					$("#s_province").val(data.address.split('-')[0]);
					$("#s_city").html('<option value="'+data.address.split('-')[1]+'">'+data.address.split('-')[1]+'</option>');
					$("#s_county").html('<option value="'+data.address.split('-')[2]+'">'+data.address.split('-')[2]+'</option>');
					$("#j_add_input").val(data.address.split('-')[3].split(' ')[1]);
					$("#zipcode").val(data.zipcode);
					$("#consignee").val(data.consignee);
					$("#mphone").val(data.mphone);
					$("#areacode").val(data.phone.split('-')[0]);
					$("#fixednumber").val(data.phone.split('-')[1]);
					$("#extensionnumber").val(data.phone.split('-')[2]);
					$("#tagging").val(data.tagging);
					$("#stateaddress").val(data.state);
					if (data.state == 1) {
						$('#state_yes').attr('checked','checked');
						$('#state_no').removeAttr('checked');
					} else{
						$('#state_no').attr('checked','checked');
						$('#state_yes').removeAttr('checked');
					}
				}
			});
			
		});
	</script>


</html>