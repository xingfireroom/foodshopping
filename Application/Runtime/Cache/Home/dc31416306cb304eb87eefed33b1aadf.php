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
	<link rel="stylesheet" href="/food/Public/admin/css/font-awesome.min.css">
	<style type="text/css">
		.center_details ul li{
			width:130px;
		}
		.page ul li a{
			color:#7E7E7E;
		}
		.page ul li{
			float:left;
			width:20px;
			height:20px;
			line-height:20px;
			font-size:17px;
			font-family:"微软雅黑";
			text-align: center;
			margin:5px 2px auto 2px; 
			border:1px solid #CCCCCC;
		}
		.page ul .disable{
			display:none;
		}
	</style>

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
				<li style="background:rgb(49,101,176);"><a href="/food/index.php/Home/Center/indent" style="color:#ffffff;">我的订单</a></li>
				<li><a href="/food/index.php/Home/Center/collect">我的收藏</a></li>
				<li><a href="/food/index.php/Home/Center/scores">我的留言</a></li>
				<li><a href="/food/index.php/Home/Center/balance">留言</a></li>
		<div class="center_classify">
			<h1>资料管理<h1>
		</div>
				<li><a href="/food/index.php/Home/Center/data">个人资料</a></li>
				<li><a href="/food/index.php/Home/Center/delivery">收货信息</a></li>
			</ul>	
		</div>
		<div class="center_right">
			<span class="center_indent"><h1>我的订单</h1></span>
			<div class="center_common">
					<ul>
						<a href=""><li id="click1" style="background:#ffffff">普通订单</li></a>
					</ul>
					<span class="center_state">查看订单状态说明</span>
			</div>
			<!--点击的时候隐藏-->
			<div class="center_click">
			<span class="center_qq"></span>
			<div class="center_details">
				<ul>
					<li>订单编号</li>
					<li>下单日期</li>
					<li>收货人</li>
					<li>总金额</li>
					<li>状态</li>
					<li>操作</li>
				</ul>
			</div>
			<?php if(is_array($orderdata)): foreach($orderdata as $key=>$vo): ?><div class="center_details">
					<ul>
						<li><?php echo ($vo["onumber"]); ?></li>
						<li><?php echo ($vo["otime"]); ?></li>
						<li><?php echo ($vo["deliveryaddress"]); ?></li>
						<li><?php echo ($vo['gprice']*$vo['gnums']); ?></li>
						<li>
							<?php switch($vo["ostate"]): case "0": ?>交易取消<?php break;?>
								<?php case "1": ?>正在出库…<?php break;?>
								<?php case "2": ?>已出库<?php break;?>
								<?php case "3": ?>换货中…<?php break;?>
								<?php case "4": ?>退货中…<?php break;?>
								<?php case "5": ?>交易完成<?php break;?>
								<?php case "6": ?>交易完成<?php break; endswitch;?>
						</li>
						<li>
							<?php switch($vo["ostate"]): case "0": ?>订单已取消<?php break;?>
								<?php case "1": ?><a href="/food/index.php/Home/Center/cancelOrder/id/<?php echo ($vo["id"]); ?>">取消订单</a><?php break;?>
								<?php case "2": ?><a href="/food/index.php/Home/Center/confirmOrder/id/<?php echo ($vo["id"]); ?>">确认收货</a>
									|
									<a href="/food/index.php/Home/Center/changeOrder/id/<?php echo ($vo["id"]); ?>">换货</a>
									|
									<a href="/food/index.php/Home/Center/returnOrder/id/<?php echo ($vo["id"]); ?>">退货</a><?php break;?>
								<?php case "3": ?>操作禁止<?php break;?>
								<?php case "4": ?>操作禁止<?php break;?>
								<?php case "5": ?><a href="/food/index.php/home/Review/index/id/<?php echo ($vo["id"]); ?>">去评价</a>
									|
									<a href="/food/index.php/Home/Center/changeOrder/id/<?php echo ($vo["id"]); ?>">换货</a>
									|
									<a href="/food/index.php/Home/Center/returnOrder/id/<?php echo ($vo["id"]); ?>">退货</a><?php break;?>
								<?php case "6": ?>已评价<?php break; endswitch;?>
						</li>
					</ul>
				</div><?php endforeach; endif; ?>
			<div class="page"><?php echo ($page); ?></div>
	</div>
	<!--点击隐藏结束-->
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
    
	<script>
	$("#category_container").hover(function(){
		$(this).toggleClass("mod_cate_on");
	});
	$(".center_ul li a").hover(function(){
		$(this).css("color","rgb(214,20,93)");	
	},function(){
		$(".center_ul li a").css("color","rgb(85,85,85)");
	});
	$("#click1").bind("click",function(event){
			$("#click2").css("background","#ccc");
			$(this).css("background","#ffffff");
			$(".center_click").css("display","block");
			$(".center_click2").css("display","none");
			event.preventDefault();
	});
	$("#click2").bind("click",function(event){
			$("#click1").css("background","#ccc");
			$(this).css("background","#ffffff");
			$(".center_click").css("display","none");
			$(".center_click2").css("display","block");
			event.preventDefault();

	});
</script>

</html>