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
	<link rel="stylesheet" href="/food/Public/home/css/comments.css">
	<link rel="stylesheet" href="/food/Public/home/css/gb6.css">
	<link rel="stylesheet" href="/food/Public/home/css/style.css">

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

    
<div class="main mod_apply id_discuss" id="container">
	<div class="crumbs">
		<a href="http://searchex.yixun.com/html?path=705836&amp;area=2001">数码配件</a> &gt; <a href="http://searchex.yixun.com/html?path=708722&amp;area=2001">移动电源</a> &gt; 发表体验心得
	</div>
	<!-- S 主体内容 -->
	<div class="content">
		<!-- S 商品性能 -->
		<!-- E 商品性能 -->
		<!-- S 商品评分 -->
		<input id="gid" type="hidden" value="<?php echo ($data["gid"]); ?>">
		<input id="did" type="hidden" value="<?php echo ($did); ?>">
		<div id="review_grade_box" class="mod_comm id_grade">
			<div class="hd">
				<h3>商品评分</h3>
			</div>
			<div class="bd">
				<p class="tip">请直接点击相应的星级进行评分。</p>
				<ul class="grade">
					<li class="">
						<span class="star no_star"></span>
						<p class="mark">1分</p>
						<p class="c">非常不满意</p>
					</li>
					<li class="">
						<span class="star no_star"></span>
						<p class="mark">2分</p>
						<p class="c">不满意</p>
					</li>
					<li class="">
						<span class="star no_star"></span>
						<p class="mark">3分</p>
						<p class="c">一般</p>
					</li>
					<li class="">
						<span class="star no_star"></span>
						<p class="mark">4分</p>
						<p class="c">满意</p>
					</li>
					<li class="">
						<span class="star no_star"></span>
						<p class="mark">5分</p>
						<p class="c">非常满意</p>
					</li>
				</ul>
			</div>
		</div>
		<!-- E 商品评分 -->
		<!-- S 评论内容 -->
		<div id="review_experience_box" class="mod_comm id_comment">
			<div class="hd">
				<h3 class="tit">评论内容</h3>
			</div>
			<div class="bd">
				<textarea name="content" class="textarea_long nor"></textarea>
				<p class="para_inb para_warn" style="display: none;">
					<b class="icon icon_msg0 icon_msg0_warn"></b><span class="para_tit">false</span>
				</p>
				<p t="tipArea" class="g">
					<span class="wrap_btn">
						<a href="javascript:;" class="btn_common">发表</a>
					</span>
					<label class="todo_link">
						<input type="checkbox" checked="checked" value="1" t="accept_rule" class="c">我接受商城网的评论规则>
					</label>
				</p>
			</div>
		</div>
		<!-- E 评论内容 -->
	</div>
	<!-- E 主体内容 -->
	<!-- S 右边侧栏内容 -->
	<div class="sidebar">
		<div class="inner">
			<div class="goods">
				<div class="wrap_img">
					<a href="/food/index.php/home/goods/index/gid/<?php echo ($data["gid"]); ?>">
						<img height="120px" width="120px" alt="" src="/food/Public/Goodsuploads/<?php echo (implode('/120_',explode('/',$data["gpic"]))); ?>">
					</a>
				</div>
				<div class="info">
					<p class="name">
						<a href="/food/index.php/home/goods/index/gid/<?php echo ($data["gid"]); ?>"><?php echo ($data["gname"]); ?></a>
					</p>
					<p class="com">
						顾客评价：
						<span class="icon_star">
							<b style="width: <?php echo ($nums); ?>%;"></b>
						</span>
					</p>
				</div>
			</div>
		</div>
		<div class="intr">
			<h4>评论说明</h4>
			<p>1、评论是用户提出对商品的质量、使用情况、用后心得体验等等和商品本身息息相关的内容，而不是针对支付，配送等购物过程；</p>
			<p>2、在您收到商品后的48小时到3个月之内方可发表评论，每位顾客只能对该商品发表一条评论；</p>
			<p>3、只有购买过此商品的用户才能对其发表商品评论；</p>
			<p class="todo_link">4、发表评论，将得到一定数量的积分奖励，10个积分=1元，详细规则请查看商城网</p>
		</div>
	</div>
	<!-- E 右边侧栏内容 -->
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
		var ROOT = '/food';
		var PUBLIC = ROOT+'/Public/Home';
		var APP = ROOT+'/index.php';
	</script>
    <script src="/food/Public/home/js/jquery.js" type="text/javascript"></script>
    <script src="/food/Public/home/js/common.js" type="text/javascript"></script>
    <!--<script type="text/javascript" src="/food/Public/home/js/addphone.js"></script>-->
    
	<script type="text/javascript">
		$(".grade li").on('click',function(){
			$(".grade li").removeClass('strong');
			$(".grade li span").addClass('no_star');
			$(this).addClass('strong');
			$(this).children('span').removeClass('no_star');
			$(this).prevAll().children('span').removeClass('no_star');
		})
		$('.btn_common').click(function(){
			var gid=$("#gid").val();
			var integral = $('.grade .strong').children().eq(1).html().substr(0,1);
			var content = $('.textarea_long').val();
			var id = $("#did").val();
			$.ajax({
				url:'/food/index.php/Home/Review/submitComment/id/'+id+'',
				type:'post',
				data:{gid:gid,integral:integral,content:content},
				success:function(){
					window.location="/food/index.php/home/center/index";
				}
			});
		});
	</script>

</html>