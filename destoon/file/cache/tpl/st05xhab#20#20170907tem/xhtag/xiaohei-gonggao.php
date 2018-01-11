<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
<li><a href="<?php echo $t['linkurl'];?>" target="_blank" title="<?php echo $t['alt'];?>">【<?php echo $cname;?>】<?php echo $t['title'];?></a></li>
<?php } } ?>