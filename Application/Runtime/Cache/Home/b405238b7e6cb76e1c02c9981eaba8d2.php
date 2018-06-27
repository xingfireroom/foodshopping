<?php if (!defined('THINK_PATH')) exit();?><div class="mod_subcate_item" id="panel_<?php echo ($data['cid']); ?>" style="display: block;">
    <div class="mod_subcate_main">
        <?php if(is_array($cate)): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dl>
                <dt><?php echo ($vo['cname']); ?></dt>
                <dd>
                    <?php if(is_array($vo['child'])): $i = 0; $__LIST__ = $vo['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$child): $mod = ($i % 2 );++$i; if($i%6 == 0): ?><s class="mod_subcate_dotline"></s><?php endif; ?>
                            <a target="_blank" class="" href="/organic/index.php/Home/search/index/cid/<?php echo ($child['cid']); ?>"><?php echo ($child['cname']); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
                </dd>
            </dl><?php endforeach; endif; else: echo "" ;endif; ?>
        <div class="mod_subcate_channel">
             <a target="_blank" class="mod_btn_arrow " href="/organic/index.php/Home/search/index/cid/<?php echo ($data['cid']); ?>"><b><?php echo ($data['cname']); ?>频道</b><i></i></a>
        </div>
    </div>
    <div class="mod_subcate_side">
        <div class="mod_subcate_side_hd">热门品牌</div>
        <ul class="mod_subcate_side_brand">
            <?php if(is_array($brand)): $i = 0; $__LIST__ = $brand;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bval): $mod = ($i % 2 );++$i; if(($bval['brandpic'] != '') and ($i < 7)): ?><li style="border:1px solid #EEE">
                        <a href="" target="_blank" >
                            <img src="/organic/Public/Uploads/<?php echo ($bval['brandpic']); ?>" >
                        </a>
                    </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>