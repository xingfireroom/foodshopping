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
        
	<link rel="stylesheet" href="/organic/Public/home/css/gb1.css" type="text/css" media="screen">
	<link rel="stylesheet" href="/organic/Public/home/css/style1.css" type="text/css" media="screen">

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
                        <li class="mod_sitemap_li">
                            <a href="/organic/index.php/home/Index">首页&nbsp;</a>
                        </li>
                        <li class="mod_sitemap_gap">|</li>
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

    
	<!--真正的内容=============================================-->
	<div class="ic_content xcontent">
		<!--S xcontent_row1 商品路径 模板已经做好-->
		<div class="grid_c1 xcontent_row1">
			<!-- 商品路径面包线导航 -->
			<div class="mod_crumb">
				<a href="/organic/index.php/home/index"><strong>首页</strong></a>
				<?php if(is_array($line)): foreach($line as $key=>$vo): ?><i>&gt;</i><a href="/organic/index.php/Home/Search/index/cid/<?php echo ($vo["cid"]); ?>.html" class="lk_0"><?php echo ($vo["cname"]); ?></a><?php endforeach; endif; ?>
				<i>&gt;</i><?php echo (mb_substr($item["gname"],0,18,'utf-8')); ?>……
			</div>	
		</div>
		<!--E xcontent_row1 商品路径 -->
		<!--S xcontent_row2 -->
		<div class="grid_c1 xcontent_row2" itemscope="" itemtype="http://schema.org/Product">
			<div class="grid_s">
				<!--S 产品图集 -->
				<div class="xgallery">
					<!--S 展示图 最左侧 最大图 -->
					<div id="xgalleryShow" class="xgallery_show oxzoom_standard">
							<img idx="0" class="xgallery_img" itemprop="image" id="xgalleryImg" src="">
							<i class="xico xico_zoom"></i>
							<span style="" class="oxzoom_lens"></span>
					</div>
					<!--S 展示图 最左侧 最大图 -->
					<!--S 缩略图 -->
					<div class="xgallery_thumb" id="pic_small_wrapper">
						<div class="xgallery_thumb_wrapper" id="list_smallpic">
							<!-- xgallery_thumb_list li 加类名 current 表示选中-->
							<ul style="width: 425px;" class="xgallery_thumb_list clearfix">
								<li class="current" idx="0">
									<a hidefocus="true"><img src="/organic/Public/goodsuploads/<?php echo ($sxw_goodsPic[0]); ?>"></a>
								</li>
								<li idx="1">
									<a hidefocus="true"><img src="/organic/Public/goodsuploads/<?php echo ($sxw_goodsPic[1]); ?>"></a>
								</li>
								<li idx="2">
									<a hidefocus="true"><img src="/organic/Public/goodsuploads/<?php echo ($sxw_goodsPic[2]); ?>"></a>
								</li>
								<li idx="3">
									<a hidefocus="true"><img src="/organic/Public/goodsuploads/<?php echo ($sxw_goodsPic[3]); ?>"></a>
								</li>
								<li idx="4">
									<a hidefocus="true"><img src="/organic/Public/goodsuploads/<?php echo ($sxw_goodsPic[4]); ?>"></a>
								</li>
							</ul>
						</div>
					</div>
					<!--E 缩略图 -->
				</div>
				<!--E 产品图集 -->
				<!--S 分享收藏 -->
				<div class="xsns clearfix">
					<div class="xfav">
						<a id="sea_add_favor" href="/organic/index.php/Home/Goods/goodsCollection/gid/<?php echo ($item["gid"]); ?>" class="mod_btn mod_btn_bg1" ytag="24300"><span>收藏</span></a>
					</div>
					<div class="xshare">
						<span class="xshare_tit">分享:</span>
						<ul class="xshare_list">
							<li>
								<a target="_blank" id="share_tx_weibo" href="" title="腾讯微博" class="ico_txwb" ytag="24301"></a>
							</li>
							<li>
								<a target="_blank" id="share_sina_weibo" href="" title="新浪微博" class="ico_sinawb" ytag="24302"></a>
							</li>
						</ul>
					</div>
				</div>
				<!--E 分享收藏 -->
			</div>
			<!--========================-->
			<div class="grid_m">
				<!--S 商品主要信息 -->
				<div class="xbase">
					<!-- 标题 -->
					<input type="hidden" name="" id="gid" value="<?php echo ($item["gid"]); ?>">
					<div class="xbase_row1">
						<h1 class="xname" itemprop="name"><?php echo ($item["gname"]); ?></h1>
					</div>
					<!-- 赠品 -->
					<div class="xbase_row2" itemprop="offers" itemscope="" itemtype="">
						<!-- gt大于0，也就是有折扣 -->
						<?php if($item['gprice'] > 0): ?><dl class="xbase_item xprice xprice_origin">
								<dt class="xbase_col1">商城价</dt>
								<dd class="xbase_col2">
									<span class="mod_price xprice_val" itemprop="highPrice"><i itemprop="priceCurrency" content="CNY">¥</i><del><?php echo ($item["goldprice"]); ?></del></span>
								</dd>
							</dl>
							<dl class="xbase_item xprice">
								<dt class="xbase_col1">促销价</dt>
								<dd class="xbase_col2">
									<input id="buyprice" type="hidden" value="<?php echo ($item["gprice"]); ?>">
									<span class="mod_price xprice_val" itemprop="lowPrice"><i itemprop="priceCurrency" content="CNY">¥</i><?php echo ($item["gprice"]); ?></span>
								</dd>
							</dl>
						<?php else: ?>
							<dl class="xbase_item xprice ">
								<dt class="xbase_col1">商城价</dt>
								<dd class="xbase_col2">
									<input id="buyprice" type="hidden" value="<?php echo ($item["goldprice"]); ?>">
									<span class="mod_price xprice_val" itemprop="lowPrice"><i itemprop="priceCurrency" content="CNY">¥</i><?php echo ($item["goldprice"]); ?></span>
								</dd>
							</dl><?php endif; ?>
					</div>
					<!-- 送到到数量 -->
					<div class="xbase_row3">
						<!-- 商品SKU S-->
						<!--商品SKU 库存数量 E-->	  
						<dl class="xbase_item xnumber">
							<dt class="xbase_col1">数量</dt>
							<dd class="xbase_col2">
								<span class="x_mod_number">
		  							<a href="javascript:reduce(this)" hidefocus="true" class="x_mod_number_minus sea_order_minus x_mod_number_minus_disabled" ytag="22701"></a>
		 							 <input id="order_num" maxlength="2" maxnumlimit="99" minnumlimit="1" value="1" class="x_mod_number_input" type="text">
									<a href="javascript:add(this)" hidefocus="true" class="x_mod_number_plus sea_order_add" ytag="22702"></a>
								</span>
							</dd>
						</dl>
					</div>
					<!-- 购买方式 -->
					<div class="xbase_row4">
	 	 				<!--S 购物按钮 -->
	  					<div class="xaction xaction_scan clearfix" id="sea_buy_wrap">
	  						<a ytag="23001" href="javascript:ajaxhandle()" class="xbtn_cart xsound_mouseover" id="btnAddCart"><i class="xico xico_cart"></i>加入购物车</a>
							<div style="display: block;" class="xscan hide" id="sea_code_wrap">
	  							<div class="xscan_col1">
									<div class="xscan_code" id="sea_code">
	  									<img src="/organic/Public/images/qrcode.png" _src="http://api.item.yixun.com/2dcode/qrcode?scene=item&amp;size=80&amp;param=P%3D1118345%26Y%3D1500000" alt="商品二维码" width="80">
									</div>
	  							</div>
	  							<div class="xscan_col2">
									<p class="xscan_price" id="wxsg_price"></p>
									<p class="xscan_tit"><i class="xico xico_weixin"></i>微信扫购</p>
									<p class="xscan_desc">扫一扫即可购买，方便快捷！</p>
									<div class="xscan_bigcode" id="sea_bigcode">
	  									<img src="/organic/Public/images/qrcode_002.png" src="http://api.item.yixun.com/2dcode/qrcode?scene=item&amp;size=230&amp;param=P%3D1118345%26Y%3D1500000" alt="商品二维码">
	  									<p class="xscan_tit">扫一扫即可购买，方便快捷！</p>
									</div>
								</div>
							</div>
	  					</div>
						<!--E 购物按钮 -->
						<!--S 类似商品 -->
	  					<div id="sea_nostock_same"></div>
	  					<!--E 类似商品 -->
					</div>
					<!-- 七天无理由退货 -->
					<div class="xbase_row5">
	  					<div class="xtips">
	  						<p class="xtips_seven">
	  							<i class="xico xico_seven"></i>此商品支持七天无理由退货。
	  						</p>
	  						<p>注意：此商品可提供普通发票，可提供增值税发票。</p>
	  					</div>
					</div>
	  			</div>
	 	 		<!--E 商品主要信息 -->  
	 		</div>
			<!-- 右侧列表信息 -->
	  		<div class="grid_e">
				<!--S 其他信息 右侧信息 -->
				<div class="xextend" id="sea_daogou_wrap">
					<div id="jdinfo" style="display:block">
						<div class="xbrand" itemprop="brand" itemscope="" itemtype="http://schema.org/Brand">
							<p class="xbrand_info">此商品由<a href="javascript:;" itemprop="name">商城网</a>提供并开具发票，提供配送及售后服务</p>
							<div class="xbrand_row">
								<div class="xbrand_tit">商家地址：</div>
								<div class="xbrand_con" itemprop="address">
									北京市朝阳区北辰世纪中心A座
								</div>
							</div>
							<div class="xbrand_row">
								<div class="xbrand_tit">联系电话：</div>
								<div class="xbrand_con">
									<p itemprop="tel">400-828-1878</p>
								</div>
							</div>
						</div>
					</div>
					<ul class="xguide">
						<li class="xguide_row xguide_id">
							<div class="xguide_tit">产品编号</div>
							<div class="xguide_con" itemprop="productID">21-026-10102</div>
						</li>
						<li class="xguide_row xguide_rank sea_pop_parent hide" id="sea_rank">
							<div class="xguide_tit sea_pop_a">销售排行<i class="xico xico_ques"></i></div>
							<div class="xguide_con"><span class="xguide_rank_num" id="sea_rank_num">1</span></div>
							<div class="mod_hint mod_hint_weak x_mod_hint4 sea_pop_box">
		 		 				<div class="mod_hint_inner">
									<p>该商品在最近一个月内的售出数量（以出库数量为准）在<span id="c3name">手机</span>商品销量中的排名数值。</p>
		  						</div>
		  						<i class="mod_hint_arrow5"></i>
							</div>
						</li>
						<li class="xguide_row xguide_grade" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
							<div class="xguide_tit">顾客评级</div>
							<div class="xguide_con">
  								<span class="x_mod_grade">
									<span class="x_mod_grade_star">
										<span style="width:<?php echo ($nums); ?>%;"></span>
									</span>
									<span class="x_mod_grade_score" itemprop="ratingValue"><?php echo ($nums/20); ?></span>
  								</span>
							</div>
						</li>
						<li class="xguide_row xguide_comment">
							用户点评（共<span><?php echo ($count); ?></span>条评论）
						</li>
					</ul>
				</div>
				<!--E 其他信息 右侧信息 -->
			</div>
		</div>
		<!-- ==================== -->
		<div class="grid_c2b xcontent_row4">
			<!-- 左侧的最主要内容 -->
			<div class="grid_m">
				<div class="grid_m_inner">
		  			<!-- S 产品介绍-->
		  			<div class="x_mod_tab xoverview x_mod_tab1" id="introduction">
						<div class="x_mod_tab_hd" id="info_tit">
		  					<ul class="x_mod_tab_nav">
		  						<li n="introduce" id="t_introduce">
									<a ytag="40001" href="javascript:;"><i class="xico xico_intro"></i>产品介绍</a>
		  						</li>
		  						<li n="comment" id="t_comment" class="current">
									<a ytag="40400" href="javascript:"><i class="xico xico_comment"></i>商品评价</a>
								</li>
		  						<li n="parameters" id="t_parameters">
									<a ytag="40200" href="javascript:"><i class="xico xico_spec"></i>规格参数</a>
		  						</li>
		  						<li n="warranty" id="t_warranty" class="">
									<a ytag="40300" href="javascript:"><i class="xico xico_aftersale"></i>售后服务</a>
		  						</li>
		  						<li style="display: list-item;" n="information" id="t_information" class="hide x_mod_tab_nav_last">
									<a ytag="40500" href="javascript:"><i class="xico xico_refer"></i>参考资讯</a>
		  						</li>
							</ul>
							<div class="x_mod_tab_extra">
								<div class="xqcart">
		  							<a id="sea_float_buy" href="javascript:" class="xbtn xbtn_s" ytag="23005">加入购物车</a>
								</div>
							</div>
						</div>
						<div class="x_mod_tab_bd" id="intro-main_tab">
							<!-- 产品介绍 -->
		  					<div class="x_mod_tab_con intro-main hide" id="c_introduce">
		  						<div id="detail_info">
									<?php echo (htmlspecialchars_decode($item["gintroduce"])); ?>
		  						</div>
		  					</div>
		  					<!-- 规格参数 -->
		  					<div class="x_mod_tab_con" id="c_parameters">
		  						<?php echo (htmlspecialchars_decode($item["gspecifications"])); ?>
		  					</div>
							<!-- 售后服务 -->
		  					<div class="x_mod_tab_con hide" id="c_warranty">
		  						<div class="mod_aider">
		  						<div class="i_hd"><div class="mod_aider_tit">保修条款</div></div><div class="i_bd"><p>质保期：一年质保 如因质量问题或故障，凭厂商维修中心或特约维修点的质量检测证明，享受7日内退货，15日内换货，15日以上在质保期内享受免费保修等三包服务！</p></div></div><div class="mod_aider"><div class="i_hd"><div class="mod_aider_tit">售后条款</div></div><div class="i_bd"><div class="mod_warranty id_deadline"><div class="mod_warranty_hd"><div class="mod_aider_tit">保障时效</div></div><div class="mod_warranty_bd"><p>所购产品如出现国家三包所规定的性能故障，经由厂商指定或特约维修点确认故障确实。售后保障时效如下：</p><div class="deadline"><div class="deadline_item"><div class="img img1"></div><p>7日内,您可以选择退货、换货或者免费保修。</p></div><div class="deadline_item"><div class="img img2"></div><p>第8日至第15日内,您可以选择换货或者免费保修。</p></div><div class="deadline_item noborder"><div class="img img3"></div><p>超过15日并在保修期内,您可以享受免费保修。</p></div></div></div></div><div class="mod_warranty id_promise"><div class="mod_warranty_hd"><div class="mod_aider_tit">商城承诺</div></div><div class="mod_warranty_bd"><dl class="promise"><dd class="item"><dl><dt class="promise_i1">正品行货</dt><dd>商城网销售商品均由供应商或供销商提供，行货正品。</dd></dl></dd><dd class="item"><dl><dt class="promise_i2">修养保障</dt><dd>商城网销售商品均可享受原厂保修或供应商提供的更换、维修和保养服务；厂家和供应商有责任履行相应责任及义务，为用户提供相应的保修、更换、维修和保养服务。</dd></dl></dd><dd class="item"><dl><dt class="promise_i3">权益维护</dt><dd>当用户向厂家或供应商争取相关权益及应有服务时，商城网会在用户需要的第一时间提供有关的联系及协调服务，协助用户维护自己应有的权益。</dd></dl></dd><dd class="item"><dl><dt class="promise_i4">正规发票</dt><dd>商城网会为所有客户开具发票作为客户的质保凭证，请顾客自行保留原件作为后续质保之需。</dd></dl></dd></dl></div></div><div class="mod_warranty id_flow"><div class="mod_warranty_hd"><div class="mod_aider_tit">处理流程</div></div><div class="mod_warranty_bd"><img class="img2" src="/organic/Public/images/process_flow.png" height="285" width="873"><img class="img1" src="/organic/Public/images/process_flow_985.png" height="285" width="643"></div></div><div class="mod_warranty id_way"><div class="mod_warranty_hd"><div class="mod_aider_tit">办理方式</div></div><div class="mod_warranty_bd"><div class="item way1"><div class="way_hd"><h4>商城网全国联保，网上报修</h4></div><div class="way_bd"><p>您只需进入到<span>“<a target="_blank" href="http://base.yixun.com/index.html">我的商城</a>”-“<a target="_blank" href="http://base.yixun.com/myrepair.html">报修/退换货</a>”</span>中直接提交报修/退换货申请即可，我们的工作人员会在24小时内审核确认（节假日审核时间可能会有延迟）做后续处理。</p></div></div><div class="item way2"><div class="way_hd"><h4>商城网售后服务电话</h4></div><div class="way_bd"><p>在产品保修期内，如果您有售后问题需要咨询或者办理，欢迎您拨打我们的客服热线: </p><p><span>上海站：400-828-1878</span>（周一至周六9：00-18：00）</p><p><span>深圳站：400-828-6699</span>（周一至周六9：00-18：00）</p><p><span>北京站：400-828-0055</span>（周一至周六9：00-18：00）</p></div></div></div></div></div></div>
		  					</div>
							<!-- 商品评论 -->
				  			<div id="c_packinglist" class="x_mod_tab_con" style="display: block;">
				  				<div class="hd">
				  					<div class="mod_aider_tit">商品近期评论</div>
				  				</div>
				  				<div class="bd">
				  					<div style="display: block;" class="x_mod_tab_con hide" id="c_comment">
				  						<!-- S 商品满意度评分-->
										<div class="xreview clearfix" id="review_brief">
											<div class="xrating">
												<div class="xrating_row1 clearfix">
													<div class="xrating_col">
														<div class="xrating_score">
															<div class="xrating_score_val"><?php echo ($nums/20); ?></div>
															<div class="xrating_score_unit">分</div>
														</div>
													</div>
													<div class="xrating_col">
														<div class="xrating_bar">
															<div class="xrating_bar_bg clearfix" style="width:<?php echo ($nums); ?>%;">
																<div class="xrating_bar_bg_inner">
																	<div class="xrating_bar_col xrating_bar_col1"></div>
																	<div class="xrating_bar_col xrating_bar_col2"></div>
																	<div class="xrating_bar_col xrating_bar_col3"></div>
																	<div class="xrating_bar_col xrating_bar_col4"></div>
																	<div class="xrating_bar_col xrating_bar_col5"></div>
																</div>
															</div>
															<div class="xrating_bar_bd clearfix"> 
																<div class="xrating_bar_col">非常不满意</div>
																<div class="xrating_bar_col">不满意</div>
																<div class="xrating_bar_col">一般</div>
																<div class="xrating_bar_col">满意</div>
																<div class="xrating_bar_col">非常满意</div>
															</div>
															<div class="xrating_bar_tips" style="left:<?php echo ($nums/5); ?>px;">
																<div class="xrating_bar_tips_bd"><?php echo ($nums/20); ?></div>
															</div>
														</div>
														<div class="xrating_count">
															<!--共<strong class="xreview_num xrating_count_num"><?php echo ($count); ?></strong>位顾客参与评分-->
															<a href="/organic/index.php/Home/Goods/qb/gid/<?php echo ($item['gid']); ?>" style="background: gray;color:white;display: inline-block;padding:5px;">全部（<?php echo ($count); ?>）</a>
															<a href="#" style="background: blue;color:white;display: inline-block;padding:5px;">非常满意（<?php echo ($co['fm']); ?>）</a>
															<a href="/organic/index.php/Home/Goods/m/gid/<?php echo ($item['gid']); ?>" style="background: gray;color:white;display: inline-block;padding:5px;">满意（<?php echo ($co['m']); ?>）</a>
															<a href="/organic/index.php/Home/Goods/yb/gid/<?php echo ($item['gid']); ?>" style="background: gray;color:white;display: inline-block;padding:5px;">一般（<?php echo ($co['yb']); ?>）</a>
															<a href="/organic/index.php/Home/Goods/bm/gid/<?php echo ($item['gid']); ?>" style="background: gray;color:white;display: inline-block;padding:5px;">不满意（<?php echo ($co['bm']); ?>）</a>
															<a href="/organic/index.php/Home/Goods/fb/gid/<?php echo ($item['gid']); ?>" style="background: gray;color:white;display: inline-block;padding:5px;">非常不满意（<?php echo ($co['fb']); ?>）</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div id="review_brief_tpl"></div>
										<!-- E 商品满意度评分-->
										<!-- S 迅友评论-->
										<div class="mod_comments" id="review_box">
					  						<div class="comments_hd">
												<ul class="tab_comments" id="review_header">
						  							<li t="0" style="width:80px;"><h3>用户名</h3></li>
						  							<li t="1"><h3>评分</h3></li>
						  							<li t="2"><h3>内容</h3></li>
												</ul>
											</div>
											<?php if(is_array($reviewdata)): foreach($reviewdata as $key=>$vo): ?><div class="comments_hd" style="background:none;border-bottom:1px solid #eeeeee;">
													<ul class="tab_comments" id="review_header">
							  							<li t="0" style="width:80px;"><h3><?php echo ($vo["uname"]); ?></h3></li>
							  							<li t="1"><h3><?php echo ($vo["integral"]); ?></h3></li>
							  							<li t="2"><h3><?php echo ($vo["content"]); ?></h3></li>
													</ul>
												</div><?php endforeach; endif; ?>
										</div>
										<!-- E 迅友评论-->
				  					</div>
				  				</div>
				  			</div>  
		  					<!-- 参考咨询 -->
		  					<div class="x_mod_tab_con xrefer hide" id="c_information">暂无</div>
						</div>
		  			</div>
		  			<!-- E 产品介绍-->
		  			<!-- E 特别声明 -->
		  			<div class="mod_aider id_state" id="statement">
						<div class="hd">
							<div class="mod_aider_tit">特别声明</div>
						</div>
						<div class="bd">
							<p class="strong state_cont">因厂家会在没有任何提前通知的情况下更改产品包装、产地或者一些附件，商城不能确保客户收到的货物与商城图片、产地、附件说明完全一致。只能确保为原厂正货！并且保证与当时市场上同样主流新品一致。另外商品的规格参数均以官方网站为准，若官网有误或商城没有及时更新，请大家谅解！</p>
						</div>
		  			</div>
		  			<!-- S 购买咨询-->
		  			<div class="mod_goods_info asking_box" id="asking_box" style="display:none">
		  				<ul class="hd" id="asking_header">
							<li t="0">
								<h3><a ytag="16801" href="#" onclick="return false" hidefocus="hidefocus" hotname="I.ITEM.TAB.ALLASKING">全部咨询</a></h3>
							</li>
							<li t="1">
								<h3><a ytag="16802" href="#" onclick="return false" hidefocus="hidefocus" hotname="I.ITEM.TAB.PRODUCTSKING">商品咨询</a></h3>
							</li>
							<li t="2">
								<h3><a ytag="16803" href="#" onclick="return false" hidefocus="hidefocus" hotname="I.ITEM.TAB.SENDPAY">配送/支付</a></h3>
							</li>
							<li t="3">
								<h3><a ytag="16804" href="#" onclick="return false" hidefocus="hidefocus" hotname="I.ITEM.TAB.BILLREPAIR">发票/保修</a></h3>
							</li>
		  				</ul>
		  				<div class="bd" id="asking_content">
							<div class="more">
								<a ytag="16800" href="javascript:void(0)" class="post_asking"><span>发表咨询</span></a>
							</div>
							<div class="comment_tips">
		  						<p><span class="tit">提示:</span>因厂家更改产品包装、产地或者更换随机附件等没有任何提前通知，且每位咨询者购买情况、提问时间等不同，为此以下回复信息仅供参考！若由此给您带来不便请多多谅解，谢谢！</p>
							</div>
							<div class="comment_all">
		  						<div class="content">
									<ul class="list_comment list_refer"></ul>
									<div class="page_wrap">
		  								<div class="paginator" id="asking_page"></div>
									</div>
		  						</div>
							</div>
		  				</div>
					</div>
					<div id="asking_list_tpl"></div>
		  		</div>
		 	</div>
			<!--===================================================-->
			<!-- 右侧同品牌最终购买页面 -->
			<div class="grid_s">
				<!-- 同品牌 -->
				<div id="sea_same_price_brand" style="height: auto;">
			  		<div class="x_mod_box xsame">
			  			<div class="x_mod_box_hd">
			  				<div class="x_mod_box_tit">同品牌</div>
			  			</div>
			  			<?php if(is_array($branddata)): foreach($branddata as $key=>$vo): ?><div class="x_mod_box_bd">
				  				<div class="xsame_item" id="sea_same_price" style="display:none"></div>
				  				<div class="xsame_item" id="sea_same_brand" style="">
				  					<ul class="x_mod_goods_list">
				  						<li>
				  							<div class="mod_goods x_mod_goods">
				  								<div class="mod_goods_img">
				  									<a target="_blank" href="/organic/index.php/home/goods/index/gid/<?php echo ($vo["gid"]); ?>" title="<?php echo ($vo["gname"]); ?>">
				  										<img src="/organic/Public/goodsuploads/<?php echo (implode('/120_',explode('/',$vo["gpic"]))); ?>" alt="<?php echo ($vo["gname"]); ?>">
				  									</a>
				  								</div>
				  								<div class="mod_goods_info">
				  									<p class="mod_goods_tit">
				  										<a target="_blank" href="/organic/index.php/home/goods/index/gid/<?php echo ($vo["gid"]); ?>" title="<?php echo ($vo["gname"]); ?>"><?php echo ($vo["gname"]); ?></a>
				  									</p>
				  									<p class="mod_goods_price">
				  										<span class="mod_price c_tx1">
				  											<i>¥</i><span><?php echo ($vo["goldprice"]); ?></span>
				  										</span>
				  									</p>
				  								</div>
				  							</div>
				  						</li>
				  					</ul>
				  				</div>
				  			</div><?php endforeach; endif; ?>
			  		</div>
				</div>
			</div>
		</div>
	</div>
	<!--================================-->
	<!-- 购物车添加成功弹窗 -->
	<div style="display:none;position: absolute; top: 800px; left: 475px; z-index: 29;" class="mod_carttip mod_carttip1" id="hidecart">
		<div class="mod_carttip_inner">
			<div class="mod_carttip_bd clearfix">
				<div class="mod_carttip_ico">
					<i class="mod_carttip_ico_success"></i>
				</div>
				<div class="mod_carttip_con">
					<h4>添加成功!</h4>
					<div class="mod_carttip_action">
						<a class="mod_carttip_btn mod_carttip_btn_bg2 mod_carttip_btn1" onclick="$('.mod_carttip_close').click()" href="/organic/index.php/home/Showcart" >
							<span>去结算</span>
						</a>
						<a style="margin-left: 5px;" class="mod_carttip_btn mod_carttip_btn_bg1 mod_carttip_btn2" onclick="$('.mod_carttip_close').click()" href="javascript:void(0)" ytag="71003">继续购物</a>
					</div>
				</div>
			</div>
		</div>
		<i class="mod_carttip_arr mod_carttip_arr1">&nbsp;</i>
		<a title="关闭" href="javascript:" style="" class="mod_carttip_close" ytag="71001">×</a>
	</div>
	<!-- 购物车添加成功弹窗 -->
	<!--===============================-->


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
    
	<script type="text/javascript" src="/organic/Public/home/js/gb.js"></script>
	<script type="text/javascript">
		$("#category_container").hover(function(){
			$(this).toggleClass("mod_cate_on");
		})
		$(".mod_carttip_close").on('click',function(){
			$("#hidecart").css('display','none');
		})
		function add(){
			$('#order_num').val(parseInt($('#order_num').val())+1);
			if (parseInt($('#order_num').val())>1) {
				$('.sea_order_minus').removeClass('x_mod_number_minus_disabled');
			}
		}
		function reduce(){
			$('#order_num').val(parseInt($('#order_num').val())-1);
			if (parseInt($('#order_num').val()) < 2) {
				$('.sea_order_minus').addClass('x_mod_number_minus_disabled');
				$('#order_num').val(1);
			}
		}
		// 添加购物车
		function ajaxhandle(){
			var gid = $('#gid').val();
			var nums = $('#order_num').val();
			var price = $('#buyprice').val();
			$.ajax({
				url:"/organic/index.php/Home/Goods/showCart",
				type:"post",
				data:{gid:gid,nums:nums,price:price},
				// 执行成功执行以下函数，返回值为data
				success:function(data){
					if (data == 1) {
						// 添加购物车成功
						viewCartNums();
						var topcart = $('#btnAddCart').offset().top+60;
						$("#hidecart").css({display:'block',top:topcart});
					}
				}
			});
		}
		// 点击产品介绍
		$("#t_introduce").click(function(){
			$("#info_tit li").removeClass('current');
			$(this).addClass('current');
			$("#intro-main_tab div").css('display','none');
			$("#c_introduce").css('display','block');
			$("#c_introduce div").css('display','block');
		});
		// 点击商品评论
		$("#t_comment").click(function(){
			$("#info_tit li").removeClass('current');
			$(this).addClass('current');
			$("#intro-main_tab div").css('display','none');
			$("#c_packinglist").css('display','block');
			$("#c_packinglist div").css('display','block');
		});
		// 点击规格参数
		$("#t_parameters").click(function(){
			$("#info_tit li").removeClass('current');
			$(this).addClass('current');
			$("#intro-main_tab div").css('display','none');
			$("#c_parameters").css('display','block');
		});
		// 点击售后服务
		$("#t_warranty").click(function(){
			$("#info_tit li").removeClass('current');
			$(this).addClass('current');
			$("#intro-main_tab div").css('display','none');
			$("#c_warranty").css('display','block');
			$("#c_warranty div").css('display','block');
		});
		// 点击参考咨询
		$("#t_information").click(function(){
			$("#info_tit li").removeClass('current');
			$(this).addClass('current');
			$("#intro-main_tab div").css('display','none');
			$("#c_information").css('display','block');
		});
		$(function(){
			var shu=$("#c_packinglist").offset().top-200;
			$("html,body").animate({scrollTop:shu},300);
		})
	</script>

</html>