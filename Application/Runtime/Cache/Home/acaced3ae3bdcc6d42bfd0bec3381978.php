<?php if (!defined('THINK_PATH')) exit();?><ul class="mod_minicart_list" id="j_minicart_list">
    <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['nums'] > 0): ?><li>
                <div class="mod_goods mod_goods_w60">
                    <div class="mod_goods_img">
                        <a target="_blank" href=""><img src="/organic/Public/Goodsuploads/<?php echo ($vo['gpic']); ?>" alt="<?php echo ($vo['gname']); ?>" width="60" height="60"></a>
                    </div>
                    <div class="mod_goods_info">
                        <p class="mod_goods_tit"><a target="_blank" href="/organic/index.php/Home/Goods/index/gid/<?php echo ($vo['gid']); ?>"><?php echo ($vo['gname']); ?></a></p>
                        <p class="mod_goods_price"><span class="mod_price"><i>¥</i><span><?php echo ($vo['goldprice']); ?>.00</span></span><b>x</b><?php echo ($vo['nums']); ?></p>
                    </div>
                </div>
            </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
</ul>
<div class="mod_minicart_more" style="display:none">
    <a target="_blank" href="">查看全部<?php echo ($info['total']); ?>件商品</a>
</div>
<div class="mod_minicart_ft" id="j_minicart_ft">
    <p>共<span class="c_tx1" id="cartNum"><?php echo ($info['total']); ?></span>件商品总计：<span class="mod_price"><i>¥</i><span id="cartPrice"><?php echo ($info['totalprice']); ?>.00</span></span></p>
    <p>满49元免运费</p>
    <a target="_blank" class="mod_btn_arrow" href="/organic/index.php/Home/Showcart/index"><b>去购物车结算</b><i></i></a>
</div>