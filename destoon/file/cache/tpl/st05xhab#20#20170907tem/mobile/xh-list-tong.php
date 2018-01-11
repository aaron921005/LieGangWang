<?php defined('IN_DESTOON') or exit('Access Denied');?><div class="aui-content">
  <div class="xh-list-new aui-ellipsis-2">共有相关<?php if($catid) { ?><span class="xh-margin-l-3 xh-margin-r-3 xh-text-orange"><?php echo cat_name($catid);?></span><?php } ?>
<?php echo $MODULE[$moduleid]['name'];?><span class="aui-text-danger"><?php echo $items;?></span>条</div>
 </div>