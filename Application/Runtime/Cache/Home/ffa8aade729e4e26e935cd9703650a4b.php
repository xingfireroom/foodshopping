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
	<div style="width:995px;margin:0px auto;">
		<!-- 流程 开始 -->
		<div class="flow_step_no2 flow_cart">
			<div class="flow_step">
				<ol class="cols3">
					<li class="step_1">我的购物车</li>
					<li class="step_2">填写核对订单</li>
					<li class="step_3">订单提交成功</li>
				</ol>
			</div>
		</div>
		<!-- 流程 结束 -->
		<!-- 内容 开始 -->
		<div class="order_bor">
			<!-- 地址 开始 -->
			<div name="address" class="dd_mod_order order_address" id="addr_box">
				<div class="dd_mod_order_hd">
					<h3 class="dd_mod_order_hd_tit">收货信息</h3>
				</div>
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
										<span class="c3"><?php echo (implode('',explode('-',$vo["address"]))); ?> <?php echo ($vo["zipcode"]); ?>，<?php echo ($vo["consignee"]); ?> <?php echo ($vo["mphone"]); echo ($vo["phone"]); ?></span>
									</label>
								</div>
								<!--E 地址信息 -->
								<!--S 地址编辑 -->
								<!-- 点击删除时，此div的className修改为：class="order_address_editor order_address_editor_active" -->
								<div style="display:<?php echo ($vo['state']==1?'block':'none'); ?>;" id="editor_<?php echo ($vo["addid"]); ?>" class="order_address_editor">
									<span class="order_address_editor_cont">
										<a ytag="20003" t="edit" href="javascript:void(0);"></a>
										<a name="delid_<?php echo ($vo["addid"]); ?>" ytag="20004" t="del" href="javascript:;">删除</a>
									</span>
									<div id="del_46" class="order_address_editor_confirm_del">
										<p>确定要删除该地址吗？</p>
										<a t="do_del" href="javascript:void(0);" class="mod_btn">确定</a>
										<a t="cancel_del" href="javascript:void(0);" class="mod_btn mod_btn_bg1">取消</a>
										<b class="confirm_arrow_out">◆</b><i class="confirm_arrow_in">◆</i>
									</div>
								</div>
								<!--E 地址编辑 -->
							</li><?php endforeach; endif; ?>
						<!-- S新增收货地址 -->
						<li class="order_address_list_edit" style="display:none;">
							<!--S 地址信息 -->
							<div class="order_address_info">
								<!--S 新地址表单 -->
								<div class="order_address_form">
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
					<!--S 展示其他地址/新增地址 -->
					<div class="order_address_other">
						<a id="new_address" href="javascript:void(0)"  style="display:inline;">+ 新增收货地址</a>
					</div>
					<!--E 展示其他地址/新增地址 -->
				</div>
			</div>
			<!-- 地址 结束 -->

			<!-- 支付 开始 -->
			<!--<div class="dd_mod_order order_payment" id="pay_box">-->
				<!--<div class="dd_mod_order_hd">-->
					<!--<h3 class="dd_mod_order_hd_tit">支付方式</h3>-->
				<!--</div>   -->
				<!--<div class="dd_mod_order_bd">-->
					<!--<ul id="paymothedlist" class="pay_list">-->
						<!--&lt;!&ndash;<li id="weixin" class="">&ndash;&gt;-->
							<!--&lt;!&ndash;<span class="pay_list_c1 radio_wrap">&ndash;&gt;-->
								<!--&lt;!&ndash;<input type="radio" value="1" name="sel_pay" hotname="I.ORDER.PAYTYPE.502">&ndash;&gt;-->
							<!--&lt;!&ndash;</span>&ndash;&gt;-->
							<!--&lt;!&ndash;<label for="paytype_weixin" class="radio_desp">&ndash;&gt;-->
								<!--&lt;!&ndash;<span class="pay_list_c2">微信支付</span>&ndash;&gt;-->
								<!--&lt;!&ndash;<span class="pay_list_c3">&ndash;&gt;-->
									<!--&lt;!&ndash;<i id="paytype_weixin" class="pay_list_icon_wx">&nbsp;</i>用微信扫一扫就能支付！&ndash;&gt;-->
								<!--&lt;!&ndash;</span>&ndash;&gt;-->
							<!--&lt;!&ndash;</label>&ndash;&gt;-->
						<!--&lt;!&ndash;</li>&ndash;&gt;-->
                        <!--&lt;!&ndash;<li id="weixin" class="">&ndash;&gt;-->
							<!--&lt;!&ndash;<span class="pay_list_c1 radio_wrap">&ndash;&gt;-->
								<!--&lt;!&ndash;<input type="radio" value="2" name="sel_pay" hotname="I.ORDER.PAYTYPE.503">&ndash;&gt;-->
							<!--&lt;!&ndash;</span>&ndash;&gt;-->
							<!--&lt;!&ndash;<label for="paytype_alipay" class="radio_desp">&ndash;&gt;-->
								<!--&lt;!&ndash;<span class="pay_list_c2">支付宝支付</span>&ndash;&gt;-->
                                <!--&lt;!&ndash;<span class="pay_list_c3">中国最大的第三方支付平台。</span>&ndash;&gt;-->
							<!--&lt;!&ndash;</label>&ndash;&gt;-->
						<!--&lt;!&ndash;</li>&ndash;&gt;-->
						<!--<li class="selected">-->
							<!--<span class="pay_list_c1 radio_wrap">-->
								<!--<input type="radio" value="3" name="sel_pay" hotname="I.ORDER.PAYTYPE.1" id="i_offline1" checked="checked" >-->
							<!--</span>-->
							<!--<label for="i_offline1" class="radio_desp">-->
								<!--<span class="pay_list_c2">货到付款</span>-->
								<!--<span class="pay_list_c3">送货上门后再付款，使用现金或刷银行卡。</span>-->
								<!--<span id="offline1_promotion"> </span>-->
							<!--</label>-->
						<!--</li>-->
						<!---->
					<!--</ul>-->
				<!--</div>-->
			<!--</div>-->
			<!-- 支付 结束-->

			<!-- ================================== -->
			<!-- S购物清单 开始 -->
			<div class="dd_mod_order order_cargo">
				<div class="dd_mod_order_hd">
					<h3 class="dd_mod_order_hd_tit">送货清单</h3>
					<div class="dd_mod_order_hd_extra">
						<a href="/food/index.php/home/showcart/index" id="goodslist_bakurl" title="" class="back_cart">返回购物车修改</a>
					</div>
				</div>
				<div id="package_box" class="dd_mod_order_bd">
					<div style="" package_type="1" name="default" pkg="1_0_0_2001" id="default_1_0_0_2001" pack="包裹" class="package">
						<!-- S包裹 -->
						<div name="package_hd" class="package_hd">
							<div class="package_hd_c1">包裹</div>
							<div name="package_tip" class="package_hd_step_tip">
								<i class="ico_dd_info">&nbsp;</i>	请选择收货信息后确认配送方式
							</div>
							<div cooperatorname="" sid="1" class="package_hd_c2">商城快递快递  支持现金及POS机刷卡。</div>
						</div>
						<!-- E包裹 -->
						<div class="package_bd">
							<!--S 标题区域 -->
							<div class="package_bd_list_title">
								<div class="title_c1">商品名称</div>
								<div class="title_c2">商城价</div>
								<div class="title_c3">折扣价</div>
								<div class="title_c4">数量</div>
								<div class="title_c5">小计</div>
							</div>
							<!--E 标题区域 -->
							<ul class="package_bd_list">
								<?php if(is_array($cartdata)): foreach($cartdata as $key=>$v): ?><li>
										<a target="_blank" class="img_wrap" href="">
											<img src="/food/Public/Goodsuploads/<?php echo (implode('/60_',explode('/',$v["gpic"]))); ?>" alt="<?php echo ($v["gname"]); ?>">
										</a>
										<div class="img_detail">
											<p class="name">
												<a target="_blank" href=""><?php echo ($v["gname"]); ?></a>
											</p>
											<p class="prop"></p>
											<p class="surprise">&nbsp;  </p>
											<p id="promoCoupon_268080" class="surprise"></p>
										</div>
										<div class="package_bd_price ">
											<div class="dd_mod_package_td ">¥ <?php echo ($v["goldprice"]); ?></div>
										</div>
										<div class="package_bd_return">
											<div class="dd_mod_package_td">¥ <?php echo ($v["gprice"]); ?></div>
										</div>
										<div class="package_bd_amount ">
											<div class="dd_mod_package_td "><?php echo ($v["nums"]); ?>	</div>
										</div>
										<div class="package_bd_count">
											<div class="dd_mod_package_td">¥ <?php echo ($v['gprice']*$v['nums']); ?></div>
										</div>
									</li><?php endforeach; endif; ?>
							</ul>
							<div package="1_0_0_2001" dividtype="default" class="package_message">
								<p class="package_message_hd">
									<a class="link_1" href="javascript:void(0);">
										若您对包裹有特殊要求，请在此留言 
										<i class="package_message_ico"></i>
									</a>
								</p>
								<div style="display:none;" class="package_message_bd">
									<textarea name="" class="package_message_textarea"></textarea>
									<div class="package_message_actionn">
										<a id="save_msg" name="save_msg" class="mod_btn" href="javascript:void(0)">保存</a>
										<a id="cancle_msg" name="cancle_msg" class="mod_btn mod_btn_bg1" href="javascript:void(0)">取消</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<p class="package_yanchi_tips">温馨提示：您选了配送时间的商品，商城闪电侠会尽力准时送到您手中，但因天气、交通等各类因素影响，也有可能会出现延迟哦！</p>
				</div>
			</div>
			<!-- E购物清单 结束 -->
			<!-- ================================= -->
			<!-- 订单结算 开始 -->
			<div class="dd_mod_order order_cashin" id="cashin_box">
				<div class="dd_mod_order_hd">
					<h3 class="dd_mod_order_hd_tit">订单结算</h3>
				</div>
				<div class="dd_mod_order_bd">
					<!-- S商品 -->
					<div class="cashin_row">
						<div class="cashin_row_c1"><strong>商品合计</strong></div>
						<div pr="17.40" id="pr_goodsprice" class="cashin_row_c2">¥</div>
					</div>
					<!-- E商品 -->
					<!-- S运费 -->
					<div style="" class="cashin_yunfei">
						<div id="yunfei_hd" class="cashin_yunfei_hd">
							<span class="cashin_yunfei_tit">运费合计<i class="dd_mod_arrow dd_mod_arrow_down">&nbsp;</i></span>
							<span id="total_shippingprice" class="cashin_yunfei_price">¥</span>
						</div> 
						<div style="display:none;" id="yunfei_new" class="cashin_yunfei_bd">
							<div class="cashin_yunfei_row">
								<div class="cashin_yunfei_row_col1">
									<span class="cashin_yunfei_pack">包裹</span>
								</div>
								<div class="cashin_yunfei_row_col2">
									<span id="total_shippingprice_h" class="price">¥</span>
								</div>
							</div>
						</div>                    
					</div>
					<!--S 积分 -->
					<div style="" pr="" id="point_box" class="cashin_row cashin_jifen">
						<div id="jifen_head" class="cashin_row_hd cashin_jifen_use">
							使用积分<i class="dd_mod_arrow dd_mod_arrow_down" id="i_jifendown">&nbsp;</i>
						</div>
						<div style="display:none" id="J_usepointbox" class="cashin_row_bd">
							<div class="cashin_row_c1">
								本次结算中最多可用<span id="J_point_user" class="co_txt1"><!-- <?php echo ($integral); ?> --><?php echo ($point); ?></span>积分，本次使用
								<input type="text" autocomplete="off" class="dd_mod_input_txt" total="8" name="usepoint" value="0" id="J_usepointbox_input">
								<a href="javascript:void(0);" class="mod_btn mod_btn_bg1" target="_self" id="a_point">确定</a>积分
							</div>
							<div pr="" id="pr_point" class="cashin_row_c2">- ¥0</div>
							<!--S 错误提示-二次校验 -->
							<span style="display:none" id="PointErr" class="dd_mod_tip">
								<i class="ico_dd_info">&nbsp;</i>
							</span>
							<!--E 错误提示-二次校验 -->
						</div>
					</div>
					<!--E 积分 -->
				</div>
				<!--S 订单总计 -->
				<div id="summary" class="cashin_stat">
					<div class="cashin_stat_price">
						总计
						<strong id="pr_totalprice" class="co_txt1"></strong>
					</div>
					<div class="cashin_stat_row" style="display: block;">
						<div id="addrfinal_box" class="cashin_stat_row_c1">
							<strong>寄送至：</strong>
							<?php echo (implode('',explode('-',$adddata_s["address"]))); ?> <?php echo ($adddata_s["zipcode"]); ?>&nbsp;&nbsp; <br /><?php echo ($adddata_s["consignee"]); ?> （收件人）<?php echo ($adddata_s["mphone"]); echo ($adddata_s["phone"]); ?>&nbsp;&nbsp;
						</div>
						<div class="cashin_stat_row_c2">
							<a ytag="20010" href="#addr_box" target="_self">修改</a>
						</div>
					</div>
					<div class="cashin_stat_submit_wrap">
						<a ytag="20012" title="" id="btn_order" href="javascript:void(0);" class="cashin_stat_submit" target="_self">提交订单</a>
					</div>
				</div>
				<!--E 订单总计 -->
			</div>
			<!-- 订单结算 结束 -->
		</div>
		<!-- 内容 结束 -->
	</div>
	<div id="overlay" style="background: #000;  filter: alpha(opacity=50); opacity: 0.5;  /* 透明度 */  display: none;  position: absolute;  top: 0px;  left: 0px;  width: 100%;  height: 100%;  z-index: 100; /* 此处的图层要大于页面 */  display:none;  ">
	</div>
	<div id="money" style="text-align:center;display: none;width:300px;height: 300px;position: fixed;top:23%;left:40%;z-index: 10001">
		<span style="color:white;font-size: 30px;">扫我付款</span>
		<img src="/food/Public/home/images/money.png" alt="">
		<span style="color:white;margin-top:20px;font-size: 20px;background: #b2cd54;;display: inline-block;width: 100px;height: 40px;text-align: center;line-height: 40px;"><a href="javascript:zuihou()">确定</a></span>
		<span style="color:white;margin-top:20px;font-size: 20px;background: #b2cd54;;display: inline-block;width: 100px;height: 40px;text-align: center;line-height: 40px;"><a href="javascript:back()">取消</a></span>
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
	<script type="text/javascript">
		// 收货地址操作=============================================
		// 定义函数，用来提示信息
		function promptInfo(str){
			return '<span class="dd_mod_tip_simple dd_mod_tip_info"><i class="ico_dd_info">&nbsp;</i>'+str+'</span>';
		}
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
			if ($(this).val() == '区号' || $(this).val() == '固话号' || $(this).val() == '分机号' || $(this).val() == '新地址') {
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
		// 收货地址的选择点击事件
		$('#address_box div[id^=li_]').on('click',function(){
			$('#address_box div[id^=li_]').parent().removeClass('selected');
			$(this).parent().addClass('selected');
			$(this).children().eq(0).children().eq(0).attr('checked','checked');
			$('.order_address_editor').css('display','none');
			$(this).next().children().eq(1).css('display','none');
			$(this).next().css('display','block');
			// ajax请求用来修改收货的默认地址
			var addid = $(this).attr('id').split('_')[1];
			$.ajax({
				url:'/food/index.php/Home/Order/updateState',
				type:'post',
				data:{addid:addid}
			});
			// 读出数据然后进行一下拆分，处理一下，分成三部分 地址 人名 电话
			var addarray = $(this).children().eq(1).children().eq(1).html().split('，');
			var len = addarray.length;
			var str = '';
			for (var i = 0; i < len; i++) {
				if (i == (len-1)) {
					str += '<br />'+addarray[i].split(' ')[0]+'（收件人）'+addarray[i].split(' ')[1];
				} else{
					str += addarray[i];
				}
			}
			// 将地址显示与最下方
			$('#addrfinal_box').html('<strong>寄送至：</strong>'+str);
		})
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
			var addaddress = '';
			$.ajax({
				url:'/food/index.php/Home/Order/addAddress',
				type:'post',
				data:{address:detailedaddress,zipcode:zipcode,consignee:consignee,mphone:mphone,phone:phone,tagging:tagging},
				success:function(data){
					if (data > 1) {
					// 取消原来的地址选择
					$('#address_box div[id^=li_]').parent().removeClass('selected');
					// 隐藏后面的修改删除
					$('.order_address_editor').css('display','none');
					addaddress='<li class="selected">' +
							'<div id="li_'+data+'"  class="order_address_info">' +
							'<span class="c1 radio_wrap">' +
							'<input type="radio" class="in_sel" name="sel_addr" id="i_aid'+data+'" checked>' +
							'</span><label class="radio_desp" for="i_aid46">' +
							'<span class="c2">'+tagging+'</span>' +
							'<span class="c3">'+detailedaddress_1+zipcode+'，'+consignee+','+mphone+phone+'</span>' +
							'</label></div>' +
							'<div style="display: block;" id="editor_46" class="order_address_editor">' +
							'<span class="order_address_editor_cont">' +
							'<a ytag="20003" t="edit" href="javascript:void(0);"></a>' +
							'<a name="delid_'+data+'" ytag="20004" t="del" href="javascript:void(0);">删除</a>' +
							'</span><div id="del_46" class="order_address_editor_confirm_del"><p>确定要删除该地址吗？</p>' +
							'<a t="do_del" href="javascript:void(0);" class="mod_btn">确定</a>' +
							'<a t="cancel_del" href="javascript:void(0);" class="mod_btn mod_btn_bg1">取消</a>' +
							'<b class="confirm_arrow_out">◆</b><i class="confirm_arrow_in">◆</i></div></div></li>';
						$(".order_address_list_edit").before(addaddress);
						// 下方地址显示
						// 读出数据然后进行一下拆分，处理一下，分成三部分 地址 人名 电话
						var addarray = $("#li_"+data).children().eq(1).children().eq(1).html().split('，');
//						alert(addarray);
						var len = addarray.length;
						var str = '';
						for (var i = 0; i < len; i++) {
							if (i == (len-1)) {
								str += '<br />'+addarray[i].split(',')[0]+'（收件人）'+addarray[i].split(',')[1];
							} else{
								str += addarray[i];
							}
						}
						// 将地址显示与最下方
						$('#addrfinal_box').html('<strong>寄送至：</strong>'+str);
						// 收货地址的选择点击事件，解决了新增的地址不能点击的问题
						$('#address_box div[id^=li_]').on('click',function(){
							$('#address_box div[id^=li_]').parent().removeClass('selected');
							$(this).parent().addClass('selected');
							$(this).children().eq(0).children().eq(0).attr('checked','checked');
							$('.order_address_editor').css('display','none');
							$(this).next().children().eq(1).css('display','none');
							$(this).next().css('display','block');
						})
						// 删除地址，弹出菜单的取消事件
						$('#address_box a[name^=delid_]').click(function(){
							$(this).parent().next().css('display','block');
						});
						// 删除地址，弹出菜单的取消事件
						$('a[t=cancel_del]').click(function(){
							$(this).parent().css('display','none');
						})
						// 隐藏增加地址显示，增加地址按钮
						$(".order_address_list_edit").css('display','none');
						$("#new_address").css('display','block');
						// 新增地址的真正删除事件
						$('a[t=do_del]').click(function(){
							// 删除地址，弹出菜单的取消事件
							$(this).parent().css('display','none');
							// 拿到要删除地址的addid号
							var addid = $(this).parent().prev().children().eq(1).attr('name').split("_")[1];
							$.ajax({
								url:'/food/index.php/Home/Order/delAddress',
								type:'post',
								data:{addid:addid},
								success:function(data){
									if (data == 1) {
										id=""
										$("#li_"+addid).parent().remove();
									}
								}
							});
						})					
						// 初始化新增地址区域内容
						$("#s_province").val("省份");
						$("#s_city").val("地级市");
						$("#s_county").val("市、县级市");
						$("#j_add_input").val("最多输入26个汉字");
						$("#zipcode").val('如518000');
						$("#consignee").val("最多10个汉字");
						$("#mphone").val("如13452525625");
						$("#areacode").val("区号");
						$("#fixednumber").val("固话号");
						$("#extensionnumber").val("分机号");
						$("#address_box input").removeAttr('nums');
					}else{
						$("#canceladdress").next().remove();
						$("#canceladdress").after(promptInfo('添加地址失败!'));
						$("#canceladdress").next().fadeOut("slow");
					}
				}
			});
		});
		// 点击删除收货地址，的按钮被点击事件，判断必填项是否都填写了
		$('#address_box a[name^=delid_]').click(function(){
			$(this).parent().next().css('display','block');
		});
		// 运费折叠隐藏与显示
		$("#yunfei_hd").toggle(
			function(){
				$("#yunfei_new").css('display','block');
				$(this).children().eq(0).children().eq(0).removeClass('dd_mod_arrow_down');
				$(this).children().eq(0).children().eq(0).addClass('dd_mod_arrow_up');
			},
			function(){
				$("#yunfei_new").css('display','none');
				$(this).children().eq(0).children().eq(0).removeClass('dd_mod_arrow_up');
				$(this).children().eq(0).children().eq(0).addClass('dd_mod_arrow_down');
			}
		);
		// 优惠券的折叠与隐藏
		$("#coupon_box_head").toggle(
			function(){
				$("#youhui_none").css('display','block');
				$("#J_coupon_defaultRow").css('display','block');
				$(this).children().eq(0).children().eq(0).removeClass('dd_mod_arrow_down');
				$(this).children().eq(0).children().eq(0).addClass('dd_mod_arrow_up');
			},
			function(){
				$("#youhui_none").css('display','none');
				$("#J_coupon_defaultRow").css('display','none');
				$(this).children().eq(0).children().eq(0).removeClass('dd_mod_arrow_up');
				$(this).children().eq(0).children().eq(0).addClass('dd_mod_arrow_down');
			}
		);
		// 积分的折叠与隐藏
		$("#jifen_head").toggle(
			function(){
				$("#J_usepointbox").css('display','block');
				$(this).children().eq(0).removeClass('dd_mod_arrow_down');
				$(this).children().eq(0).addClass('dd_mod_arrow_up');
			},
			function(){
				$("#J_usepointbox").css('display','none');
				$(this).children().eq(0).removeClass('dd_mod_arrow_up');
				$(this).children().eq(0).addClass('dd_mod_arrow_down');
			}
		);	
		// 发票的折叠与隐藏
		$(".chkbox_wrap").toggle(
			function(){
				$("#need_invoice").children().eq(0).children().eq(0).children().eq(0).attr('checked','checked')
				$("#invoice_ul").css('display','block');
			},
			function(){
				$("#need_invoice").children().eq(0).children().eq(0).children().eq(0).removeAttr('checked')
				$("#invoice_ul").css('display','none');
			}
		);
		// 支付列表的选择
		$("#paymothedlist li").on('click',function(){
			$("#paymothedlist li").removeClass('selected');
			$(this).addClass('selected');
		})
		// 跟随上，处理一下选择微信时候的问题，没有radio的选中状态
		$("#weixin").click(function(){
			$(this).children().eq(0).children().eq(0).attr('checked','checked')
		});
		// 展开所有的支付方式
