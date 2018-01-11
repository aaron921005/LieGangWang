<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if(is_array($tags)) { foreach($tags as $v) { ?>
<li><a href="<?php echo $v['linkurl'];?>" title="<?php echo $v['alt'];?>" target="_blank"><?php echo $v['title'];?></a></li>
<?php } } ?>