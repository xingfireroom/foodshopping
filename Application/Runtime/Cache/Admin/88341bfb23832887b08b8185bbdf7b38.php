<?php if (!defined('THINK_PATH')) exit(); if(is_array($ads)): foreach($ads as $key=>$ad): ?><tr>
    <td><?php echo ($ad['ftid']); ?></td>
    <td><?php echo ($ad['ftext']); ?></td>
    <td><?php echo ($ad['fturl']); ?></td>
    <td>
        <div class="visible-md visible-lg visible-sm visible-xs action-buttons">
            <a name="table-edit" class="green" href="<?php echo U('Admin/Indexset/editText',array('id'=>$ad['ftid']));?>">
                <i class="icon-pencil bigger-130"></i>
            </a>
            <a name="del_<?php echo ($ad['ftid']); ?>" ytag="text" class="red" data-toggle="modal" href="#deleteModal">
                <i class="icon-trash bigger-130"></i>
            </a>
        </div>
    </td>
</tr><?php endforeach; endif; ?>