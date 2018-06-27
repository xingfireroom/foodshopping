<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0021)http://www.yixun.com/ -->
<html lang="zh-cn" class="csstransitions cssanimations ic_webkit ic_chrome ic_latest">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title><?php echo ($title?$title:$web["wname"]); ?></title>
        <meta name="keywords" content="<?php echo ($web["wrecords"]); ?>">
        <meta name="description" content="<?php echo ($description?$description:$web["describe"]); ?>">
        <link rel="stylesheet" href="/organic/Public/home/css/style.css" type="text/css" media="screen">
                    <!--[if !IE]>|xGv00|8d8871c57bdd50638a9c8dbef4b4e250<![endi<>f]-->
        
    <link rel="stylesheet" href="/organic/Public/home/css/search_v2.css">

        <!--[if !IE]>|xGv00|862996b1d71bcbc1ca1b249e59fcf6e2<![endif]-->
        <!--[if IE]>
        <link rel="stylesheet" href="/organic/Public/home/css/ie.css" type="text/css" media="screen">
        <![endif]-->
    </head>
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
                        <?php if(empty($_SESSION[uname])): ?><li class="mod_sitemap_li">
                                <a href="/organic/index.php/home/login">登录&nbsp;</a>
                            </li>
                            <li class="mod_sitemap_gap">|</li>
                            <li class="mod_sitemap_li">
                                <a href="/organic/index.php/home/register">注册&nbsp;</a>
                            </li>
                            <?php else: ?>
                            <li class="mod_sitemap_li">
                                欢迎您，<a target="_blank" ><a href="/organic/index.php/home/center"><?php echo (session('uname')); ?></a>&nbsp;</a>
                            </li>
                            <li class="mod_sitemap_gap">|</li>
                            <li class="mod_sitemap_li">
                                <a target="_blank" href="/organic/index.php/home/center">个人中心&nbsp;</a>
                            </li>
                            <li class="mod_sitemap_gap">|</li>
                            <li class="mod_sitemap_li">
                                <a  href="/organic/index.php/home/index/exitlogin">退出&nbsp;</a>
                            </li><?php endif; ?>


                        <li class="mod_sitemap_gap">|</li>
                        <li class="mod_sitemap_li">
                                <a target="_blank" href="/organic/index.php/Home/Center/indent">我的订单&nbsp;</a>
                            </li>
                        <!--<li class="mod_sitemap_gap">|</li>-->
                        <!--<li class="mod_sitemap_li">-->
                            <!--<a target="_blank" href="/organic/index.php/Home/Service">服务中心&nbsp;</a>-->
                        <!--</li>-->
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
                            <a href="/organic/index.php/Home/Index/index"><img src="/organic/Public/uploads/<?php echo ($web['wlogo']); ?>" alt="网"></a>
                            <a href="/organic/index.php/Home/Index/index"><img src="/organic/Public/images/timg.png" alt=""></a>
                        </h1>
                    </div>
                    <!-- 搜索 -->
                    <div class="search_cart_wrap" id="j_search">
                        <div class="mod_search">
                            <form action="/organic/index.php/Home/Search/index" target="_top">
                                <!--<label for="" class="hide">全站搜索</label>-->
                                <input class="mod_search_con mod_search_txt no_cur" type="text" id="q_show" name="searchval" accesskey="s" tabindex="8" autocomplete="off" x-webkit-speech="" x-webkit-grammar="builtin:search" value="请输入商品进行搜索">
                                <input class="mod_search_btn" tabindex="9" type="submit">
                            </form>
                        </div>

                        <!-- 购物车 -->
                        <div class="mod_minicart" id="j_minicart">
                            <div class="mod_minicart_con">
                                <a href="/organic/index.php/Home/Showcart/index" class="mod_minicart_lk">
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

    
    <!-- 路径面包屑 -->        
    <div id="crumbBox" class="crumb">
        <div class="grid_c1">
            <div class="crumb_wrap">
                <div class="crumb_inner" style="width: 10000px; left: 0px;">
                    <a class="crumb_lk" href="/organic/index.php/Home/Index/index" >首页</a>
                    <span class="crumb_arrow">&gt;</span>
                    <?php if(is_array($bnav)): $i = 0; $__LIST__ = $bnav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bval): $mod = ($i % 2 );++$i;?><a class="crumb_lk" href="<?php echo U('Home/Search/index',array('cid'=>$bval['cid']));?>" ><?php echo ($bval['cname']); ?></a>
                        <span class="crumb_arrow">&gt;</span><?php endforeach; endif; else: echo "" ;endif; ?>
                    
                    <!-- 选中下 -->
                    
                    <?php if($currbrand['bid'] > 0): ?><a class="crumb_selected" href="javascript:;" keyname="brand" title="brandkey" >
                            <span class="crumb_selected_tit">品牌：</span>
                            <span class="crumb_selected_cnt"><?php echo ($currbrand['bname']); ?></span><i>×</i>
                        </a><?php endif; ?>
                    <?php if($currselect[0]['id'] > 0): if(is_array($currselect)): $i = 0; $__LIST__ = $currselect;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$currvo): $mod = ($i % 2 );++$i;?><a class="crumb_selected" href="javascript:;" keyname="attr" attrkey="<?php echo ($currvo['id']); ?>" title="brandkey" >
                                    <span class="crumb_selected_tit"><?php echo ($currvo['attrname']); ?>：</span>
                                    <span class="crumb_selected_cnt"><?php echo ($currvo['attrvalue']); ?></span><i>×</i>
                                </a><?php endforeach; endif; else: echo "" ;endif; endif; ?>
                    <?php if(($currselect[0]['id'] > 0) OR ($currbrand['bid'] > 0)): ?><span class="crumb_arrow">&gt;</span><?php endif; ?>
                    <div class="crumb_search ">
                        <input id="crumbKey" value="<?php echo ($_GET['searchval']); ?>" class="crumb_input" type="text">
                        <a id="crumbSearchKey" href="javascript:;" class="crumb_btn_submit"></a>
                    </div>
                </div>
            </div>
            <a id="crumbShiftLeft" href="javascript:;" class="crumb_act crubm_act_l hide"><!-- 向左 --></a>
            <a id="crumbShiftRight" href="javascript:;" class="crumb_act crubm_act_r hide"><!-- 向右 --></a>
        </div>
    </div><!--[if !IE]>|xGv00|9bc8c77a35890211d2b072ea1d6a4e74<![endif]-->

    <!-- 中间部分 -->
    <div id="container" class="ic_content scontent">
        <div class="grid_c2a">                
            <div class="grid_s sside">
                <!-- 有关键字时导航聚类 -->    
                <div class="cate cate_2" id="cateList">
                    <div class="cate_hd"><h3 class="cate_hd_tit">搜索结果分类</h3></div>
                    <div class="cate_bd">
                        <?php if(is_array($allclass)): $i = 0; $__LIST__ = $allclass;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class='cate_item <?php echo ($vo["cid"] == $cid?"cate_item_on":""); ?>' <?php echo ($vo["cid"] == $cid?"mtag='active'":""); ?> name="left_cate" ytag="leftc_<?php echo ($vo['cid']); ?>">
                                <div class="cate_tit ">
                                    <a class="cate_tit_a" title="<?php echo ($vo['cname']); ?>" href="<?php echo U('Home/Search/index',array('cid'=>$vo['cid']));?>" ><span class="cate_tit_name"><?php echo ($vo['cname']); ?></span></a>
                                    <span class="cate_tit_ico"></span>
                                </div>
                                <div class="cate_cnt">
                                    <?php if(is_array($vo['child'])): $i = 0; $__LIST__ = $vo['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$child): $mod = ($i % 2 );++$i;?><a class='cate_lk2 <?php echo ($child["cid"] == $cid?"cate_lk2_on":""); ?>' <?php echo ($child["cid"] == $cid?"name='active'":""); ?>href="<?php echo U('Home/Search/index',array('cid'=>$child['cid']));?>" title="<?php echo ($child['cname']); ?>" ><span class="cate_lk2_name"><?php echo ($child['cname']); ?></span></a><?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
                
                <!--本周热销榜-->
                <div id="hotSell" class="recommend">
                    <div class="recommend_hd">
                        <h3 class="recommend_tit">本类热销榜</h3>
                    </div>
                    <div class="recommend_bd">
                        <div class="recommend_goods">
                            <ul>
                                <?php if(is_array($hotsales)): $i = 0; $__LIST__ = $hotsales;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hotvo): $mod = ($i % 2 );++$i;?><li class="recommend_goods_li" commid="853958">
                                        <div class="mod_goods mod_goods_w60">
                                            <div class="mod_goods_img">
                                                <a class="img"  href="/organic/index.php/Home/Goods/index/gid/<?php echo ($hotvo['gid']); ?>" target="_blank" title="">
                                                    <img iguid="8" src="/organic/Public/Goodsuploads/<?php echo ($hotvo['gpic']); ?>" height="60" width="60"><span class="recommend_goods_rank"><?php echo ($i); ?></span>
                                                </a>
                                            </div>
                                            <div class="mod_goods_info">
                                                <p class="mod_goods_tit">
                                                    <a  href="/organic/index.php/Home/Goods/index/gid/<?php echo ($hotvo['gid']); ?>" target="_blank" title="<?php echo ($hotvo['gname']); ?>"><?php echo ($hotvo['gname']); ?></a>
                                                </p>
                                                <p class="mod_goods_price"><span class="mod_price"><i>¥</i><span><?php echo ($hotvo['gprice']); ?></span></span></p>
                                            </div>
                                        </div>
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!--[if !IE]>|xGv00|77fa72dbde67d1e4a653952321fbd2de<![endif]-->
                    
            <div class="grid_m smain">
                <div class="grid_m_inner" >
                    <div class="filter" id="attrList">
                        <div class="filter_area">
                            <!-- 普通属性 -->
                            <?php if(is_array($attr)): $keyn = 0; $__LIST__ = $attr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$av): $mod = ($keyn % 2 );++$keyn; if($keyn < 5): ?><div class="filter_item  filter_item_single">
                                    <div class="filter_tit" title="<?php echo ($av['attrname']); ?>"><?php echo ($av['attrname']); ?></div>
                                    <div class="filter_con" id="attr_<?php echo ($keyn-1); ?>">
                                        <dl class="filter_dl">
                                            <dt class="filter_dt filter_dt_on" attrvalue="0">
                                                <a href="javascript:" nametag="attr">不限</a>
                                            </dt>
                                            <?php if(is_array($av['value'])): $attrid = 0; $__LIST__ = $av['value'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$aval): $mod = ($attrid % 2 );++$attrid;?><dd isshow="1" class="filter_dd " attrvalue="<?php echo ($aval['id']); ?>">
                                                    <a class="filter_lk" href="javascript:" nametag="attr"><?php echo ($aval['attrvalue']); ?><span class="filter_x">×</span></a>
                                                </dd><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </dl>
                                    </div>
                                    <div class="filter_act hide">
                                        <a class="filter_showmore" href="javascript:;"><i></i><span>更多</span></a><a href="javascript:;" class="filter_choosemore" style="visibility: hidden;"><i></i><span>多选</span></a>
                                    </div>
                                </div>
                                <?php else: ?>
                                    <!-- 属性集 -->
                                    <?php if($keyn == 5): ?><div class="filter_item filter_item_attrmore">
                                        <div class="filter_tit">更多选项</div>
                                        <div class="filter_con">
                                            <dl class="filter_dl" ><?php endif; ?>
                                                <dd class="filter_attr" id="attr_<?php echo ($keyn-1); ?>">
                                                    <a class="filter_attr_hd" nametag="viewattr"><?php echo ($av['attrname']); ?><i></i><span class="filter_x">×</span></a>
                                                    <div attrindex="2015_6" class="filter_attr_bd">
                                                        <div class="filter_attr_list">
                                                            <a class="filter_attr_item filter_attr_item_on" attrvalue="0" href="javascript:" nametag="attrsel">不限<span class="filter_x">×</span></a>
                                                            <?php if(is_array($av['value'])): $i = 0; $__LIST__ = $av['value'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$aval): $mod = ($i % 2 );++$i;?><a class="filter_attr_item " href="javascript:" attrvalue="<?php echo ($aval['id']); ?>" nametag="attrsel"><?php echo ($aval['attrvalue']); ?><span class="filter_x">×</span></a><?php endforeach; endif; else: echo "" ;endif; ?>
                                                        </div>
                                                    </div>
                                                </dd><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                            <?php if($keyn > 5): ?></dl>
                                    </div>
                                </div><?php endif; ?>
                        <div class="filter_item_blank"></div>
                        </div>
                    </div>
                    <input type="hidden" name="attr" value="<?php echo ($_GET['attr']); ?>">
                    <!-- 排序和价格筛选区 -->

                    <div class="sort" id="list" name="list">
                        <div class="sort_cate">
                            <a nametag="sort" sortbtntype="0" href="javascript:" class="sort_cate_lk sort_cate_default" title="点击恢复默认排序" ><span>默认</span></a>
                            <a nametag="sort" sortbtntype="1" href="javascript:" class="sort_cate_lk " title="点击按销量从高到低排序" ><span>销量</span><b class="sort_arrow"></b></a>
                            <!-- <a nametag="sort" sortbtntype="2" href="javascript:" class="sort_cate_lk " title="点击按评论数从高到低排序" ><span>评论</span><b class="sort_arrow"></b></a> -->
                            <!--<a nametag="sort" sortbtntype="3_4" href="javascript:" class="sort_cate_lk sort_cate_price" title="点击按价格从低到高排序" ><span>价格</span><b class="sort_arrow"></b></a>-->
                        </div>
                        <div id="sPriceFloat" class="sort_price">
                            <div class="sort_price_inner">
                                <div class="sort_price_detail">
                                    <span id="sPriceHover" class="sort_price_detail_main">
                                        <input value="最低价" id="sBeginPrice" placeholder="最低价" class="sort_price_input" type="text">
                                        <span class="sort_price_bar">-</span>
                                        <input value="最高价" id="sEndPrice" placeholder="最高价" class="sort_price_input" type="text">
                                        <span id="sPriceMore" class="sort_price_arrow"></span>
                                    </span>
                                    <a id="sConfirmPrice" href="javascript:;" class="sort_price_sure">确定</a>
                                </div>
                            </div>
                        </div>

                        <div class="sort_type">
                            <div class="sort_type_inner" id="filterTypes">
                                <div class="sort_type_main">
                                    <a id="stockFilterChk" href="javascript:;" class="sort_type_radio"><i></i><span>仅显示有货</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="sort_page">
                            <div class="sort_page_txt">正品保障</div>
                        </div>
                    </div>
                    <form name="searchattr" action="<?php echo U('Home/search/index');?>" method="get">
                        <input type="hidden" name="cid" value="<?php echo ($_GET['cid']); ?>">
                        <input type="hidden" name="bid" value="<?php echo ($_GET['bid']); ?>">
                        <input type="hidden" name="attr" value="<?php echo ($_GET['attr']); ?>">
                        <input type="hidden" name="sort" value="<?php echo ($_GET['sort']); ?>">
                        <input type="hidden" name="price" value="<?php echo ($_GET['price']); ?>">
                        <input type="hidden" name="stockfilter" value="<?php echo ($_GET['stockfilter']); ?>">
                        <input type="hidden" name="style" value="<?php echo ($_GET['style']); ?>">
                        <input type="hidden" name="searchval" value="<?php echo ($_GET['searchval']); ?>">
                        <input type="hidden" name="page" value="<?php echo ($_GET['page']); ?>">
                        <input type="hidden" name="search" value="<?php echo ($_GET['search']); ?>">
                    </form>
                    <div class="goods">
                        <ul class="goods_ul" id="itemList">
                            <?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodsvo): $mod = ($i % 2 );++$i;?><li style="cursor: pointer;" class="goods_li">
                                <div class="mod_goods">
                                    <div class="mod_goods_img">
                                        <a class="link_pic" target="_blank" href="/organic/index.php/Home/Goods/index/gid/<?php echo ($goodsvo['gid']); ?>" pos="1" >
                                             <img class="lazy" iguid="0" src="/organic/Public/home/images/icon/loading-200.gif" data-original="/organic/Public/Goodsuploads/<?php echo ($goodsvo['gpic']); ?>" height="200" width="200">
                                        </a>
                                    </div>
                                    <div class="mod_goods_info">
                                        <p class="mod_goods_promo" title=""></p>
                                        <p class="mod_goods_tit"><a href="/organic/index.php/Home/Goods/index/gid/<?php echo ($goodsvo['gid']); ?>" target="_blank" title="<?php echo ($goodsvo['gname']); ?>"><?php echo ($goodsvo['gname']); ?></a></p>
                                        <p class="mod_goods_price">
                                            <span class="mod_price">
                                                <i>¥</i><span><?php echo ($goodsvo['goldprice']); ?>.00</span>
                                            </span>
                                            <span class="goods_comments"><a target="_blank" href="/organic/index.php/Home/Goods/index/gid/<?php echo ($goodsvo['gid']); ?>" pos="201" ><b><?php echo ($goodsvo['gsellnums']); ?></b>销量</a></span>
                                        </p>
                                        <div class="goods_more">
                                            <div class="goods_more_hd">
                                                <a class="goods_buy" ptag="<?php echo ($goodsvo['goldprice']); ?>" idtag="<?php echo ($goodsvo['gid']); ?>" style="width:83px;height:24px;" href="javascript:;">
                                                <i></i></a>
                                            </div>
                                        </div>
                                        <div class="goods_btn">
                                            <a class="goods_buy" ptag="<?php echo ($goodsvo['goldprice']); ?>" idtag="<?php echo ($goodsvo['gid']); ?>" href="javascript:;"> </a>
                                            <i></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                        <div class="mod_carttip mod_carttip2 hide" style="position: absolute; z-index: 29;">
                            <div class="mod_carttip_inner">
                                <div class="mod_carttip_bd clearfix">
                                    <div class="mod_carttip_ico">
                                    <i class="mod_carttip_ico_success"></i>
                                    </div>
                                    <div class="mod_carttip_con">
                                        <h4>添加成功!</h4>
                                        <div class="mod_carttip_action">
                                            <a class="mod_carttip_btn mod_carttip_btn_bg2 mod_carttip_btn1" onclick="$('.mod_carttip_close').click()" target="_blank" href="/organic/index.php/Home/Showcart/index">
                                            <span>去结算</span>
                                            </a>
                                            <a class="mod_carttip_btn mod_carttip_btn_bg1 mod_carttip_btn2" style="margin-left: 5px;" onclick="$('.mod_carttip_close').click()" href="javascript:void(0)" ytag="71003">继续购物</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <i class="mod_carttip_arr mod_carttip_arr3"> </i>
                            <a class="mod_carttip_close" title="关闭" href="javascript:;" ytag="71001">×</a>
                        </div>
                    </div>
                    <!--底部翻页器-->
                    <?php echo ($page); ?>
                    <!--或许你还想找-->
                    <div class="otherwords hide" id="bottomProwords"> </div>
                    <!--底部搜索框-->
                    <div class="sbottom">
                        <form id="searchform" action="<?php echo U('Home/Search/index');?>" target="_top">
                            <input id="areacode2" name="area" value="1" type="hidden">
                            <input id="charset2" name="charset" value="utf-8" type="hidden">
                            <input id="as2" name="as" value="1" type="hidden">
                            <input id="q_show2" name="searchval" autocomplete="off" x-webkit-speech="" class="sbottom_input" type="text">
                            <button type="submit" class="sbottom_btn" >搜索</button>
                        </form>
                    </div>
                    <!-- 无结果导航 -->
                    <div class="navmap hide" id="navMapPage"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="mod_backtop" id="j_backtop">
        <a href="javascript:" title="回顶部" >回顶部</a>
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
		var ROOT = '/organic';
		var PUBLIC = ROOT+'/Public/Home';
		var APP = ROOT+'/index.php';
	</script>
    <script src="/organic/Public/home/js/jquery.js" type="text/javascript"></script>
    <script src="/organic/Public/home/js/common.js" type="text/javascript"></script>
    
    <script src="/organic/Public/home/js/search.js"></script>
    <script type="text/javascript" src="/organic/Public/home/js/lazyload.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(
            function($){
                $(".lazy").lazyload({
                     placeholder :"/organic/Public/home/images/icon/loading.gif",
                     effect: "fadeIn"
                });
        });
    </script>

</html>