//		$("#j_bank_selected ul li a").click(function(){
//			$("#j_bank_list").removeClass('banklist_off');
//			$("#j_bank_list").addClass('banklist_on');
//			$("#j_bank_selected").css('display','none');
//		});
		// 用户购买留言
		$(".link_1").click(function(){
			$(".package_message_bd").css('display','block');
			$(".package_message_textarea").val('选填，可告诉卖家您的特殊要求，限定100个字符以内。');
		});
		// 点击取消按钮
		$("#cancle_msg").click(function(){
			$(".package_message_bd").css('display','none');
		});
		// 点击确定按钮
		$("#save_msg").click(function(){
			var str = $(".package_message_textarea").val();
			var str1 = '<a class="link_1" href="javascript:void(0);">若您对包裹有特殊要求，请在此留言 <i class="package_message_ico"></i></a>';
			var str2 = '<a class="link_1" href="javascript:void(0);">修改 <i class="package_message_ico"></i></a>';
			if (str == '') {
				$(".package_message_hd").children().remove();
				$(".package_message_hd").html(str1);
				$(".link_1").click(function(){
					$(".package_message_bd").css('display','block');
					$(".package_message_textarea").val('选填，可告诉卖家您的特殊要求，限定100个字符以内。');
				});
			} else{
				$(".package_message_hd").children().remove();
				$(".package_message_hd").html('备注：'+str+str2);
				$(".link_1").click(function(){
					$(".package_message_bd").css('display','block');
				});
			};
			$(".package_message_bd").css('display','none');	
		});
		// textarea获取焦点事件
		$(".package_message_textarea").focus(function(){
			var str3 = '选填，可告诉卖家您的特殊要求，限定100个字符以内。';
			var str4 = $(".package_message_textarea").val();
			if (str4 == str3) {
				$(".package_message_textarea").val('');
			}
		});
		// 删除地址，弹出菜单的取消事件
		$('a[t=cancel_del]').click(function(){
			$(this).parent().css('display','none');
		})
		//删除地址的确定删除事件
		// ==========================================
		$('a[t=do_del]').click(function(){
			// 删除地址，弹出菜单的取消事件
			$(this).parent().css('display','none');
			// 拿到要删除地址的addid号
			var addid = $(this).parent().prev().children().eq(1).attr('name').split("_")[1];
			$.ajax({
				url:'/food/index.php/Home/Order/delAddress',
				type:'post',
				data:{addid:addid},
				success:function(data){
					if (data == 1) {
						id=""
						$("#li_"+addid).parent().remove();
					}
				}
			});
		})
		// 商品总计计算===============
		var sumprice = 0;
		for (var i = 0; i < $('.package_bd_count').length; i++) {
			sumprice += parseInt($('.package_bd_count').eq(i).children().eq(0).html().split(' ')[1]);
		}
		$("#pr_goodsprice").append(sumprice);
		// 运费
		if (!sumprice > 49) {
			$("#total_shippingprice_h").append("5");
			$("#total_shippingprice").append("5");
		} else{
			$("#total_shippingprice_h").append("0");
			$("#total_shippingprice").append("0");
		}
		var shippingprice = parseInt($("#total_shippingprice").text().split("¥")[1]);
		// 积分
		var integral2 = parseInt($("#J_usepointbox_input").val());
		var integral = parseInt($("#J_point_user").text());
		// 实际总价
		$("#pr_totalprice").text("¥"+(sumprice+shippingprice-integral2));
		// 修改积分影响总价
		$("#a_point").click(function(){
			var inputcode = parseInt($("#J_usepointbox_input").val());
			if (inputcode > integral) {
				$("#PointErr").css('display','block');
				$("#PointErr").html('<i class="ico_dd_info">&nbsp;</i>您输入的积分超出可用数量，已帮您自动减少。');
				$("#J_usepointbox_input").val(integral );
			} else if(inputcode < 0){
				$("#PointErr").css('display','block');
				$("#PointErr").html('<i class="ico_dd_info">&nbsp;</i>您输入的不是数字，请重新输入。');
			} else{
				$("#pr_point").text('- ¥'+inputcode);
				var totalprice = parseInt($("#pr_totalprice").text().split("¥")[1])-inputcode;
				$("#pr_totalprice").text("¥"+totalprice);
			};
		});
		$("#J_usepointbox_input").focus(function(){
			$("#PointErr").css('display','none');
		});
		// 最后一步点击提交订单
		function zuihou(){
//		$("#btn_order").click(function(){
			$("#overlay").css('display','none');
			$("#money").css('display','none');
			var paytype=1;
			//alert(paytype);
			//return;
			var remarks = $(".package_message_textarea").val();
			var freight = $("#total_shippingprice").text().split("¥")[1];
			var integral = $("#pr_point").text().split("¥")[1];
			var total = $("#pr_totalprice").text().split("¥")[1];
			$.ajax({
				url:'/food/index.php/Home/Order/ordersSubmit',
				type:'post',
				data:{remarks:remarks,freight:freight,integral:integral,total:total,paytype:paytype},
				success:function(data){
					if (data > 1) {
						window.location="/food/index.php/Home/Order/confirmPay/oid/"+data+"/paytype/"+paytype;
					} else{
						alert('订单提交失败');
					}
				}
			})
		};
		$("#btn_order").click(function() {
			$("#money").css('display','block');
			showOverlay();

			/* 显示遮罩层 */
			function showOverlay() {
				$("#overlay").height(bodyHeight());
				$("#overlay").width(bodyWidth());
				// fadeTo第一个参数为速度，第二个为透明度
				// 多重方式控制透明度，保证兼容性，但也带来修改麻烦的问题
				$("#overlay").fadeTo(200, 0.5);
			}
			/* 隐藏覆盖层 */
			function hideOverlay() {
				$("#overlay").fadeOut(200);
			}

			/* 当前页面高度 */
			function bodyHeight() {
				return document.body.scrollHeight;
			}

			/* 当前页面宽度 */
			function bodyWidth() {
				return document.body.scrollWidth;
			}

			/* 当前浏览器的宽度*/
			function pageHeight() {
				return window.screen.availHeight;
			}

			/* 当前浏览器的宽度*/
			function pageWidth() {
				return window.screen.availWidth;
			}
		})
		function back(){
			$("#overlay").css('display','none');
			$("#money").css('display','none');
		}
	</script>
	<script type="text/javascript">_init_area();</script>
	<script type="text/javascript">
		var Gid  = document.getElementById ;
		var showArea = function(){
			Gid('show').innerHTML = "<h3>省" + Gid('s_province').value + " - 市" + Gid('s_city').value + " - 县/区" + Gid('s_county').value + "</h3>"
		}
		// Gid('s_county').setAttribute('onchange','showArea()');
	</script>

</html>