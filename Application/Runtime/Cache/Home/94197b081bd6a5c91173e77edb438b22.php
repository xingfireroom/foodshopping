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
        <link rel="stylesheet" href="/food/Public/home/css/search_v2.css">
        <!--<link rel="stylesheet" href="/food/Public/home/css/bootstrap.min.css" />-->
        <!--[if !IE]>|xGv00|8d8871c57bdd50638a9c8dbef4b4e250<![endi<>f]-->
        
	<link rel="stylesheet" href="/food/Public/home/css/gb1.css" type="text/css" media="screen">
	<link rel="stylesheet" href="/food/Public/home/css/gb.css" type="text/css" media="screen">
	<link rel="stylesheet" href="/food/Public/home/css/style1.css" type="text/css" media="screen">
	<link rel="stylesheet" href="/food/Public/home/css/cart_v2.css" type="text/css" media="screen">
	<link rel="stylesheet" href="/food/Public/home/css/phone_validate.css" type="text/css" media="screen">
	<link rel="stylesheet" href="/food/Public/home/css/msgbox.css" type="text/css" media="screen">
	<link rel="stylesheet" href="/food/Public/home/css/order_confirm.css" type="text/css" media="screen">
	<style type="text/css">
		.of_col2 {
			width: 800px;
			 float: left;
			 margin-left: 80px;
			 margin-bottom:10px;
		}
		.of_mod_status_tit {
			font-family: microsoft yahei;
			font-size: 16px;
		}
		.of_mod_status_desc {
			margin-top: 5px;
		}
		.of_mod_status_desc em {
			color: #f40103;
			vertical-align: middle;
		}
		.of_mod_status_orderno {
			margin-top: 15px;
		}
		.of_mod_status_limit {
			margin-top: 5px;
		}
		.of_mod_status_limit .price {
			color: #f40103;
			font-size: 16px;
			vertical-align: bottom;
		}
		#divPayTab{
			margin:20px auto 20px auto;
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
        <div class="ic_header hide">
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
				<a href="/food/index.php/home/index" ytag="00300">
					<img src="/food/Public/uploads/<?php echo ($web['wlogo']); ?>" alt="商城网">
				</a>
			</div>
		</div>
	</div>
	<div class="main" id="container">
		<!-- 流程 开始 -->
		<div class="flow_step_no3 flow_cart">
			<div class="flow_step">
				<ol class="cols3">
					<li class="step_1">我的购物车</li>
					<li class="step_2">填写核对订单</li>
					<li class="step_3">订单提交成功</li>
				</ol>
			</div>
		</div>
		<!-- 流程 结束 -->
		<div class="of_wrap">
			<div class="of_col2">
				
                <!--货到付款-->
               <?php if($_GET['paytype']== 3): ?><div class="of_mod_status">
				    <h3 class="of_mod_status_tit">订单已提交成功，我们将为您闪电送达！</h3>
					<p class="of_mod_status_desc">收货时您可以选择刷卡或支付现金！ </p>
					<p ytag="20011" class="of_mod_status_orderno">
						<strong>订单编号：</strong><?php echo ($orders["onumber"]); ?>
					</p>
					<p class="of_mod_status_limit"><strong>订单金额：</strong><span class="price">¥<?php echo ($orders["total"]); ?></span></p>
				</div>
				<div style="" id="divPayTab" class="pay_tab">
					<div class="pay_tab_bd">
						<div class="confirm_action">
							<a title="前往个人中心" href="/food/index.php/home/center/index" id="btnSelectPayType" class="yx_btn_normal110">前往个人中心</a>
						</div>
					</div>
				</div><?php endif; ?>
                 <!--支付宝支付-->
                <?php if($_GET['paytype']== 2): ?><div style="" id="divPayTab" class="pay_tab">
					<div class="pay_tab_bd">
						<div class="confirm_action">
							<a title="前往个人中心" href="/food/index.php/home/center/index" id="btnSelectPayType" class="yx_btn_normal110">前往个人中心</a>
						</div>
					</div>
				</div><?php endif; ?>
                <!--微信支付-->
               <?php if($_GET['paytype']== 1): ?><div class="of_mod_status">
				    <h3 class="of_mod_status_tit">订单已提交成功！</h3>
					<p ytag="20011" class="of_mod_status_orderno">
						<strong>订单编号：</strong><?php echo ($orders["onumber"]); ?>
					</p>
					<p class="of_mod_status_limit"><strong>订单金额：</strong><span class="price">¥<?php echo ($orders["total"]); ?></span></p>
				</div>
				<div style="" id="divPayTab" class="pay_tab">
					<table class="table wxpayment">
                      <caption>支付方式：微信支付</caption>

                       <tbody>
                          <tr>
                             <td colspan="2" style=" color:#007f56" align="center">
                              <div  id="qrcode" class="img-thumbnail">
                              </div>
                              <span id="orderstate"></span>
                             </td>
                            
                          </tr>
                          <tr>
                             <td colspan="2"><a href="/food/index.php/Home/Index/index"><button type="button" class="btn btn-success">返回继续选购</button></a></td>
                          </tr>
                       </tbody>
                    </table>
				</div><?php endif; ?>
                
                <script type="text/javascript" src="/food/Public/Home/js/qrcode.js"></script>
				<script>
                    var codeurl="<?php echo ($code_url); ?>";
                     //alert(codeurl);
                     
                    if( codeurl!= '')
                    {  // alert(222);
                        var url = codeurl;
                        //参数1表示图像大小，取值范围1-10；参数2表示质量，取值范围'L','M','Q','H'
                        var qr = qrcode(10, 'M');
                        qr.addData(url);
                        qr.make();
                        var wording=document.createElement('p');
                        wording.innerHTML = "扫我，支付";
                        var code=document.createElement('DIV');
                        code.innerHTML = qr.createImgTag();
                        var element=document.getElementById("qrcode");
                        element.appendChild(wording);
                        element.appendChild(code);
                    }
                </script>
                
				<div class="mod_note">
					<h4 class="mod_hd">注意事项：</h4>
					<div class="mod_bd">
						<ol>
							<li>“订单提交成功”仅表明商城网收到了您的订单，只有您的订单通过审核后，才代表订单正式生效；</li>
							<li>选择货到付款/商城快递的客户，请您务必认真检查所收货物，如有不符，您可以拒收；</li>
							<li>选择其他方式的客户，请您认真检查外包装。如有明显损坏迹象，您可以拒收该货品，并及时通知我们；</li>
							<li>建议您在购买的15天内保留商品的全套包装、附件、发票等所有随货物品，以便后续的保修处理。</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
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
    
</html>