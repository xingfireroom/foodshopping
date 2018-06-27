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
        
    <link rel="stylesheet" href="/dashboard/Public/home/css/index.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/dashboard/Public/home/css/search_v21.css">
    <style>
        .grid_c1{
            width: 1190px;
        }
    </style>

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
        <div class="ic_header">
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
        
            <div class="ic_nav" id="j_nav">
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

    
    <div class="ic_content">
        <div class="core">
            <div class="grid_c1">
                <div class="grid_s"></div>
                <div class="grid_m">
                    <!-- 幻灯片 -->
                    <div class="slider" id="j_main_slider">
                        <ul class="slider_img">
                            <?php if(is_array($indexad[2])): $i = 0; $__LIST__ = $indexad[2];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$filmad): $mod = ($i % 2 );++$i; if($i < 9): if($i == 1): ?><li class="" style="display: list-item; opacity: 1;">
                                            <?php else: ?>
                                        <li class="hide" style="opacity: 1; display: none;"><?php endif; ?>
                                    <a target="_blank" href="/dashboard/index.php/Home/Goods/index/gid/<?php echo ($filmad['adurl']); ?>">
                                        <img src="/dashboard/Public/Uploads/<?php echo ($filmad['adpic']); ?>" width="1000" height="330" alt="<?php echo ($filmad['adtitle']); ?>">
                                    </a>
                                    </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                        <ul class="slider_trigger" id="j_strigger">
                            <?php if(is_array($indexad[2])): $i = 0; $__LIST__ = $indexad[2];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$filmad): $mod = ($i % 2 );++$i; if($i < 9): if($i == 1): ?><li class="on" index="1">
                                    <?php else: ?>
                                        <li class="" index="<?php echo ($i); ?>"><?php endif; ?>
                                        <?php echo ($i); ?>
                                    </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                        <a href="javascript:;" class="slider_go_prev hide" id="j_sprev"></a>
                        <a href="javascript:;" class="slider_go_next hide" id="j_snext"></a>
                    </div>

                    <i class="daily_bod"></i>

                    <!-- 限时抢购 -->
                    <div class="dailybeta">
                        <div class="dailybeta_hd">
                            <p class="dailybeta_tit"><i class="dailybeta_tit_ico">&nbsp;</i><b>优惠专区，限时抢购</b></p>
                            <p class="dailybeta_time_p1">还剩</p>
                            <div class="dailybeta_time" id="j_daily_timer">
                                <div class="dailybeta_time_item timer_h" id="j_daily_h">14</div>
                                <i></i>
                                <div class="dailybeta_time_item timer_i" id="j_daily_m">18</div>
                                <i></i>
                                <div class="dailybeta_time_item timer_s" id="j_daily_s">28</div>
                            </div>
                            <p class="dailybeta_time_p2">结束</p>
                        </div>
                        <div class="dailybeta_bd">

                            <!-- 抢购商品列表 -->
                            <ul class="dailybeta_goods">
                            <?php if(is_array($indexad[3])): $i = 0; $__LIST__ = $indexad[3];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rushad): $mod = ($i % 2 );++$i; echo ($rushad['title']); ?>
                                <?php if($i < 9): ?><li>
                                        <div class="mod_goods mod_goods_w100">
                                            <div class="mod_goods_img load_effect">
                                                <img class="lazy" src="/dashboard/Public/home/images/icon/loading-60.gif" data-original="/dashboard/Public/Uploads/<?php echo ($rushad['adpic']); ?>" alt="<?php echo ($filmad['adtitle']); ?>">
                                                <b class="hide "></b>
                                            </div>
                                            <div class="mod_goods_info">
                                                <p class="mod_goods_tit">
                                                    <?php echo ($rushad['adtitle']); ?>
                                                </p>
                                                <p class="mod_goods_price">
                                                    <span class="mod_price mod_price_now"><span>优惠低价</span></span>
                                                </p>
                                                <div class="mod_goods_stock">
                                                    <em>库存</em>
                                                    <span><i class="mod_goods_stock_bg2" w="style=&quot;width:100%&quot;" style="width: <?php echo rand(10,60);?>%;"></i></span>
                                                </div>
                                                <p class="dailybeta_goods_btn_wrap">
                                                    <a href="/dashboard/index.php/Home/Goods/index/gid/<?php echo ($rushad['adurl']); ?>" class="dailybeta_goods_btn">立即抢</a>
                                                </p>
                                            </div>
                                        </div>
                                    </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                            <ul class="dailybeta_goods hide" id="POS_1_300034">
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 推荐 -->
        <div class="grid_c1 food_mod_f f1 goods" ftag="floorsnum">
            <div class="food_mod_f_hd">
                <div class="food_mod_f_tit">
                    <h2>热度推荐</h2>
                </div>
            </div>
            <ul class="goods_ul" id="itemList" style="width:100%">
                <?php if(is_array($hot)): $i = 0; $__LIST__ = $hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodsvo): $mod = ($i % 2 );++$i;?><li style="cursor: pointer;width:205px;" class="goods_li">
                        <div class="mod_goods">
                            <div class="mod_goods_img">
                                <a class="link_pic" target="_blank" href="/dashboard/index.php/Home/Goods/index/gid/<?php echo ($goodsvo['gid']); ?>" pos="1" >
                                    <img class="lazy" iguid="0" src="/dashboard/Public/home/images/icon/loading-200.gif" data-original="/dashboard/Public/Goodsuploads/<?php echo ($goodsvo['gpic']); ?>" height="200" width="200">
                                </a>
                            </div>
                            <div class="mod_goods_info">
                                <p class="mod_goods_promo" title=""></p>
                                <p class="mod_goods_tit"><a href="/dashboard/index.php/Home/Goods/index/gid/<?php echo ($goodsvo['gid']); ?>" target="_blank" title="<?php echo ($goodsvo['gname']); ?>"><?php echo ($goodsvo['gname']); ?></a></p>
                                <p class="mod_goods_price">
                                            <span class="mod_price">
                                                <i>¥</i><span><?php echo ($goodsvo['goldprice']); ?>.00</span>
                                            </span>
                                    <span class="goods_comments"><a target="_blank" href="/dashboard/index.php/Home/Goods/index/gid/<?php echo ($goodsvo['gid']); ?>" pos="201" ><b><?php echo ($goodsvo['gsellnums']); ?></b>销量</a></span>
                                </p>
                            </div>
                        </div>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>

        <?php if(is_array($floors)): $k = 0; $__LIST__ = $floors;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$fval): $mod = ($k % 2 );++$k;?><div class="grid_c1 food_mod_f f1" id="floor_<?php echo ($k); ?>" ftag="floorsnum">
                <div class="food_mod_f_hd">
                    <div class="food_mod_f_tit">
                     <h2>推荐<?php echo ($k); ?><a target="_blank" href=""><?php echo ($fval['cname']); ?></a></h2>
                    </div>
                </div>
                <div class="food_mod_f_bd">

                    <!-- 推荐幻灯片 -->
                    <div class="grid_s">
                        <div class="food_mod_extimg">
                            <a target="_blank" href="/dashboard/index.php/Home/Goods/index/gid/<?php echo ($fval['picad'][1][0]['fadurl']); ?>">
                                <img class="lazy" src="/dashboard/Public/home/images/icon/loading-190.gif" data-original="/dashboard/Public/Uploads/<?php echo ($fval['picad'][1][0]['fadpic']); ?>">
                            </a>
                        </div>
                    </div>
                    <div class="grid_m">
                        <div class="food_mod_fgoods_wrap">
                            <ul class="food_mod_fgoods" id="POS_1_300021" >
                                <!-- 中间推荐位 -->
                                <?php if(is_array($fval['picad'][2])): $i = 0; $__LIST__ = $fval['picad'][2];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$fcenter): $mod = ($i % 2 );++$i; if($i < 5): ?><li class="food_mod_fgoods_high">
                                            <a target="_blank" href="/dashboard/index.php/Home/Goods/index/gid/<?php echo ($fcenter['fadurl']); ?>">
                                                <img class="lazy" src="/dashboard/Public/home/images/icon/loading-210.gif" data-original="/dashboard/Public/Uploads/<?php echo ($fcenter['fadpic']); ?>">
                                            </a>

                                        </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>

                                <!-- 热销推荐 -->
                                <?php if(is_array($fval['goods'])): $i = 0; $__LIST__ = $fval['goods'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goods): $mod = ($i % 2 );++$i;?><li class="food_mod_fgoods_low">
                                        <div class="mod_goods mod_goods_w80" _loaded="true">
                                            <div class="mod_goods_img load_effect">
                                                <a target="_blank" href="/dashboard/index.php/Home/Goods/index/gid/<?php echo ($goods['gid']); ?>">
                                                <img class="lazy" src="/dashboard/Public/home/images/icon/loading-60.gif" data-original="/dashboard/Public/Goodsuploads/<?php echo ($goods['gpic']); ?>" width="80" height="80">
                                                </a>
                                            </div>
                                            <div class="mod_goods_info">
                                                <p class="mod_goods_promo"><a href="/dashboard/index.php/Home/Goods/index/gid/<?php echo ($goods['gid']); ?>"><?php echo ($goods['gname']); ?></a></p>
                                                <p class="mod_goods_price"><span class="mod_price"><i>¥</i><span><?php echo ($goods['goldprice']); ?>.00</span></span></p>
                                            </div>
                                        </div>
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                    </div>

                    <!-- 右侧广告 -->
                    <div class="grid_e">
                        <div class="food_mod_extimg">
                            <a target="_blank" href="/dashboard/index.php/Home/Goods/index/gid/<?php echo ($fval['picad'][3][0]['fadurl']); ?>">
                            <img class="lazy" src="/dashboard/Public/home/images/icon/loading-190.gif" data-original="/dashboard/Public/Uploads/<?php echo ($fval['picad'][3][0]['fadpic']); ?>">
                            </a>
                        </div>
                    </div>
                </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>    
    <div class="mod_backtop hide" id="j_backtop">
        <a href="javascript:" title="回顶部" ytag="72300">回顶部</a>
    </div>


    <div class="ic_footer">
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
    
<script src="/dashboard/Public/home/js/index.js"></script>
<script type="text/javascript" src="/dashboard/Public/home/js/lazyload.js"></script>
<script type="text/javascript">
    jQuery(document).ready(
        function($){
            $(".lazy").lazyload({
                 placeholder :"/dashboard/Public/home/images/icon/loading.gif",
                 effect: "fadeIn"
            });
    });
</script>

</html>