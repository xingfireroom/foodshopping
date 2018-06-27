<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0021)http://www.yixun.com/ -->
<html lang="zh-cn" class="csstransitions cssanimations ic_webkit ic_chrome ic_latest">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title><?php echo ($title?$title:$web["wname"]); ?></title>
        <meta name="keywords" content="<?php echo ($web["wrecords"]); ?>">
        <meta name="description" content="<?php echo ($description?$description:$web["describe"]); ?>">
        <link rel="stylesheet" href="/dashboard/Public/home/css/style.css" type="text/css" media="screen">
        <!--<link rel="stylesheet" href="/dashboard/Public/home/css/bootstrap.min.css" />-->
        <!--[if !IE]>|xGv00|8d8871c57bdd50638a9c8dbef4b4e250<![endi<>f]-->
        
	<link rel="stylesheet" href="showcart_files/gb_002.css" type="text/css" media="screen">
	<link rel="stylesheet" href="showcart_files/gb.css" type="text/css" media="screen">
	<link rel="stylesheet" href="showcart_files/cart_v2.css" type="text/css" media="screen">
	<link rel="stylesheet" href="/dashboard/Public/home/css/gb1.css" type="text/css" media="screen">
	<link rel="stylesheet" href="/dashboard/Public/home/css/style1.css" type="text/css" media="screen">
	<link rel="stylesheet" href="/dashboard/Public/home/css/cart_v2.css" type="text/css" media="screen">

        <!--[if !IE]>|xGv00|862996b1d71bcbc1ca1b249e59fcf6e2<![endif]-->
        <!--[if IE]>
        <link rel="stylesheet" href="/dashboard/Public/home/css/ie.css" type="text/css" media="screen">
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
                            <a href="/dashboard/index.php/home/Index">首页&nbsp;</a>
                        </li>
                        <li class="mod_sitemap_gap">|</li>
                        <?php if(empty($_SESSION[uname])): ?><li class="mod_sitemap_li">
                                <a href="/dashboard/index.php/home/login">登录&nbsp;</a>
                            </li>
                            <li class="mod_sitemap_gap">|</li>
                            <li class="mod_sitemap_li">
                                <a href="/dashboard/index.php/home/register">注册&nbsp;</a>
                            </li>
                            <?php else: ?>
                            <li class="mod_sitemap_li">
                                欢迎您，<a target="_blank" ><a href="/dashboard/index.php/home/center"><?php echo (session('uname')); ?></a>&nbsp;</a>
                            </li>
                            <li class="mod_sitemap_gap">|</li>
                            <li class="mod_sitemap_li">
                                <a target="_blank" href="/dashboard/index.php/home/center">个人中心&nbsp;</a>
                            </li>
                            <li class="mod_sitemap_gap">|</li>
                            <li class="mod_sitemap_li">
                                <a target="_blank" href="/dashboard/index.php/Home/Center/indent">我的订单&nbsp;</a>
                            </li><?php endif; ?>
                        <?php if(!empty($_SESSION[uname])): ?><li class="mod_sitemap_gap">|</li>
                        <li class="mod_sitemap_li">
                            <a  href="/dashboard/index.php/home/index/exitlogin">退出&nbsp;</a>
                        </li><?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
        <!-- top 条结束 -->

        <!-- 头部 -->
        <div class="ic_header hide">
                <div class="grid_c1">
                    <div class="mod_logo">
                        <h1>
                            <a href="/dashboard/index.php/Home/Index/index"><img src="/dashboard/Public/uploads/<?php echo ($web['wlogo']); ?>" alt="网"></a>
                        </h1>
                    </div>
                    <!-- 搜索 -->
                    <div class="search_cart_wrap" id="j_search">
                        <div class="mod_search">
                            <form action="/dashboard/index.php/Home/Search/index" target="_top">
                                <!--<label for="" class="hide">全站搜索</label>-->
                                <input class="mod_search_con mod_search_txt no_cur" type="text" id="q_show" name="searchval" accesskey="s" tabindex="8" autocomplete="off" x-webkit-speech="" x-webkit-grammar="builtin:search" value="请输入商品进行搜索">
                                <input class="mod_search_btn" tabindex="9" type="submit">
                            </form>
                        </div>

                        <!-- 购物车 -->
                        <div class="mod_minicart" id="j_minicart">
                            <div class="mod_minicart_con">
                                <a href="/dashboard/index.php/Home/Showcart/index" class="mod_minicart_lk">
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
        
            <div class="ic_nav hide" id="j_nav">
                <div class="grid_c1">

                    <!-- 分类菜单 -->
                    <div class="mod_cate mod_cate_on" id="category_container">
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

    
	<div class="ic_header">
		<div class="grid_c1"> 
			<div class="mod_logo">
				<a href="/dashboard/index.php/home/index" >
					<img src="/dashboard/Public/uploads/<?php echo ($web['wlogo']); ?>" alt="商城网">
				</a>
			</div>
		</div>
	</div>
	<!-- 内容 开始 -->
	<div id="container" class="ic_content">
		<div class="ct grid_c1">
			<div class="flow_step_no1 flow_cart">
				<div class="flow_step">
					<ol class="cols3">
						<li class="step_1">我的购物车</li>
						<li class="step_2">填写核对订单</li>
						<li class="step_3">订单提交成功</li>
					</ol>
				</div>
			</div>
			<!-- 调整送货地址 开始 -->
			<div class="ct_hd">
				<!--E 地址选择组件 -->
				<div class="mod_hint ct_hd_hint">
					<div class="mod_hint_inner">
						<p>部分价格和库存可能因收货地址不同而改动，请以订单提交时为准</p>
					</div>
				</div>
			</div>
			<!-- 调整送货地址 结束 -->
			<!-- 购物车列表 开始-->
			<div class="ct_unlogin_tips" id="denglu_mod" style="display:none;">
				您可以
				<a class="mod_btn mod_btn_bg1 mod_btn_mini" href="/dashboard/index.php/home/login/index/url/ShowCart">登录</a>
				购物车，查看之前加入的商品
			</div>
			<!-- 篮子空空~去买点啥吧！ -->
			<div login='<?php echo ($login); ?>' class="ct_goods_empty" id="guangguang_mod" style="display:none;">
				<div class="ct_goods_empty_inner">
					<h3>篮子空空~去买点啥吧！</h3>
					<p>
						温馨提醒：您可以
						<a title="登录" href="/dashboard/index.php/home/login/index/url/ShowCart" class="mod_btn mod_btn_bg1 mod_btn_mini c_tx0">登录</a>购物车，查看之前加入的商品，或者 
						<a class="c_tx0" href="/dashboard/index.php/home/index">随便逛逛</a>
					</p>
				</div>
			</div>
			<!-- S 商城网商品 -->
			<div style="" class="ct_shop_mod" id="yixun_title_mod">
				<div class="ct_shop_mod_hd" id="yixun_title">
					<h3 class="ct_shop_tit">商城网</h3>
				</div>
				<div class="ct_shop_mod_bd">
					<table class="ct_shop_table">
						<tbody>
						<?php if(is_array($cartdata)): foreach($cartdata as $key=>$vo): ?><tr class="ct_goods_item " id="gid_<?php echo ($vo["gid"]); ?>">
								<td class="col1">
									<input type="hidden" value="<?php echo ($vo["gid"]); ?>">
								</td>
								<td class="col2">
									<div class="mod_goods mod_goods_w80">
										<div class="mod_goods_img">
											<a target="_blank" href="" title="">
												<img src="/dashboard/Public/Goodsuploads/<?php echo ($vo['gpic']['0']); ?>" alt="<?php echo ($vo["gname"]); ?>">
											</a>
										</div>
										<div class="mod_goods_info divGoodsInfo_16471">	
											<p class="mod_goods_tit">
												<a target="_blank" href=""><?php echo ($vo["gname"]); ?></a>
											</p>		
										</div>
									</div>
								</td>
								<td class="col3">
									<p class="ct_unit_price">
										商城价：
										<span class="mod_price ">
											<i>¥</i><span><?php echo ($vo["goldprice"]); ?></span>
										</span>
									</p>
								</td>
								<td class="col4">
									<div id="16471-fuceng" class="ct_num_ctrl">
										<a href="javascript:" class="ct_num_ctrl_jian ct_num_ctrl_disable">-</a>
										<input type="text" class="ct_num_ctrl_input"  curnum="1" multipricenumlimit="99" numlowest="1" numlimit="999" value="<?php echo ($vo["nums"]); ?>" id="pnum_16471">	
										<a href="javascript:" class="ct_num_ctrl_jia">+</a>
									</div>
								</td>
								<td class="col5">
									<p class="ct_goods_price">
										<strong class="mod_price c_tx1">
											<input id="buyprice" type="hidden" value="<?php echo ($vo["gprice"]); ?>">
											<i>¥</i><span><?php echo ($vo["gprice"]); ?></span>
										</strong>
									</p>
								</td>
								<td class="col6">
									<p class="ct_goods_inventory">有货</p>
								</td>
								<td class="col7">
									<div class="ct_goods_action_row">
										<div class="ct_goods_action">
											<a class="c_tx0" href="/dashboard/index.php/Home/Showcart/goodsCollection/gid/<?php echo ($vo["gid"]); ?>">暂存收藏夹</a>
										</div>
									</div>
									<div class="ct_goods_action_row">
										<div class="ct_goods_action">
											<a href="javascript:del(<?php echo ($vo["gid"]); ?>)" class="c_tx0">删除</a>
										</div>
									</div>
								</td>
							</tr><?php endforeach; endif; ?>
						</tbody>
					</table>
				</div>
			</div>
			<!-- E 商城网商品 -->

			<!-- S 网购商品 -->
			<div style="display: none;" id="wanggou_saler"></div>
			<!-- E 网购商品 -->

			<!-- S 参加促销活动 -->
			<div class="ct_mod" id="promotion_row" style="display:none">
				<div class="wrap_unlogin" style="display:none"></div>
				<div class="ct_mod_hd">
					<h3 class="ct_mod_tit">
						<strong class="c_tx0">您已参加以下促销活动：</strong>
					</h3>
					<span class="ct_mod_hd_tips">(参加促销活动不能使用优惠券，请在下一步结算订单页修改)</span>
				</div>
				<div class="ct_mod_bd">
					<div id="promotion_list"></div>
					<div class="ct_sale_row ct_sale_others clearfix" style="z-index:2" id="promotion_list_buy_more">
						<table class="ct_sale_others_table" id="promotion_list_buy_more_table"></table>				
					</div>
				</div>
			</div>
			<!-- E 参加促销活动 -->	

			<div style="display: block;" class="ct_clearing clearfix" id="cart_foot">
				<div class="ct_clearing_col1">
					<a href="javascript:clearcart();" ><i></i>清空购物车</a>
				</div>
				<div class="ct_clearing_col2">
					<div class="ct_clearing_row">
						<div class="ct_clearing_label">商品总价：</div>
						<div class="ct_clearing_cnt">
							+
							<span class="mod_price">
								<i>&#165;</i><span id="totalPrice">0.00</span>
							</span>
						</div>
					</div>
					<div class="ct_clearing_row">
						<div class="ct_clearing_label">促销优惠：</div>
						<div class="ct_clearing_cnt">
							- 
							<span class="mod_price c_tx1">
								<i>&#165;</i><span id="promo_amt">0.00</span>
							</span>
						</div>                        
					</div>
					<div class="ct_clearing_row">
						<div class="ct_clearing_label">返现金额：</div>
						<div class="ct_clearing_cnt">
							- 
							<span class="mod_price c_tx1">
								<i>&#165;</i><span id="totalDiscount">0.00</span>
							</span>
						</div>                        
					</div>
					<div class="ct_clearing_row ct_clearing_price_row">
						<span class="c_tx3">商品总价（不含运费）：</span>
						<strong class="ct_final_price mod_price c_tx1" id="totalPay_tips">
							<i>&#165;</i><span id="totalPay">0.00</span>
						</strong>
					</div>
					<div class="ct_clearing_btn_row clearfix">
						<a href="javascript:;" class="ct_clearing_btn" id="checkorder_btn">去结算<u></u></a>
						<div class="mod_hint mod_hint_weak ct_action_pop" style="display:none" id="mod_hint_fuceng">
							<div class="mod_hint_inner">
								对不起，暂时无法结算，<a class="c_tx0" href="http://www.yixun.com/" target="_blank" onclick="G.app.cart.gobackUrl();return false" hotname="I.CART.CONTINUESHOPPING">去查看</a>
							</div>
							<i class="mod_hint_arrow1"></i>
						</div>				
					</div>				
				</div>
			</div>
			<!-- 购物车列表 结束 -->

			<!-- 推荐模块 开始 -->
			<div id="other_tuijian_wrap" style="display:none">
				<div class="ct_mod_hd" id="always_buy_list_title" style="display:none">
					<h3 class="ct_mod_tit">买了还买</h3>
				</div>		
				<div class="ct_mod_bd" hotname="I.CART.BUYRECOMMEND">
					<ul class="ct_goods_list2 clearfix" id="always_buy_list" style="display:none"></ul>
				</div>
			</div>
			<!-- 推荐模块 结束 -->

			<!-- 收藏模块 开始 -->
			<div class="ct_mod" id="favor_mod" style="display:none">
				<div class="ct_mod_hd" id="favor_list_title" style="display:none">
					<h3 class="ct_mod_tit">收藏夹</h3>
				</div>		
				<div class="ct_mod_bd" hotname="I.CART.BUYRECOMMEND">
					<ul class="ct_goods_list2 clearfix" id="favor_list" style="display:none">
						
					</ul>
				</div>
			</div>		
			<!-- 收藏模块 结束 -->
		</div>
	</div>
	<!-- 内容 结束 -->
	<div class="mod_backtop hide" id="j_backtop" style="display:none;">
		<a href="javascript:" title="回顶部" ytag="72300">回顶部</a>
	</div>
	<div style="display: none;" class="ic_market" id="j_market">
		<div class="grid_c1">
			<a target="_blank" class="market_link" title="17期：送货狂想曲" href="http://gushi.yixun.com/" ytag="70000">
				<img src="showcart_files/0.jpeg" class="market_img_1">
			</a>
		</div>
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
		var ROOT = '/dashboard';
		var PUBLIC = ROOT+'/Public/Home';
		var APP = ROOT+'/index.php';
	</script>
    <script src="/dashboard/Public/home/js/jquery.js" type="text/javascript"></script>
    <script src="/dashboard/Public/home/js/common.js" type="text/javascript"></script>
    <!--<script type="text/javascript" src="/dashboard/Public/home/js/addphone.js"></script>-->
    
	<script type="text/javascript" src="/dashboard/Public/home/js/area.js" ></script>
	<script type="text/javascript">
		// 数值加
		$('.ct_num_ctrl_jia').on('click',function(){
			$(this).parent().children('input').val(parseInt($(this).parent().children('input').val())+1);
			if ($(this).parent().children('input').val() > 1) {
				$(this).parent().children().eq(0).removeClass('ct_num_ctrl_disable');
			}
		})
		// 数值减
		$('.ct_num_ctrl_jian').on('click',function(){
			$(this).parent().children('input').val(parseInt($(this).parent().children('input').val())-1);
			if ($(this).parent().children('input').val() < 2) {
				$(this).parent().children().eq(0).addClass('ct_num_ctrl_disable');
				$(this).parent().children('input').val(1);
			}
			if ($(this).parent().children('input').val() > 1) {
				$(this).parent().children().eq(0).removeClass('ct_num_ctrl_disable');
			}
		})
		// ajax按钮点击事件
		$('.col4 a').on('click',function(){
			// 获取存在于购物车中的gid
			var gid = $(this).parent().parent().parent().children().eq(0).children('input').val();
			// 获取数量
			var nums = $(this).parent().children('input').val();
			// 获取单价
			var buyprice = $("#buyprice").val();
			$.ajax({
				url:'/dashboard/index.php/Home/Showcart/cartNums',
				type:'post',
				data:{gid:gid,nums:nums,price:buyprice},
				success:function(data){
					if (data == 1) {
						// 循环计算每一个订单的价格
						var price = 0;
						for (var i = 0; i < $('.col4 input').length; i++) {
							price = parseInt($('.col4 input').eq(i).val())*unitprice[i];
							// alert(price);
							$('.ct_goods_price span').eq(i).html(price);
						};
						// 商品价格计算
						// 初始商品价格为0
						var totalprice = 0;
						// 循环计算已选商品的总价格
						for (var i = 0; i < $('.ct_goods_price span').length; i++) {
							totalprice += parseInt($('.ct_goods_price span').eq(i).html());
						}
						$('#totalPrice').html(totalprice+'.00');
						$('#totalPay').html(totalprice+'.00');
					}
				}
			});
		});
		// ajax直接修改事件
		$('.ct_num_ctrl_input').on('change',function(){
			// alert(1);
			// 获取存在于购物车中的gid
			var gid = $(this).parent().parent().parent().children().eq(0).children('input').val();
			// 获取数量
			var nums = $(this).parent().children('input').val();
			var buyprice = $("#buyprice").val();
			if (nums < 2) {
				$(this).val(1);
				nums = 1;
				$(this).parent().children().eq(0).addClass('ct_num_ctrl_disable');
			}
			if (nums > 1) {
				$(this).parent().children().eq(0).removeClass('ct_num_ctrl_disable');
			}
			$.ajax({
				url:'/dashboard/index.php/Home/Showcart/cartNums',
				type:'post',
				data:{gid:gid,nums:nums,price:buyprice},
				success:function(data){
					if (data == 1) {
						// 循环计算每一个订单的价格
						var price = 0;
						for (var i = 0; i < $('.col4 input').length; i++) {
							price = parseInt($('.col4 input').eq(i).val())*unitprice[i];
							// alert(price);
							$('.ct_goods_price span').eq(i).html(price);
						};
						// 商品价格计算
						// 初始商品价格为0
						var totalprice = 0;
						// 循环计算已选商品的总价格
						for (var i = 0; i < $('.ct_goods_price span').length; i++) {
							totalprice += parseInt($('.ct_goods_price span').eq(i).html());
						}
						$('#totalPrice').html(totalprice+'.00');
						$('#totalPay').html(totalprice+'.00');
					}
				}
			});
		});
		// 循环计算每一个订单的价格
		var unitprice = [];
		var price = 0;
		for (var i = 0; i < $('.col4 input').length; i++) {
			unitprice[i] = parseInt($('.ct_goods_price span').eq(i).html());
			price = parseInt($('.col4 input').eq(i).val())*parseInt($('.ct_goods_price span').eq(i).html());
			$('.ct_goods_price span').eq(i).html(price);
			if (parseInt($('.col4 input').eq(i).val()) > 1) {
				$('.col4 .ct_num_ctrl_jian').eq(i).removeClass('ct_num_ctrl_disable');
			}
		}
		// 商品价格计算
		// 初始商品价格为0
		var totalprice = 0;
		// 循环计算已选商品的总价格
		for (var i = 0; i < $('.ct_goods_price span').length; i++) {
			totalprice += parseInt($('.ct_goods_price span').eq(i).html());
		}
		$('#totalPrice').html(totalprice+'.00');
		$('#totalPay').html(totalprice+'.00');
		// ======================================
		// 清除，清空购物车
		function del(gid){
			$.ajax({
				url:'/dashboard/index.php/Home/Showcart/delCart',
				type:'post',
				data:{gid:gid},
				success:function(data){
					if (data == 1 || data == 2) {
						$('#gid_'+gid).remove();
						// 商品价格计算
						// 初始商品价格为0
						var totalprice = 0;
						// 循环计算已选商品的总价格
						for (var i = 0; i < $('.ct_goods_price span').length; i++) {
							totalprice += parseInt($('.ct_goods_price span').eq(i).html());
						}
						$('#totalPrice').html(totalprice+'.00');
						$('#totalPay').html(totalprice+'.00');
						// 如果购物车没有东西提示购物车空空
						if ($('.ct_goods_price span').length < 1) {
							$('#guangguang_mod').css('display','block');
							if (data == 2) {
								$('#guangguang_mod p').html('您的购物车暂时无任何商品，请尽快在商城网选购商品吧！<a target="_blank" href="/dashboard/index.php/home/index" class="c_tx0">随便逛逛</a>');
							} else{
								$('#guangguang_mod p').html('温馨提醒：您可以<a title="登录" href="/dashboard/index.php/home/login/index/url/ShowCart" class="mod_btn mod_btn_bg1 mod_btn_mini c_tx0">登录</a>购物车，查看之前加入的商品，或者 <a class="c_tx0" href="/dashboard/index.php/home/index">随便逛逛</a>');
							}
							$('#yixun_title_mod').css('display','none');
							$('#cart_foot').css('display','none');
						}else{
							$('#guangguang_mod').css('display','none');
							$('#yixun_title_mod').css('display','block');
							$('#cart_foot').css('display','block');
						}
					}
				}
			});
		}
		function clearcart(){
			$.ajax({
				url:'/dashboard/index.php/Home/Showcart/clearCart',
				success:function(data){
					if (data == 1 || data == 2) {
						$('#guangguang_mod').css('display','block');
						if (data == 2) {
							$('#guangguang_mod p').html('您的购物车暂时无任何商品，请尽快在商城网选购商品吧！<a target="_blank" href="/dashboard/index.php/home/index" class="c_tx0">随便逛逛</a>');
						} else{
							$('#guangguang_mod p').html('温馨提醒：您可以<a title="登录" href="/dashboard/index.php/home/login/index/url/ShowCart" class="mod_btn mod_btn_bg1 mod_btn_mini c_tx0">登录</a>购物车，查看之前加入的商品，或者 <a class="c_tx0" href="/dashboard/index.php/home/index">随便逛逛</a>');
						}
						$('#yixun_title_mod').css('display','none');
						$('#cart_foot').css('display','none');
					}
				}
			});
		}
		// 去结算按钮的判断，登陆用户可以去结算，费登陆用户跳转到登陆页面
		$("#checkorder_btn").on('click',function(){
			$.ajax({
				url:'/dashboard/index.php/Home/Showcart/checkButton',
				success:function(data){
					if (data == 1) {
						window.location.href="/dashboard/index.php/home/Order/index";
					}else{
						window.location.href="/dashboard/index.php/home/login/index/url/ShowCart";
					}
				}
			});
		});

		// =======================================
		// 初始化购物车没有东西提示篮子空空
		if ($('.ct_shop_table').children().eq(0).children().length < 1) {
			$('#guangguang_mod').css('display','block');
			if ($('#guangguang_mod').attr('login') == 1) {
				$('#guangguang_mod p').html('您的购物车暂时无任何商品，请尽快在商城网选购商品吧！<a target="_blank" href="/dashboard/index.php/home/index" class="c_tx0">随便逛逛</a>');
			}
			$('#yixun_title_mod').css('display','none');
			$('#cart_foot').css('display','none');
		}else{
			if (!$('#guangguang_mod').attr('login') == 1) {
				$('#denglu_mod').css('display','block');
			};
		}
	</script>
	<script type="text/javascript">_init_area();</script>
	<script type="text/javascript">
		var Gid  = document.getElementById ;
		var showArea = function(){
			Gid('show').innerHTML = "<h3>省" + Gid('s_province').value + " - 市" + Gid('s_city').value + " - 县/区" + Gid('s_county').value + "</h3>"
		}
	</script>

</html>