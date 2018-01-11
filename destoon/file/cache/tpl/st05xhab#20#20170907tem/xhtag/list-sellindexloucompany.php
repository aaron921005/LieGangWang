<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
 <li><a href="<?php echo $t['linkurl'];?>" title="<?php echo $t['company'];?>" target="_blank"><?php echo $t['company'];?></a></li>
<?php } } ?>
