<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
| <a href="<?php if($t['domain']) { ?><?php echo $t['domain'];?><?php } else { ?><?php echo linkurl($t['linkurl'], 1);?><?php } ?>
" target="_blank"><?php echo $t['title'];?></a> 
<?php } } ?>