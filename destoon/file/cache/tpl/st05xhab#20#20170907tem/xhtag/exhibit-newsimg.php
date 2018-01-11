<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
<a href="<?php echo $t['linkurl'];?>"><img src="<?php echo $t['thumb'];?>" alt="<?php echo $t['alt'];?>" title="<?php echo $t['alt'];?>" border="0" width="357" height="231"></a>
<?php } } ?>