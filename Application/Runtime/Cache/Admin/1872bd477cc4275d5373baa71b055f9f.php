<?php if (!defined('THINK_PATH')) exit(); if(is_array($ads)): foreach($ads as $key=>$ad): ?><tr style="height:50px;">
    <td><?php echo ($ad['fadid']); ?></td>
    <td><?php echo ($ad['fadtitle']); ?></td>
    <td><?php echo ($ad['fadurl']); ?></td>
    <td>
        <span class="label label-sm label-warning">
            <?php if($ad['fadstarttime']): echo (date("Y-m-d",$ad['fadstarttime'])); endif; ?>
            --
            <?php if($ad['fadendtime']): echo (date("Y-m-d",$ad['fadendtime'])); endif; ?>
        </span>
    </td>
    <td>
        <img src="/food/Public/Uploads/<?php echo (implode('/th_',explode('/',$ad['fadpic']))); ?>" class="img-responsive" alt="<?php echo ($ad['fadpic']); ?>" width="80">
    </td>
    <td>
        <?php if($ad['fadplace'] == 1): ?>左侧幻灯片
        <?php elseif($ad['fadplace'] == 2): ?> 中间推荐位
        <?php elseif($ad['fadplace'] == 3): ?> 右侧广告<?php endif; ?>
    </td>
    <td>
        <div class="visible-md visible-lg visible-sm visible-xs action-buttons">
            <a name="table-view" class="blue" data-toggle="modal" href="#viewModal">
                <i class="icon-zoom-in bigger-130"></i>
            </a>

            <a name="table-edit" class="green" href="<?php echo U('Admin/Indexset/editPic',array('id'=>$ad['fadid']));?>">
                <i class="icon-pencil bigger-130"></i>
            </a>

            <a name="del_<?php echo ($ad['fadid']); ?>" ytag="pic" class="red" data-toggle="modal" href="#deleteModal">
                <i class="icon-trash bigger-130"></i>
            </a>
        </div>
    </td>
</tr><?php endforeach; endif; ?>