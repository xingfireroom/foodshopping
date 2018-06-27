<?php if (!defined('THINK_PATH')) exit(); if(is_array($allclass)): $ckey = 0; $__LIST__ = $allclass;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cval): $mod = ($ckey % 2 );++$ckey;?><li id="cate_<?php echo ($cval['cid']); ?>" index="<?php echo ($ckey-1); ?>" panel="true" class="mod_cate_li">
        <div class="mod_cate_r1">
            <h3><a target="_blank" href="/food/index.php/Home/search/index/cid/<?php echo ($cval['cid']); ?>" ><?php echo ($cval['cname']); ?></a></h3>
            <i class="mod_cate_arrow"></i>
        </div>
        <div class="mod_cate_r2">
            <?php if(is_array($cval['child'])): $i = 0; $__LIST__ = $cval['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$child): $mod = ($i % 2 );++$i; if($i < 5): ?><a target="_blank" href="/food/index.php/Home/search/index/cid/<?php echo ($child['cid']); ?>"><?php echo ($child['cname']); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </li><?php endforeach; endif; else: echo "" ;endif; ?>