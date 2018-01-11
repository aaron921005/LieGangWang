<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
<p><a href="<?php echo $t['linkurl'];?>" alt="<?php echo $t['alt'];?>" title="<?php echo $t['alt'];?>"><?php echo $t['title'];?></a></p>
<?php } } ?>