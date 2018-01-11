<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
<li class="news-w2"><i></i><a title="<?php echo $t['alt'];?>" href="<?php echo $t['linkurl'];?>" class="font14" target="_blank"><?php echo $t['title'];?></a></li>
<?php } } ?>