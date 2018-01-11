<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
<li class="bl2-itm-txt"> <a href="<?php echo $t['linkurl'];?>" target="_blank" title="<?php echo $t['company'];?>"><?php echo $t['company'];?></a></li>
<?php } } ?>