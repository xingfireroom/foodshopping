<?php if (!defined('THINK_PATH')) exit();?><ul class="food_mod_rank_bd hide" id="viewtab_<?php echo ($data['cid']); ?>" style="opacity: 1; display: block;">
    <?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
            <i class="food_mod_rank_order food_mod_rank_order_<?php echo ($i); ?>"><?php echo ($i); ?></i>
            <div class="mod_goods mod_goods_w80" _loaded="true">
                <div class="mod_goods_img load_effect">
                    <a target="_blank" href="/organic/index.php/Home/Goods/index/gid/<?php echo ($vo["gid"]); ?>">
                        <img class="lazy" src="/organic/Public/Goodsuploads/<?php echo ($vo['gpic']); ?>" width="80" height="80">
                        </a>
                </div>
                <div class="mod_goods_info">
                    <p class="mod_goods_tit"><a target="_blank" href="/organic/index.php/Home/Goods/index/gid/<?php echo ($vo['gid']); ?>"><?php echo ($vo['gname']); ?></a></p>
                    <p class="mod_goods_price"><span class="mod_price"><i>¥</i><span><?php echo ($vo['goldprice']); ?></span></span></p>
                </div>
            </div>
        </li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>