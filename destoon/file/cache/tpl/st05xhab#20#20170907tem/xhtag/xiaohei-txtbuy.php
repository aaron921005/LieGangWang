<?php defined('IN_DESTOON') or exit('Access Denied');?> <?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
 <li><a href="<?php echo $t['linkurl'];?>" target="_blank" rel="nofollow">求购：<?php echo $t['title'];?></a><span></span></li>
<?php } } ?>